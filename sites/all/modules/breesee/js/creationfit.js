$(document).ready(function(){
	
	listcreations();
	init_filter_clicks();
	$('#product_filter a').click(function(e) {
			e.preventDefault();
	});

	
});
function listcreations(){
	 $('.creations').click(function() {
		//alert('g');
		$('html, body').animate({scrollTop: '120px'}, 600);
		var cur_cre_page = $('#creation_page_block').html();
		$('.filter_menu').fadeOut();
		//$('#creation_page_block').hide(2000);
		$('#creation_page_block').html('<div class="preload"><br>Loading ...</div>');
		var nid = $(this).attr('rel');
		var theUrl = base_url + '/creation/' + nid;
		$.ajax({
							url: theUrl,
							success: function(msg){		
								$('#creation_page_block').html(msg);	
								$('#creation_page_block').show("slow");
								backward();
								pre_step();
								listcreations();
								init_imagebig();
								jQuery('#mycarousel').jcarousel({ });
						}
		});
		
	});
}
function backward() {
	$('#backof').click(function() {
		$('html, body').animate({scrollTop: '120px'}, 600);
		$('.filter_menu').fadeIn();		
		$('#creation_page_block').html('<div class="preload"><br>Loading ...</div>');
		var nid = $(this).attr('rel');
		var theUrl = base_url + '/mycreation/' + nid +'/k/ajax';
		$.ajax({
							url: theUrl,
							success: function(msg){		
							$('#creation_page_block').html(msg);	
							listcreations();
							}
		});
		pre_step();
	});
}

function pre_step() {
	$('.creations').click(function() {
		var cur_cre_page = $('#creation_page').html();
		$('#creation_page').hide(2000);
		$('#creation_page').html('<div class="preload"><br>Loading ...</div>');
		var nid = $(this).attr('rel');
		var theUrl = base_url + '/creation/' + nid;
		$.ajax({
							url: theUrl,
							success: function(msg){		
								$('#creation_page').html(msg);	
								$('#creation_page').show("slow");
								backward();
							}
		});
		
	});
}


function init_filter_clicks() {
		$('#product_filter a.clik').click(function() {
		$('#creation_page_block').html('<div class="preload"><br>Loading ...</div>');
		var tid = $(this).attr('rel');
		var theUrl = Drupal.settings.breesee.base_url + '/creation/filter/' + tid + '/ajax';
		$.ajax({
							url: theUrl,
							success: function(msg){		
								$('#creation_page_block').html(msg);	
								$('#creation_page_block').show("slow");
								backward();
								listcreations();
							}
		});
		});
}

function init_imagebig() {
	$('.cre_thumbs').click(function(e) {
			e.preventDefault();
			$('.cre_thumbs').removeClass('active');
			$(this).addClass('active');
			var newimgsrc = $(this).attr('rel');
			$('#cre_big_img').attr("src",newimgsrc);
	});
	
}


function dfgsdfgsdfgdfg(as) {
	var theUrl = Drupal.settings.breesee.base_url + '/creation/' + as;
		$.ajax({
							url: theUrl,
							success: function(msg){		
								$('#creation_page_block').html(msg);	
								$('#creation_page_block').show("slow");
								backward();
								pre_step();
								listcreations();
								init_imagebig();
								jQuery('#mycarousel').jcarousel({ });
						}
		});	
}