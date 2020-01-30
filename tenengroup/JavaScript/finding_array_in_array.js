var productPageShippingTtl = $('.ProductStars')[0];
var href = window.location.href;

var Short_ID = [${Short ID}];
var isSku = false;
for(var i = 0 ; i < array1.length ; i++) {
    if (href.indexOf(array1[i]) > -1) {
      isSku = true;
      break;
    }
}

if (isSku) {
  $(productPageShippingTtl).before('<div class="productShippingTtl">${Product page green line special}</div>');
  $('.free-shipping-inner span').html('${Shipping banner spechial}');
} else {
  $(productPageShippingTtl).before('<div class="productShippingTtl">${Product page green line}</div>');
    $('.free-shipping-inner span').html('${Shipping banner}');
}