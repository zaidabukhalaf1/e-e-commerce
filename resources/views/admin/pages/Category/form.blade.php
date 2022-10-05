<div class="form-row d-flex justify-content-center">
    <div class="form-group col-xl-4 col-12 col-lg-6 col-md-6">
        <label for="name"> Name </label>
        <input type="text" required name="name" @if($errors->any()) value="{{Request::old('name')}}"
               @elseif(isset($categories->name)) value="{{$categories->name}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-6 col-md-6 ms-5">
        <label for="image"> Image </label>
        <input type="file" required name="image" @if($errors->any()) value="{{Request::old('image')}}"
               @elseif(isset($categories->image)) value="{{$categories->image}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>
</div>

<div class="form-row d-flex justify-content-center">
    <div class="form-group col-xl-4 col-12 col-lg-6 col-md-6">
        <label for="companies"> Companies </label>
        <select name="companies" class="form-control">
            @foreach($categories as $category )
                <option  value="{{$category->company_id}}" {{(Request::old('companies')==$category->company_id)?"selected":""}}
                     {{(isset($category->company_id)?"selected":"")}}>
                    {{$category->companies->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-6 col-md-6 ms-5">
        <label for="items"> Items </label>
        <select name="items" class="form-control">
            @foreach($categories as $category )

                <option> {{$category->items->name}} </option>
            @endforeach
        </select>
    </div>
</div>

