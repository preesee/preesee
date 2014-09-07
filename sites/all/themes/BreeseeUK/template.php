<?php

/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
 
function phptemplate_body_class($left, $right) {
  if ($left != '' && $right != '') {
    $class = 'sidebars';
  }
  else {
    if ($left != '') {
      $class = 'sidebar-left';
    }
    if ($right != '') {
      $class = 'sidebar-right';
    }
  }
	if ($left == '' && $right == '') {
    $class = 'nosidebars';
  }
  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}
/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' › ', $breadcrumb) .'</div>';
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function phptemplate_preprocess_page(&$vars) {
	
	global $user;
	if( (arg(1) == 'breesee') && (arg(2) == 'creatormanagement') && ($user->uid != 1) ) 	{
		drupal_set_message('denied');
		drupal_goto();
	}
	
	if( (arg(1) == 'blog') && (arg(2) == 'management') && ($user->uid != 1) ) 	{
		drupal_set_message('denied');
		drupal_goto();
	}
	
  $vars['tabs2'] = menu_secondary_local_tasks();
  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }

}




/**
 * Add a "Comments" heading above comments except on forum pages.
 */
function garland_preprocess_comment_wrapper(&$vars) {
  if ($vars['content'] && $vars['node']->type != 'forum') {
    $vars['content'] = '<h2 class="comments">'. t('Comments') .'</h2>'.  $vars['content'];
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function phptemplate_menu_local_tasks() {
  return menu_primary_local_tasks();
}

/**
 * Returns the themed submitted-by string for the comment.
 */
function phptemplate_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

/**
 * Returns the themed submitted-by string for the node.
 */
function phptemplate_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    )
	);
}

/**
 * Generates IE CSS links for LTR and RTL languages.
 */
function phptemplate_get_ie_styles() {
  global $language;

  $iecss = '<link type="text/css" rel="stylesheet" media="all" href="'. path_to_theme() .'/css/fix-ie.css" />';
  if ($language->direction == LANGUAGE_RTL) {
    $iecss .= '<style type="text/css" media="all">@import "'. path_to_theme() .'/css/fix-ie-rtl.css";</style>';
  }

  return $iecss;
}




/* Suman */


function BreeseeUK_theme(&$existing, $type, $theme, $path) {
	
  $hooks['user_login'] = array(
    'template' => 'user_login',
    'arguments' => array('form' => NULL),
  );
	$hooks['user_register'] = array(
    'template' => 'user_register',
    'arguments' => array('form' => NULL),
  );
	$hooks['creators_node_form'] = array(
    'template' => 'node-creators',
    'arguments' => array('form' => NULL),
  );
	$hooks['blog_node_form'] = array(
    'template' => 'node-blog',
    'arguments' => array('form' => NULL),
  );
	$hooks['creations_node_form'] = array(
    'template' => 'node-creations',
    'arguments' => array('form' => NULL),
  );
  $hooks['store_node_form'] = array(
    'template' => 'node-store',
    'arguments' => array('form' => NULL),
  );
	$hooks['address_node_form'] = array(
    'template' => 'node-address',
    'arguments' => array('form' => NULL),
  );
	$hooks['billing_address_node_form'] = array(
    'template' => 'node-billing-address',
    'arguments' => array('form' => NULL),
  );
	$hooks['shipping_address_node_form'] = array(
    'template' => 'node-shipping-address',
    'arguments' => array('form' => NULL),
  );
	
	$hooks['featured_slider_node_form'] = array(
    'template' => 'node-featured_slider',
    'arguments' => array('form' => NULL),
  );
	
  $hooks['product_node_form'] = array(
    'template' => 'node-product',
    'arguments' => array('form' => NULL),
  );
	$hooks['store_policy_node_form'] = array(
    'template' => 'node-store-policy',
    'arguments' => array('form' => NULL),
  );
  $hooks['breesee_user_login_form'] = array(
    'template' => 'user-login-block',
    'arguments' => array('form' => NULL),
  );
	$hooks['uc_cart_view_form'] = array(
    'template' => 'cart/uc-cart-view-form',
    'arguments' => array('form' => NULL),
  );
	$hooks['uc_cart_checkout_form'] = array(
    'template' => 'cart/uc-cart-checkout-form',
    'arguments' => array('form' => NULL),
  );

//	$hooks['audience_node_form'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'audience-node',
//   );

//	$hooks['user_custom_profile_edit'] = array(
//      'arguments' => array('form' => NULL),
//      'template' => 'user-custom-profile-edit',
//   );
	$hooks['breesee_purchase_feedback_form'] = array(
      'arguments' => array('form' => NULL),
      'template' => 'purchase-feedback-form', 
   );
	 
	 $hooks['store_other_locations'] = array(
      'arguments' => array('data' => NULL),
      'template' => 'store-other-locations', 
   );
	 
	return $hooks;
}

/* Suman */



