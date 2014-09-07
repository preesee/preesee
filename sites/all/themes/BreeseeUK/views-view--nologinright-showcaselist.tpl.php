<div class="Showcase_ho"><!-----[showcase starts here]----> 
<h1>Showcase List</h1>
                 <ul>
          <?php foreach($view->style_plugin->rendered_fields as $key => $val)
             {
	       $imtgk =  _breesee_get_profileimage( $val['uid'] );
	        ?>
            <li class="left_r"><?php  print theme('imagecache', 'showcase_list', $imtgk);  ?> </li>
                 <li class="right_r">
                     <h1><?php print $val['name']; ?></h1>
                         <p><?php print $val['field_ccity_value']; ?></p>
                   </li>
							<?php } ?>
                       </ul>
					  </div>
                      
                      