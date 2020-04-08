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
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Recipes</a></li>
                            <li class="breadcrumb-item active">Add Recipes</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Recipes</h4>
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

                        <h5 class="mt-0">Recipe Details</h5>
                                   
                                    <div class="row">
                                        <div class="col-sm-12 col-lg-10">

                                            <form role="form" method="POST" action="{{action('RecipeController@saverecipes')}}" enctype="multipart/form-data">
                                                @csrf

                                            
                                 

                     



                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="name" type="text" value="" id="example-text-input" placeholder="Healthy" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Ingredients</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="ingredients" type="text" value="" id="example-text-input" placeholder="sugar, baking soda, salt, vanilla, yeast, spices and colors" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Cateory</label>
                                                <div class="col-sm-10">
                                                    <select class="select2 form-control mb-3 custom-select" name="category" style="width: 100%; height:36px;" required>
                                                        <option>Select</option>
                                                        <optgroup label="List of Categories">
                                                            @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                      
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea id="elm1" name="description"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="input-file-now" name="image" class="dropify" required />
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





 
 



@endsection
