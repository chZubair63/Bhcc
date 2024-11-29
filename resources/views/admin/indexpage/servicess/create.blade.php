<!DOCTYPE html>
<html>
@php
$administrationm = 'menu-open';
$amanagement = $mmeasurable_criteria = 'active';
@endphp
@include('layouts.admin.tableheader')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.admin.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.admin.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2>{{ $pageTitle ?? 'Create New Page' }}</h2>
              <a type="button" href="{{ url('records') }}" class="btn btn-sm btn-secondary float-right">Back to List</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              @if (Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {!! session('error') !!}
                </div>
              @endif
              @if (Session::has('feedback'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  {!! session('feedback') !!}
                </div>
              @endif

              <!-- Form to create or update a page -->
              <form 
              action="{{ isset($service) && $service->id ? route('services.update', $service->id) : route('services.store') }}" 
                method="POST" 
                enctype="multipart/form-data">
                @csrf
                @if (isset($service))
                  @method('PUT')
                @endif

                <div class="row">
                  <!-- Name -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        class="form-control" 
                        value="{{ old('name', $service->name ?? '') }}" 
                        required>
                    </div>
                  </div>

                  <!-- Heading -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="heading">Heading:</label>
                      <input 
                        type="text" 
                        name="heading" 
                        id="heading" 
                        class="form-control" 
                        value="{{ old('heading', $service->heading ?? '') }}" 
                        required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Description -->
                  <div class="col-md-12">
                    <textarea 
                      name="description" 
                      id="description" 
                      class="form-control" 
                      rows="3" 
                      required>{{ old('description', $service->description ?? '') }}</textarea>
                  </div>
                </div>

                <div class="row">
                  <!-- Image Upload -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="image">Image:</label>
                      <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="form-control" 
                        {{ isset($service) ? '' : 'required' }}>
                      <small class="form-text text-muted">Upload an image file (JPG, PNG).</small>
                    </div>
                  </div>
                </div>
                <div class="row"><div class="col-md-12">
                  <div class="form-group mt-4">
                      @if(isset($service) && $service->image)
                      <p>Current Image: <img src="{{ asset('storage/' . $service->image) }}" alt="Profile Image" width="600"Hight="600"></p>
                      @endif
                  </div>
              </div>
          </div>
              

                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.admin.foot')
  @include('layouts.admin.tablefooter')
</body>
</html>
