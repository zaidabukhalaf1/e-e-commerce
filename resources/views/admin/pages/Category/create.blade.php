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
                        <h3 class="mt-3">Create Categories</h3>
                    </div>
                </div>

                <div class="card mt-5 ">
                    <div class="card-body">

            @include('admin.pages.Category.form')
                    </div>
                </div>

            </div>


        </div>

    </div>




@endsection
