  $(".pip-box-add").click(function() {    
       
  var thisCheckBox = $(this).closest('.ProductBoxAdd').find('[class*=chkBoxAdd]');
  $(thisCheckBox).toggleClass("chkBoxV");
  var thisItem = $(this).closest('.ProductBoxAdd').find('[class*=ProductBoxDataEntryAdd]');
  if (!$(thisItem).is(":hidden")) {
    $(thisItem).hide();
    } else {
      $(thisItem).slideDown(500);
  }
  
  });