$( document ).ready(function() {

  // product page
  var productPageShippingTtl = $('.ProductStars')[0]
  $(productPageShippingTtl).before('<div class="productShippingTtl">bla bla</div>');

  $('.delivery-teaser-bottom').text('bla bla').css('font-weight', '500');

  var shippingRow1 = $('.ProductsShortDesc').find('table').find('tbody').find('.delivery-tab-row')[1];
  $(shippingRow1).find('.dy-row-countries-1').text('bla bla');
  var shippingTimeFrame1 = $(shippingRow1).find('td')[1];
  $(shippingTimeFrame1).text('bla bla');

  var shippingRow2 = $('.ProductsShortDesc').find('table').find('tbody').find('.delivery-tab-row')[2];
  $(shippingRow2).find('.dy-row-countries-3').text('bla bla');
  var shippingTimeFrame2 = $(shippingRow2).find('td')[1];
  $(shippingTimeFrame2).text('bla bla');

  // article 3
  var articleShippingRow1 = $('.shipping-table-wrap').find('.shipping-table-row-line')[0];
  $(articleShippingRow1).find('.dy-row-countries-1').text('bla bla');
  var articleTimeFrame1 = $(articleShippingRow1).find('.shipping-table-cell')[1];
  $(articleTimeFrame1).text('bla bla');

  var articleShippingRow2 = $('.shipping-table-wrap').find('.shipping-table-row-line')[1];
  $(articleShippingRow2).find('.dy-row-countries-3').text('bla bla');
  var articleTimeFrame2 = $(articleShippingRow2).find('.shipping-table-cell')[1];
  $(articleTimeFrame2).text('bla bla');

  $('.shipping-table-wrap').after( `
  <div class="shippingInfoWrap">
    <div class="shippingInfoTtl">bla bla</div>
    <div class="shippingInfoText">bla bla</div>
  </div>
  ` );
  
  $('.shipping-time-frame-standard').text('bla bla');
  $('.shipping-time-frame-standard').before('<div class="shipping-time-frame shipping-time-frame-standard">bla bla</div>');
  $('.shipping-time-frame-express').text('bla bla');
  $('.shipping-time-frame-express').before('<div class="shipping-time-frame shipping-time-frame-express">bla bla</div>');

  var three = $('.ShopShipInput').find('tbody').find('tr')[2]
  $(three).find('td').find('input').attr("checked", "checked");

  $('.free-shipping-inner span').html('<span class="ico-tg-diamond"></span> Takes up to <strong>5 buisness days</strong>');

});

