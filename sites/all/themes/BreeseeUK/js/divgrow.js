(function ($) {
    var divgrowid = 0;
    $.fn.divgrow = function (options) {
        var options = $.extend({}, {
            initialHeight: 100,
            moreText: "+",
            lessText: "- ",
            speed: 1000,
            showBrackets: false
        }, options);
        return this.each(function () {
            divgrowid++;
            obj = $(this);

	     var copied_elem = $(this).clone()
                      .attr("id", false)
                      .css({visibility:"hidden", display:"block",
                               position:"absolute"});
    $("body").append(copied_elem);
    var heights = copied_elem.height();
    copied_elem.remove();
  if(heights>options.initialHeight){
	//alert( heights);
            var fullHeight = heights + 100;
            //obj.css('height', options.initialHeight).css('overflow', 'hidden');
            obj.addClass('divgrow-wrapper');
            if (options.showBrackets) {
               // obj.after('<a href="#" class="divgrow-showmore' + " divgrow-obj-" + divgrowid + '"' + '></a>');
                //obj.css('display','inline');
            } else {
                obj.after('<a href="#" class="divgrow-showmore' + " divgrow-obj-" + divgrowid + '"' + '></a>');
               // obj.css('display','inline');
            }

			  $("a.divgrow-showmore").html(options.moreText);
            $("." + "divgrow-obj-" + divgrowid).toggle(function () {
                $(this).prev().css('display','inline');                  // henry .hua 2014.3.22

                $(this).prevAll(".divgrow-wrapper:first").animate({
																  
                    height: fullHeight + "px"
                }, options.speed, function () {
                    if (options.showBrackets) {
                        $(this).nextAll("p.divgrow-brackets:first").fadeOut();
                    }
                    $(this).nextAll("a.divgrow-showmore:first").html(options.lessText);


                })
            }, function () {
                $(this).prev().css('display','block');           // henry .hua 2014.3.22
                $(this).prevAll(".divgrow-wrapper:first").stop(true, false).animate({
                    height: options.initialHeight
                }, options.speed, function () {
                    if (options.showBrackets) {
                        $(this).nextAll("p.divgrow-brackets:first").stop(true, false).fadeIn()
                    }
                    $(this).nextAll("a.divgrow-showmore:first").stop(true, false).html(options.moreText);

                })
            })
  }})
    }
})(jQuery);