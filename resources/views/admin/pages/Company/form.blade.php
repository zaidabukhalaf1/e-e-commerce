<div class="form-row d-flex justify-content-center">
    <div class="form-group col-xl-4 col-12 col-lg-4 col-md-5 col-sm-5">
        <label for="name"> Name </label>
        <input type="text" required name="name" id="name" @if($errors->any()) value="{{Request::old('name')}}"
               @elseif(isset($companies->name)) value="{{$companies->name}}" @endif  minlength="3"
               maxlength="100" class="form-control">
    </div>


</div>


<script>
    $(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("#company").validate({
            // Specify validation rules
            rules: {
                name: "required",

            },
            // Specify validation error messages
            messages: {
                name: "Please enter filed Name",

            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
