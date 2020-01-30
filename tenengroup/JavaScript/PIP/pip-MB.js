  $(".pip-box-add").click(function() {       
    var thisIndex = $('.pip-box-add').index(this) + 1; 
  var thisCheckBox = $('.productAdd' + thisIndex).find('.addProductLink');
  $(thisCheckBox).toggleClass("productAddLinkOpen");
  $(thisCheckBox).toggleClass("pip-open");
  var thisItem = $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('#productDataEntries');
  var thisNum = $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('.pip-add-product-price').text().trim() || $(this).closest('[id*=productAddLink' + thisIndex +']').next().find('.addProductLinkLine2 label').text().trim();
  if (!$(thisItem).is(":hidden")) {
    $(thisItem).hide();
    } else {
      $(thisItem).slideDown(500);
  }
  
  });
  
  

