$('input:radio[name="layout"]').change(function () {
    $(".chicken_box").toggleClass("list");
});

$('input:radio[name="layout_sup"]').change(function () {
    $(".chicken_box").toggleClass("list");
});

let n = 0;

function add_male(id) {

    let add_male = "<div class='box_layout'>" +
        "<a href='javascript:void(0);' class='bx bxs-x-circle  bx-male'></a>" +
        "<label class='chick_male'>" +
        "<input type='text' name='id_male' id='id_male' value='" + id + "'></label></div>"


    let wrapper_male = $('.container_male');
    if (n == 0) {
        $(wrapper_male).append(add_male);
        $("#" + id).clone().appendTo($(".chick_male"));
        n=1;
        $('.bx-male').css('display', 'block');
    }

    $('.box_male').hide();
    console.log($('#id_male').val());

    $('.popup').css('display', 'none');

}
let wrapper_male = $('.container_male');
$(wrapper_male).on('click', '.bx-male', function (e) {
    e.preventDefault();
    $(this).parent('div').remove();
    $('.box_male').show();
    $('.bx-male').css('display', 'none');
    n=0;
});

function add_female(id) {
    let add_female = "<div class='box_female box_layout " + id + "'>" +
        "<a href='javascript:void(0);' class='bx bxs-x-circle bx-female'></a>" +
        "<input type='text' name='id_female[]' class='id_female' id='id_female' value='" + id + "'></div>"

    $('.popup').css('display', 'none');
    let wrapper_female = $('.sup_female');
    $('.female').css('display', 'none');
    $('.btn_addF').css('display', 'block');
    $(wrapper_female).append(add_female);
    $("#" + id).next().clone().appendTo($("." + id));
    $('.bx-female').css('display', 'block');
}

let wrapper_female = $('.sup_female');
$(wrapper_female).on('click', '.bx-female', function (e) {
    e.preventDefault();
    $(this).parent('div').remove();
    let itemtoRemove = $(this).parent('div').attr('class').replace('box_female box_layout ', '');
    chick.splice($.inArray(itemtoRemove, chick), 1);

    console.log(chick)
    console.log($(this).parent('div').attr('class').replace('box_female box_layout ', ''))

    if (chick.length == 0) {
        $('.female').css('display', 'block');
        $('.btn_addF').css('display', 'none');
    }
});

let chick_famale = [];
let chick = [];
function getPc(id) {
    if (document.getElementById(id).checked) {
        chick_famale.push(id);
        console.log(chick_famale.length)
    }
    else {
        chick_famale.splice(chick_famale.indexOf(id), 1);
        console.log(chick_famale.length)
    }
    console.log(chick_famale);

    $('.btn_female').on('click', () => {
        console.log(chick_famale.length)
        for (i = 0; i < chick_famale.length; i++) {
            const found = chick.find(element => element == chick_famale[i]);
            if (found == undefined) {
                chick.push(chick_famale[i])
                add_female(chick_famale[i]);
            }
        }
    })
}