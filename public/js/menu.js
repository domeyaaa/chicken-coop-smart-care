$(".sidebar").on('click', () => {
    $(".sidebar").toggleClass("active");
})

$("#btn").on('click', () => {
    $(".sidebar").toggleClass("active");
})

$(".nav_list").on('click', () => {
    $(".sidebar").toggleClass("active");
})

$('body').on('click',function(event){
    if(!$(event.target).is('.sidebar') && !$(event.target).is('#btn')){
      $(".sidebar").removeClass("active");
    }
});

$('.popup').on('click',(event) =>{
    if($(event.target).is('.popup')){
      $('.popup').hide();
    }
});