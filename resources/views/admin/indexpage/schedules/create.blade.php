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
        <div class="col-md-12 ">
          <div class="card">
            <div class="card-header">
              <h2>{{ $pageTitle ?? '' }}</h2>
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




              <!-- Form to edit the schedule -->

               
              <form 
              action="{{ isset($schedule) && $schedule->id ? route('schedule.update', $schedule->id) : route('schedule.store') }}" 
              method="POST">
              @csrf
              @if (isset($schedule) && $schedule->id)
                @method('PUT')
              @endif

                <div class="row">
                  <!-- Day and Start Time in one row -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="day">Day:</label>
                      <input 
                        type="text" 
                        name="day" 
                        id="day" 
                        class="form-control" 
                        value="{{ old('day', $schedule->day) }}" 
                        required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="status_id">Status</label>
                      <select class="form-control select2" name="status_id" id="status_id" style="width: 100%;">
                          <option value="">-- Select Status --</option>
                          @foreach($statuses as $row)
                          <option value="{{ $row->status_id }}" {{ $row->status_id == ($schedule->status_id ?? '') ? "selected" : "" }}>
                              {{ $row->status_name }}
                          </option>
                          @endforeach
                      </select>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Start Time and End Time in one row -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="start_time">Start Time:</label>
                      <input 
                        type="text" 
                        name="start_time" 
                        id="start_time" 
                        class="form-control" 
                        value="{{ old('start_time', $schedule->start_time) }}" 
                        required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="end_time">End Time:</label>
                      <input 
                        type="text" 
                        name="end_time" 
                        id="end_time" 
                        class="form-control" 
                        value="{{ old('end_time', $schedule->end_time) }}" 
                        required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-- Title and Description in one row -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="form-control" 
                        value="{{ old('title', $schedule->title) }}" 
                        required>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description:</label>
                      <textarea 
                        name="description" 
                        id="description" 
                        class="form-control" 
                        rows="3" 
                        required>{{ old('description', $schedule->description) }}</textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group text-right">
                  <button type="submit" class="btn shadow">Submit</button>
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
