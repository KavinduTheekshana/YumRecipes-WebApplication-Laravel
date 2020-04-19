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
                            <li class="breadcrumb-item active">Manage Recipes</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Recipes</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        @if (session('user_diactivate_status'))
        <div class="alert alert-danger mb-0">
            {{ session('user_diactivate_status') }}
        </div>
        @endif

        @if (session('user_activate_status'))
        <div class="alert alert-success mb-0">
            {{ session('user_activate_status') }}
        </div>
        @endif

        <br>

        <div class="row">
            <div class="col-md-12">

                


                <div class="card">
                    <div class="card-body">

                        <h5 class="mt-0">All Recipes List</h5>
                        <p class="text-muted font-13 mb-4">You can Edit and Manage Recipes Data and Manage them easyly
                        </p>

    
        
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>User</th>
                                    <th>Name</th>
                                    <th>Ingredients</th>
                                    <th>Description</th>
                                    <th>Likes</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach($recipes as $recipe)
                                <tr>
                                    <td><img src="{{$recipe->recipeimage}}" alt="" class="thumb-md mr-2 rounded-circle" data-toggle="tooltip"></td>
                                    <td><img src="{{$recipe->userimage}}" alt="" class="thumb-md mr-2 rounded-circle" data-toggle="tooltip"></td>
                                    <td>{{$recipe->recipename}}</td>
                                    <td>
                                        {!! substr(strip_tags($recipe->recipeingredients), 0, 20) !!}
                                        @if (strlen(strip_tags($recipe->recipeingredients)) > 20)
                                             ...
                                           @endif
                                    </td>
                                    <td>
                                        {!! substr(strip_tags($recipe->recipedescription), 0, 20) !!}
                                        @if (strlen(strip_tags($recipe->recipedescription)) > 20)
                                             ...
                                           @endif
                                    </td>
                                    <td>{{$recipe->recipeslikes}}</td>
                                    <td>
                                        @if($recipe->recipestatus)
                                        <a href="recipe_diactivate/{{$recipe->id}}"><span
                                                class="badge badge-md badge-success">Active</span></a>
                                        @else
                                        <a href="recipe_activate/{{$recipe->id}}"><span
                                                class="badge badge-md badge-danger">Deactivated</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <button data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg" type="button" onclick="viewData({{$recipe->id}})" class="btn btn-outline-dark mr-1"> <i class="far fa-eye"></i></button>
                                        
                                        <input type="hidden"  
                                             modalname="{{$recipe->recipename}}"
                                             modelimage="{{$recipe->recipeimage}}"
                                             modelingredients="{{$recipe->recipeingredients}}"
                                             modeldescription="{{$recipe->recipedescription}}" 
                                             modelcategoryname="{{$recipe->categoryname}}" 
                                             id="recipes{{$recipe->id}}">


                                        
                                        <a href="recipe_delete/{{$recipe->id}}" type="button" class="btn btn-outline-danger mr-1"> <i class="fas fa-trash-alt"></i></a>
                                        @if($recipe->recipestatus)
                                        <a href="recipe_diactivate/{{$recipe->id}}" type="button" class="btn btn-outline-warning"> <i class="fas fa-lock"></i></a>
                                        @else
                                        <a href="recipe_activate/{{$recipe->id}}" type="button" class="btn btn-outline-success"> <i class=" fas fa-unlock-alt"></i></a>
                                        @endif
                                        
                                    </td>
                                </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container -->



 <!--  Modal content for the above example -->
 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title align-self-center mt-0" id="modalnamez"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                 <div class="col-md-8">
                    <img src="modelimagez" id="modelimagez" class="img-fluid">
                 </div>
                 <div class="col-md-4">
                    <h4 class="modal-title align-self-center mt-0">Ingredients</h4>
                    <hr>
                    <p id="modelingredientsz"></p>
                 </div>
               </div>
                  <br>

               <div>
                <h4 class="modal-title align-self-center mt-0">Description</h4>
                <p id="modeldescriptionz"></p>
               </div>

               <div>
                <h4 class="modal-title align-self-center mt-0">Category Name</h4>
                <p id="modelcategorynamez"></p>
               </div>



                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script>
    function viewData(id){

        var imageurl = $("#recipes"+id).attr("modelimage");
        document.getElementById("modelimagez").src= imageurl;

        $("#modalnamez").text($("#recipes"+id).attr('modalname'));
        $("#modelingredientsz").text($("#recipes"+id).attr('modelingredients'));
        $("#modeldescriptionz").html($("#recipes"+id).attr('modeldescription'));
        $("#modelcategorynamez").text($("#recipes"+id).attr('modelcategoryname'));

    }

</script>


@endsection
