<!DOCTYPE html>
<html>
@php
$administrationm='menu-open';
$amanagement=$mdoctors='active';
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

                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">List of Doctors</h2>

                                <a type="button" href="{{url('doctors-add')}}" class="btn btn-sm btn-primary float-right">Add New</a>
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
                                    <table id="doctors-table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <!-- <th>ID</th> -->
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>EducationTraining</th>
                                                <th>Degrees</th>
                                                <th>Areas of Experise</th>
                                                <th>Language</th>
                                                <th>WorkDays</th>
                                                <th>Diploma and Certificates</th>
                                                <th>Email</th>
                                                <th>PhoneNo</th>

                                                <th>Image</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php

                                            $i = 1;

                                            @endphp

                                            @foreach($doctors as $doctor)

                                            <tr>
                                                <td>{{$i++}}</td>
                                                <!-- <td>{{$doctor->id}}</td> -->
                                                <td>{{$doctor->name}}</td>
                                                <td>{{$doctor->description}}</td>
                                                <td>{{$doctor->education_training}}</td>
                                                <td>{{$doctor->degrees}}</td>

                                                <td>{{$doctor->area_of_expertise}}</td>
                                                <td>{{$doctor->languages}}</td>
                                                <td>{{$doctor->work_days}}</td>
                                                <td>{{$doctor-> diploma_certifcate}}</td>
                                                <td>{{$doctor-> email}}</td>
                                                <td>{{ $doctor->phone ? $doctor->phone : 'No phone number' }}</td>





                                                <td>
                                                    <img src="{{ asset('storage/'.$doctor->image) }}" alt="Doctor Image" style="width: 80px; height: 80px; object-fit: cover;">
                                                </td>

                                                <td>
                                                    <!-- <a type="button" class="btn btn-sm btn-primary" href="{{ route('doctors.edit', $doctor->id) }}">Edit</a> -->

                                                    <a type="button" class="btn btn-sm btn-primary" href='{{url("/doctors-edit/".$doctor->id)}}'>Edit</a>

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
                $('#doctors-table').DataTable();
            });
        </script>

</body>

</html>