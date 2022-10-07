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
            <option>select Companies</option>
            @foreach($companies as $company )
                <option  value="{{$company->id}}" {{(Request::old('company')==$company->id)?"selected":""}}
                     {{(isset($company->id)?"selected":"")}}>
                    {{$company->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-6 col-md-6 ms-5">
        <label for="items"> Items </label>
        <select name="items" class="form-control">
            @foreach($items as $item )
                <option  value="{{$item->id}}" {{(Request::old('item')==$item->id)?"selected":""}}
                    {{(isset($item->id)?"selected":"")}}>
                   {{$item->name}}
               </option>
            @endforeach
        </select>
    </div>
</div>

