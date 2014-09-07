<?php 

function breesee_site_admin() {
	if (!module_exists('bresee_home')) {
    return t('You must enable the bresee_home module.');
  }
	$k = '';
	return $k;
}


function breesee_site_admin_mail_form(){
	
	$form['information'] = array(
		'#type' => 'item', 
		'#title' => t('Information'), 
		'#weight' => -45, 
		'#suffix' => '<div class="breesee_admin_info"> Available variables are: !username, !site, !password, !uri, !uri_brief,  !mailto, !date, !login_uri, !edit_uri, !login_url  </div>', 
	);
	$form['welcome_mailhe'] = array(
		'#type' => 'item', 
		'#weight' => -40, 
		'#suffix' => '<h2>Welcome Mail settings</h2>', 
	);
	
	$form['welcome_mail'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Welcome Mail'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
		'#weight' => -39, 
	);
	$form['welcome_mail']['user_welcome']['user_welcome_tit']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#weight' => -38, 
		'#default_value' => variable_get('user_welcome_tit','Welcome'),
	);
	$form['welcome_mail']['user_welcome']['user_welcome_bod']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#weight' => -37, 
		'#default_value' => variable_get('user_welcome_bod','Welcome'),
	);
	
	
	$form['groupone'] = array(
		'#type' => 'item', 
		'#weight' => -32, 
		'#suffix' => '<h2>Activation Mail settings</h2>', 
	);
	
	$form['audience'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Audience'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['audience']['aud_mail_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('aud_mail_sub',''),
	);
	$form['audience']['aud_mail_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('aud_mail_body',''),
	);
	$form['creator'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Creator'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['creator']['cre_mail_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('cre_mail_sub',''),
	);
	$form['creator']['cre_mail_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('cre_mail_body',''),
	);
	$form['store'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Store '), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['store']['stor_mail_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('stor_mail_sub',''),
	);
	$form['store']['stor_mail_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('stor_mail_body',''),
	);
	
	$form['grouptwo'] = array(
		'#type' => 'item', 
		'#suffix' => '<h2>Blocked Mail settings</h2>', 
	);
	
	$form['audienceblok'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Audience '), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['audienceblok']['aud_mail_block_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('aud_mail_block_sub',''),
	);
	$form['audienceblok']['aud_mail_block_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('aud_mail_block_body',''),
	);
	$form['creatorblok'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Creator '), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['creatorblok']['cre_mail_blok_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('cre_mail_blok_sub',''),
	);
	$form['creatorblok']['cre_mail_blok_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('cre_mail_blok_body',''),
	);
	$form['storeblok'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Store'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['storeblok']['stor_mail_blok_sub']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('stor_mail_blok_sub',''),
	);
	$form['storeblok']['stor_mail_blok_body']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('stor_mail_blok_body',''),
	);
	
	return system_settings_form($form);
}


function bresee_creator_requests() {
	$k = '';
	return $k;
}

function bresee_store_requests() {
	$k = '';
	return $k;
}


