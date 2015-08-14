fixNavi();
$(window).scroll(fixNavi);
//#navGlobal
function fixNavi(){
  if( $(window).scrollTop() > 150 ){
    $('#navGlobal').css('top','0px');
  }else{
    var d = 150 - $(window).scrollTop();
    $('#navGlobal').css('top', d+"px" );
  }
}