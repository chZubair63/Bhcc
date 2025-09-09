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

                <form action="{{ route('admin.careers.update', $career->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="card-title"><b>Edit Career Opportunity</b></h2>
                            <a href="{{ route('admin.careers.index') }}" class="btn btn-sm btn-primary float-right">Back to Careers</a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <!-- Job Title -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" name="job_title" value="{{ old('job_title', $career->job_title) }}" required>
                                    </div>
                                </div>

                                <!-- Job Type -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Type</label>
                                     <select name="job_type" class="form-control" required>
                                    @foreach ($jobTypes as $type)
                                        <option value="{{ $type->id }}" {{ $career->job_type == $type->id ? 'selected' : '' }}>
                                            {{ $type->job_type }}
                                        </option>
                                    @endforeach
                                </select>
                                    </div>
                                </div>

                                <!-- Qualification -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" name="qualification" value="{{ old('qualification', $career->qualification) }}" required>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ old('location', $career->location) }}" required>
                                    </div>
                                </div>

                                <!-- Deadline -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Application Deadline</label>
                                        <input type="date" class="form-control" name="deadline" value="{{ old('deadline', $career->deadline) }}" required>
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status_id">
                                            @foreach($statusOptions as $key => $label)
                                                <option value="{{ $key }}" {{ old('status_id', $career->status_id) == $key ? 'selected' : '' }}>
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
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug', $career->slug) }}" required>
                                    </div>
                                </div>

                                <!-- Sort Order -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sort Order</label>
                                        <input type="text" class="form-control" name="sort_order" value="{{ old('sort_order', $career->sort_order) }}" required>
                                    </div>
                                </div>

                                <!-- Experience -->
                              <div class="col-md-4">
                <div class="form-group">
                    <label>Experience</label>
                    <select name="experience_id" class="form-control" required>
                        <option value="">-- Select Experience --</option>
                        @foreach ($experiences as $exp)
                            <option value="{{ $exp->id }}" {{ old('experience_id', $career->experience_id) == $exp->id ? 'selected' : '' }}>
                                {{ $exp->experience }}
                            </option>
                        @endforeach
                    </select>
                
                    <input type="text" name="custom_experience" id="custom_experience"
                           class="form-control mt-2"
                           placeholder="Enter experience"
                           value="{{ old('custom_experience', $career->custom_experience ?? '') }}"
                           style="{{ old('experience_id', $career->experience_id) == 'other' || $career->custom_experience ? '' : 'display:none;' }}" />
                </div>
            </div>




                                <!-- Image Upload -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ad Image</label>
                                        <input type="file" class="form-control-file" name="image">
                                        
                                        @if($career->image)
                                            <img src="{{ asset('storage/assets/images/career/' . $career->image) }}" alt="Career Image" style="max-width: 200px;">
                                        @else
                                            <p>No Image Available</p>
                                        @endif
                                    </div>
                                </div>
                                   <!--Job Sector-->
                             <div class="col-md-4">
                            <div class="form-group">
                                <label>Job Sector</label>
                                <select name="job_sector_id" class="form-control">
                                    <option value="">-- Select Job Sector --</option>
                                    @foreach ($jobSectors as $jobSector)
                                        <option value="{{ $jobSector->id }}"
                                                {{ old('job_sector_id', $career->job_sector_id) == $jobSector->id ? 'selected' : '' }}>
                                            {{ $jobSector->job_type }}
                                        </option>
                                    @endforeach
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
                                        <textarea id="editor_skills" class="form-control" name="skills">{{ old('skills', $career->skills) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Update</button>
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
        ClassicEditor.create(document.querySelector('#editor_skills')).catch(error => console.error(error));
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const experienceSelect = document.querySelector('select[name="experience_id"]');
        const customInput = document.getElementById('custom_experience');

        function toggleCustomInput() {
            customInput.style.display = (experienceSelect.value === 'other') ? 'block' : 'none';
        }

        experienceSelect.addEventListener('change', toggleCustomInput);
        toggleCustomInput(); // Run on page load in case "other" is already selected
    });
</script>

@include('layouts.admin.formfooter')
</body>
</html>
