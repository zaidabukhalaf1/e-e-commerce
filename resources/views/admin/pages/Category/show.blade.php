@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-6">
                <div class="card" >
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Details Categories</h3>
                        <a class="btn btn-primary mt-3" href="{{route('category.edit',$category->id)}}" style="height: 36px">Edit</a>

                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-body ">
                                <div class="form-row d-flex justify-content-center mt-5 mb-5">
                                    <div class="form-group  col-3 col-lg-4 col-md-2 col-sm-2">
                                        <em> name:</em>  {{$category->name}}
                                    </div>
                                    <div class="form-group  col-3 col-lg-4 col-md-2 col-sm-2">
                                        <em>Items:</em> {{$category->items->name}}
                                    </div>
                                </div>
                                <div class="form-row d-flex justify-content-center mt-5" >
                                    <div class="form-group  col-3 col-lg-4 col-md-2 col-sm-2">
                                        <em>Company:</em> {{$category->companies->name}}
                                    </div>
                                    <div class="form-group  col-3 col-lg-4 col-md-2 col-sm-2">
                                        <em>Image:</em>  <img alt="image name" src="{{ url('images/categories/'.$category->image) }}"width="50%" height="50%" />
                                    </div>
                                </div>


                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection
