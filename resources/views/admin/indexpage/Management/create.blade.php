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
                        action="{{ isset($management) && $management->id ? route('Management.update', $management->id) : route('Management.store') }}"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @if(isset($management))
                        @method('PUT') <!-- Use PUT for updates -->
                        @endif

                        <div class="card card-default">
                            <div class="card-header">
                                <h2 class="card-title">{{ isset($management) ?'Edit Management':'Add new Management'}}</h2>
                                <a href="{{ url('management') }}" class="btn btn-sm btn-primary float-right">Management List</a>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Management Name -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                value="{{ old('name', isset($management) ? $management->name : '') }}"
                                                required>
                                        </div>
                                    </div>



                                    <!--Designation-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="designation"
                                                value="{{ old('designation', isset($management) ? $management->designation : '') }}"
                                                required>
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
                                            @if(isset($management) && $management->image)
                                            <p>Current Image: <img src="{{ asset('storage/' . $management->image) }}" alt="Management Image" width="100"></p>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Empty Column (3 columns) -->
                                    <div class="col-md-3"></div>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ isset($management) ? 'Update' : 'Submit' }}
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