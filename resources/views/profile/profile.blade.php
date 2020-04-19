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
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
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

                                @if (session('status'))

                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>

                                @endif



    <div class="row">
        <div class="col-md-12 col-xl-3">
            <div class="card profile">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{$authprofile->profile_pic}}" alt="" class="rounded-circle img-thumbnail thumb-xl">
                        <div class="online-circle">
                            <i class="fa fa-circle text-success"></i>
                        </div>
                        <h4 class="">{{$authprofile->name}}</h4>

                        @if($authprofile->user_type)
                        <p class="text-muted font-12">User</p>
                        @else
                        <p class="text-muted font-12">Admin</p>
                        @endif



                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-12 col-xl-9">

            <div class="">
                <div class="custom-tab tab-profile">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active pb-3 pt-0" data-toggle="tab" href="#recipes" role="tab"><i
                                    class="fas fa-utensils mr-2"></i>Recipes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pb-3 pt-0" data-toggle="tab" href="#profile" role="tab"><i
                                    class="fas fa-cog mr-2"></i>Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pb-3 pt-0" data-toggle="tab" href="#password" role="tab"><i
                                    class="fas fa-lock mr-2"></i>Password</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-4">
                        <div class="tab-pane active" id="recipes" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="mt-0">My Cookbook</h5>
                                            <div class="table-responsive">
                                                <table id="datatable-buttons"
                                                    class="table table-striped table-bordered w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Image</th>
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
                                                            <td><img src="{{$recipe->recipeimage}}" alt=""
                                                                    class="thumb-md mr-2 rounded-circle"
                                                                    data-toggle="tooltip"></td>
                                                            <td>{{$recipe->recipename}}</td>
                                                            <td>
                                                                {!! substr(strip_tags($recipe->recipeingredients), 0,
                                                                20) !!}
                                                                @if (strlen(strip_tags($recipe->recipeingredients)) >
                                                                20)
                                                                ...
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {!! substr(strip_tags($recipe->recipedescription), 0,
                                                                20) !!}
                                                                @if (strlen(strip_tags($recipe->recipedescription)) >
                                                                20)
                                                                ...
                                                                @endif
                                                            </td>
                                                            <td>{{$recipe->recipeslikes}}</td>
                                                            <td>
                                                                @if($recipe->recipestatus)
                                                                <span class="badge badge-md badge-success">Active</span>
                                                                @else
                                                                <span
                                                                    class="badge badge-md badge-danger">Deactivated</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button data-toggle="modal" data-animation="bounce"
                                                                    data-target=".bs-example-modal-lg" type="button"
                                                                    onclick="viewData({{$recipe->id}})"
                                                                    class="btn btn-outline-dark mr-1"> <i
                                                                        class="far fa-eye"></i></button>

                                                                <input type="hidden" modalname="{{$recipe->recipename}}"
                                                                    modelimage="{{$recipe->recipeimage}}"
                                                                    modelingredients="{{$recipe->recipeingredients}}"
                                                                    modeldescription="{{$recipe->recipedescription}}"
                                                                    modelcategoryname="{{$recipe->categoryname}}"
                                                                    id="recipes{{$recipe->id}}">


                                                                @if($recipe->recipestatus)
                                                                @else
                                                                <a href="recipe_delete/{{$recipe->id}}" type="button"
                                                                    class="btn btn-outline-danger mr-1"> <i
                                                                        class="fas fa-trash-alt"></i></a>
                                                                @endif



                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>





                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <form class="form-horizontal form-material mb-0" role="form" method="POST"
                                            action="{{action('UsersController@updateprofilepicture')}}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" value="{{$authprofile->id}}" placeholder="ID"
                                                name="user_id" class="form-control">

                                            <input type="file" id="input-file-now-custom-1" class="dropify"
                                                data-height="300" data-allowed-file-extensions="pdf png psd jpg"
                                                data-default-file="{{url($authprofile->profile_pic)}}"
                                                name="profile_pic" />

                                            <button style="width: 300px"
                                                class="btn btn-warning btn-sm text-light px-4  mb-0 btn-block">Update
                                                Profile Picture</button>
                                            </form>

                                            <hr>
                                        </div>

                                        <div class="col-lg-12">

                                            <form class="form-horizontal form-material mb-0" role="form" method="POST"
                                            action="{{action('UsersController@updateprofiledetails')}}"
                                            enctype="multipart/form-data">
                                            @csrf


                                                <div class="form-group">
                                                <input type="text" value="{{$authprofile->name}}" name="name" placeholder="Full Name" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <input type="email" value="{{$authprofile->email}}" placeholder="Email" class="form-control"
                                                        readonly>
                                                </div>



                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Update
                                                        Profile</button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="password" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        

                                        <div class="col-lg-12">

                                            <form class="form-horizontal form-material mb-0"role="form" method="POST"
                                            action="{{action('UsersController@changePassword')}}"
                                            enctype="multipart/form-data">
                                            @csrf

                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <input type="password" name="current-password" placeholder="Current Password" class="form-control">
                                                        @if ($errors->has('current-password'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('current-password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-4">
                                                        <input type="password" name="new-password" placeholder="password" class="form-control">
                                                        @if ($errors->has('new-password'))
                                                        <span class="help-block text-danger">
                                                            <strong>{{ $errors->first('new-password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-4">
                                                        <input type="password" name="new-password_confirmation" placeholder="Re-password" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <button
                                                        class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Update
                                                        Password</button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- container -->

<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
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