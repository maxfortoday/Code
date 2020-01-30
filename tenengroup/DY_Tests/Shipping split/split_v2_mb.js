$( document ).ready(function() {

  // product page
  var productPageShippingTtl = $('.ProductStars')[0];
  var Short_ID = [${Short ID}];
  var href = window.location.href;
  
  if (window.location.href.indexOf(${Short ID}) > -1) {
    $(productPageShippingTtl).before('<div class="productShippingTtl">${Product page green line special}</div>');
    $('.free-shipping-inner span').html('${Shipping banner spechial}');
  } else {
    $(productPageShippingTtl).before('<div class="productShippingTtl">${Product page green line}</div>');
      $('.free-shipping-inner span').html('${Shipping banner}');
  }

  $('.delivery-teaser-bottom').text('${Product page shipping tab paragraph}').css('font-weight', '500');

  var shippingRow1 = $('.ProductsShortDesc').find('table').find('tbody').find('.delivery-tab-row')[1];
  $(shippingRow1).find('.dy-row-countries-1').text('${Product page shipping tab first method}');
  var shippingTimeFrame1 = $(shippingRow1).find('td')[1];
  $(shippingTimeFrame1).text('${Product page shipping tab first time frame}');

  var shippingRow2 = $('.ProductsShortDesc').find('table').find('tbody').find('.delivery-tab-row')[2];
  $(shippingRow2).find('.dy-row-countries-3').text('${Product page shipping tab second method}');
  var shippingTimeFrame2 = $(shippingRow2).find('td')[1];
  $(shippingTimeFrame2).text('${Product page shipping tab second time frame}');

  var shippingRow3 = $('.ProductsShortDesc').find('table').find('tbody').find('.delivery-tab-row')[3];
  $(shippingRow3).find('.dy-row-countries-3').text('${Product page shipping tab third time method}');
  var shippingTimeFrame3 = $(shippingRow3).find('td')[1];
  $(shippingTimeFrame3).text('${Product page shipping tab third time frame}');

  // article 3
  var articleShippingRow1 = $('.shipping-table-wrap').find('.shipping-table-row-line')[0];
  $(articleShippingRow1).find('.dy-row-countries-1').text('${Article 3 shipping table first method}');
  var articleTimeFrame1 = $(articleShippingRow1).find('.shipping-table-cell')[1];
  $(articleTimeFrame1).text('${Article 3 shipping table first time frame}');

  var articleShippingRow2 = $('.shipping-table-wrap').find('.shipping-table-row-line')[1];
  $(articleShippingRow2).find('.dy-row-countries-3').text('${Article 3 shipping table second method}');
  var articleTimeFrame2 = $(articleShippingRow2).find('.shipping-table-cell')[1];
  $(articleTimeFrame2).text('${Article 3 shipping table second time frame}');
  
  var articleShippingRow3 = $('.shipping-table-wrap').find('.shipping-table-row-line')[2];
  $(articleShippingRow3).find('.dy-row-countries-3').text('${Article 3 shipping table third method}');
  var articleTimeFrame3 = $(articleShippingRow3).find('.shipping-table-cell')[1];
  $(articleTimeFrame3).text('${Article 3 shipping table third time frame}');

  $('.shipping-table-wrap').after( `
  <div class="shippingInfoWrap">
    <div class="shippingInfoTtl">${Article 3 shipping box title}</div>
    <div class="shippingInfoText">${Article 3 shipping box paragraph}</div>
  </div>
  ` );
  
  
  // shopping cart
  var shippingTableText1 = $('#ShippingType').find('tr')[0];
  $(shippingTableText1).find('.shipping-wrap').find('span').text('${Shopping cart rename method one}')

  var shippingTableText2 = $('#ShippingType').find('tr')[1];
  $(shippingTableText2).find('.shipping-wrap').find('span').text('${Shopping cart rename method two}')
  
  var shippingTableText3 = $('#ShippingType').find('tr')[2];
  $(shippingTableText3).find('.shipping-wrap').find('span').text('${Shopping cart rename method three}')


});

