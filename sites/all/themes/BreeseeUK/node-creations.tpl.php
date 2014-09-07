<?php
//global $base_url;
//if( arg(1) == 'add' || (arg(2) == 'edit')) { ?>
<!--<style type="text/css">-->
<!--<!---->
<!--.style1, .form-required {color: #FF0000 !important;}-->
<!---->-->
<!--</style>-->
<!---->
<!--<div class="login_shelf creations_add_form from_class">-->
<!--    <div class="button_login button_loginactive">-->
<!--        <a href="#" class="current">New Creation</a>-->
<!--      </div>-->
<!--      <div class="clear"></div>-->
<?php //
///*print_r($form);
//die();*/
//unset($form['title']['#title']);
//unset($form['taxonomy'][23]['#title']);
//unset($form['body_field']['body']['#title']);
//unset($form['field_upload'][0]['#title']);
//$form['buttons']['submit']['#value'] = 'Save Changes';
//?>
<!--<div><span>Creation Title <span class="style1">*</span> </span> <span> --><?php //echo drupal_render($form['title']); ?><!--</span></div>-->
<!--<div><span>Creation Category <span class="style1">*</span></span> <span> --><?php //print drupal_render($form['taxonomy'][23]); ?><!--</span></div>-->
<!--<div id="creation_img_upload"><span> --><?php //print drupal_render($form['field_upload']); ?><!--</span></div>-->
<!--<div><span>Description</span>-->
<!--<div> --><?php //echo drupal_render($form['body_field']); ?><!--</div>-->
<!--</div>-->
<!--<div> --><?php //echo drupal_render($form['buttons']['submit']); ?><!-- <span> -->
<!--<input type="button" onclick="javascript:parent.location='--><?php //echo $base_url.'/user/mycreations'; ?><!--'" value="Cancel" />-->
<!--<div style="display:none;"> --><?php //echo drupal_render($form); ?><!--</div>-->
<!--</div>-->
<?php //} else {
//
////print_r($node);
////die;
//$attributes = array('id' => 'creation_big_img');
//drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/jquery.mCustomScrollbar.js');
//drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/shadowbox.js');
//
//?>
<!--<div class="creation_detail_page">-->
<!--<h1>--><?php //echo $node->title; ?><!--</h1>-->
<!--<div class="cre_cover_div">-->
<!--<div class="c_main_img">--><?php //print theme('imagecache', 'maximage', $node->field_upload[0]['filepath'], $alt, $title, $attributes);  ?><!--</div>-->
<!--<div id="mcs_container" class="more_imgs">-->
<!--<div class="customScrollBox">-->
<!--<div class="container">-->
<!--<div class="content">-->
<!--<ul class="more_imgs_ul">-->
<?php //foreach($node->field_upload as $key=>$val) {
//$imgurl = imagecache_create_path('maximage',$val['filepath']);
//$attris = array('rel' => 'shadowbox '.$base_url.'/'.$imgurl);
//?>
<!--	<li>--><?php //print theme('imagecache', 'creator_other_product', $val['filepath'], $alt, $title, $attris);  ?><!--</li>-->
<?php //} ?>
<!---->
<!---->
<!--</ul></div>-->
<!--</div>-->
<!--<div class="dragger_container">-->
<!--<div class="dragger"></div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!--<div class="clear"></div>-->
<!--<strong></strong>-->
<!--<script type="text/javascript">-->
<!--$(document).ready(function(){ -->
<!--Shadowbox.init();-->
<!--	  $('.more_imgs_ul li img').click(function(e) {-->
<!--			e.preventDefault();-->
<!--			$('.more_imgs_ul li img').removeClass('highlighted');-->
<!--			$(this).addClass('highlighted');-->
<!--			var newimgsrc = $(this).attr('rel');-->
<!--			$('#creation_big_img').attr("src",newimgsrc);-->
<!--		});-->
<!--});  -->
<!--$(window).load(function() {-->
<!--    $("#mcs_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);-->
<!--});-->
<!---->
<!--</script>-->
<!---->
<!--<div>--><?php //echo $node->content['body']['#value']; ?><!--</div>-->
<?php //} ?>
<?php ////print_r($node);?>
<!--</div>-->
<!--</div>-->


<div class="product_page product_add">
<?php
global $theme_path, $base_url, $user;
$theme_path_full = $base_url.'/'.$theme_path;
if(arg(1) == 'add' || arg(2) == 'edit')
{
drupal_add_js(drupal_get_path('theme', 'BreeseeUK') . '/js/add_product.js');

//$custom_price = get_custom_price_settings(arg(1));

//print_r($form['multiship']);

//$hdfghdfh = $form['base']['prices']['sell_price']['#value'] - $custom_price[2]['price'];
//$hdfghdfh = $form['base']['prices']['sell_price']['#value'];
//$form['multiship']['def_cost']['#value'] = $custom_price[2]['price'];

?>

<script type="text/javascript">
    var editid = '<?php echo arg(3); ?>';
</script>

<div class="product_add">

<div class="add_steps" id="stepone">
    <div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
        <div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
            <a href="#" class="current"><?php echo t('Add New Item'); ?></a>                    </div><!-----[city-login-info-menu-tab-closed-here]---->
<!--        item info       -->
        <div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
            <ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                <li class="active_breesee_info"><a href="#"><?php echo t('1. Item Info'); ?></a></li>
                <li class="normal_breesee_info"><a href="#"><?php echo t('2. Review & Post'); ?></a></li>


            </ul><!-----[city-login-info-status-manu-closed-here]---->
        </div><!-----[city-login-info-1st-block-closed-here]---->
        <div class="clear"></div>
        <div class="breesee_login_info_blocks5">
            <div class="item_info_box">
                <div class="item_info_main_box"></div>
                <div class="item_info_text_box">
<!--                    product Name    -->
                    <h1 class="add_new_product_name"><?php echo t('Your Creation Name'); ?></h1>
                    <p class="product_name_sub"><?php echo t('A short, descriptive title works best.'); ?></p>
                    <?php
                    $form['title']['#title']= '';
                    print drupal_render($form['title']);  ?>
<!--                    <h1 class="add_new_url_priview">--><?php //echo t('URL Preview'); ?><!--</h1>-->
<!--                    <p class="view_preview_sub">--><?php //echo t('See how your listing title appears in the URL:'); ?><!--</p>-->
<!--                    <div class="link_color">-->
<!--                        <span>--><?php //echo $base_url; ?><!--/product/</span><span id="srurl"></span>-->
<!--                    </div>-->

<!--                    <h1 class="add_new_style">Style</h1>-->
<!--                    <p class="style_sub">-->
<!--                        --><?php //echo t('Let  readers know the idea behind this work. Did you invite it,
//                            use traditional way or bring new tech to the traditional work?'); ?><br />
<!--                        --><?php //echo t('Please choose the right option from below drop-down menu. '); ?><!--                       </p>-->
<!--                    --><?php
//                    $form['taxonomy'][14]['#title'] = '';
//                    print drupal_render($form['taxonomy'][14]);
//                    ?>


<!--                    upload your product image-->
                    <h1>Upload Your  Product Image</h1>
                    <div class="upload_your_images_here">
                        <div class="slider_strip_top">
                            <?php print drupal_render($form['field_upload']); ?>
                        </div>
                        <div class="slider_strip_bottom">
                            <h1>Find Your Images</h1>
                            <p><?php echo t('Use .jpg, .gif or .png files no larger than 1MB.<br />Images  width over 1,000 pixels can be englarge'); ?></p>
                        </div>
                    </div>



                   <div>
                    <h1 class="product_discription product_story"><?php echo t('Creation Description'); ?></h1>
                    <p class="product_discription_sub">
                        <?php echo t('Start with the most important information and provide enough detail
                            for shoppers to feel comfortable buying.    '); ?>                    </p>
                    <?php
                    #$form['body_field']['body']['#title'] = '';
                    print drupal_render($form['body_field']);?>
                   </div>
<!--                </div>-->
<!--                <div class="dott_line"></div>-->
<!--                <div class="product_story">Product Story</div>-->
<!--                <div class="product_story_box">-->
<!--                    <p>-->
<!--                        --><?php //echo t('Tell your audience the story how you create this product from your concept
//                            to a product. '); ?><!--                       </p>-->
<!--                    --><?php
//                    $form['field_product_story']['#title'] = '';
//                    print drupal_render($form['field_product_story']);?>
<!--                </div>-->

                <div class="product_details_original">
                    <div class="left_original">
                        <h1><?php echo t('Completed Your Item Icon Intro'); ?></h1>
                        <div class="original_product_show">

                            <?php if ((arg(2) == 'edit' ) && (count($form['field_upload'] > 0)) ) {
                                $attributes = array('id' => 'img_prev' );

                                print theme('imagecache', 'creations_list', $form['field_upload'][0]['#default_value']['filepath'], $alt, $title, $attributes);  ?>

                            <?php } else { ?>
                                <img id="img_prev" src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/image_01.gif">
                            <?php }

                            $node = node_load(arg(1));
                            ?>
                            <div class="place_name_red"><?php echo t('Sanfransisco'); ?></div>
                            <h2 id="prod_sampl"><?php echo substr($node->title, 0, 20 ); ?></h2>
                            <?php
                            print drupal_render($form['field_surcr']); ?>
                        </div>
                    </div>
                    <div class="right_original">
                        <h2>Find Your Images</h2>
                        <p>Use .jpg, .gif or .png files no larger than 500K.<br />Suggesting Images  size is  240px(W) X 180 px(H)</p>
                        <div class="blank_spacing_div"></div>
                        <h2>Tell Buyer the Creator&rsquo;s Name if You Like</h2>
                        <p>We recommand you add creator&rsquo;s name if you bought this one from <br />breesee creators. This will help breesee protects creator&rsquo;s <br />intellectual property.</p>
                        <?php
                        $form['field_buyer']['#title']= '';
                        print drupal_render($form['field_buyer']); ?>
                    </div>
                </div>




                <div class="Materials"> Materials</div>
                <div class="materials_box">
                    <p><?php echo t('List the materials used in your item, separating each with a comma.'); ?></p>
                    <?php
                    $form['field_creationmaterials']['#title']='';
                    print drupal_render($form['field_creationmaterials']);?>
                </div>

                <div class="color"><?php echo t('Color'); ?></div>
                <div class="color_box">
                    <p><?php echo t('You can choose color for your item'); ?></p>
                    <div class="colorpicker_main_box">
                        <div class="colorbox_left">
                            <ul class="top_name_col_pic">
                                <li><p>Red</p></li>
                                <li><p>Orange</p></li>
                                <li><p>Yellow</p></li>
                                <li><p>Green</p></li>
                                <li><p>Azure</p></li>
                                <li><p>Blue</p></li>
                                <li><p>Purple</p></li>
                                <li><p>White</p></li>
                                <li><p>Black</p></li>
                            </ul>
                            <ul id="colorpalette">
                                <li class="bg_red" id="DA0B09">&nbsp;</li>
                                <li class="bg_orange " id="FB6603">&nbsp;</li>
                                <li class="bg_yellow" id="F8EF08">&nbsp;</li>
                                <li class="bg_d_green" id="349765">&nbsp;</li>
                                <li class="bg_skyblue" id="03A9E7">&nbsp;</li>
                                <li class="bg_blue" id="3667FC">&nbsp;</li>
                                <li class="bg_purple" id="CB9AFD">&nbsp;</li>
                                <li class="bg_white" id="FFFFFF">&nbsp;</li>
                                <li class="bg_black" id="000000">&nbsp;</li>
                                <li class="bg_rose" id="EF0B83">&nbsp;</li>
                                <li class="bg_light_orange" id="FB9703">&nbsp;</li>
                                <li class="bg_light_yellow" id="FDFD9A">&nbsp;</li>
                                <li class="bg_light_green" id="97C903">&nbsp;</li>
                                <li class="bg_light_blue" id="9ACBFD">&nbsp;</li>
                                <li class="bg_dark_blue" id="0303D1">&nbsp;</li>
                                <li class="bg_dark_purple" id="0303D1">&nbsp;</li>
                                <li class="bg_light_gray" id="C0C0C0">&nbsp;</li>
                                <li class="bg_drak_gray" id="636363">&nbsp;</li>
                                <li class="bg_light_red" id="FD9ACB">&nbsp;</li>
                                <li class="bg_light_orange_2" id="FBC903">&nbsp;</li>
                                <li class="bg_light_yello_2" id="F5FDCC">&nbsp;</li>
                                <li class="bg_light_green_2" id="CCFECC">&nbsp;</li>
                                <li class="bg_light_blue_2" id="CCFEFE">&nbsp;</li>
                                <li class="bg_dark_blue_2" id="02028E">&nbsp;</li>
                                <li class="bg_dark_purple_2" id="343497">&nbsp;</li>
                                <li class="bg_dark_white_2" id="969696">&nbsp;</li>
                                <li class="bg_dark_balck_2" id="848282">&nbsp;</li>
                            </ul>
                        </div>
                        <div class="colorbox_right">
                            <h1><?php echo t('Your chosen color'); ?></h1>
                            <?php
                            if(arg(1) == 'add')	 {
                                ?>
                                <ul id="pal_selected">
                                    <li class="selected_clrs empty" id="1">&nbsp;</li>
                                    <span id="add_remove" >&nbsp;</span>
                                </ul>
                            <?php }
                            else if(arg(2) == 'edit')	{
                                //print_r($form['taxonomy']['tags']);
                                $tax_array = $form['taxonomy']['tags'][30]['#value'];
                                $comma_separated = explode(",", $tax_array);
                                //var_dump($comma_separated);

                                ?>
                                <ul id="pal_selected">
                                    <li class="selected_clrs" id="1" rel="<?php echo $comma_separated[0]; ?>" style="background:<?php echo $comma_separated[0]; ?>">&nbsp;</li>
                                </ul>
                            <?php } ?>
                            <p><?php echo t('This color will be appear
                            when custumer looks at
                            your item.'); ?></p>
                            <div id="pod_clrerr" style="display:none;">Please select color</div>
                        </div>
                    </div>
                    <div class="colorpicker_main_box">
                        <div class="color_left_box"></div>
                        <div class="color_right_box"></div>
                    </div>
                </div>

<div class="categories_tag">
    <h1>Categories and Tags</h1>
<!--    <p>--><?php //echo t('Preesee is a marketplace for creative people and theri product only.'); ?><!--</p>-->
<!--    <div class="star_p">-->
<!--        <p>--><?php //echo t('* Handmade: Items made by you. Choose the Category that best suits your item.'); ?><!--</p>-->
<!--        <p>--><?php //echo t('* Vintage: Items at least 20 years old. May be commercially made. Choose Vintage.'); ?><!--</p>-->
<!--        <p>--><?php //echo t('* Supplies: Crafting supplies. May be commercially made. Choose Supplies.'); ?><!--</p>-->
<!--    </div>-->
    <div class="need_help2">
        <p><?php echo t('Need help? See our Tagging Tips and Rules for Tagging.'); ?></p>
    </div>
<!--    <h1>Categories and Tags</h1>-->
    <div class="step_one_tag">
        <p><b>Step 1:</b><?php echo t('Choose a top-level Category.'); ?></p>
    </div>
    <div class="star_p2">
        <p>
            <?php
            $form['taxonomy'][23]['#title'] = '';
            print drupal_render($form['taxonomy'][23]);
            //     Categories and Tags                     echo drupal_render($form['taxonomy'][17]['hierarchical_select']['selects'][0]);
            ?>
        </p>
    </div>
    <div class="star_p2">
<!--        <p>-->
<!--            <b>2.</b><span class="add_subcateory">Add a subcategory or tag</span>-->
<!--            --><?php
//            $form['taxonomy']['tags'][17]['#title'] = '';
//            print drupal_render($form['taxonomy']['tags'][31]);
//            ?>
<!--        </p>-->
    </div>
    <div class="need_help"><?php echo t('Need help? Check out image uploading help topics and advanced image help.'); ?></div>
</div>
<!--<div class="cover_back_to_top">-->
<!--    <div class="next_previous">-->
<!--        <a href="javascript:void(0);" onclick="javascript:step_prevoius(1);"><img src="--><?php //print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?><!--/images/city_store_login_sellnow02a/previousd_tag.jpg" border="0" /></a>-->
<!--        <a href="javascript:void(0);" onclick="javascript:stepnext(2);"><img src="--><?php //print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?><!--/images/city_store_login_sellnow02a/next_tag.jpg" border="0" /></a>                            </div>-->
<!--</div>-->

                <div class="dott_line"></div>
                <div class="creator_creation">
                    <?php echo t('Creator and creation information of this item '); ?>
                </div>
                <div class="creator_creation_box">
                    <p><?php echo t('It is a good idea to let customer know the creator&rsquo;s name.'); ?></p>
                    <div class="Creator_Name_main_box">
                        <div class="creator_tab_box_1">
                            <h1>1</h1>
                            <div class="bottom_list_item">List Item&rsquo;s Creator&rsquo;s Name</div>
                        </div>
                        <div class="creator_tab_box_2">
                            <img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/list_item_creator_logo.png" />

                        </div>
                        <div class="creator_tab_box_3">
                            <h1>2</h1>
                            <p>Creation link</p>
                        </div>
                    </div>
                    <div class="creator_search_main_box">
                        <div class="creator_search_left">
                            <ul>
                                <li class="creator_search_leftbox">
                                    <?php print drupal_render($form['field_buyers']); ?>                                  </li>
                                <h5 class="creator_creation_sub">Or input the creator&rsquo;s name directly</h5>
<!--                                <div class="creater_search_input_main">-->
<!--                                    --><?php //print drupal_render($form['base']['field_buyer']);?><!--                                  </div>-->
                            </ul>
                        </div>
                        <div class="creator_search_right">

                            <div class="brows_cover">
                                <?php
                                $form['field_findimage']['#title']= '';
                                print drupal_render($form['field_findimage']);?>
                            </div>
                            <div class="invite_creator_cover">
                                <ul>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/fb.png" border="0" /></a>                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/twtr.png" border="0" />                                        </a>                                    </li>
                                    <li>
                                        <a href="#"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_loginSellnow01Creator_page/mail.png" border="0" />                                        </a>                                    </li>
                                </ul>
                            </div>
                            <h6>
                                <?php echo t('Invite the creator to be a member if they don�t have '); ?><br /> <?php echo t('account yet'); ?>.                            </h6>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="next_previous"><a href="javascript:void(0);" onclick="javascript:stepnext(2)"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/next_tag.jpg" border="0" /></a>                            </div>
<!--                --><?php
//                //$form['buttons']['submit']['#attributes']=array('class' => 'reg_submit_button', 'onClick' => 'return stepnext(3)');
//                $form['buttons']['submit']['#attributes']=array('class' => 'reg_submit_button', 'onClick' => 'javascript:stepnext(3);');
//                $form['buttons']['submit']['#value'] = '';
//                print drupal_render($form['buttons']['submit']);
//                ?>
            </div>
        </div>
    </div>
    <!-----[city-login-info-cover-div-closed-here]---->
</div>

<div class="add_steps" id="steptwo"><!-----[middle-container-starts-here]---->
    <div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
        <div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
            <a href="#" class="current" ><?php echo t('Add New Item'); ?></a>                    </div><!-----[city-login-info-menu-tab-closed-here]---->
        <div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
            <ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                <li class="completed_breesee_info completed_breesee_info_add_class"><a href="#">1.  Item Info</a></li>

                <li class="normal_breesee_info"><a href="#">2. Review & Post</a></li>
            </ul><!-----[city-login-info-status-manu-closed-here]---->
        </div><!-----[city-login-info-1st-block-closed-here]---->
        <div class="clear"></div>
        <div class="breesee_login_info_blocks">



        </div>
    </div>
    <!-----[city-login-info-cover-div-closed-here]---->
</div>

<div class="add_steps" id="stepthree">
    <div class="sell_now_right_container"><!-----[city-login-info-cover-div-starts-here]---->
        <div class="button_login"><!-----[city-login-info-menu-tab-starts-here]---->
            <a href="#" class="current" ><?php echo t('Add New Item'); ?></a>                    </div><!-----[city-login-info-menu-tab-closed-here]---->
        <div class="items_onyour"><!-----[city-login-info-1st-block-starts-here]---->
            <ul class="breesee_item_info"><!-----[city-login-info-status-manu-starts-here]---->
                <li class="completed_breesee_info2"><a href="#">1. Item Info</a></li>
                <li class="completed_breesee_info"><a href="#">2. images & Sort your item </a></li>
                <li class="active_breesee_info"><a href="#">3. Selling Info</a></li>
                <li class="normal_breesee_info"><a href="#">4. Review & Post</a></li>
            </ul><!-----[city-login-info-status-manu-closed-here]---->
        </div><!-----[city-login-info-1st-block-closed-here]---->
        <div class="clear"></div>
        <div class="breesee_login_info_blocks">
            <div class="upload_your_images_here3 top_padding_upload">
                <div class="price_strip1">
                    <div class="left_price">Price:</div>
                    <div class="left_price2">
                        <input type="hidden" id="sellprice_erer" value="<?php echo $hdfghdfh; ?>" />
                        <?php
                        print drupal_render($form['base']['prices']['sell_price']);

                        //Print_r($form);
                        $form['taxonomy'][19]['#title']='';
                        print drupal_render($form['taxonomy'][19]);
                        ?>
                    </div>
                    <div class="left_price3">USD (each )

                        <!-- <a href="#">< ?php echo t('Manager Shop Currency'); ?></a>-->

                    </div>
                </div>
                <div class="clear"></div>
                <div class="price_strip2">
                    <div class="left_price">Quantity:</div>
                    <div class="left_price2">
                        <?php
                        print drupal_render($form['field_quantity']);
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <h1>Product Shipping</h1>
            <div class="your_account_preference" id="shiping_div">
                <div class="permentat_div">
                    <div id="own_ship"><label class="def_shiploc"><strong>Ship To:</strong><span class="form-required" title="This field is required.">*</span></label><span id="def_country"><?php echo $form['multiship']['def_shipto']['#value']; ?></span></div>
                    <?php
                    //print_r($form['multiship']);
                    $mm = count($custom_price);
                    //$form['multiship']['def_cost']['#value'] = $custom_price[$mm -1]['price'];

                    echo drupal_render($form['multiship']['def_cost']); ?>
                </div>
                <?php if ($_POST && (arg(2) != 'edit')) {
                    //print_r($_POST);
                    foreach($_POST['cntry'] as $keyy => $vall) {
                        $countries = uc_country_select(uc_get_field_name('country'));
                        //$options[0] = 'Everywhere Else';
                        $cn_var = 'cntry[]';
                        $co_var = 'shipcost[]';
                        $mm = '<div class="form-item"><label>Ship To: <span title="This field is required." class="form-required">*</span></label><select name="'.$cn_var.'" id="'.$cn_var.'" class="no_none">';
                        foreach($countries['#options'] as $key => $val) {
                            if($key == $vall)
                                $mm .= '<option value="'.$key.'" selected="selected">'.$val.'</option>';
                            else
                                $mm .= '<option value="'.$key.'" >'.$val.'</option>';
                        }
                        $mm .= '</select></div>';
                        $mm .= '<div class="form-item"><label for="cost1">Shipping Cost: <span title="This field is required." class="form-required">*</span></label><input type="text" name="'.$co_var.'" id="'.$co_var.'" size="25" value="'.$_POST['shipcost'][$keyy] .'" class="no_none"></div>';
                        print '<div class="ship_itm">'.$mm.'<span class="rem_itm"></span></div>';
                    } }?>


                <?php if (arg(2) == 'edit') {
                    //echo drupal_render($form['multiship']['def_cost']);
                    //print_r($custom_price); die;
                    $no_of_cs = count($custom_price);
                    //die; custom_price
                    $myval = 1;
                    for($i = 3; $i<= $no_of_cs; $i++) {
                        $countries = uc_country_select(uc_get_field_name('country'));
                        //$options[0] = 'Everywhere Else';
                        $cn_var = 'cntry[]';
                        $co_var = 'shipcost[]';
                        $mm = '<div class="form-item"><label>Ship To: <span title="This field is required." class="form-required">*</span></label><select name="'.$cn_var.'" id="'.$cn_var.'" class="no_none" >';
                        foreach($countries['#options'] as $key => $val) {
                            if($key == $custom_price[$i]['loc_id'])
                                $mm .= '<option value="'.$key.'" selected="selected">'.$val.'</option>';
                            else
                                $mm .= '<option value="'.$key.'" >'.$val.'</option>';
                        }
                        $mm .= '</select></div>';
                        $mm .= '<div class="form-item"><label for="cost1">Shipping Cost: <span title="This field is required." class="form-required">*</span></label><input type="text" name="'.$co_var.'" id="'.$co_var.'" size="25" value="'.$custom_price[$i]['price'].'" class="no_none" ></div>';
                        print '<div class="ship_itm">'.$mm.'<span class="rem_itm"></span></div>';
                        $myval++;
                    }

                }?>

                <?php echo drupal_render($form['multiship']['addlink']); ?>
            </div>

            <!--<h1>Your accepted forms of payment</h1>
            <div class="your_account_preference">
                <div class="manage_payment"><a href="#">< ?php echo t('Manage Payment methods'); ?></a></div>
                <div class="account_mail"><b>PayPal account: < ?php echo $user->paypal_email; ?></b></div>
            </div>
            <div class="for_border">&nbsp;</div>-->


            <div id="shipping_multiprice">
                <?php print drupal_render($form['multiprice']['multiprices']);?>
            </div>
            <div class="cover_back_to_top">
                <div class="next_previous">
                    <a href="javascript:void(0);" onclick="javascript:step_prevoius(2);"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/city_store_login_sellnow02a/previousd_tag.jpg" border="0" /></a>

                    <?php
                    //$form['buttons']['submit']['#attributes']=array('class' => 'reg_submit_button', 'onClick' => 'return stepnext(3)');
                    $form['buttons']['submit']['#attributes']=array('class' => 'reg_submit_button', 'onClick' => 'javascript:stepnext(3);');
                    $form['buttons']['submit']['#value'] = '';
                    print drupal_render($form['buttons']['submit']);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-----[city-login-info-cover-div-closed-here]---->
</div>

<div class="clear" style="display:none;" ><?php print drupal_render($form); ?></div>
</div></div>
<?php //print_r($form);
}
else {

    drupal_add_js(drupal_get_path('module', 'breesee') . '/js/imag_replace.js');
    global $theme_path, $base_url, $user;
    $data = drupal_clone($node);
    drupal_set_title($data->title);
    $breadcrumb[] = l('Home', '<front>');
    $breadcrumb[] = l('Products', 'shops');
    $breadcrumb[] = $data->title; // Link to current URL
    drupal_set_breadcrumb($breadcrumb);

    $store = content_profile_load('store', $data->uid);
    $strinfo = content_profile_load('store', $data->uid);
    $maps = $strinfo->field_maphtml[0]['value'];
    $mapcoords = explode("#", $maps);

    ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            initialize();
        });
        function initialize() {
            var latlng = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>, <?php echo $mapcoords[2]; ?>);
            var settings = {
                zoom: 15,
                center: latlng,
                mapTypeControl: true,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: true,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("map_canvas_new"), settings);
            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading"><?php echo $strinfo->title; ?></h1>'+
                '<div id="bodyContent">'+
                '<p><?php echo substr(trim($strinfo->field_about[0]['value']), 0, 150); ?>...</p>'+
                '</div>'+
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var companyImage = new google.maps.MarkerImage('<?php echo $base_url; ?>/images/store_loc.png',
                new google.maps.Size(100,50),
                new google.maps.Point(0,0),
                new google.maps.Point(50,50)
            );

            var companyPos = new google.maps.LatLng(<?php echo $mapcoords[0]; ?>, <?php echo $mapcoords[1]; ?>);
            var companyMarker = new google.maps.Marker({
                position: companyPos,
                map: map,
                icon: companyImage,
                title:"<?php echo $strinfo->title; ?>",
                zIndex: 3});
            google.maps.event.addListener(companyMarker, 'click', function() {
                infowindow.open(map,companyMarker);
                // toggleBounce(companyMarker);
            });
        }

        function toggleBounce(marker) {
            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>

    <div class="claim_1_cover_block"><!-----[clame_cover_block-starts-here]---->
        <!-----[language-trnslation-block-closed-here]---->
        <div class="clear"></div>
        <div class="product_details">
            <div class="product_title">
                <h1>Name: <?php echo $data->title; ?></h1>
                <h2>Sold by: <?php echo _breesee_get_display_name($data->uid); ?></h2>
            </div>
            <div class="product_slider">
                <div class="display_product"><?php $attributes = array('id' => 'prod_big'); print theme('imagecache', 'creation_detail_big', $data->field_upload[0]['filepath'], $alt, $title, $attributes);  ?></div>
                <ul class="thumbnail_product">
                    <?php
                    //														print_r($data->field_image_cache);
                    //														die();

                    foreach($data->field_upload as $key => $val) {
                        if($val['view'] != '') {
                            $imgurl = imagecache_create_path('creation_detail_big',$val['filepath']);

                            ?>
                            <li style="display:none;"><?php  print theme('imagecache', 'creation_detail_big', $imgurl);  ?></li>
                            <li>
                                <a href="javascript:void(0);" rel="<?php echo $base_url.'/'.$imgurl; ?>"><?php  print theme('imagecache', 'creation_detail_thumbs', $val['filepath']);  ?></a>
                                <div class="arrow_up_product"><img src="<?php print $base_url.'/'.drupal_get_path('theme', 'BreeseeUK'); ?>/images/claim_1/arrow_up.jpg" border="0" /></div>
                            </li>
                        <?php }  } ?>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="product_discription"><!-----[product-discription-starts-here]---->
                <h1>Product Description</h1>
                <p><?php echo $data->content['body']['#value']; ?></p>
                <p><?php echo $data->field_pdescription[0]['value']; ?></p><!-----[discription-pending-closed-here]---->
            </div><!-----[product-discription-closed-here]---->
            <div class="project_story"><!-----[projects-story-starts-here]---->
                <h1>Project Story</h1>
                <p><?php echo $data->field_product_story[0]['value']; ?></p>
            </div>
            <div class="clear"></div>
            <div class="claim_tags"><!-----[claim-tabs-starts-here]---->
                <div class="left_block_tags">

                    <h1>Top Level</h1>
                    <div class="tag_type_block">
                        <?php echo BreeseeUK_taxonomy_links($data, '17'); ?>
                    </div>

                    <h1>Tags</h1>
                    <div class="tag_type_block">
                        <?php echo BreeseeUK_taxonomy_links($data, '31') ?>
                    </div>
                </div>
                <div class="right_block_tags">
                    <h1>Material</h1>
                    <div class="tag_material"><?php echo $data->field_materials[0]['value']; ?> </div>
                </div>
            </div><!-----[claim-tabs-closed-here]---->
            <div class="clear"></div>
            <div class="other_prtoduct_slider"><!-----[other-product-slider-starts-here]---->
                <h1><?php echo _breesee_get_display_name($data->uid); ?>&rsquo;s other product</h1>
                <div class="slider_contant">
                    <?php echo _breesee_othercreationfrom($data->uid, arg(1), 'product'); ?>                            </div>
            </div><!-----[other-product-slider-closed-here]---->
            <div class="clear"></div>
            <div class="store_places"><!-----[store-places-starts-here]---->
                <div class="store_inner_div"><!-----[store-places--title-starts-here]---->
                    <h1>Nearest Store to Have</h1>
                    <input type="text" value="City" class="city_textfields" />
                </div><!-----[store-places--title-closed-here]---->

                <div class="all_continentals"><!-----[all-continental-menu-starts-here]---->
                    <?php echo _breesee_store_other_locations($data->uid);  ?>
                    <div class="google_map_continentals">
                        <p>We are here</p>
                        <div id="map_canvas_new" style="height:350px;"></div>
                    </div>
                </div><!-----[all-continental-menu-closed-here]---->
            </div><!-----[store-places-closed-here]---->
            <div class="clear"></div>
            <div class="costumer_thought">
                <h1>Costomer&rsquo;s Thought</h1>
                <?php //echo comment_render($data, $cid = 0) ?>
            </div>
        </div>
    </div><!-----[clame_cover_block-closed-here]---->


<?php } ?>
</div>