function bresee_colorpickers() {
	$form = array();
	
  $form['colorpickerfrm1'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 1'),
    '#default_value' => variable_get('colorpickerfrm1', '#DB0B09'),
  );
	$form['colorpickerfrm2'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 2'),
    '#default_value' => variable_get('colorpickerfrm2', '#F00B8C'),
  );
	$form['colorpickerfrm3'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 3'),
    '#default_value' => variable_get('colorpickerfrm3', '#F89CCD'),
  );
	$form['colorpickerfrm4'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 4'),
    '#default_value' => variable_get('colorpickerfrm4', '#FC6703'),
  );
	$form['colorpickerfrm5'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 5'),
    '#default_value' => variable_get('colorpickerfrm5', '#FA9800'),
  );
	$form['colorpickerfrm6'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 6'),
    '#default_value' => variable_get('colorpickerfrm6', '#FCC707'),
  );
	$form['colorpickerfrm7'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 7'),
    '#default_value' => variable_get('colorpickerfrm7', '#F8F009'),
  );
	$form['colorpickerfrm8'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 8'),
    '#default_value' => variable_get('colorpickerfrm8', '#FCFCA4'),
  );
	$form['colorpickerfrm9'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 9'),
    '#default_value' => variable_get('colorpickerfrm9', '#F6FECF'),
  );
	$form['colorpickerfrm10'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 10'),
    '#default_value' => variable_get('colorpickerfrm10', '#3F9169'),
  );
   $form['colorpickerfrm11'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 11'),
    '#default_value' => variable_get('colorpickerfrm11', '#94CC00'),
  );
	$form['colorpickerfrm12'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 12'),
    '#default_value' => variable_get('colorpickerfrm12', '#C9FFCB'),
  );
	$form['colorpickerfrm13'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 13'),
    '#default_value' => variable_get('colorpickerfrm13', '#04A8E7'),
  ); 
	$form['colorpickerfrm14'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 14'),
    '#default_value' => variable_get('colorpickerfrm14', '#92CFFE'),
  );$form['colorpickerfrm15'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 15'),
    '#default_value' => variable_get('colorpickerfrm15', '#CCFEFD'),
  );
	$form['colorpickerfrm16'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 16'),
    '#default_value' => variable_get('colorpickerfrm16', '#3668FD'),
  );
	$form['colorpickerfrm17'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 17'),
    '#default_value' => variable_get('colorpickerfrm17', '#0104CF'),
  );
	$form['colorpickerfrm18'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 18'),
    '#default_value' => variable_get('colorpickerfrm18', '#01028E'),
  );
	$form['colorpickerfrm19'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 19'),
    '#default_value' => variable_get('colorpickerfrm19', '#CB9BFE'),
  );
	$form['colorpickerfrm20'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 20'),
    '#default_value' => variable_get('colorpickerfrm20', '#4502A7'),
  );
   $form['colorpickerfrm21'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 21'),
    '#default_value' => variable_get('colorpickerfrm21', '#343496'),
  );
	$form['colorpickerfrm22'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 22'),
    '#default_value' => variable_get('colorpickerfrm22', '#FFFFFF'),
  );
	$form['colorpickerfrm23'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 23'),
    '#default_value' => variable_get('colorpickerfrm23', '#C0C0C0'),
  );
	$form['colorpickerfrm24'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 24'),
    '#default_value' => variable_get('colorpickerfrm24', '#979797'),
  );
	$form['colorpickerfrm25'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 25'),
    '#default_value' => variable_get('colorpickerfrm25', '#333333'),
  );
	$form['colorpickerfrm26'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 26'),
    '#default_value' => variable_get('colorpickerfrm26', '#646464'),
  );
	$form['colorpickerfrm27'] = array(
    '#type' => 'colorpicker_textfield',
    '#title' => t('Color 27'),
    '#default_value' => variable_get('colorpickerfrm27', '#848283'),
  );
	return system_settings_form($form);
}


/*function bresee_bannersmallimg() {
	$form = array();
	for($i=1; $i<=5; $i++) {
	$form['img'.$i] = array(
    '#type' => 'file',
    '#title' => t('Image '.$i),
    '#default_value' => variable_get('img'.$i, 'http://192.168.1.3/2011/breesee/2.png'),
  );
	}
	return system_settings_form($form);
}*/

function bresee_acc_act_mail(){
	$form['activation'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Accepted'), 
		'#collapsible' => TRUE, 
		'#collapsed' => FALSE,
	);	
	$form['activation']['creator'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Creator'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['activation']['creator']['cre_user_accepted_tit']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('cre_user_accepted_tit',''),
	);
	$form['activation']['creator']['cre_user_accepted_bod']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('cre_user_accepted_bod',''),
	);
	$form['activation']['store'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Store'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['activation']['store']['str_user_accepted_tit']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('str_user_accepted_tit',''),
	);
	$form['activation']['store']['str_user_accepted_bod']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('str_user_accepted_bod',''),
	);
	
	
	$form['rejection'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Rejected'), 
		'#collapsible' => TRUE, 
		'#collapsed' => FALSE,
	);	
	$form['rejection']['creator'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Creator'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['rejection']['creator']['cre_user_rej_tit']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('cre_user_rej_tit',''),
	);
	$form['rejection']['creator']['cre_user_rej_bod']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('cre_user_rej_bod',''),
	);
	$form['rejection']['store'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Store'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['rejection']['store']['str_user_rej_tit']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('str_user_rej_tit',''),
	);
	$form['rejection']['store']['str_user_rej_bod']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('str_user_rej_bod',''),
	);
	$form[$module]['token_help'] = array(
      '#title' => t('Replacement patterns'),
      '#type' => 'fieldset',
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#description' => t('Use -raw replacements for text to avoid problems with HTML entities.'),
    );
  $doc = theme('token_tree', array('user'), FALSE);
    if (empty($doc)) {
      $doc = "<dl>\n";
      foreach ($settings->placeholders as $name => $description) {
        $doc .= '<dt>'. $name .'</dt>';
        $doc .= '<dd>'. $description .'</dd>';
      }
      $doc .= "</dl>\n";
    }
   $form[$module]['token_help']['help'] = array(
      '#type' => 'markup',
      '#value' => $doc,
    );

	
	return system_settings_form($form);
}

function bresee_fix_files() {

	$dir = 'sites/default/files';
	$nomask = array('.', '..');
  if (is_dir($dir)) {
     // Try to make each directory world writable.
     @chmod($dir, 0777);
  }
  if (is_dir($dir) && $handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
      if (!in_array($file, $nomask) && $file[0] != '.') {
        if (is_dir("$dir/$file")) {
          // Recurse into subdirectories
          file_fix_directory("$dir/$file", $nomask);
        }
        else {
          $filename = "$dir/$file";
            // Try to make each file world writable.
            @chmod($filename, 0666);
        }
      }
    }

    closedir($handle);
  }

	drupal_set_message('File permissions changed');
	drupal_goto('admin');
}


function file_fix_directory($dir, $nomask = array('.', '..')) {
  if (is_dir($dir)) {
     // Try to make each directory world writable.
    @chmod($dir, 0777);
  }
  if (is_dir($dir) && $handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
      if (!in_array($file, $nomask) && $file[0] != '.') {
        if (is_dir("$dir/$file")) {
          // Recurse into subdirectories
          file_fix_directory("$dir/$file", $nomask);
        }
        else {
          $filename = "$dir/$file";
            // Try to make each file world writable.
            @chmod($filename, 0666);
        }
      }
    }

    closedir($handle);
  }
	return;
}


function breesee_site_order_color() {
	global $user;
	$nid = arg(3);
	if(!isset($_SESSION['color'])) {
		$_SESSION['color'] = array();
		$_SESSION['color'][$nid] = arg(2);
	}
	else 
		$_SESSION['color'][$nid] = arg(2);
	
	if(isset($_SESSION['color'])) 
		print 'success';
	else
		print 'fail';

	
}

function breesee_site_order_status() {

	$order = uc_order_load(arg(2));
	$order->order_status = 'feedback';
	uc_order_save($order); 
	_breesee_uc_init_pm($order->order_id, 'received');
		print 'success';
}

function breesee_site_sold_order_status() {
	global $user;
	$uid = $user->uid;
	$psql = "SELECT uc_order_products.order_id as order_id FROM  uc_order_products INNER JOIN node ON node.nid = uc_order_products.nid AND node.uid = '$uid' AND node.type = 'product' ORDER BY order_id DESC";
	$query_count = "SELECT COUNT(*) FROM (" . $psql . ") AS count_query";
	$result = pager_query($psql,15,0,$query_count);
	while($rowone = db_fetch_array($result))	{
		$orders[] = uc_order_load($rowone['order_id']);
	}
	$data['orders']  = $orders;
	$pager =  array('#value' => theme('pager', NULL, 15, 0));
	$data['pager'] =  $pager;
	return theme('soldordertpl',$data);
}


