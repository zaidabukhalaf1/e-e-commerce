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
                        <h3 class="mt-3">Create Company</h3>
                    </div>
                </div>

                <div class="card mt-5 ">
                    <div class="card-body">
                        <form method="post" id="company" action="{{route('company.store')}}" enctype="multipart/form-data">
                            @csrf
                            @include('admin.pages.Company.form')
                            <button type="submit" class="btn btn-primary ms-5 mt-5">Create</button>
                        </form>
                    </div>
                </div>

            </div>


        </div>

    </div>



@endsection
