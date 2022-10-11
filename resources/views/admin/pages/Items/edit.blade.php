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
                        <h3 class="mt-3">Edit Item</h3>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <form method="post" id="item" action="{{route('item.update',$items->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('admin.pages.Items.form')
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection
