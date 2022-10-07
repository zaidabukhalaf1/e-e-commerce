@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-8">
                @include('sweetalert::alert')

                <div class="card">
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Categories</h3>
                        <a class="mt-3" href="{{route('category.create')}}"><i class="fa fa-plus"
                                                                               style="font-size: 18px;color: #243e56;">
                                Add</i></a>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body ">
                        <table id="example" class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width:20%;">Name</th>
                                <th style="width:25%">Items</th>
                                <th style="width:25%">Company</th>
                                <th style="width:25%">Image</th>
                                <th style="width:25%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr style="height: 25%">
                                    <td>{{$category->id}}</td>
                                    <td> {{$category->name}}</td>
                                    <td> {{$category->items->name}}</td>
                                    <td> {{$category->companies->name}}</td>
                                        <td><img alt="image name" src="{{ url('images/categories/'.$category->image) }}"width="20%" height="15%" /></td>
                                        <td><a href="{{route("category.show",$category->id)}}"><i class="fa fa-eye" style="font-size: 18px"></i></a></td>
                                        <td><a class="me-2" href="{{route("category.edit", $category->id)}}"><i class="fa fa-edit" style="font-size: 18px"></i></a></td>

                                                                            <td><form method="post" action="{{route("category.destroy",$category->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button style="display: contents;"> <i class="fa fa-trash " style="font-size: 18px"></i></button>
                                            </form>
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
<script>
$(document).ready(function (){

});
</script>
@endsection
