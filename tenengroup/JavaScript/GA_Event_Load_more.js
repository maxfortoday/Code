if($('#facetsSection').length > -1) {
  var url = location.href;
  var prodId = url.slice(url.indexOf('?p=') + 3, url.indexOf('?p=') + 7);
  $('#categoryPageLoadMore').on('click', function() {
    ga('send', {
      hitType: 'event',
      eventCategory: 'category_page',
      eventAction: 'click',
      eventLabel: 'load_more_' + prodId
    }); 
  })
}