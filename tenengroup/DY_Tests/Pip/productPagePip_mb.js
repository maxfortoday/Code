DYO.waitForElement('td.AddToCartButtonCell input', function() {

  debugger;

  window.currentPrice = $('.ProductPrice').find('span').text().trim();
  window.currentPriceNum = parseFloat(currentPrice.replace(/\s/g, "").replace(",", "."));; 
  window.allPrices = currentPriceNum;
  
  // Create div
  const div = document.createElement('div');
  // Add classes
  div.className = `total-price-wrap`;
  // Add HTML
  div.innerHTML = '<span class="sumSubtotal">Subtotal:</span><span class="sumPrice"> $' + allPrices + '</span>';
  // Get parent
  const container = document.querySelector('.ProductMainTable tbody');
  // Get form
  const form = document.querySelector('.AddToCartRow');
  // Insert alert
  container.insertBefore(div, form);
  
  
  // // Create div
  // const div2 = document.createElement('div');
  // // Add classes
  // div2.className = `pip-teaser`;
  // // Add text
  // div2.appendChild(document.createTextNode('Gift Box'));
  // // Get parent
  // const container2 = document.querySelector('.addProductLink');
  // // Get form
  // const form2 = document.querySelector('.addProductLinkLine2');
  // // Insert alert
  // container2.insertBefore(div2, form2);


  var count = 0;

  $(".pip-box-add").click(function() {       
    var thisIndex = $('.pip-box-add').index(this) + 1; 
  var thisCheckBox = $('.productAdd' + thisIndex).find('.addProductLink');
  $(thisCheckBox).toggleClass("productAddLinkOpen");
  $(thisCheckBox).toggleClass("pip-open");
  var thisItem = $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('#productDataEntries');
  var thisNum = $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('.pip-add-product-price').text().trim() || $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('.addProductLinkLine2 label').text().trim();
  if (!$(thisItem).is(":hidden")) {
    count--;
    if(count == 0) {
      $('.AddToCartButtonCell input').attr('value','ADD TO BAG');
    }
    if(count == 1) {
      $('.AddToCartButtonCell input').attr('value','ADD 2 ITEMS TO BAG');
    }
    if(count == 2) {
      $('.AddToCartButtonCell input').attr('value','ADD 3 ITEMS TO BAG');
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
        $('.AddToCartButtonCell input').attr('value','ADD TO BAG');
      }
      if(count == 1) {
        $('.AddToCartButtonCell input').attr('value','ADD 2 ITEMS TO BAG');
      }
      if(count == 2) {
        $('.AddToCartButtonCell input').attr('value','ADD 3 ITEMS TO BAG');
      }
      $(thisItem).slideDown(500);
      var cleanBoxPrice = thisNum.replace('$', '');
      var currentBoxPrice = parseFloat(cleanBoxPrice);
      console.log(allPrices);
      allPrices += currentBoxPrice;
      $('.sumPrice').text('$' + allPrices.toFixed(2));
      // $('.productDataEntries').attr("src","image1.jpg");
  }
  
  });
  
  
  $('.ProductDataEntryCellControl').change(function() {
        if (window.currentPrice != $('.ProductPrice').find('span').text().trim()) {
    currentPrice = $('.ProductPrice').find('span').text().trim();
    window.currentPriceNum = parseFloat(currentPrice);
    window.allPrices = currentPriceNum;
    let pipInputs = $(".pip-box-add");
    for (let i = 0; i < pipInputs.length; i++) {
      if ($(pipInputs[i]).closest('.productAddLinkOpen').length > 0 ) {
        // var thisIndex = $('.pip-box-add').index(this) + 1; 
        thisPipVal = $(pipInputs[i]).closest('[id*=productAddLink]').next().find('.pip-add-product-price').text().trim() || $(pipInputs[i]).closest('[id*=productAddLink]').next().find('.addProductLinkLine2 label').text().trim();
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

