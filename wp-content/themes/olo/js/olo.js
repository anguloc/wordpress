jQuery(document).ready(function($){
//up to top
$body=(window.opera)?(document.compatMode=="CSS1Compat"?$('html'):$('body')):$('html,body');
$(window).scroll(function(){
	if($(window).scrollTop()>=300){
		$('#oloUp').fadeIn(600);
	}else{
		$('#oloUp').fadeOut(600);
}});
$('#oloUp').click(function() {
	$body.animate({
		scrollTop: 0
	}, 600)
});

//control height
	var h1 = $(".oloPosts").height();
	var h2 = $("#oloWidget").height();

	if(h2 < h1){
		$("#oloWidget").height(h1);
		}else {
		$(".oloPosts").height(h2);
		}
		
//add external link to entry a tag;
$('.oloEntry p a').each(function(){
    $self = $(this);
    if(!$self.has('img').length && !$self.hasClass('oloCopy')){
            $self.append(' <i class="fa fa-external-link"></i>');
    }
});

 $('.fa-search').click(function(){
	$('.fa-search').toggleClass('active');
	$('#searchform').fadeToggle(250);
	setTimeout(function(){
		$('#searchform input').focus();
	}, 300);
});

 $('.fa-qrcode').click(function(){
	$('.fa-qrcode').toggleClass('active');
	$('.qrcodeimg').fadeToggle(250);
});
}); 