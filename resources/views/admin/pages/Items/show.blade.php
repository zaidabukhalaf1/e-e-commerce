@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Details Item</h3>
                        <a class="btn btn-primary mt-3" href="{{route('item.edit',$items->id)}}" style="height: 36px">Edit</a>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body ">
                        <div class=" justify-content-center mt-2 mb-3">
                            <div class="form-group  col-10 col-lg-10col-md-10 col-sm-10 mb-3">
                                <em class="me-5"> name:</em> {{$items->name}}
                            </div>
                            <hr>
                            <div class="form-group  col-10 col-lg-10col-md-10 col-sm-10 mb-3">
                                <em class="me-5"> Price:</em> {{$items->price}}
                            </div>

                        </div>
                        <hr>

                        <div class="justify-content-center mt-3 mb-5">
                            <div class="form-group  col-10 col-lg-10col-md-10 col-sm-10 mb-3">
                                <em class="me-5"> Description:</em> {{$items->description}}
                            </div>
                            <hr>

                            <div class="form-group  col-10 col-lg-10col-md-10 col-sm-10 mb-3">
                                <em class="me-5"> Image:</em> <img alt="image name"
                                                                   src="{{ url('images/items/'.$items->image) }}"
                                                                   width="70%" height="70%"/>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>

@endsection
