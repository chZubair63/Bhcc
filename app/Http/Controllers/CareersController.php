<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Careers;
use App\Models\JobType;
use App\Models\Experience;
use App\Models\JobApplications;
use App\Models\JobSector;
use App\Models\Status;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
class CareersController extends Controller
{
    public function index()
    {
        $careers = Careers::all();
        return view('admin.careers.index', compact('careers'));
    }
    
     public function create()
    {
        $experiences = Experience::all();
        $jobTypes = JobType::all();
        $jobSectors = JobSector::all();
        $activeCareers = Careers::where('status_id', 1)->get(); 
        $inactiveCareers = Careers::where('status_id', 0)->get(); 
         $statusOptions = [
            1 => 'Active',
            0 => 'Inactive',
        ];
        return view('admin.careers.create', compact('activeCareers', 'inactiveCareers', 'statusOptions','experiences','jobTypes','jobSectors'));
    }
    /**
     * Store a newly created job posting in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title'     => 'required|string|max:255',
            'location'      => 'required|string|max:255',
            'experience_id' => 'required|integer',
            'skills'        => 'required|string',
            'deadline'      => 'required|date',
            'job_type'      => 'required|integer',
            'qualification' => 'nullable|string',
            'slug'          => 'nullable|string|max:255',
            'sort_order'    => 'nullable|integer',
            'status_id'     => 'nullable|integer',
            'image'         => 'nullable|image|max:2048',
            'job_sector_id' => 'nullable|integer',
        ]);
        $data = $request->only(['job_title', 'location', 'experience_id', 'skills', 'deadline', 'job_type', 'qualification', 'slug', 'sort_order', 'status_id','job_sector_id']);
        if ($file = $request->file('image')) {
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('storage/assets/images/career/', $name);
            $data['image'] = $name;
        }
        Careers::create($data);
        return redirect()->route('admin.careers.index')->with('success', 'Job added successfully.');
    }

    public function edit($id)
    {
      $career = Careers::findOrFail($id);
      $experiences = Experience::all();
      $jobTypes = JobType::all();
        $jobSectors = JobSector::all();
      $activeCareers = Careers::where('status_id', 1)->get();
      $inactiveCareers = Careers::where('status_id', 0)->get();
       $statusOptions = [
        1 => 'Active',
        0 => 'Inactive',
    ];
        return view('admin.careers.edit', compact('career','activeCareers', 'inactiveCareers', 'statusOptions','experiences','jobTypes','jobSectors'));
    }
    /**
     * Update the specified job in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title'     => 'required|string|max:255',
            'location'      => 'required|string|max:255',
            'experience_id' => 'required|integer',
            'skills'        => 'required|string',
            'deadline'      => 'required|date',
            'job_type'      => 'required|integer',
            'qualification' => 'nullable|string',
            'slug'          => 'nullable|string|max:255',
            'sort_order'    => 'nullable|integer',
            'status_id'     => 'nullable|integer',
             'job_sector_id' => 'nullable|integer',
            'image'         => 'nullable|image|max:2048',
        ]);
    
        $career = Careers::findOrFail($id);
        $data = $request->only(['job_title', 'location', 'experience_id', 'skills', 'deadline', 'job_type', 'qualification', 'slug', 'sort_order', 'status_id','job_sector_id']);
        if ($file = $request->file('image')) {
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move('storage/assets/images/career/', $name);
            $data['image'] = $name;
        }
    
        $career->update($data);
    
        return redirect()->route('admin.careers.index')->with('success', 'Job updated successfully.');
    }
    /**
     * Remove the specified job from storage.
     */
    public function destroy($id)
    {
        $career = Careers::findOrFail($id);
        $career->delete();

        return redirect()->route('admin.careers.index')->with('success', 'Job deleted successfully.');
    }
    // public function ApplicationStore(Request $request)
    // {
    //     $request->validate([
    //         'name'     => 'required|string',
    //         'description'      => 'required|string',
    //         'experience' => 'required|integer',
    //         'phone_no'        => 'required|string',
    //         'cnic'      => 'required|string',
    //         'email'      => 'nullable|string',
    //         'subject' => 'nullable|string',
    //         'file'          => 'nullable|file',
    //         'job_id'     => 'nullable|integer',
           
