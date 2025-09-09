@php
$websitem = 'menu-open';
$websitecmsmanagement = $careersm = 'active';
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>Careers List</title>
</head>
@include('layouts.admin.formheader')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.admin.nav')
        @include('layouts.admin.aside')

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="mb-0">Careers List</h1>
                        <a href="{{ route('admin.careers.create') }}" class="btn btn-primary">Add New Job</a>
                    </div>

                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Closing Date</th>
                                <th>Job Title</th>
                                <th>Qualification</th>
                                <th>Location</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @php
                        $i = 1;
                        @endphp
                        <tbody>
                            @foreach ($careers as $career)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{\Carbon\Carbon::parse($career->deadline)->format('F j, y') }}</td>
                                    <td>{{$career->job_title }}</td>
                                    <td>{{$career->qualification}}</td>
                                    <td>
                                        {{$career->location}}
                                     
                                    </td>
                                    <td>
                                        @if($career->image)
                                        <img src="{{ asset('storage/assets/images/career/'. $career->image) }}" alt="Career image" width="100" />
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $career->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.careers.edit', $career->id) }}" class="btn btn-sm btn-primary mb-1">Edit</a>
                                       <a href="{{ route('admin.careers.applications', $career->id) }}" class="btn btn-sm btn-success mb-1">View</a>
                                        <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
    @include('layouts.admin.foot')
    @include('layouts.admin.formfooter')
</body>
</html>