$( document ).ready(function() {
  // product page
  var productPageShippingTtl = $('.ProductStars')[0];
  var href = window.location.href;
  
  var Short_ID = [${Product page short ID}];
  var isSku = false;
  for(var i = 0 ; i < Short_ID.length ; i++) {
      if (href.indexOf(Short_ID[i]) > -1) {
        isSku = true;
        break;
      }
  }

  if (isSku) {
      $('.ProductPriceCell').after('<div class="productShippingTtl">${Product page green line}</div>');
      $('.free-shipping-inner span').html('${shipping banner}');
  } else {
      $('.ProductPriceCell').after('<div class="productShippingTtl">${Product page green line special}</div>');
      $('.free-shipping-inner span').html('${shipping banner special}');
  }

  var shippingTabInsc = $('.ProductShippingContainer').find('font')[1];
  $(shippingTabInsc).text('${Product page shipping tab paragraph}').css('font-weight', '500');

  var shippingRow1 = $('.ProductShippingContainer').find('table').find('tbody').find('.v-bottom')[0];
  $(shippingRow1).find('.dy-row-countries-1').text('${Product page shipping tab first method}');
  var shippingTimeFrame1 = $(shippingRow1).find('td')[1];
  $(shippingTimeFrame1).text('${Product page shipping tab first time frame}');

  var shippingRow2 = $('.ProductShippingContainer').find('table').find('tbody').find('.v-bottom')[1];
  $(shippingRow2).find('.dy-row-countries-3').text('${Product page shipping tab second method}');
  var shippingTimeFrame2 = $(shippingRow2).find('td')[1];
  $(shippingTimeFrame2).text('${Product page shipping tab second time frame}');
  
  var shippingRow3 = $('.ProductShippingContainer').find('table').find('tbody').find('.v-bottom')[2];
  $(shippingRow3).find('.dy-row-countries-1').text('${Product page shipping tab third method}');
  var shippingTimeFrame3 = $(shippingRow3).find('td')[1];
  $(shippingTimeFrame3).text('${Product page shipping tab third time frame}');
  
  DYO.waitForElement('.more-info-popup-shipping', function () {
    var shippingFloatingRow1 = $('.mb-shipping-popup-floating').find('table').find('tbody').find('.v-bottom')[0];
    $(shippingFloatingRow1).find('.dy-row-countries-1').text('${Product page shipping tab first method}');
    var shippingFloatingTimeFrame1 = $(shippingFloatingRow1).find('td')[1];
    $(shippingFloatingTimeFrame1).text('${Product page shipping tab first time frame}');
  
    var shippingFloatingRow2 = $('.mb-shipping-popup-floating').find('table').find('tbody').find('.v-bottom')[1];
    $(shippingFloatingRow2).find('.dy-row-countries-3').text('${Product page shipping tab second method}');
    var shippingFloatingTimeFrame2 = $(shippingFloatingRow2).find('td')[1];
    $(shippingFloatingTimeFrame2).text('${Product page shipping tab second time frame}');
    
    var shippingFloatingRow3 = $('.mb-shipping-popup-floating').find('table').find('tbody').find('.v-bottom')[2];
    $(shippingFloatingRow3).find('.dy-row-countries-3').text('${Product page shipping tab third method}');
    var shippingFloatingTimeFrame3 = $(shippingFloatingRow3).find('td')[1];
    $(shippingFloatingTimeFrame3).text('${Product page shipping tab third time frame}');
  
    var shippingFloatingTabInsc = $('.mb-shipping-popup-floating').find('div')[1];
    $(shippingFloatingTabInsc).text('${Product page shipping tab paragraph}').css('font-weight', '500');
  });

  // article 3
  var articleShippingRow1 = $('.shipping-table-wrap').find('.shipping-table-row-line')[0];
  $(articleShippingRow1).find('.dy-row-countries-1').text('${Article 3 shipping table first method}');
  var articleTimeFrame1 = $(articleShippingRow1).find('.shipping-table-cell')[1];
  $(articleTimeFrame1).text('${Article 3 shipping table first time frame}')

  var articleShippingRow2 = $('.shipping-table-wrap').find('.shipping-table-row-line')[1];
  $(articleShippingRow2).find('.dy-row-countries-3').text('${Article 3 shipping table second method}');
  var articleTimeFrame2 = $(articleShippingRow2).find('.shipping-table-cell')[1];
  $(articleTimeFrame2).text('${Article 3 shipping table second time frame}')
  
  var articleShippingRow3 = $('.shipping-table-wrap').find('.shipping-table-row-line')[2];
  $(articleShippingRow3).find('.dy-row-countries-3').text('${Article 3 shipping table third method}');
  var articleTimeFrame3 = $(articleShippingRow3).find('.shipping-table-cell')[1];
  $(articleTimeFrame3).text('${Article 3 shipping table third time frame}')
  
      $('.shipping-table-wrap').after( `
  <div class="shippingInfoWrap">
    <div class="shippingInfoTtl">${Article 3 shipping box title}</div>
    <div class="shippingInfoText">${Article 3 shipping box paragraph}</div>
  </div>
  ` );

  
  // shopping card
var shippingTableText1 = $('#MainContent_ctl26').find('li')[0];
$(shippingTableText1).find('.cart-shipping-line1').find('span').text('${Shopping cart first name}')

var shippingTableText2 = $('#MainContent_ctl26').find('li')[1];
$(shippingTableText2).find('.cart-shipping-line1').find('span').text('${Shopping cart second name}')

var shippingTableText3 = $('#MainContent_ctl26').find('li')[2];
$(shippingTableText3).find('.cart-shipping-line1').find('span').text('${Shopping cart third name}')
  

  
});