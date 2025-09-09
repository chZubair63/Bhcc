<!DOCTYPE html>
<html>
@php
$blogsMenu = 'menu-open';
@endphp
<head>    
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
</head>
@include('layouts.admin.tableheader')

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
                <div class="container-fluid">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
             
                    
                    
                    
                        <div class="card card-default">
                            <div class="card-header">
                                <h2 class="card-title"><b>Edit Blog</b></h2>
                                <a href="{{ route('admin.blogs.index') }}" class="btn btn-sm btn-primary float-right">Blog List</a>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
<form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="image">Blog Image</label>
                                        <div class="form-group">
                                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                            <p>Current Image:
                                                @if($blog->image)
                                                    <img src="{{ asset('storage/assets/images/blogs/' . $blog->image) }}" alt="Blog Image" width="80" height="80">
                                                @else
                                                    No Image
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-5">
                                        <label for="title">Title</label>
                                        <div class="form-group">
                                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="row">
                                    <!--<div class="col-md-5">-->
                                    <!--    <label for="description">Short Description</label>-->
                                    <!--    <div class="form-group">-->
                                    <!--        <input type ="text" id='' name="short_description" id="short_description" class="form-control editor" value="{{ old('short_description', $blog->short_description) }}" required>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    <!-- <div class="col-md-5">-->
                                    <!--    <label for="title">Short Description</label>-->
                                    <!--    <div class="form-group">-->
                                    <!--        <input type="text" name="short_description" id="short_description" class="form-control" value="{{ old('short_description', $blog->short_description) }}" required>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    
                                     <div class="col-md-12">
                                      <div class="form-group"> 
                                              <label>short_description</label>
                                     <textarea class="form-control editor" name="short_description" required>{{ old('short_description', $blog->short_description) }}</textarea>
                                       @error('short_description')
                                    <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                      </div>

                                    </div>
                                     </div>
                                 <div class="row">

                                       <div class="col-md-12">
                                      <div class="form-group">
                                              <label>Description</label>
                                     <textarea class="form-control editor" name="description" required>{{ old('description', $blog->description) }}</textarea>
                                       @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                          @enderror
                                      </div>

                                    </div>
                                    </div>
                                    
                                    
                    
                                    <!--<div class="col-md-5">-->
                                    <!--    <label for="detail_description">Detail Description</label>-->
                                    <!--    <div class="form-group">-->
                                    <!--        <input type ="text"id='' name="description" id="description" class="form-control editor" value="{{ old('description', $blog->description) }}" required>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                               
                    
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="blog_date">Blog Date</label>
                                        <div class="form-group">
                                            <input  ="text" name="blog_date" id="blog_date" class="form-control " value="{{ old('blog_date', $blog->blog_date) }}" required>
                                        </div> 
                                    </div>
                                </div>
                    
                                <div class="row">
                                    <div class="col-md-5">
                                        <input type="submit" class="btn btn-primary mt-2" value="Update Blog">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.admin.foot')
        @include('layouts.admin.tablefooter')
         <script>
     document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.editor').forEach((element) => {
            ClassicEditor
                .create(element)
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>

    </div>
</body>
</html>
