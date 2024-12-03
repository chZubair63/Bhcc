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
                                <h2 class="card-title">List of Management</h2>

                                <a type="button" href="{{url('/Management-create')}}" class="btn btn-sm btn-primary float-right">Add New</a>
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
                                    <table id="management-table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach($managements as $management)


                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$management->name}}</td>
                                                <td>{{ $management->designation }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/'.$management->image) }}" alt="Management Image" style="width: 50px;">
                                                </td>

                                                <td>
                                                    <a type="button" class="btn btn-sm btn-primary" href='{{url("/Management-edit/".$management->id)}}'>Edit</a>
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
                $('#management-table').DataTable();
            });
        </script>

</body>

</html>