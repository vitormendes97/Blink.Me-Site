$(document).ready(function(){
  toggleClass('#menu','#submenu_geral','open');
  // $('.grid').masonry({
  //
  // itemSelector: '.grid-item',
  // columnWidth: 200
  // });

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
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
