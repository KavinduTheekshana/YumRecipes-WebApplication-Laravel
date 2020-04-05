@extends('layouts.main')

@section('content')



 <!-- Page Content-->
 <div class="page-content">

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Yum</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Users List</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="mt-0">All Users List</h5>
                        <p class="text-muted font-13 mb-4">You can Edit Uses Date and Manage them easyly
                        </p>
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach($allusers as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{ date('d-M-Y', strtotime($user->created_at)) }}</td>
                                    <td>
                                        @if($user->status)
                                        <a href="user_diactivate/{{$user->id}}"><span
                                                class="badge badge-md badge-success">Profile is
                                                Active</span></a>
                                        @else
                                        <a href="user_activate/{{$user->id}}"><span
                                                class="badge badge-md badge-danger">Profile is
                                                Deactivate</span></a>
                                        @endif
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></button>
                                       
                                        @if($user->status)
                                        <button type="button" class="btn btn-outline-warning"> <i class="fas fa-lock"></i></button>
                                        @else
                                        <button type="button" class="btn btn-outline-success"> <i class=" fas fa-unlock-alt"></i></button>
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

    <footer class="footer text-center text-sm-left">
        © 2018-2019 Amezia <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
    </footer>
</div>
<!-- end page content -->



@endsection
