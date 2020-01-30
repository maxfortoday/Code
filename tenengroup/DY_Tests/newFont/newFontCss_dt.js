var generalArray = [
  {id: 4634, font: 'sigmiture'},
  {id: 5378, font: 'sigmiture'},
  {id: 5379, font: 'sigmiture'},
  {id: 5598, font: 'sigmiture'},
  {id: 5956, font: 'sigmiture'},
  {id: 3598, font: 'Infinity'},
  {id: 3650, font: 'Infinity'},
  {id: 4298, font: 'Infinity'},
  {id: 5598, font: 'Infinity'},
  {id: 5588, font: 'Infinity'},
  {id: 4494, font: 'Infinity'},
  {id: 3352, font: 'Chloe'},
  {id: 3562, font: 'Chloe'},
  {id: 3647, font: 'Chloe'},
  {id: 5616, font: 'Chloe'},
  {id: 5594, font: 'Chloe'},
  {id: 1318, font: 'Carrie'},
  {id: 2074, font: 'Carrie'},
  {id: 3634, font: 'Carrie'},
  {id: 5600, font: 'Carrie'},
  {id: 1427, font: 'Carrie'},
  {id: 2070, font: 'Carrie'},
  {id: 1192, font: 'Megan'},
  {id: 2008, font: 'Megan'},
  {id: 1194, font: 'Megan'},
  {id: 1195, font: 'Megan'}
];


DYO.waitForElement(".NewShoppingHeader", function() {

var shoppingCartProduct = $('.NewShoppingHeader').find('.FIrstNewShopRow, .NewShopRow');
for(var i = 0 ; i < shoppingCartProduct.length ; i++) {

  var hrefs = $(shoppingCartProduct[i]).find('a.NewShopProdImageItem').attr('href');
  var href = hrefs.slice(hrefs.indexOf('?p=') + 3, hrefs.indexOf('?p=') + 7);

  for(var b = 0 ; b < generalArray.length ; b++) {
    if(generalArray[b].id == href) {
      var thisId = b;
      var inscriptions = $(shoppingCartProduct[i]).find('.ShopItemDesc:contains("${Inscription}")').find('b');
      $(inscriptions).addClass(generalArray[thisId].font);
    }
  }
}

});