$(document).ready(function () {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    var fieldHTML = '<div class="format-id"><input type="text" name="chicken_id[]" class="inp-id" placeholder="ใส่รหัสไก่พันธุ์" value=""/><a href="javascript:void(0);" class="remove_button"><i class="bx bxs-x-square"></i></a></div>'; //New input field html 
    $('.total').text(x);
    //Once add button is clicked
    $(addButton).click(function () {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
            $('.total').text(x);
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
        $('.total').text(x);
    });

    $('input:radio[name="format"]').change(function () {
        if($('#one').is(':checked')){
            $('.format_id').css('display','block')
            $('.format_coop').css('display','none')
            $('.inp-id').prop('required',true)
            $('#coop').prop('required',false)
        }else{
            $('.format_id').css('display','none')
            $('.format_coop').css('display','block')
            $('.inp-id').prop('required',false)
            $('#coop').prop('required',true)
        }
    });
});