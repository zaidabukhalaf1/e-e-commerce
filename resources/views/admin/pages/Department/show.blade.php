@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-9">
                <div class="card" >
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Details Departments</h3>
                        <a class="btn btn-primary mt-3" href="{{route('department.edit',$departments->id)}}" style="height: 36px">Edit</a>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body ">
                        <div class=" justify-content-center mb-3">
                            <div class="form-group  col-10 col-lg-10 col-md-10 col-sm-10">
                                <em class="me-5"> name:</em>  {{$departments->name}}
                            </div>
                            <hr>
                            <div class="form-group  col-10 col-lg-10 col-md-10 col-sm-10">
                                <em class="me-5"> Category:</em>  {{$departments->category->name}}
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection
