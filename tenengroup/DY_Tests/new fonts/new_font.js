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

DYO.waitForElement(".ProductBoxDataEntry", function() {
  for(var i = 0 ; i < generalArray.length ; i++) {
    if(generalArray[i].id == prodId) {
      var inputs = $('.ProductBoxDataEntry').find('input[type="text"]');
      var thisId = i;
      
      for (let b = 0; b < inputs.length; b++) {
        let thisInput = $(inputs[b]);
        
        if(thisInput.val() != '') {
            $(thisInput).addClass('input-duplicate-font');
            $(thisInput).closest('.DataEntryBox').css('display', 'flex');
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
          $(this).closest('.DataEntryBox').css('display', 'block');
        } else {
          $(this).next('.duplicateFont').show()
          $(this).closest('.DataEntryBox').css('display', 'flex');
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
          var inputs = $('.ProductBoxDataEntry').find('input[type="text"]');
          var thisId = i;
  
          for (let b = 0; b < inputs.length; b++) {
            let thisInput = $(inputs[b]);
  
            if (thisInput.val() != '') {
              $(thisInput).addClass('input-duplicate-font');
              $(thisInput).closest('.DataEntryBox').css('display', 'flex');
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
