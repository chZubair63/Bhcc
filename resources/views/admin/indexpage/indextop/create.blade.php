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
              <h2>{{ $pageTitle ?? 'Create New Index Top' }}</h2>
              <a type="button" href="{{ url('indextops') }}" class="btn btn-sm btn-secondary float-right">Back to List</a>
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

              <!-- Form to create or update a record -->
              <form 
                action="{{ isset($indextop) && $indextop->id ? url('indextop-update', $indextop->id) : url('indextop-store') }}" 
                method="POST" 
                enctype="multipart/form-data">
                @csrf
                @if (isset($indextop))
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
                        value="{{ old('name', $indextop->name ?? '') }}" 
                        required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Description -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea 
                        name="discription" 
                        id="description" 
                        class="form-control" 
                        rows="3" 
                        required>{{ old('discription', $indextop->discription ?? '') }}</textarea>
                    </div>
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
                        {{ isset($indextop) ? '' : 'required' }}>
                      <small class="form-text text-muted">Upload an image file (JPG, PNG).</small>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mt-4">
                      @if (isset($indextop) && $indextop->image)
                        <p>Current Image: <img src="{{ asset('storage/' . $indextop->image) }}" alt="Index Top Image" width="600" height="600"></p>
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
