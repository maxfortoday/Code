// all vars
var firstShippingMethod = ${Days_for_1st_shipping};
var secondShippingMethod = ${Days_for_2st_shipping};
var thirdShippingMethod = ${Days_fr_3rd_shipping};
var firstSentence = '';
var secondSentence = '';
var thirdSentence = '';

// first shipping method
if(firstShippingMethod === 0) {
  var firstSentence = '';
} else if(firstShippingMethod === 1) {
  var firstSentence = '${Add_text_f} ' + firstShippingMethod +' ${Business_days_text} ${Day}';
} else if(firstShippingMethod > 1) {
  var firstSentence = '${Add_text_f} ' + firstShippingMethod +' ${Business_days_text} ${Days}';
}

// second shipping method
if(secondShippingMethod === 0) {
  var secondSentence = '';
} else if(secondShippingMethod === 1) {
  var secondSentence = '${Add_text_f} ' + secondShippingMethod +' ${Business_days_text} ${Day}';
} else if(secondShippingMethod > 1) {
  var secondSentence = '${Add_text_f} ' + secondShippingMethod +' ${Business_days_text} ${Days}';
}

// third shipping method
if(thirdShippingMethod === 0) {
  var thirdSentence = '';
} else if(thirdShippingMethod === 1) {
  var thirdSentence = '${Add_text_f} ' + thirdShippingMethod +' ${Business_days_text} ${Day}';
} else if(thirdShippingMethod > 1) {
  var thirdSentence = '${Add_text_f} ' + thirdShippingMethod +' ${Business_days_text} ${Days}';
}

// shopping cart DT
DYO.waitForElement('.ShopShipData', function () {
  $('.shipping-time-frame-standard').after('<span class="shippingTimeFrameShoppingCart1">' + firstSentence +'</span>');
  $('.shipping-time-frame-express').after('<span class="shippingTimeFrameShoppingCart2">' + secondSentence +'</span>');
  $('.shipping-time-frame-urgent').after('<span class="shippingTimeFrameShoppingCart3">' + thirdSentence +'</span>');
});

// shopping cart MB
DYO.waitForElement('.ShoppingCartShippingRadioButtonList', function () {
  $('.shipping-time-frame-standard').after('<span class="shippingTimeFrameShoppingCart1">' + firstSentence +'</span>');
  $('.shipping-time-frame-express').after('<span class="shippingTimeFrameShoppingCart2">' + secondSentence +'</span>');
  $('.shipping-time-frame-urgent').after('<span class="shippingTimeFrameShoppingCart3">' + thirdSentence +'</span>');
});

// product page DT 
DYO.waitForElement('.css-panes', function () {
  $('.ProductsShortDesc table').after('<span class="shippingTimeFrameProduct1">' + firstSentence +'</span>');
  $('.ProductsShortDesc table').after('<span class="shippingTimeFrameProduct2">' + secondSentence +'</span>');
  var thirShipping = $('.tab-table tr')[3];
  if($(thirShipping).length > 0) {
    $('.ProductsShortDesc table').after('<span class="shippingTimeFrameProduct3">' + thirdSentence +'</span>'); 
  } 
});

// product page MB tabs
DYO.waitForElement('.ProductShippingContainer', function () {
  var shipProduct1 = $('.v-bottom')[0];
  if($(shipProduct1).length > 0) {
    $('.tab-table').after('<span class="shippingTimeFrameProduct1">' + firstSentence +'</span>');
  }
  var shipProduct2 = $('.v-bottom')[1];
  if($(shipProduct2).length > 0) {
    $('.tab-table').after('<span class="shippingTimeFrameProduct2">' + secondSentence +'</span>');
  }
  var shipProduct3 = $('.v-bottom')[2];
  if($(shipProduct3).length > 0) {
    $('.tab-table').after('<span class="shippingTimeFrameProduct2">' + thirdSentence +'</span>');
  }
});

// product page MB popup 
$(document).ready(function () {
  $('.prp-banner-openpop').on('click', function () {
      DYO.waitForElement('.mb-shipping-popup-floating', function () {
        var shipProduct4 = $('.v-bottom')[0];
        if($(shipProduct4).length > 0) {
          $('.mb-shipping-popup-floating').after('<span class="shippingTimeFrameProduct4">' + firstSentence +'</span>');
        }
        var shipProduct5 = $('.v-bottom')[1];
        if($(shipProduct5).length > 0) {
          $('.mb-shipping-popup-floating').after('<span class="shippingTimeFrameProduct5">' + secondSentence +'</span>');
        }
        var shipProduct6 = $('.v-bottom')[2];
        if($(shipProduct6).length > 0) {
          $('.mb-shipping-popup-floating').after('<span class="shippingTimeFrameProduct6">' + thirdSentence +'</span>');
        }
    });
  });
});

// article 3 DT + MB
DYO.waitForElement('.shipping-table-wrap ', function () {
  var ship = $('.shipping-table-row')[1];
  $(ship).after('<span class="shippingTimeFrameArticle1">' + firstSentence +'</span>');
  var ship2 = $('.shipping-table-row')[2];
  $(ship2).after('<span class="shippingTimeFrameArticle2">' + secondSentence +'</span>');
  var ship3 = $('.shipping-table-row')[3];
  $(ship3).after('<span class="shippingTimeFrameArticle3">' + thirdSentence +'</span>');
});