function bresee_creation_age_set() {
	
	$vid = 29;
//		$terms = taxonomy_get_children(29); 			// 29 vid 
//		 if(!empty($terms)){
//		   foreach($terms as $key => $val){
//			   $term_tid[] = $key;
//			 }
//		 }
	
	 
	db_query("DELETE FROM {term_node} WHERE tid IN ('7217', '7215', '7214', '7216') ");
	 
	$curDate		=	strtotime(date("Y-m-d"));
	
	$alltime_tid = 7217;
	
	$last3months = strtotime('-3 months');
	$last3months_tid = 7215;
	
	$lastmonth = strtotime('-1 months');
	$lastmonth_tid = 7214;
	
	$lastyr = strtotime('-1 years');
	$lastyr_tid = 7216;
	
	$sevndays = strtotime('-7 days');
	$sevndays_tid = 7341;
	
	/// fn applytid declared in breesee_helper.module
	
	$query		=	"SELECT created, nid FROM `node` WHERE type IN ('creations') ";
	$qry  = db_query($query);							 
	while($rows = db_fetch_object($qry)){
		$created = $rows->created;
		$nid = $rows->nid;
		
			$tid = 7217;
			applytid($nid, $tid);
			
			if($created > $last3months) {
				applytid($nid, $last3months_tid);
			}
			if($created > $lastmonth) {
				applytid($nid, $lastmonth_tid);
			}
			if($created > $lastyr) {
				applytid($nid, $lastyr_tid);
			}
			if($created > $sevndays) {
				applytid($nid, $sevndays_tid);
			}
		
	}
	drupal_set_message("Age caclulation Cron Success");
	drupal_goto('admin');

}


function bresee_ordermails() {
	
	$form['neworder'] = array(
		'#type' => 'fieldset', 
		'#title' => t('New Order Arrived'), 
		'#collapsible' => TRUE, 
		'#collapsed' => FALSE,
	);	
	$form['neworder']['arrivedhead']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('arrivedhead',''),
	);
	$form['neworder']['arrivedbody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('arrivedbody',''),
	);
	
	$form['ordershipped'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Order Shipped'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['ordershipped']['ordershippedhead']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('ordershippedhead',''),
	);
	$form['ordershipped']['ordershippedbody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('ordershippedbody',''),
	);
	
	$form['orderreceived'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Order Received'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['orderreceived']['orderreceivedhead']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('orderreceivedhead',''),
	);
	$form['orderreceived']['orderreceivedbody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('orderreceivedbody',''),
	);
	
	
	$form['ordernotreceived'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Order Hasn\'t Received'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['ordernotreceived']['ordernotreceivedhead']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('ordernotreceivedhead',''),
	);
	$form['ordernotreceived']['ordernotreceivedbody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('ordernotreceivedbody',''),
	);
	
	$form['awaitingfeedback'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Awaiting feedback'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['awaitingfeedback']['awaitingfeedbackhd']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('awaitingfeedbackhd',''),
	);
	$form['awaitingfeedback']['awaitingfeedbackdbody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('awaitingfeedbackdbody',''),
	);
	
	$form['ordercomplete'] = array(
		'#type' => 'fieldset', 
		'#title' => t('Order Complete'), 
		'#collapsible' => TRUE, 
		'#collapsed' => TRUE,
	);	
	$form['ordercomplete']['ordercompletebackhd']=array(
		'#type' => 'textfield',
		'#title' => t('Subject'),
		'#default_value' => variable_get('ordercompletebackhd',''),
	);
	$form['ordercomplete']['ordercompletebody']=array(
		'#type' => 'textarea',
		'#title' => t('Body'),
		'#default_value' => variable_get('ordercompletebody',''),
	);
	
	$form['desc_info'] = array(
		'#type' => 'item', 
		'#title' => t('Replaceble tokens'), 
		'#value' => '!seller - Seller , !buyer - Buyer , !breeseeadmin Breesee, !product - Product',
	
	);	


	return system_settings_form($form);
}


