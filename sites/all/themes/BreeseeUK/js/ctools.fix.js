Drupal.CTools.Modal.show = function() {
  var resize = function(e) {
    // For reasons I do not understand, when creating the modal the context must be
    // Drupal.CTools.Modal.modal but otherwise the context must be more than that.
    var context = e ? document : Drupal.CTools.Modal.modal;
    $('div.ctools-modal-content', context).css({
      'width': $(window).width() * .8 + 'px',
      'height': $(window).height() * .8 + 'px'
    });
    $('div.ctools-modal-content .modal-content', context).css({
      'width': ($(window).width() * .8 - 25) + 'px',
      'height': ($(window).height() * .8 - 35) + 'px'
    });
  }

  if (!Drupal.CTools.Modal.modal) {
    Drupal.CTools.Modal.modal = $(Drupal.theme('CToolsModalDialog'));
    $(window).bind('resize', resize);
  }

  resize();
  $('span.modal-title', Drupal.CTools.Modal.modal).html(Drupal.t('Loading...'));
  var opts = {
    // @todo this should be elsewhere.
    opacity: Drupal.settings.CToolsModal.backDropOpacity,
    background: Drupal.settings.CToolsModal.backDropColor
  };

  Drupal.CTools.Modal.modalContent(Drupal.CTools.Modal.modal, opts);
  $('#modalContent .modal-content').html(Drupal.theme('CToolsModalThrobber'));
};