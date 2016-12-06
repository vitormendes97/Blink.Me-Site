$(document).ready(function(){
  toggleClass('#menu','#submenu_geral','open');

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-item'
  });

  $('.sair').click(function(){
    $('#submenu_geral').addClass('open');
  $('.sair').hide();
  });


  $('.closed').click(function() {
       var index = $(this).parent().index();
       $('.cosmetics_menu').eq(index).slideToggle("cosmetics_menu_open");
   });

   $('.sub_menu_closed').click(function() {
        var index = $(this).parent().index();
        $('.cosmetics_submenu').eq(index).slideToggle("cosmetics_menu_open");
    });


});


function toggleClass(elementClick, elementToggled,className){
  $(elementClick).on('click',function(){
    $(elementToggled).toggleClass(className);
    $(".sair").show();
  });
}


function fadeIn(element1, element2){

  $(element1).click(function(){
    $(element2).fadeIn();
  });
}

function fadeOut(element1, element2){

  $(element1).click(function(){
    $(element2).fadeOut();
  });
}
