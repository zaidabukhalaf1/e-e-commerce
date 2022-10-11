@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                @include('admin.menu.sidenav')

            </div>
            <div class="col-8">
                @include('sweetalert::alert')

                <div class="card">
                    <div class="card-body d-flex justify-content-around">
                        <h3 class="mt-3">Departments</h3>
                        <a class="mt-3" href="{{route('department.create')}}"><i class="fa fa-plus"
                                                                               style="font-size: 18px;color: #243e56;">
                                Add</i></a>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body ">
                        <table>
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>

                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)

                                <tr>

                                    <td data-label="ID">{{$department->id}}</td>
                                    <td data-label="Name">{{$department->name}}</td>
                                    <td data-label="Category">{{$department->category->name}}</td>
                                    <td data-label="Actions" class="d-flex">
                                        <a href="{{route("department.show",$department->id)}}"><i class="fa fa-eye ms-5"
                                                                                                                          style="font-size: 18px"></i></a>
                                        <a class="me-2" href="{{route("department.edit", $department->id)}}"><i
                                                class="fa fa-edit" style="font-size: 18px"></i></a>


                                        <form method="POST" action="{{ route("department.destroy",$department->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="show_confirm" data-toggle="tooltip"
                                                    title='Delete' style="display: contents;"><i class="fa fa-trash "
                                                                                                 style="font-size: 18px"></i>
                                            </button>
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

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
