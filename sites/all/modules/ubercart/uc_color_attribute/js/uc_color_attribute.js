$(document).ready(function(){
	$('div.colors-color').click(function() {
		var attrId = $(this).attr('attrid');
		var oId = $(this).attr('oid');
		var exists = $('div#txtmsg').html();
		var title = $(this).attr('title');

//		$('#edit-attributes-'+attrId).val(oId).trigger('change');
//
//		if(exists){
//			$('div#txtmsg').html('<strong>Selected Colour:</strong> '+title);
//		}else{
//			$('div#colors-background').before('<div id="txtmsg"><strong>Selected Colour:</strong> '+title+'</div>');
//		}
//		
		if(exists){
			$('div#txtmsg').html('<strong>Proceed to Checkout</strong>');
		}else{
			$('div#colors-background').before('<div id="txtmsg"><strong>Proceed to Checkout</strong></div>');
		}
		$('.attribute .form-select').val(oId).trigger('change'); // added 
	});
});