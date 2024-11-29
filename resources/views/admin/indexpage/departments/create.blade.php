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
        <div class="col-12">
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">{{ isset($department) ? 'Edit Department' : 'Add New Department' }}</h2>
              <a type="button" href="{{ url('departments') }}" class="btn btn-sm btn-secondary float-right">Back to List</a>
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

              <!-- Form for Adding or Editing -->
              <form 
                action="{{ isset($department) ? route('departments.update', $department->id) : route('departments.store') }}" 
                method="POST">
                @csrf
                @if (isset($department))
                  @method('PUT')
                @endif

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name">Department Name</label>
                    <input 
                      type="text" 
                      name="name" 
                      value="{{ old('name', $department->name ?? '') }}" 
                      class="form-control" 
                      placeholder="Enter name" 
                      required>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <label for="discription">Description</label>
                    <textarea  name="discription"   rows="4"  class="form-control"  placeholder="Enter Description"  required>{{ old('discription', $department->discription ?? '') }}</textarea> 
                    
                  </div>
                </div>

                <div class="form-group text-right">
                  <button type="submit" class="btn btn-primary">{{ isset($department) ? 'Update' : 'Save' }}</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <!-- End of Form -->
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
</body>
</html>
