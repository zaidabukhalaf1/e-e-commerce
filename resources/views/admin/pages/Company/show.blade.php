@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-7">
                <div class="card" >
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Details Company</h3>
                        <a class="btn btn-primary mt-3" href="{{route('company.edit',$companies->id)}}" style="height: 36px">Edit</a>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body ">
                        <div class="form-row d-flex justify-content-center mt-5 mb-5">
                            <div class="form-group  col-6 col-lg-2 col-md-6 col-sm-6">
                                <em> name:</em>  {{$companies->name}}
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection
