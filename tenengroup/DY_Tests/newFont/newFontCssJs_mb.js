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
var url = location.href;
var prodId = url.slice(url.indexOf('?p=') + 3, url.indexOf('?p=') + 7);

DYO.waitForElement("#productDataEntries", function() {
  for(var i = 0 ; i < generalArray.length ; i++) {
    if(generalArray[i].id == prodId) {
      var inputs = $('#productDataEntries').find('input[type="text"]');
      var thisId = i;
      
      for (let b = 0; b < inputs.length; b++) {
        let thisInput = $(inputs[b]);
        
        if(thisInput.val() != '') {
            $(thisInput).addClass('input-duplicate-font');
            $(thisInput).closest('.ProductDataEntryCellControl').css('display', 'flex');
            if($(thisInput).next('.duplicateFont').length == 0) {
                $(thisInput).after('<div class="duplicateFont"></div>');
            }
            $(thisInput).next(".duplicateFont").text($(thisInput).val());
            $('.duplicateFont').addClass(generalArray[thisId].font);
        }
      }
  
      
      $(inputs).keyup(function () { 
        $(this).addClass('input-duplicate-font');
        if($(this).next('.duplicateFont').length == 0) {
          $(this).after('<div class="duplicateFont"></div>');
        }
        $(this).next(".duplicateFont").text($(this).val());
        $('.duplicateFont').addClass(generalArray[thisId].font);
        if($(this).val() == '') {
          $(this).removeClass('input-duplicate-font');
          $(this).next('.duplicateFont').hide()
          $(this).closest('.ProductDataEntryCellControl').css('display', 'block');
        } else {
          $(this).next('.duplicateFont').show()
          $(this).closest('.ProductDataEntryCellControl').css('display', 'flex');
        }
      });
      break;
    }
  }
});

// check again if inputs has saved value
window.onload = function(){
    for (var i = 0; i < generalArray.length; i++) {
        if (generalArray[i].id == prodId) {
          var inputs = $('#productDataEntries').find('input[type="text"]');
          var thisId = i;
  
          for (let b = 0; b < inputs.length; b++) {
            let thisInput = $(inputs[b]);
  
            if (thisInput.val() != '') {
              $(thisInput).addClass('input-duplicate-font');
              $(thisInput).closest('.ProductDataEntryCellControl').css('display', 'flex');
              if ($(thisInput).next('.duplicateFont').length == 0) {
                $(thisInput).after('<div class="duplicateFont"></div>');
              }
              $(thisInput).next(".duplicateFont").text($(thisInput).val());
              $('.duplicateFont').addClass(generalArray[thisId].font);
            }
          }
        }
    }
};


// shopping cart
DYO.waitForElement(".ShoppingCartItemOrderDetails", function() {

var shoppingCartProduct = $('.ShoppingCartItemOrderDetails').find('.ShoppingCartItemHeaderCell');
for(var i = 0 ; i < shoppingCartProduct.length ; i++) {

  var hrefs = $(shoppingCartProduct[i]).find('a.ShoppingCartItemName').attr('href');
  var href = hrefs.slice(hrefs.indexOf('?p=') + 3, hrefs.indexOf('?p=') + 7);

  for(var b = 0 ; b < generalArray.length ; b++) {
    
    if(generalArray[b].id == href) {
      var thisId = b;
      var inscriptions = $(shoppingCartProduct[i]).closest('.ShoppingCartItemOrderDetails').find('.ShoppingCartItemOrderDetails');
      var inscriptionsString = inscriptions[0].outerHTML;
      var inscArr = inscriptionsString.split('<br>');
      var newstring2 = '';
      for(var a = 0 ; a < inscArr.length; a++) {
        var newString = inscArr[a];
        if(newString.indexOf('${Inscription}') > 0){
          var bPositionStart = newString.indexOf('<b>');
          var bPositionEnd = newString.indexOf('</b>');
          var text =  newString.slice(bPositionStart + 3, bPositionEnd);
          newstring2 += newString.slice(0, bPositionStart + 2) + ' class="' + generalArray[thisId].font + '"><span>' + text + ' ${Preview}:</span>' + newString.slice(bPositionStart + 3) + '<br>';
        } else {
          newstring2 += newString + '<br>';
        }
      }
      $(inscriptions).parent().html(newstring2);
    }
  }
}

});