@php
$administrationm = 'menu-open';
$amanagement = $mcourses = 'active';
@endphp

<!DOCTYPE html>
<html>
@include('layouts.admin.formheader')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.admin.nav')

        <!-- Main Sidebar Container -->
        @include('layouts.admin.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content mt-4">
                <div class="container-fluid">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Add/Update Form -->
                    <form
                        action="{{ isset($doctor) && $doctor->id ? route('doctors.update', $doctor->id) : route('doctors.store') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if(isset($doctor))
                        @method('PUT') <!-- Use PUT for updates -->
                        @endif

                        <div class="card card-default">
                            <div class="card-header">
                                <h2 class="card-title">{{ isset($doctor) ?'Edit Doctor':'Add new Doctor'}}</h2>
                                <a href="{{ url('doctors') }}" class="btn btn-sm btn-primary float-right">Doctors List</a>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Doctor Name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                value="{{ old('name', isset($doctor) ? $doctor->name : '') }}"
                                                required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="education_training">EducationTraining</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="education_training"
                                                value="{{ old('education_training', isset($doctor) ? $doctor->education_training : '') }}"
                                                required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="degrees">Degrees</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="degrees"
                                                value="{{ old('degrees', isset($doctor) ? $doctor->degrees : '') }}"
                                                required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="area_of_expertise">Area of Expertise</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="area_of_expertise"
                                                value="{{ old('area_of_expertise', isset($doctor) ? $doctor->area_of_expertise : '') }}"
                                                required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="languages">Languages</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="languages"
                                                value="{{ old('languages', isset($doctor) ? $doctor->languages : '') }}"
                                                required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="work_days">Work days</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="work_days"
                                                value="{{ old('work_days', isset($doctor) ? $doctor->work_days : '') }}"
                                                required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="phone"
                                                value="{{ old('phone', isset($doctor) ? $doctor->phone : '') }}"
                                                required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="email"
                                                value="{{ old('email', isset($doctor) ? $doctor->email : '') }}"
                                                required>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="diploma_certifcate">DiplomaCertifcate</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="diploma_certifcate"
                                                value="{{ old('diploma_certifcate', isset($doctor) ? $doctor->diploma_certifcate : '') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <!-- Doctor Name -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input
                                                type="text"
                                                class="form-control height-50"
                                                name="description"
                                                value="{{ old('description', isset($doctor) ? $doctor->description : '') }}"
                                                required>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Profile Image -->

                            <!-- Choose File Block (3 columns) -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="image">Choose File</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <!-- Current Image Block (3 columns) -->
                            <div class="col-md-3">
                                <div class="form-group mt-4">
                                    @if(isset($doctor) && $doctor->image)
                                    <p>Current Image: <img src="{{ asset('storage/' . $doctor->image) }}" alt="Profile Image" width="100"></p>
                                    @endif
                                </div>
                            </div>



                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($doctor) ? 'Update' : 'Submit' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
        </div>
        </section>

        @include('layouts.admin.foot')
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <!-- jQuery -->
    @include('layouts.admin.formfooter')
</body>

</html>