function BreeseeUK_pager($tags = array(), $limit = 10, $element = 0, $parameters = array(), $quantity = 5) {
  global $pager_page_array, $pager_total;

  // Calculate various markers within this pager piece:
  // Middle is used to "center" pages around the current page.
  $pager_middle = ceil($quantity / 2);
  // current is the page we are currently paged to
  $pager_current = $pager_page_array[$element] + 1;
  // first is the first page listed by this pager piece (re quantity)
  $pager_first = $pager_current - $pager_middle + 1;
  // last is the last page listed by this pager piece (re quantity)
  $pager_last = $pager_current + $quantity - $pager_middle;
  // max is the maximum page number
  $pager_max = $pager_total[$element];
  // End of marker calculations.

  $pager_delim = '&nbsp;';

  // Prepare for generation loop.
  $i = $pager_first;
  if ($pager_last > $pager_max) {
    // Adjust "center" if at end of query.
    $i = $i + ($pager_max - $pager_last);
    $pager_last = $pager_max;
  }
  if ($i <= 0) {
    // Adjust "center" if at start of query.
    $pager_last = $pager_last + (1 - $i);
    $i = 1;
  }
  // End of generation loop preparation.

  $li_first = theme('pager_first', (isset($tags[0]) ? $tags[0] : t('first')), $limit, $element, $parameters);
  $li_previous = theme('pager_previous', (isset($tags[1]) ? $tags[1] : t('prevoious')), $limit, $element, 1, $parameters);
  $li_next = theme('pager_next', (isset($tags[3]) ? $tags[3] : t('next')), $limit, $element, 1, $parameters);
  $li_last = theme('pager_last', (isset($tags[4]) ? $tags[4] : t('last')), $limit, $element, $parameters);

  if ($pager_total[$element] > 1) {
    if ($li_first) {
      $items[] = array(
        'class' => 'pager-first',
        'data' => $li_first,
      );
    }
    if ($li_previous) {
      $items[] = array(
        'class' => 'pager-previous',
        'data' => $li_previous,
      );
    }

    // When there is more than one page, create the pager list.
    if ($i != $pager_max) {
      if ($i > 1) {
        $items[] = array(
          'class' => 'pager-ellipsis',
          'data' => '...',
        );
      }
      // Now generate the actual pager piece.
      for (; $i <= $pager_last && $i <= $pager_max; $i++) {
        if ($i < $pager_current) {
          $items[] = array(
            'class' => 'pager-item',
            'data' => theme('pager_previous', $i, $limit, $element, ($pager_current - $i), $parameters).$pager_delim,
          );
        }
        if ($i == $pager_current) {
          $items[] = array(
            'class' => 'pager-current',
            /*'data' => '['.$i.']'.$pager_delim,*/
            'data' => $i,
          );
        }
        if ($i > $pager_current) {
          $items[] = array(
            'class' => 'pager-item',
            'data' => $pager_delim.theme('pager_next', $i, $limit, $element, ($i - $pager_current), $parameters),
          );
        }
      }
      if ($i < $pager_max) {
        $items[] = array(
          'class' => 'pager-ellipsis',
          'data' => 'of '.$pager_max,
        );
      }
    }
    // End generation.
    if ($li_next) {
      $items[] = array(
        'class' => 'pager-next',
        'data' => $li_next,
      );
    }
    if ($li_last) {
      $items[] = array(
        'class' => 'pager-last',
        'data' => $li_last,
      );
    }
    return theme('item_list', $items, NULL, 'ul', array('class' => 'pager'));
  }
}


/* Drupal: To Remove the "not verified" Text Author Names
http://coffeeshopped.com/2009/03/drupal-how-to-remove-the-not-verified-text-from-comment-author-names
 */

function BreeseeUK_username($object) { 
	return _breesee_get_display_name($object->uid);
}

function phptemplate_filter_tips_more_info() { return ''; } 

function BreeseeUK_hierarchical_select_selection_as_lineages($selection, $config) {
  $output = '';

  $selection = (!is_array($selection)) ? array($selection) : $selection;

  // Generate a dropbox out of the selection. This will automatically
  // calculate all lineages for us.
  $selection = array_keys($selection);
  $dropbox = _hierarchical_select_dropbox_generate($config, $selection);

  // Actual formatting.
  foreach ($dropbox->lineages as $id => $lineage) {
    if ($id > 0) {
      $output .= '<br />';
    }

    $items = array();
    foreach ($lineage as $level => $item) {
      $items[] = $item['label'];
    }
    $output .= implode('<span class="hierarchical-select-item-separator">&#62;</span>', $items);
  }

  // Add the CSS.
  drupal_add_css(drupal_get_path('module', 'hierarchical_select') .'/hierarchical_select.css');

  return $output;
}








function phptemplate_comment_wrapper($content, $node) {

  //$comments_per_page = _comment_get_display_setting('comments_per_page');
	 $comments_per_page = 2;
   $content = theme('pager', NULL, $comments_per_page, 0) . $content;  

 if (!$content || $node->type == 'forum') {
    return '<div id="comments">'. $content .'</div>';
  }
  else {
    return '<div id="comments">'. $content .'</div>';
  }
}
function phptemplate_user_edit($user, $form = array()) {
return _phptemplate_callback('user_edit', array('user' => $user, 'form' => $form));
  }

/*function BreeseeUK_preprocess_user_picture(&$variables) {
  if($variables['picture'] == '' )
		$picture = 	'/sites/default/files/imagecache/anonymous.png';
	else 
		$picture = variable_get('user_picture_default', '');
		
	$variables['picture'] = theme('image', $picture, $alt, $alt, '', FALSE);
}*/


function custom_url_rewrite_inbound(&$result, $path, $path_language) {

  	//$result = preg_replace("/(somethingfiddly)./", "", $in_path);
	
 //if ($src = drupal_lookup_path('source', 'nikhil', $path_language)) {
    // $result = 'https://www.google.co.in/';
  //}
	
	if (preg_match('|^node(/.*)|', $path, $matches)) {
    $result = 'https://www.google.co.in';
		drupal_set_message('here');
  }
}

?>