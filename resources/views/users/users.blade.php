@extends('master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-plus-circle"></i>
                                Add
                            </button>
                        </div>
                        <div class="card-body">
                             <div class="table-responsive">
                                 <table class="table table-sm table-borderless table-striped">
                                     <thead class="bg-primary">
                                     <tr>
                                         <th>No.</th>
                                         <th>Profile</th>
                                         <th>Name</th>
                                         <th>Gender</th>
                                         <th>Phone</th>
                                         <th>Email</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     @foreach([1,2,3,4,5] as $item)
                                     <tr>
                                         <td>1</td>
                                         <td>Profile</td>
                                         <td>Nupol</td>
                                         <td>Male</td>
                                         <td>077 832 914</td>
                                         <td>nupol@gmail.com</td>
                                     </tr>
                                     @endforeach
                                     </tbody>
                                 </table>
                             </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input autocomplete="off" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input autocomplete="off" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <button type="reset" class="btn btn-danger">
                                            <i class="fas fa-window-close"></i>
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary float-right">
                                            <i class="fas fa-save"></i>
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
