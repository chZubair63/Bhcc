@php
$websitem = 'menu-open';
$websitecmsmanagement = 'active';
$tendersm = 'active';
@endphp
@include('layouts.admin.tableheader')
<!DOCTYPE html>
<html>
<head>
    <title>Tenders List</title>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
      @include('layouts.admin.nav')
        @include('layouts.admin.aside')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="mb-0">Tenders List</h1>
                    <a href="{{ route('admin.tender.create') }}" class="btn btn-primary">Add New Tender</a>
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                          <table id="tenders-table" class="table table-bordered table-striped"> 
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Closing Date</th>
                            <th>Job Title</th>
                            <th>Qualifications</th>
                            <th>Location</th>
                            <th>Experience</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i =1;
                        @endphp
                        @forelse ($tenders as $tender)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ \Carbon\Carbon::parse($tender->deadline)->format('F j, Y') }}</td>
                                <td>{{ $tender->job_title }}</td>
                                <td>{{ $tender->qualifications }}</td>
                                <td>{{ $tender->location }}</td>
                                <td>{{ $tender->experience }}</td>
                                <!--<td>-->
                                <!--    @if ($tender->image)-->
                                <!--       <img src="{{ asset('storage/assets/images/tender/' . $tender->image) }}" width="100" />-->
                                <!--    @else-->
                                <!--        No Image-->
                                <!--    @endif-->
                                <!--</td>-->
                                  <td>
                                        @if($tender->image)
                                        <img src="{{ asset('storage/assets/images/tender/'. $tender->image) }}" alt="Tender image" width="100" />
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                <td>{{ $tender->status_id == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('admin.tender.edit', $tender->id) }}" class="btn btn-sm btn-primary mb-1">Edit</a>
                                    <a href="{{ route('admin.tender.applications', $tender->id) }}" class="btn btn-sm btn-success mb-1">View</a>
                                    <form action="{{ route('admin.tender.destroy', $tender->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">No tenders available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </section>
    </div>
</div>
  @include('layouts.admin.foot')
            @include('layouts.admin.tablefooter')
          <script>
            $(document).ready(function() {
                $('#tenders-table').DataTable();
            });
        </script>
</body>
</html>
