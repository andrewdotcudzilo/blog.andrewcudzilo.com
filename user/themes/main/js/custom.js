
//div.list-blog-header
//div.list-blog-padding
//div.sidebar-content {

$(function(){
    $('div.sidebar-content').each(function(){
       rotate($(this), getRandomArbitrary(-5, 5));
    });
    $('div.list-blog-header, div.list-blog-padding').each(function(){
        rotate($(this), getRandomArbitrary(-1, 1));
    });

});

/* stolen, basically return a number between one and ten */
function getRandomArbitrary(min, max) {
  return Math.random() * (max - min) + min;
}
function rotate($obj, deg) {
    //$obj.css( {'rotate': 'rotate(180deg)'});
    $obj.css({'transform' : 'rotate('+ deg +'deg)'});
}