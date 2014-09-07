$(document).ready(function(){ 
	  $('.thumbnail_product li a').click(function(e) {
			e.preventDefault();
			var newimgsrc = $(this).attr('rel');
			$('#prod_big').attr("src",newimgsrc);
		});
		
		$('.colors-color').click(function(e) {
			$('.node-add-to-cart').attr("disabled", false);	
			$('.node-add-to-cart').css("opacity", 1);
		});
		
//		$('.node-add-to-cart').click(function(e) {
//			var mycount =  $('#txtmsg').length;
//			if(mycount == 0 ) {
//				$('html, body').animate({scrollTop: '120px'}, 300);
//				$('#chosecolor').fadeIn();
//				$('.node-add-to-cart').css("opacity", 0.3);
//				$('.node-add-to-cart').attr("disabled", true);
//				return false;
//			}
//			else {
//				$('#chosecolor').fadeOut();
//				$('.node-add-to-cart').css("opacity", 1);
//				$('.node-add-to-cart').attr("disabled", false);
//				return true;
//			}
//		});
		
		
		
	$('input.addrad').click( function( event )  {
			$('#overlay').fadeIn();															
    var nid = $(this).val();
		var theUrl = Drupal.settings.breesee.base_url + '/changeaddress/' + nid ;
		$.ajax({
							url: theUrl,
							success: function(msg){		
								if(msg == 'success') {
									$('#overlay').fadeOut();	
									window.location.reload();		
								}	
								else {
									window.location.reload();									
								}
							}
		});
		
		
  })
		
		
});

function rgb2hex(rgb){
 rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
 return ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2);
}


$(document).ready(function() {  
    $('#mask').css({'height':$('#panel-1').height()});  
    $('#panel').width(parseInt($('#mask').width() * $('#panel div').length));
    $('#panel div').width($('#mask').width());
    $('a[rel=panel]').click(function (e) {
     		e.preventDefault();
        var panelheight = $($(this).attr('href')).height();
        $('a[rel=panel]').removeClass('selected');
        $(this).addClass('selected');
        $('#mask').animate({'height':panelheight},{queue:false, duration:500});         
        $('#mask').scrollTo($(this).attr('href'), 800);     
        return false;
    });
     
});