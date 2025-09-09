@php
$websitem = 'menu-open';
$websitecmsmanagement = $careersm = 'active';
@endphp

<!DOCTYPE html>
<html>
<head>  
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
</head>

@include('layouts.admin.formheader')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.admin.nav')
    @include('layouts.admin.aside')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="card-title"><b>Create Career Opportunity</b></h2>
                            <a href="{{ url('admin/careers/index') }}" class="btn btn-sm btn-primary float-right">Back to Careers</a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <!-- Job Title -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required>
                                    </div>
                                </div>

                                <!-- Job Type -->
                                <div class="col-md-4">
                                    <div class="form-group">
                               <label for="job_type">Job Type</label>
                               <select name="job_type" id="job_type" class="form-control" required>
                                   <option value="">Select Job Type</option>
                                   @foreach ($jobTypes as $jobType)
                                       <option value="{{ $jobType->id }}">{{ $jobType->job_type }}</option>
                                   @endforeach
                               </select>
                            </div>
                                </div>

                                <!-- Qualification -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" required>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ old('location') }}" required>
                                    </div>
                                </div>

                                <!-- Deadline -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Application Deadline</label>
                                        <input type="date" class="form-control" name="deadline" value="{{ old('deadline') }}" required>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status_id" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            @foreach($statusOptions as $key => $label)
                                                <option value="{{ $key }}" {{ old('status_id', $career->status_id ?? '') == $key ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" required>
                                    </div>
                                </div>

                                <!-- Sort Order -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sort Order</label>
                                        <input type="text" class="form-control" name="sort_order" value="{{ old('sort_order') }}" required>
                                    </div>
                                </div>

                             <div class="col-md-4">
                            <div class="form-group">
                                <label>Experience</label>
                             <select name="experience_id" class="form-control">
                                <option value="">-- Select Experience --</option>
                                @foreach ($experiences as $experience)
                                    <option value="{{ $experience->id }}">{{ $experience->experience }}</option>
                                @endforeach
                            </select>
                                <input type="text" name="custom_experience" id="custom_experience"
                                       class="form-control mt-2" placeholder="Enter experience"
                                       style="display:none;" />
                            </div>
                        </div>



                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ad Image</label>
                                        <input type="file" class="form-control-file" name="image">
                                    </div>
                                </div>

                               <!--Job Sector-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Sector</label>
                                    <select name="job_sector_id" class="form-control" id="job_sector_select">
                                        <option value="">-- Select Job Sector --</option>
                                        @foreach ($jobSectors as $jobSector)
                                            <option value="{{ $jobSector->id }}">{{ $jobSector->job_type }}</option>
                                        @endforeach
                                        <option value="other">Other</option> <!-- Option to select custom job sector -->
                                    </select>
                                    <input type="text" name="custom_job_sector" id="custom_job_sector" 
                                           class="form-control mt-2" placeholder="Enter custom job sector" 
                                           style="display:none;" />
                                </div>
                            </div>

                                <!-- Skills -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Skills Required</label>
                                        <textarea id="editor_skills" class="form-control" name="skills">{{ old('skills') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

@include('layouts.admin.foot')

<script>
    document.addEventListener("DOMContentLoaded", function () {
        ClassicEditor.create(document.querySelector('#editor_description')).catch(error => console.error(error));
        ClassicEditor.create(document.querySelector('#editor_skills')).catch(error => console.error(error));
    });
</script>
<script>
    function toggleCustomInput(select) {
        const input = document.getElementById('custom_experience');
        if (select.value === 'other') {
            input.style.display = 'block';
        } else {
            input.style.display = 'none';
        }
    }
</script>
<script>
    document.getElementById('job_sector_select').addEventListener('change', function() {
        var customInput = document.getElementById('custom_job_sector');
        // If "Other" is selected, show the custom input field
        if (this.value === "other") {
            customInput.style.display = 'block';
        } else {
            customInput.style.display = 'none';
        }
    });
</script>
@include('layouts.admin.formfooter')
</body>
</html>
