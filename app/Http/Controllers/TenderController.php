<?php

namespace App\Http\Controllers;
use ZipArchive;
use Illuminate\Http\Request;
use App\Models\Tender;
use App\Models\TenderApplication;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;

class TenderController extends Controller
{
    // Display all tenders (Admin View)
    public function index()
    {
        $tenders = Tender::all();
        return view('admin.tender.index', compact('tenders'));
    }

    // Create a new tender (Admin View)
    public function create()
    {
        $activeTenders = Tender::where('status_id', 1)->get();
        $inactiveTenders = Tender::where('status_id', 0)->get();
        $statusOptions = [1 => 'Active', 0 => 'Inactive'];

        return view('admin.tender.create', compact('activeTenders', 'inactiveTenders', 'statusOptions'));
    }

    // Store new tender in the database
    public function store(Request $request)
    {
        $request->validate([
            'job_title'      => 'required|string|max:255',
            'location'       => 'required|string|max:255',
            'experience'     => 'required|string|max:1000',
            'skills'         => 'required|string',
            'deadline'       => 'required|date',
            'qualifications' => 'nullable|string',
            'slug'           => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'status_id'      => 'nullable|integer',
            'image'          => 'nullable|image|max:2048',
        ]);

        $data = $request->only([
            'job_title', 'location', 'experience', 'skills', 'deadline',
            'qualifications', 'slug', 'sort_order', 'status_id'
        ]);

       if ($file = $request->file('image')) {
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move('storage/assets/images/tender/', $name);
        $data['image'] = $name;  // Save relative path
    }

        Tender::create($data);
        return redirect()->route('admin.tender.index')->with('success', 'Tender added successfully.');
    }

    // Edit an existing tender (Admin View)
    public function edit(Tender $tender)
    {
        $statusOptions = [1 => 'Active', 0 => 'Inactive'];
        return view('admin.tender.edit', compact('tender', 'statusOptions'));
    }

    // Update a tender
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title'      => 'required|string|max:255',
            'location'       => 'required|string|max:255',
            'experience'     => 'required|string|max:1000',
            'skills'         => 'required|string',
            'deadline'       => 'required|date',
            'qualifications' => 'nullable|string',
            'slug'           => 'nullable|string|max:255',
            'sort_order'     => 'nullable|integer',
            'status_id'      => 'nullable|integer',
            'image'          => 'nullable|image|max:2048',
        ]);

        $tender = Tender::findOrFail($id);
        $data = $request->only([
            'job_title', 'location', 'experience', 'skills', 'deadline',
            'qualifications', 'slug', 'sort_order', 'status_id'
        ]);

         // Handle image upload
    if ($file = $request->file('image')) {
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move('storage/assets/images/tender/', $name);
        $data['image'] = $name;  // Save relative path
    }

        $tender->update($data);
        return redirect()->route('admin.tender.index')->with('success', 'Tender updated successfully.');
    }

    // Delete a tender
    public function destroy($id)
    {
        $tender = Tender::findOrFail($id);
        if ($tender->image && Storage::exists('public/assets/images/tender/' . $tender->image)) {
            Storage::delete('public/assets/images/tender/' . $tender->image);
        }
        $tender->delete();
        return redirect()->route('admin.tender.index')->with('success', 'Tender deleted successfully.');
    }

    // Display tender details (Frontend View)
    public function show($id)
    {
        $tender = Tender::findOrFail($id);
        return view('frontend.tendersdetail', compact('tender'));
    }

    // Store job application
        public function jobApplicationStore(Request $request)
        {
         $validatedData = $request->validate([
        'job_id' => 'required|exists:tenders,id',
        'name' => 'required|string',
        'email' => 'required|email',
        'phone_no' => 'required|string',
        'cnic' => 'required|string',
        'experience' => 'required|integer',
        'file' => 'required|file|mimes:pdf',
        'subject' => 'required|string',
        'description' => 'required|string',
    ]);

    $fileName = null;

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->move('storage/assets/pdfs/jobapplications', $fileName);
    }
    TenderApplication::create([
        'job_id' => $request->job_id,
        'name' => $request->name,
        'email' => $request->email,
        'phone_no' => $request->phone_no,
        'cnic' => $request->cnic,
        'experience' => $request->experience,
        'file' => $fileName,
        'subject' => $request->subject,
        'description' => $request->description,
        'status_id' => 15,
    ]);

    return back()->with('success', 'Application submitted successfully!');
}

    public function TenderAppliedApplications($id)
    {
        $jobPendingApplications = TenderApplication::where('job_id', $id)->where('status_id', 15)->get();
        $jobApprovedApplications = TenderApplication::where('job_id', $id)->where('status_id', 16)->get(); 
        $jobRejectedApplications = TenderApplication::where('job_id', $id)->where('status_id', 17)->get(); 
        $statuses = Status::where('details', 'application_status_id')->get();
        return view('admin.tender.applicationlist', compact(
            'jobPendingApplications',
            'jobApprovedApplications', 
            'jobRejectedApplications',
            'statuses'
        ));
    }

    // Update CV status (Admin View)
    public function UpdateCVStatus(Request $request)
    {
        $application = TenderApplication::findOrFail($request->id);
        $application->status_id = $request->status_id; 
       $application->save();

        return response()->json(['success' => true, 'message' => 'Status Updated Successfully.']);
    }

    // Download selected CVs as a ZIP
   public function downloadCVs(Request $request)
    {
        $files = $request->input('files');
        if (empty($files) || !is_array($files)) {
            return response()->json(['error' => 'No files selected.'], 422);
        }
        if (count($files) === 1) {
            $singleFilePath = storage_path('assets/pdfs/jobapplications/' . $files[0]);
            if (!file_exists($singleFilePath)) {
                return response()->json(['error' => 'File not found.'], 404);
            }
            return response()->download($singleFilePath);
        }
        $zip = new ZipArchive;
        $zipFileName = 'selected_cvs_' . time() . '.zip';
        $zipFilePath = storage_path('app/public/' . $zipFileName);
    
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            foreach ($files as $file) {
                $filePath = storage_path('assets/pdfs/jobapplications/' . $file);
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($file));
                }
            }
            $zip->close();
        } else {
            return response()->json(['error' => 'Could not create ZIP file.'], 500);
        }
    
        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }
}
