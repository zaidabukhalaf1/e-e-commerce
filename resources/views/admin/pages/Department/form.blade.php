<div class="form-row xx">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="name"> Name </label>
        <input type="text" required name="name" id="name" @if($errors->any()) value="{{Request::old('name')}}"
               @elseif(isset($departments->name)) value="{{$departments->name}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>

    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5 ">
        <label for="Category">Category</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value="" disabled selected>Select Category</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}"  @if(isset( $departments->category_id )&& $departments->category_id ==$category->id ? "selected":"") selected  @endif>{{$category->name}}</option>
            @endforeach
        </select>
    </div>



</div>


<script>
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("#department").validate({
            // Specify validation rules
            rules: {
                name: "required",
                category_id: "required",

            },
            // Specify validation error messages
            messages: {
                name: "Please enter filed Name",
                category_id:"Please select category"

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
