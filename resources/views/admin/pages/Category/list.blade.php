@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Categories</h3>
                        <a class="mt-3" href="{{route('category.create')}}"><i class="fa fa-plus" style="font-size: 18px;color: #243e56;"> Add</i></a>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body ">
                        <table id="example" class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width:20%;">Name</th>
                                <th style="width:25%">Item</th>
                                <th style="width:25%">Items</th>
                                <th style="width:25%">Company</th>
                                <th style="width:25%">Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td> {{$category->name}}</td>
                                    <td> {{$category->items->name}}</td>
                                    <td> {{$category->companies->name}}</td>
                                    <td> {{$category->image}}</td>
                                    <td class="table-action d-flex ">
                                        <a  href="{{route("category.show",$category->id)}}"><i class="fa fa-eye" style="font-size: 18px"></i></a>
                                        <a  class="me-2 ms-2" href="{{route("category.edit", $category->id)}}"><i class="fa fa-edit"style="font-size: 18px" ></i>
                                            <a href="{{route("category.destroy",$category->id)}}">
                                                <i class="fa fa-trash" style="font-size: 18px"></i>
                                            </a>
                                        </a>


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




@endsection
