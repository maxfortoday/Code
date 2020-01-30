DYO.waitForElement('.prod-material-switch div', function () {
  var jsonMaterials = [
{
  "sku": "101-01-055-08",
  "material": "Gold Vermeil"
},
{
  "sku": "101-01-056-08",
  "material": "14k Solid Gold"
},
{
  "sku": "101-01-071-08",
  "material": "Gold Vermeil"
},
{
  "sku": "101-01-078-08",
  "material": "10k Solid Gold"
},
{
  "sku": "101-01-108-02",
  "material": "14k White Gold"
},
{
  "sku": "101-01-1115-09",
  "material": "Gold Vermeil"
},
{
  "sku": "101-01-227-08",
  "material": "14k Solid Gold"
},
{
  "sku": "101-01-232-08",
  "material": "14k Solid Gold"
},
{
  "sku": "101-01-638-02",
  "material": "10k White Gold"
},
{
  "sku": "101-01-733-08",
  "material": "10k Yellow Gold"
},
{
  "sku": "101-01-832-09",
  "material": "18k Gold Vermeil"
},
{
  "sku": "101-05-1738-04",
  "material": "Silver with Diamond"
},
{
  "sku": "110-01-1112-04",
  "material": "14k White Gold"
},
{
  "sku": "110-01-1303-02",
  "material": "10k White Gold"
},
{
  "sku": "110-01-1321-09",
  "material": "14k Solid Gold"
},
{
  "sku": "110-01-1352-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-1405-04",
  "material": "10k White Gold"
},
{
  "sku": "110-01-1527-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-1707-08",
  "material": "10k Yellow Gold"
},
{
  "sku": "110-01-1792-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-1912-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2032-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2038-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2114-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2380-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2438-29",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-374-02",
  "material": "14k White Gold"
},
{
  "sku": "110-01-485-02",
  "material": "10K White Gold"
},
{
  "sku": "110-01-526-08",
  "material": "10k Solid Gold"
},
{
  "sku": "110-01-721-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-782-02",
  "material": "10K White Gold"
},
{
  "sku": "110-01-783-02",
  "material": "10k White Gold"
},
{
  "sku": "110-01-796-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-849-02",
  "material": "10k White Gold"
},
{
  "sku": "110-01-906-02",
  "material": "10k White Gold"
},
{
  "sku": "110-01-946-08",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-098-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-1661-04",
  "material": "14k white gold"
},
{
  "sku": "110-03-1789-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-2217-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-2390-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-05-1708-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-05-1709-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-01-2039-08",
  "material": "Gold Vermeil"
},
{
  "sku": "101-01-1552-02",
  "material": "14k White Gold"
},
{
  "sku": "110-01-2036-02",
  "material": "10k White Gold"
},
{
  "sku": "110-01-910-08",
  "material": "10K Solid Gold"
},
{
  "sku": "110-03-2138-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-2139-09",
  "material": "Gold Vermeil"
},
{
  "sku": "110-03-1366-08",
  "material": "Gold Vermeil"
}
];

  if (window.location.href.indexOf("m.mynamenecklace.com") > -1) {
    var productSku = $($('.appleLinks')[0]).text();
  } else {
    var productSku = $($('.ProductValue')[0]).text();
  }

  jsonMaterials.map(function (currentProd) {
    if (productSku == currentProd.sku) {
      var product = $('.prod-material-switch [data-option]:contains(' + currentProd.material + ')');
      if (product !== false) {
        $(product).addClass('bestOffer');

      }
    }
  });

});