    //     ]);
    
    //     $data = $request->only(['name', 'description', 'experience', 'phone_no', 'cnic', 'email', 'subject', 'file','job_id']);
    //     $data['status_id'] = 15;
    //     // Handle image upload
    //     if ($file = $request->file('file')) {
    //         $name = time() . '_' . $file->getClientOriginalName();
    //         $file->move('storage/assets/pdfs/jobapplications', $name);
    //         $data['file'] = $name;
    //     }
    
    //     JobApplications::create($data);
    
    //     return redirect()->route('front.careerss')->with('success', 'our Application Submitted Successfully.');
    // }
    
     public function ApplicationStore(Request $request)
    {
        $validatedData = $request->validate([
            'job_id'      => 'required|exists:careers,id',
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone_no'    => 'required|string|max:20',
            'cnic'        => 'required|string|max:20',
            'experience'  => 'required|integer|min:0',
            'file'        => 'required|file',
            'subject'     => 'required|string',
            'description' => 'required|string',
        ]);
        $fileName = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move('storage/assets/pdfs/jobapplications', $fileName);
        }
    
        \App\Models\JobApplications::create([
            'job_id'      => $validatedData['job_id'],
            'name'        => $validatedData['name'],
            'email'       => $validatedData['email'],
            'phone_no'    => $validatedData['phone_no'],
            'cnic'        => $validatedData['cnic'],
            'experience'  => $validatedData['experience'],
            'file'        => $fileName,
            'subject'     => $validatedData['subject'],
            'description' => $validatedData['description'],
            'status_id'   => 15,
        ]);
    
return redirect()->route('front.careersdetail', $validatedData['job_id'])->with('success', 'Application submitted successfully!');
    }

 public function JobAppliedApplications($id)
{
    $jobPendingApplications = JobApplications::where('job_id', $id)->where('status_id', 15)->get();
    $jobApprovedApplications = JobApplications::where('job_id', $id)->where('status_id', 16)->get(); 
    $jobRejectedApplications = JobApplications::where('job_id', $id)->where('status_id', 17)->get();
    $statuses = Status::where('details', 'application_status_id')->get();
    return view('admin.careers.applicationlist', compact('jobPendingApplications', 'jobApprovedApplications', 'jobRejectedApplications', 'statuses'));
}
      public function CVStatusUpdate(Request $request)
    {
        $application = JobApplications::findOrFail($request->id);
        $application->status_id = $request->status_id; 
       $application->save();

        return response()->json(['success' => true, 'message' => 'Status Updated Successfully.']);
    }

    // public function downloadCareerCVs(Request $request)
    // {
    //     $files = $request->input('files');
    //     if (empty($files) || !is_array($files)) {
            
    //         return response()->json(['error' => 'No files selected.'], 422);
    //     }
    
    //     if (count($files) === 1) {
    //         // $singleFilePath = storage_path('app/public/assets/pdfs/jobapplications/' . $files[0]);
    //         $singleFilePath =asset('storage/assets/pdfs/jobapplications/' . $files[0]);
    //         return response()->json(['success',$singleFilePath], 404);
    //         if (!file_exists($singleFilePath)) {
    //             return response()->json(['error' => 'File not found.'], 404);
    //         }
    //         return response()->download($singleFilePath);
    //     }
    //     $zip = new ZipArchive;
    //     $zipFileName = 'selected_cvs_' . time() . '.zip';
    //     $zipFilePath = storage_path('app/public/' . $zipFileName);
    
    //     if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    //         foreach ($files as $file) {
    //             $filePath = asset('storage/assets/pdfs/jobapplications/' . $file);
    //             if (file_exists($filePath)) {
    //                 $zip->addFile($filePath, basename($file));
    //             }
    //         }
    //         $zip->close();
    //     } else {
    //         return response()->json(['error' => 'Could not create ZIP file.'], 500);
    //     }
    
    //     return response()->download($zipFilePath)->deleteFileAfterSend(true);
    // }
    
    public function downloadCareerCVs(Request $request)
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
