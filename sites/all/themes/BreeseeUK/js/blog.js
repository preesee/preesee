$(document).ready(function () {

   // firstlevel_init();
    fetchblogs();
    nologin_filter_init();

    $('#nologinhomemmnu li a:first').addClass("active");
		
		if($('#nologinhomemmnu li a:first').hasClass('ajax')) {
    	$('#nologinhomemmnu li a:first').attr('href', 'theblog/all');
		}
		
    $('#nologinhomemmnu li a.noajax').click(function () {
        $('#nologinhomemmnu li a').removeClass("active");
        $(this).addClass("active");
        $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
        var urlPart = $(this).attr('href');
        var theUrl = Drupal.settings.breesee.base_url + '/' + urlPart + '/ajax';
        $.ajax({
            url: theUrl,
            success: function (msg) {
                $('#nologin_blog_block').html(msg);
                init_ajax_pager();
            }
        });
        return false;
    });
    $('#nologinhomemmnu li a.video').click(function () {
        $('#nologinhomemmnu li a').removeClass("active");
        $(this).addClass("active");
        $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
        var urlPart = $(this).attr('href');
        var theUrl = Drupal.settings.breesee.base_url + '/' + urlPart + '/ajax';
        $.ajax({
            url: theUrl,
            success: function (msg) {
                $('#nologin_blog_block').html(msg);
                init_ajax_pager();
            }
        });
        return false;
    });
    $('#nologinhomemmnu li a.fb').click(function () {
        $('#nologinhomemmnu li a').removeClass("active");
        $(this).addClass("active");
        $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
        var urlPart = $(this).attr('href');
        var theUrl = base_url + '/' + urlPart + '/ajax/ajax';
        $.ajax({
            url: theUrl,
            success: function (msg) {
                $('#nologin_blog_block').html(msg);
                init_ajax_pager();
            }
        });
        return false;
    });
    $('.blog_more').click(function () {
        $(this).parent($('.whole_content_midd .whole_content_middle_p')).css('color', 'red');
        $(this).parent($('.whole_content_midd .whole_content_middle_p')).css('overflow', 'visible');
    });
/*		$('.sublev').mouseover(function(){
		var k = $(this).children('ul').length;
				var from = $('#nologinfilter').attr("rel");
				var curlPart = $(this).children('a').attr('href');
				if(k == 0) {
			var theUrl = $(this).children('a').attr('rel') + '/' + from;
						var obj = $(this);
							$.ajax({
				url: theUrl,
				success: function(msg){
					obj.append(msg);	
									nologin_filter_init();
									sublevel_init();
				}
			});
		}
	});*/
//
//    $('div.whole_content_middle_p').divgrow({
//        var itmheight = jQuery(this).height();
//				if( itmheight > 250)
//					varinitialHeight: 250;
//				else 
//					initialHeight: parseInt($(this).height() - 30);
//    });
		
		
//		$('div.whole_content_middle_p').each(function() {
////			var itmheight = $(this).height();
////			var initialHeightd = 0;
////			if( $(this).height() > 250) { 
////				initialHeightd = 250; }
////			else {
////				initialHeightd = $(this).height() - 30;
////			}
////			alert(initialHeightd);	
//			$(this).divgrow({
//				initialHeight : 100
//			});
//			
//		});
		
		$('div.whole_content_middle_p').divgrow({
				initialHeight : 100
			});

		
		
});

function firstlevel_init() {
    $('.sublev').mouseover(function () {

        var k = $(this).children('ul').length;
        var from = $('#nologinfilter').attr("rel");
        var curlPart = $(this).children('a').attr('href');
        if (k == 0) {
            var theUrl = $(this).children('a').attr('rel') + '/' + from;
            var obj = $(this);
            $.ajax({
                url: theUrl,
                success: function (msg) {
                    $('.sublev').removeClass('sublev');
                    obj.append(msg);
                    sublevel_init();
                    nologin_filter_init();
                }
            });
        }
    });
}

function sublevel_init() {
    $('.sublev').mouseover(function () {
        if ($(this).hasClass('expanded')) {
            return false;
        }
        $(this).addClass('expanded');
        var k = $(this).children('ul').length;
        var from = $('#nologinfilter').attr("rel");
        var curlPart = $(this).children('a').attr('href');
        if (k == 0) {
            var theUrl = $(this).children('a').attr('rel') + '/' + from;
            var obj = $(this);
            $.ajax({
                url: theUrl,
                success: function (msg) {
                    $('.sublev').removeClass('sublev');
                    obj.append(msg);
                    sublevel_init();
                    nologin_filter_init();
                }
            });

        }
    });
}

function nologin_filter_init() {
    $('#nologinfilter li a').click(function () {
        $('#nologinfilter li a').removeClass("active");
        $(this).addClass("active");
        $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
        var urlPart = $(this).attr('href');
        var theUrl = Drupal.settings.breesee.base_url + '/' + urlPart + '/ajax';
        $.ajax({
            url: theUrl,
            success: function (msg) {
                $('#nologin_blog_block').html(msg);
                init_ajax_pager();
            }
        });
        return false;
    });
}

function fetchblogs() {
   var pathname = window.location.href;
	 

	 if(pathname == Drupal.settings.breesee.base_url +'/') {
			 $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
				var urlPart = 'theblog/all';
				var theUrl = Drupal.settings.breesee.base_url + '/' + urlPart + '/ajax';
				$.ajax({
						url: theUrl,
						success: function (msg) {
								$('#nologin_blog_block').html(msg);
								init_ajax_pager();
						}
				});
	 }
}


function init_ajax_pager() {
    $('#nologin_blog_block .pager a').click(function (e) {
        e.preventDefault();
        $('#nologin_blog_block').html('<div class="preload"><br><br>Loading ...</div>');
        var theUrl = $(this).attr('href');
        $.ajax({
            url: theUrl,
            success: function (msg) {
                $('#nologin_blog_block').html(msg);
                init_ajax_pager();
            }
        });
    });

}