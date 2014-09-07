<?php 
$node = $data['creation_detail'];
$attributes = array('id'=>'cre_big_img');
$title = $data['creation_detail']->title;
global $base_url;
?>
<div id="creation_detail_page">
<div class="creation_title"><h1><?php print $data['creation_detail']->title; ?></h1></div>
<div class="creation_body"><?php print theme('imagecache', 'center_image', $data['creation_detail']->field_upload[0]['filepath'], $alt, $title,  $attributes); ?> </div>
<?php if (count($data['creation_detail']->field_upload) > 1 ) {?>
<div class="creation_thumbs">
<ul>
<?php $cl = 'active'; foreach($data['creation_detail']->field_upload as $key=>$val) { 
$imgurl = imagecache_create_path('center_image',$val['filepath']);
?>
	<li class="<?php echo $cl; ?> cre_thumbs" rel="<?php echo $base_url.'/'.$imgurl; ?>"><?php print theme('imagecache', 'product_detail_thumbs', $val['filepath']); ?></li>
  <?php $cl = '';} ?>
</ul>
</div>
<div class="clear"></div>
<?php } ?>
<div class="creation_body"><?php print $data['creation_detail']->body; ?>  </div>
<div id="other_creations">
<?php print _breesee_othercreationfrom($data['creation_detail']->uid, $data['creation_detail']->nid, 'creations'); ?>
</div>
</div>
<a id="backof" href="#" rel="<?php print $data['creation_detail']->uid; ?>">&nbsp;</a>

<!--<div id="nearest_store_creation">
<div class="nearest_store_creation">Nearest Store to Have</div>
<div id="store_tohave_gmap"></div>
</div>-->

<div class="comment_header">
	<span><?php echo comment_num_all($node->nid); ?> Comments so far</span>
</div>
<div id="node_comments">
<div id="previouscommnents"></div>
<div class="creation_comm_preview" id="creation_extra_comment">
<?php echo comment_render($node, $cid = 0) ?>
<input id="node_id" type="hidden" value="<?php echo $node->nid; ?>"> 
<input id="all_comments" type="hidden" value="<?php echo comment_num_all($node->nid) + 1; ?>">
</div>
</div>

<script type="text/javascript">
//	var infowindow = null;
//    $(document).ready(function () { initialize();  });
//    function initialize() {
//        var centerMap = new google.maps.LatLng(39.828175, -98.5795);
//        var myOptions = {
//            zoom: 4,
//            center: centerMap,
//            mapTypeId: google.maps.MapTypeId.ROADMAP
//        }
//        var map = new google.maps.Map(document.getElementById("store_tohave_gmap"), myOptions);
//        setMarkers(map, sites);
//	    infowindow = new google.maps.InfoWindow({
//                content: "loading..."
//            });
//        var bikeLayer = new google.maps.BicyclingLayer();
//		bikeLayer.setMap(map);
//    }
//    var sites = [< ?php echo _breesee_get_claimstore_forgmap($node->nid);  ?>];
//    function setMarkers(map, markers) {
//        for (var i = 0; i < markers.length; i++) {
//            var sites = markers[i];
//            var siteLatLng = new google.maps.LatLng(sites[1], sites[2]);
//            var marker = new google.maps.Marker({
//                position: siteLatLng,
//                map: map,
//                title: sites[0],
//                zIndex: sites[3],
//                html: sites[4]
//            });
//            var contentString = "Some content";
//            google.maps.event.addListener(marker, "click", function () {
//               // alert(this.html);
//                infowindow.setContent(this.html);
//                infowindow.open(map, this);
//            });
//
//        }
//
//    }
		

</script>
