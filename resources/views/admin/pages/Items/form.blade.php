<div class="form-row xx">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="name"> Name </label>
        <input type="text" required name="name" id="name" @if($errors->any()) value="{{Request::old('name')}}"
               @elseif(isset($items->name)) value="{{$items->name}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5 ">
        <label for="name"> Price </label>
        <input type="number" required name="price" id="price" @if($errors->any()) value="{{Request::old('price')}}"
               @elseif(isset($items->price)) value="{{$items->price}}" @endif  minlength="1"
               maxlength="100" class="form-control">
    </div>


</div>

<div class="form-row xx">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="description"> Description </label>
        <input type="text" required name="description" id="description" @if($errors->any()) value="{{Request::old('description')}}"
               @elseif(isset($items->description)) value="{{$items->description}}" @endif  minlength="3"
                  maxlength="100" class="form-control">
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5 ">
            <label for="image"> Image </label>
            <input type="file"  name="image"  class=" form-control" @if(!isset($items) or isset($items->image) == 0 or !$items->image) required @endif>
            @if(isset($items->image)==1)
                <td><img alt="image name" src="{{ url('images/items/'.$items->image) }}"width="50%" height="50%" /></td>
            @endif
        </div>


</div>


<script>
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("#item").validate({
            // Specify validation rules
            rules: {
                name: "required",
                price: "required",
                description: "required",

            },
            // Specify validation error messages
            messages: {
                name: "Please enter filed Name",
                price: "Please enter filed Price",
                description: "Please enter filed Description",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
