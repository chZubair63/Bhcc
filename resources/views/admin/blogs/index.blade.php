@php
$websitem = 'menu-open';
$websitecmsmanagement = $blogActive = 'active';
@endphp
@include('layouts.admin.tableheader')
<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
       @include('layouts.admin.nav')
        @include('layouts.admin.aside')

        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="mb-0">Blogs</h1>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add New Blog</a>
                    </div>
                    
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
                        
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <div class="table-responsive">
                          <table id="blogs-table" class="table table-bordered table-striped"> 
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Short Description</th>
                                        <th>Description</th>
                                        <th>Blog Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 1;
                                @endphp
                                <tbody>
                                    @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            @if($blog->image)
                                            <img src="{{ asset('storage/assets/images/blogs/' . $blog->image) }}" width="80" alt="Blog Image">
                                            @else
                                            No Image
                                            @endif
                                        </td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{!! Str::words(strip_tags($blog->short_description), 10, '...') !!}</td>
                                        <td>{!! Str::words(strip_tags($blog->description), 20, '...') !!}</td>
                                        <td>{{ $blog->blog_date }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm mb-2">Edit</a>
                                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
        </div>
             @include('layouts.admin.foot')
            @include('layouts.admin.tablefooter')
          <script>
            $(document).ready(function() {
                $('#blogs-table').DataTable();
            });
        </script>
     
    
</body>
</html>
