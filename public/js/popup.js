$('.bxs-x-circle').on('click', () => {
    $('.popup').hide();
})

$('.cencel').on('click', () => {
    $('.popup').hide();
})
$('.on').append()

$('.popup').on('click',(event) =>{
    if($(event.target).is('.popup')){
      $('.popup').hide();
    }
});

$('.inp-num').keypress(function (e) {
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});

$('.plus').on('click', () => {
    let num = $('.num').val();
    $('.num').val(parseInt(num) + 1);
})

$('.minus').on('click', () => {
    let num = $('.num').val();
    if (num > 1) {
        $('.num').val(parseInt(num) - 1);
    }
})

$('.box_male').on('click', ()=>{
    if(!$('#id_male').val()){
        $('.popup_male').css('display', 'flex');
    }if($(event.target).is('.bx-male')){
        $('.popup_male').css('display', 'none');
        n=0;
    }
})

$('.box_female').on('click', ()=>{
    $('.popup_female').css('display', 'flex');
})

$('.btn_addF').on('click', ()=>{
    $('.popup_female').css('display', 'flex');
})

function bred(on,chicken,egg,bred,id) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('#chicken-bred').val(chicken);
    $('#egg-total').val(egg);
    $('#bred-egg').val(bred);
    $('#chicken-bred').focus();
    $('#bid').val(id);

}

function popup_delete(on) {
    $('.popup-delete').css('display', 'flex');
    $('.on').html(on);
}

function vaccin(on,weight,id) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('#type-vaccin').val(vaccin);
    $('#weight').val(weight);
    $('#type-vaccin').focus();
    $('#vc_id').val(id);

}

function feed(on,old_feed,old_total,new_feed,new_total) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('#old-feed').val(old_feed);
    $('#old-total').val(old_total);
    $('#new-feed').val(new_feed);
    $('#new-total').val(new_total);
    $('#old-feed').focus();
}

function egg(on, num) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('.num').val(num);
}

function bodysize(on,body,leg) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('.inpbody').val(body);
    $('.inpleg').val(leg);
    $('.inpbody').focus();
}

function weight(on, num,id) {
    $('.popup-edit').css('display', 'flex');
    $('.on').html(on);
    $('.inp').val(num);
    $('#id_weight').val(id);
    $('.inp').focus();
}