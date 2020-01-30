DYO.waitForElement('td.AddToCartBtn input', function() {


  window.currentPrice = $('.OurPriceValue').find('[data-sale-price]').text().trim();
  window.currentPriceNum = parseFloat(currentPrice.replace(/\s/g, "").replace(",", "."));; 
  window.allPrices = currentPriceNum;
  
  // Create div
  const div = document.createElement('div');
  // Add classes
  div.className = `total-price-wrap`;
  // Add HTML
  div.innerHTML = '<span class="sumSubtotal">Subtotal:</span><span class="sumPrice">$' + allPrices + '</span>';
  // Get parent
  const container = document.querySelector('.RoundPanel table tbody');
  // Get form
  const form = document.querySelector('.ProductBoxAddToCart');
  // Insert alert
  container.insertBefore(div, form);
  
  
  // Create div
  const div2 = document.createElement('div');
  // Add classes
  div2.className = `pip-teaser`;
  // Add text
  div2.appendChild(document.createTextNode('Gift Box'));
  // Get parent
  const container2 = document.querySelector('.addProductLink');
  // Get form
  const form2 = document.querySelector('.addProductLinkLine2');
  // Insert alert
  container2.insertBefore(div2, form2);


  var count = 0;

  $(".pip-box-add").click(function() {    
   
    var pipItemsShown = $('[class*=ProductBoxDataEntryAdd]');
    
  var thisCheckBox = $(this).closest('.ProductBoxAdd').find('[class*=chkBoxAdd]');
  $(thisCheckBox).toggleClass("chkBoxV");
  var thisItem = $(this).closest('.ProductBoxAdd').find('[class*=ProductBoxDataEntryAdd]');
  var thisNum = $(this).closest('.ProductBoxAdd').find('.addProductLinkLine2 label').text().trim();
  if (!$(thisItem).is(":hidden")) {
    count--;
    if(count == 0) {
      $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/site/add_to_cart.png");
    }
    if(count == 1) {
      $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/products/personalized-14k-gold-carrie-name-necklace_jumbo.jpg");
    }
    if(count == 2) {
      $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/products/signature-style-name-necklace_jumbo.jpg");
    }
    $(thisItem).hide();
    var cleanBoxPrice = thisNum.replace('$', '');
    var currentBoxPrice = parseFloat(cleanBoxPrice);
    console.log(allPrices);
    allPrices -= currentBoxPrice;
    $('.sumPrice').text('$' + allPrices.toFixed(2));
    
    } else {
      count++;
      if(count == 0) {
        $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/site/add_to_cart.png");
      }
      if(count == 1) {
        $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/products/personalized-14k-gold-carrie-name-necklace_jumbo.jpg");
      }
      if(count == 2) {
        $('.productDataEntries').attr("src","https://cdn.mynamenecklace.com/images/products/signature-style-name-necklace_jumbo.jpg");
      }
      $(thisItem).slideDown(500);
      var cleanBoxPrice = thisNum.replace('$', '');
      var currentBoxPrice = parseFloat(cleanBoxPrice);
      allPrices += currentBoxPrice;
      $('.sumPrice').text('$' + allPrices.toFixed(2));
  }
  
  });
  
  
  $('.DataEntryBox').change(function() {
        if (window.currentPrice != $('.OurPriceValue').find('[data-sale-price]').text().trim()) {
    currentPrice = $('.OurPriceValue').find('[data-sale-price]').text().trim();
    window.currentPriceNum = parseFloat(currentPrice);; 
    window.allPrices = currentPriceNum;
    let pipInputs = $(".pip-box-add");
    for (let i = 0; i < pipInputs.length; i++) {
      if (pipInputs[i].checked) {
        thisPipVal = $(pipInputs[i]).closest('.ProductBoxAdd').find('.addProductLinkLine2 label').text().trim();
        thisPipVal = thisPipVal.replace('$', '');
        let thisPipValNum = parseFloat(thisPipVal);
        allPrices += thisPipValNum;
        console.log(allPrices);
      } 
    }
    $('.sumPrice').text('$' + allPrices.toFixed(2));
    }
  });




});

