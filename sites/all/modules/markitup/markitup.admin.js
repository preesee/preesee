Drupal.behaviors.markItUpAdmin = function() {
  $('textarea:visible').each(function(idx, txarea) {
    markItUpAddToggle(txarea);
  });
};

function markItUpAddToggle(txarea) {
  var txarea = $(txarea),
    toggle = txarea.hasClass('markItUpEditor') ? 'off' : 'on';
  $('<a>').attr({'href': '#', 'id': 'markitup-toggle-' + txarea.attr('id')}).addClass('markitup-toggle markitup-toggle-' + toggle).click(function() {
    jQuery.getJSON(Drupal.settings.basePath + 'admin/settings/markitup/field?form=' + txarea.parents('form').attr('id') + '&field=' + txarea.attr('id') + '&switch=' + toggle, function(data, textStatus) {
      if (textStatus === 'success') {
        if (data.switched === 'on') {
          // Get rid of stray grippies
          txarea.siblings('.grippie').remove();
          txarea.markItUp(mySettings);
        }
         else {
          txarea.markItUpRemove();
        }
        $('#markitup-toggle-' + txarea.attr('id')).remove();
        markItUpAddToggle(txarea);
      }
      else {
        alert(Drupal.t('Something went wrong and the text field could not be toggled. Sad panda.'));
      }
    });
    return false;
  }).text(toggle === 'off' ? Drupal.t('Disable markItUp!') : Drupal.t('Enable markItUp!')).insertAfter(txarea);
}

    