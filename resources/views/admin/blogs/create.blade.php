@php
$websitem = 'menu-open';
$websitecmsmanagement = $newseventActive = 'active';
@endphp

<!DOCTYPE html>
<html>
    <head><script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
</head>
@include('layouts.admin.formheader')

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

                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text"  class="form-control " name="title" value="{{ old('title') }}">
                                    @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                          
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Blog Date</label>
                                    <input type="text" class="form-control" name="blog_date" value="{{ old('blog_date') }}">
                                    @error('blog_date')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    
                      
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Description</label>
                                 <textarea class="form-control editor" name="description">{{ old('description') }}</textarea>
                               @error('description')
                                 <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>

                            </div>
                            
                           
                                                    <div class="row">
                                                         <div class="col-md-12">
                                <div class="form-group">
                                             <label>Short Description</label>
                                              <textarea class="form-control editor" name="short_description">{{ old('short_description') }}</textarea>
                                                  @error('short_description')
                                                 <div class="text-danger">{{ $message }}</div>
                                                        @enderror  
                                </div>

                            </div>
                                                  </div>
                            
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                    

                </div><!-- /.container-fluid -->
            </section>
        </div>
        <!-- /.content-wrapper -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('layouts.admin.foot')

    @include('layouts.admin.formfooter')
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
</body>
</html>
