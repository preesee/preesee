<?php global $base_url;
$themepath = drupal_get_path('theme','BreeseeUK'); ?>
<ul class="most_read"><!-----[most read starts here]---->  
                <h2>Most Read</h2>
             		<?php $k = 1; foreach($view->style_plugin->rendered_fields as $key => $val) { ?> 
                <li><h1><?php print $k;  ?> </h1><p><a href="#"><?php print $val['title'];  ?></a></p> </li>
								<?php $k++; } ?>
                </ul>