function breesee_order_filters () {
	$filter = arg(2);
	global $user;
	switch($filter) {
		case 'date':
			$month_no = arg(3);
			$yer = arg(4);
			$datej = $yer."-".$month_no."-01 23:58:00";
			$datek = $yer."-".$month_no."-31 23:58:00";
			$stamp = strtotime($datej);
			$stampp = strtotime($datek);
			$query = "SELECT order_id from uc_orders WHERE uid = ". $user->uid ." AND created BETWEEN " .$stamp. " AND " .$stampp ;
			$query_result = db_query($query);
			while($row = db_fetch_object($query_result))			{
				$oids[] = uc_order_load($row->order_id);
			}
			break;
		case 'status':
			switch(arg(3)) {
				case 'pending':
					$query = "SELECT order_id, order_status from uc_orders WHERE uid = ".$user->uid ." AND order_status IN ('pending', 'paypal_pending') ";
					break;
				case 'feedback':
					$query = "SELECT order_id, order_status from uc_orders WHERE uid = ".$user->uid ." AND order_status IN ('feedback', 'feedbackseller', 'feedbackbuyer') ";
					break;
				case 'unranked':
					$query = "SELECT order_id, order_status from uc_orders WHERE uid = ".$user->uid ." AND order_status <> 'completed' ";
					break;
			}
			$query_result = db_query($query);
			while($row = db_fetch_object($query_result))			{
				$order_status = $row->order_status;
				if($order_status  == $stats );
						$oids[] = uc_order_load($row->order_id);
			}
			break;
	}
	foreach($oids as $key=>$val) { 	
	$imgd =  _breeee_load_product_img($val->products[0]->nid); 
	$seller_info = _breeee_load_sellerinfo($val->products[0]->nid); 
	$order_status = $val->order_status;
	if($order_status == 'processing')
		$order_status = "Shipped";
	else if($order_status == 'pending')
		$order_status = "Awaiting Shipment";
	else if($order_status == 'feedbackseller')
		$order_status = "Feedback";	
	else if($order_status == 'feedback')
		$order_status = "Feedback";	
		
	print '<div class="clear"></div>
				<ul class="'.$val->order_status.' tablerow contts_disply2" id="'.$val->order_id.'">
             <li class="content_disiplay1">'.theme('imagecache', 'order_history', $imgd).'</li>
             <li class="content_disiplay2">'.$val->products[0]->title.'<h4>Invoice</h4></li>
             <li class="content_disiplay3">'.$val->products[0]->qty.'</li>
             <li class="content_disiplay4">
									<h4>'.$val->order_total .'+'. $val->quote['rate'].' USD</h4>
									<p>'.$val->line_items[0]['amount'].' USD + '. round($val->quote['rate'], 2).' USD'.'></p>
             </li>
             <li class="content_disiplay5">
                  <h4>'.date("M d Y", $val->created).'</h4>
              </li>
              <li class="content_disiplay6">
                  <h5>'.ucfirst($order_status).'</h5>
              </li>
              <li class="content_disiplay7">'. $seller_info.' </li>
					</ul>
          <div id="'.$val->order_id.' div" style="display:none;" class="order_details"></div>
          <div class="clear"></div>';
	
	}
	
}


function bresee_sale_report(){
	drupal_add_js(drupal_get_path('module', 'breesee') . '/js/admin_pages.js');
	if(arg(3) == 'all') 
		$sql = "SELECT SUM(amount) as amount, uid, oder_id FROM breesee_payment_history GROUP BY uid";
	else 
		$sql = "SELECT SUM(amount) as amount, uid, oder_id FROM breesee_payment_history WHERE status = 0 GROUP BY uid";
		
	$query_count = "SELECT COUNT(*) FROM (" . $sql . ") AS count_query";
	$result = pager_query($sql,15,0,$query_count);
	$data = array();
	$i = $sum = 0;
	while($row = db_fetch_object($result))	{
		$data['results'][$i]['user'] = $row->uid;
		$data['results'][$i]['amount'] = $row->amount;
		$data['results'][$i]['oder_id'] = $row->oder_id;
		$sum += $data['results'][$i]['amount'];
		$i++;
	} 
	$data['pager'] = array('#value' => theme('pager', NULL, 15, 0));
	$data['total'] = $sum;
	return $output = theme('bresee_sale_report_tbl',$data); 
}


function bresee_makepayment_confirm() {
	$uid = arg(3);
	db_query("UPDATE breesee_payment_history set status = 1 WHERE uid = '$uid' ");
	print 'success';
}

?>