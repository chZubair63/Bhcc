@php
$websitem = 'menu-open';
$websitecmsmanagement = $tendersm = 'active';
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

                <form action="{{ route('admin.tender.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="card-title"><b>Create Tender</b></h2>
                            <a href="{{ route('admin.tender.index') }}" class="btn btn-sm btn-primary float-right">Back to Tenders</a>
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

                                <!-- Qualification -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Qualifications</label>
                                        <input type="text" class="form-control" name="qualifications" value="{{ old('qualifications') }}" required>
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ old('location') }}" required>
                                    </div>
                                </div>

                                <!-- Experience -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" name="experience" value="{{ old('experience') }}" required>
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
                                <select class="form-control select2" name="status_id" style="width: 100%;">
                                    @foreach($statusOptions as $key => $label)
                                        <option value="{{ $key }}"
                                            {{ old('status_id', 15) == $key ? 'selected' : '' }}>
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

                                <!-- Ad Image -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ad Image</label>
                                        <input type="file" class="form-control" name="image" accept="image/*">
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
        ClassicEditor.create(document.querySelector('#editor_skills')).catch(error => console.error(error));
    });
</script>

@include('layouts.admin.formfooter')
</body>
</html>
