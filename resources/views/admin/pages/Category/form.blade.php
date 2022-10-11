<div class="form-row  xx">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="name"> Name </label>
        <input type="text" required name="name" id="name" @if($errors->any()) value="{{Request::old('name')}}"
               @elseif(isset($categories->name)) value="{{$categories->name}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5 ">
        <label for="image"> Image </label>
        <input type="file"  name="image" class=" form-control"  @if(!isset($categories) or isset($categories->image) == 0 or !$categories->image) required @endif>
        @if(isset($categories->image)==1 )
        <td><img alt="image name" src="{{ url('images/categories/'.$categories->image) }}"width="50%" height="50%" /></td>
        @endif
    </div>

</div>

<div class="form-row  xx">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="companies"> Companies </label>
        <select name="company_id" id="company_id" class="form-control" >
            <option value="" disabled selected>Select Company</option>
            @foreach($companies as $company )
                <option   value="{{ $company->id }}"   @if(isset( $categories->company_id )&& $categories->company_id ==$company->id ? "selected":"") selected  @endif >{{ $company->name }}</option>

            @endforeach
        </select>
    </div>


    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5 ">
        <label for="items"> Items </label>
        <select name="item_id" id="item_id" class="form-control">
            <option value="" disabled selected>Select Item</option>
        @foreach($items as $item )

                <option value="{{ $item->id }}"  @if(isset( $categories->item_id )&& $categories->item_id ==$item->id ? "selected":"") selected  @endif >{{ $item->name }}</option>

            @endforeach
        </select>
    </div>
</div>


<script>
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("#category").validate({
            // Specify validation rules
            rules: {
                name: "required",
                item_id: "required",
                company_id: "required",
                // image:"required"
            },
            // Specify validation error messages
            messages: {
                name: "Please enter filed Name",
                item_id: "Please select  Item",
                company_id: "Please select  Company",
                // image: "Please upload  image",
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
