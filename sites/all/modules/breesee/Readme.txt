

content_profile_edit.module
	Line 20 Original commented
	Line 21 Added
	
	Line 25 Original commented
	Line 26 Added
	
	
wysiwyg/wysiwyg.js
	Line 72-74 Commented
	
privatemsg/privatemsg.module
	Line 1424 Original Commented 
	Line 1425 Added
	
//	Line 1400 Original Commented 	//
//	Line 1401 Added  							//

wysiwyg_imageupload.module edited on  12/12/2011

wysiwyg_imageupload_nodeapi add this line 

Line 255 Added / $node->body = _wysiwyg_imageupload_filter_process($node->body); 

modalframe_example/modalframe_example.js
	Line 26 Added [avoid if commented]
	
	
//////////////////// Roles Hardcoded


uc_cart.pages.inc line 448 function theme_uc_cart_checkout_review($panes, $form) {



/////////////// Delete all orders


$result = db_query("select * from uc_orders");
while($row = db_fetch_object($result)){
  print "deleting order $row->order_id\n";
  uc_order_delete($row->order_id); 
}


$clrarray = array('#DA0B09', '#EF0B83', '#FD9ACB', '#FB6603', '#FB9703', '#FBC903', '#F8EF08', '#FDFD9A', '#F5FDCC', '#349765', '#97C903', '#CCFECC', '#03A9E7', '#9ACBFD', '#CCFEFE', '#3667FC', '#0303D1', '#02028E', '#CB9AFD', '#0303D1', '#343497', '#FFFFFF', '#C0C0C0', '#969696', '#000000', '#636363', '#848282');

$tid = 7240;
$weight = 1;
foreach($clrarray as $val) {
db_query("UPDATE term_data SET name = '$val', weight = '$weight' WHERE tid = '$tid' ");
$tid +=1;
$weight += 1;
}

$query = "SELECT name, tid FROM term_data WHERE vid = 30 " ;
$query_result = db_query($query);
while($row = db_fetch_object($query_result)) {
$name = $row->name;
$tid = $row->tid ;
$rest = substr($name , -6);
//print $origname = '#'.$rest;
//print '   ';
db_query("UPDATE term_data set name = $rest WHERE tid  = '$tid ' ");

}

///////////////




EDIT In sites/all/libraries/tinymce/jscripts/tiny_mce/themes/advanced/image.htm
	line 9, 35 to 43 added 
		

EDIT In sites/all/modules/ubercart/uc_color_attribute/js/uc_color_attribute.js
	line 8 to 15 Original : commented 
	line 16 to 21 added  
	
wysiwyg.js Line 68-77 commented 
	Fixes editor disappear issue on form submit
	