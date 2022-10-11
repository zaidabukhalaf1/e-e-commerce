@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Details Categories</h3>
                        <a class="btn btn-primary mt-3" href="{{route('category.edit',$category->id)}}"
                           style="height: 36px">Edit</a>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body ">
                        <div class=" justify-content-center mt-5 mb-5">
                            <div class="form-group  col-10 col-lg-7 col-md-10 col-sm-10">
                                <em class="me-5"> name:</em> {{$category->name}}
                            </div>
                            <hr>
                            <div class="form-group  col-10 col-lg-7col-md-10 col-sm-10">
                                <em class="me-5">Items:</em> {{$category->items->name}}
                            </div>
                        </div>
                        <hr>

                        <div class="justify-content-center mt-5">
                            <div class="form-group  col-10 col-lg-7col-md-10 col-sm-10">
                                <em class="me-5">Company:</em> {{$category->companies->name}}
                            </div>
                            <hr>

                            <div class="form-group  col-10 col-lg-7 col-md-10 col-sm-10">
                                <em class="me-5">Image:</em>
                                <img alt="image name" src="{{ url('images/categories/'.$category->image) }}" width="50%" height="50%"/>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


        </div>

    </div>

@endsection
