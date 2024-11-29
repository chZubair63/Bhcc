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

  <!-- Main Sidebar Container -->
  @include('layouts.admin.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- Table Card -->
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">List of Sliders</h2>
              <a href="{{ url('slider-create') }}" class="btn btn-sm btn-primary float-right">Add New</a>
            </div>
            <div class="card-body">
              <!-- Alerts -->
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

              <!-- Data Table -->
              <div class="table-responsive">
                <table id="records-table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      
                      <th>Image</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sliders as $slider)
                      <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->name }}</td>
                        <td>{{ $slider->description }}</td>
                        <td>
                          @if($slider->image)
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" width="50">
                          @else
                            No Image
                          @endif
                        </td>
                        <td>
                          <a href="{{ url('slider-edit/' . $slider->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layouts.admin.foot')
  @include('layouts.admin.tablefooter')

  <script>
    $(document).ready(function() {
      $('#records-table').DataTable();
    });
  </script>
</body>
</html>
