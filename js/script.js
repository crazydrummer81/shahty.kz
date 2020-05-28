$(function() {
	$('#article_faq > ul').attr('data-active-index','false');
});
$(function() {
	$('#article_faq > ul').addClass('accordion accordionjs');
});

jQuery(document).ready(function($){
	 $(".accordion").accordionjs();
});

$("#article_faq > ul").accordionjs({
	// Allow self close.(data-close-able)
	closeAble   : true,

	// Close other sections.(data-close-other)
	closeOther  : true,

	// Animation Speed.(data-slide-speed)
	slideSpeed  : 200,

	// The section open on first init. A number from 1 to X or false.(data-active-index)
	activeIndex : false,

	// Callback when a section is open
	// openSection: function( section ){},

	// Callback before a section is open
	// beforeOpenSection: function( section ){},
});

function showModalImg(elem) {
	img_path = elem.dataset.src;
	
	modal = $('#modal-img');
	overlay = $('#modal-overlay');
	overlay.addClass('active');
	overlay.removeClass('inactive');
	modal.html += '<img src="'+img_path+'" alt="Соляная пещера Алматы" title="" id="modal_img_active">';
	modal.html += '<div class="modal--button-close">&#10006;</div>';
	modal.addClass('active');
	modal.removeClass('inactive');
	$('body').addClass('blocked')
}
function hideModalImg() {
	elem = $('#modal-img');
	overlay = $('#modal-overlay');
	overlay.addClass('inactive');
	overlay.removeClass('active');
	elem.innerHTML = '';
	elem.addClass('inactive');
	elem.removeClass('active');
	$('body').removeClass('blocked');
}

$(function() {
	$('.lazy').Lazy();
});