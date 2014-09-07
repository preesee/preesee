Drupal.behaviors.markItUp = function() {
  // Remove "Preview" button since it doesn't quite work with Drupal and won't
  // make sense in some contexts
  jQuery.each(mySettings.markupSet, function(index, val) {
    if (val.call === 'preview') {
      mySettings.markupSet.splice(index, 1);
    }
  });
  if (typeof(Drupal.settings.markItUpActiveIds) !== 'undefined') {
    jQuery.each(Drupal.settings.markItUpActiveIds, function(index, val) {
      $('#' + val).removeClass('resizable').markItUp(mySettings);
      if (val === 'edit-body') {
        // We don't want that "Split summary at cursor" button.
        Drupal.behaviors.teaser = function() {};
      }
    });
  }
};