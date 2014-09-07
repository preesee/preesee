<?php
// $Id: views_handler_field_user_picture.inc,v 1.1.4.3 2010/01/06 20:55:13 merlinofchaos Exp $

/**
 * Field handler to provide simple renderer that allows using a themed user link
 */
class views_handler_field_user_picture extends views_handler_field {
  function construct() {
    parent::construct();
    $this->additional_fields['uid'] = 'uid';
    $this->additional_fields['name'] = 'name';
    $this->additional_fields['mail'] = 'mail';   
  }

  function element_type() {
    return 'div';
  }

  function option_definition() {
    $options = parent::option_definition();
    $options['link_photo_to_profile'] = array('default' => 0);
    return $options;
  } 
  
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state); 
    $form['link_photo_to_profile'] = array(
      '#title' => t('Link to user\'s profile'),
      '#type' => 'radios',
      '#options' => array(
        0 => t('Yes'),
        'no_link' => t('No'),
      ),
      '#default_value' => $this->options['link_photo_to_profile'],
    );
  }

  function render($values) {
    if ($this->options['link_photo_to_profile'] == 'no_link') {
      $values->{$this->aliases['uid']} = NULL;
    }

    // Fake an account object.
    $account = new stdClass();
    $account->uid = $values->{$this->aliases['uid']};
    $account->name = $values->{$this->aliases['name']};
    $account->mail = $values->{$this->aliases['mail']};
    $account->picture = $values->{$this->field_alias};

    return theme('user_picture', $account);
  }
}
