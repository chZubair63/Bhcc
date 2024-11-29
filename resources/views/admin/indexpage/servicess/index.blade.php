<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $administrationm = 'menu-open';
        $amanagement = $mmeasurable_criteria = 'active';
    @endphp
    @include('layouts.admin.tableheader')
</head>

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
              <h2 class="card-title">List of Services</h2>
              <a type="button" href="{{ url('services-create') }}" class="btn btn-sm btn-primary float-right">Add New</a>
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

              <div class="table-responsive">
                <table id="records-table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sr. No</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Heading</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $i = 1; @endphp
                    @foreach($services as $service)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->heading }}</td>
                         <td>
                          @if($service->image)
                          <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" width="50">
                          @else
                            No Image
                          @endif
                        </td> 
                        {{-- <td>
                          @if($service->image != '' && file_exists(public_path().'/uploads/services/'.$service->image))
                          <img src="{{ url('uploads/services/'.$service->image) }}" alt="" width="60" height="60" class="rounded-circle">
                          @else
                          <img src="{{ url('assets/images/no-image.png') }}" alt="" width="60" height="60" class="rounded-circle">
                          @endif
                      </td> --}}
                        <td>
                          <a type="button" class="btn btn-sm btn-primary" href="{{ url('services-edit/' . $service->id) }}">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
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

  <script>
    $(document).ready(function() {
      // Initialize DataTable on load
      $('#records-table').DataTable();
    });
  </script>

</body>
</html>
