@extends('layouts.main')

@section('content')



    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Yum</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Categories List</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
    @endif



        @if (count($errors) > 0)
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif



      

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="mt-0">Category Name</h5>
                                   
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-6">

                                            <form role="form" method="POST" action="{{action('CategoryController@savecategory')}}" enctype="multipart/form-data">
                                                @csrf

                                            
                                 

                     



                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="name" type="text" value="" id="example-text-input" placeholder="Healthy" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="input-file-now" class="dropify" name="image" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row mr-1" style="float: right;">
                                                <button type="submit" class="btn btn-primary ml-2 align-right">Submit</button>
                                            </div>


                                        </form>

                                        </div>
                                    </div>

                    
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->


    @if (session('category_delete_status'))
    <div class="alert alert-success mb-0">
        {{ session('category_delete_status') }}
    </div>
    @endif

    @if (session('category_cantdelete_status'))
    <div class="alert alert-danger mb-0">
        {{ session('category_cantdelete_status') }}
    </div>
    @endif


    <br>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h5 class="mt-0">All Categories List</h5>
                    <p class="text-muted font-13 mb-4">You can Edit Categories Data and Manage them easyly
                    </p>
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>IMAGE</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>


                            <tbody>
                                @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td><img src="{{$category->image}}" alt="" class="thumb-md mr-2" data-toggle="tooltip"> </td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <a href="categories_delete/{{$category->id}}" type="button" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                                @endforeach
                           
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div><!-- container -->
 



@endsection
