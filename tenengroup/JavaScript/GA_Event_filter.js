if($('#facetsSection').length > -1) {
  var filters = $("[id*='filter']");
    $(filters).on('click', function() {
      var filterType = $(this).attr('data-type')
      var filterValue = $(this).attr('data-value')
      if($(this).is(':checked')) {
        ga('send', {
          hitType: 'event',
          eventCategory: 'category_page',
          eventAction: 'filterClick',
          eventLabel: filterType + '_' + filterValue + '_checked'
        }); 
      } else {
        ga('send', {
          hitType: 'event',
          eventCategory: 'category_page',
          eventAction: 'filterClick',
          eventLabel: filterType + '_' + filterValue + '_unchecked'
        }); 
      }
    })
}