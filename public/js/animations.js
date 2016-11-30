$(document).ready(function(){
  toggleClass('#menu','#submenu_geral','open');
  $('.slick-item').slick({
     rtl: true
  });
});


function toggleClass(elementClick, elementToggled,className){
  $(elementClick).on('click',function(){
    $(elementToggled).toggleClass(className);
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
