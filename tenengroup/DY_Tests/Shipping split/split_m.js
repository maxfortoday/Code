$( document ).ready(function() {
  // product page
  $('.ProductPriceCell').after('<div class="productShippingTtl">bla bla</div>');

  var shippingTabInsc = $('.ProductShippingContainer').find('font')[1];
  $(shippingTabInsc).text('bla bla').css('font-weight', '500');

  var shippingRow1 = $('.ProductShippingContainer').find('table').find('tbody').find('.v-bottom')[0];
  $(shippingRow1).find('.dy-row-countries-1').text('bla bla');
  var shippingTimeFrame1 = $(shippingRow1).find('td')[1];
  $(shippingTimeFrame1).text('bla bla');

  var shippingRow2 = $('.ProductShippingContainer').find('table').find('tbody').find('.v-bottom')[1];
  $(shippingRow2).find('.dy-row-countries-3').text('bla bla');
  var shippingTimeFrame2 = $(shippingRow2).find('td')[1];
  $(shippingTimeFrame2).text('bla bla');

  DYO.waitForElement('.more-info-popup-shipping', function () {
    var shippingFloatingRow1 = $('.mb-shipping-popup-floating').find('table').find('tbody').find('.v-bottom')[0];
    $(shippingFloatingRow1).find('.dy-row-countries-1').text('bla bla');
    var shippingFloatingTimeFrame1 = $(shippingFloatingRow1).find('td')[1];
    $(shippingFloatingTimeFrame1).text('bla bla');
  
    var shippingFloatingRow2 = $('.mb-shipping-popup-floating').find('table').find('tbody').find('.v-bottom')[1];
    $(shippingFloatingRow2).find('.dy-row-countries-3').text('bla bla');
    var shippingFloatingTimeFrame2 = $(shippingFloatingRow2).find('td')[1];
    $(shippingFloatingTimeFrame2).text('bla bla');
  
    var shippingFloatingTabInsc = $('.mb-shipping-popup-floating').find('div')[1];
    $(shippingFloatingTabInsc).text('bla bla');
  });

  // article 3
  var articleShippingRow1 = $('.shipping-table-wrap').find('.shipping-table-row-line')[0];
  $(articleShippingRow1).find('.dy-row-countries-1').text('bla bla');
  var articleTimeFrame1 = $(articleShippingRow1).find('.shipping-table-cell')[1];
  $(articleTimeFrame1).text('bla bla')

  var articleShippingRow2 = $('.shipping-table-wrap').find('.shipping-table-row-line')[1];
  $(articleShippingRow2).find('.dy-row-countries-3').text('bla bla');
  var articleTimeFrame2 = $(articleShippingRow2).find('.shipping-table-cell')[1];
  $(articleTimeFrame2).text('bla bla')

  $('.shipping-table-wrap').after( `
  <div class="shippingInfoWrap">
    <div class="shippingInfoTtl">bla bla</div>
    <div class="shippingInfoText">bla bla</div>
  </div>
  ` );
  
  // $('.shipping-time-frame-standard').text('bla bla');
  $('.shipping-time-frame-standard').before('<div class="shipping-time-frame shipping-time-frame-standard">bla bla</div>');
  // $('.shipping-time-frame-express').text('bla bla');
  $('.shipping-time-frame-express').before('<div class="shipping-time-frame shipping-time-frame-express">bla bla</div>');
  

  var three = $('.ShoppingCartShippingRadioButtonList').find('li')[2];
  $(three).find('input').attr("checked", "checked");

  $('.free-shipping-inner span').html('<span class="ico-tg-diamond"></span> Takes up to <strong>5 buisness days</strong>');

});