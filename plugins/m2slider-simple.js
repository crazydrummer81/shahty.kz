console.log('m2slider activate');
let active_slide = undefined;
m2slider_simple_init();

$(".gallery::before").on("swipeleft",function(){
  console.log("Вы потащили влево!");
});
$(".gallery--thumb").click(function(){
  showSliderPopup(this);
})

$(".m2slider--button-close").click(function(){
  hidePopup();
})
$(".m2slider--arrow-left").click(function(){
  previousSlide();
})
$(".m2slider--arrow-right").click(function(){
  nextSlide();
})
// $(".gallery").click(function(){
//   if( $(window).width() <= 768 ) showSliderPopup(this);
// })

function m2slider_simple_init() {
  let popup_html = '<div class="m2popup inactive">'+
            '<div class="m2slider">'+
            '<div class="m2slider--content">'+
            '</div>'+
            '<div class="m2slider--arrow-left"><span class="i-arrow-left"></span></div>'+
            '<div class="m2slider--arrow-right"><span class="i-arrow-right"></span></div>'+
            '<div class="m2slider--button-close"><span class="i-close"></span></div>'+
            '</div>';
  $('body').append(popup_html);
}
function setSliderContent(elem) {
  let elem_to_append = elem.clone()[0].children;
  $(".m2slider--content").html( elem_to_append );
}
function showSliderPopup(elem) {
  active_slide = $('#'+elem.dataset.src);
  setSliderContent(active_slide);
  showPopup();
}
function showPopup(){
  $(".m2popup").removeClass("inactive");
  $(".m2popup").addClass("active");
  $("body").addClass("blocked");
}
function hidePopup(){
  $(".m2popup").removeClass("active");
  $(".m2popup").addClass("inactive");
  $("body").removeClass("blocked");
}
function nextSlide () {
  if( active_slide.index() == active_slide.parent()[0].children.length-1 ) {
    active_slide = active_slide.siblings().first();
   } else
   active_slide = active_slide.next(); 
   setSliderContent(active_slide);
}
function previousSlide () {
  if( active_slide.index() == 0) {
    active_slide = active_slide.siblings().last();
  } else
  active_slide = active_slide.prev(); 
  setSliderContent(active_slide);
}

