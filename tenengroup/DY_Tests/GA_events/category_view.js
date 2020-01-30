// DT category event
$(document).ready(function(){
  $('.cat-display-icon').on('click', function() {
    var viewNum = $(this).find('span').length
    ga('send', {
      hitType: 'event',
      eventCategory: 'category_page',
      eventAction: 'click',
      eventLabel: 'change_category_layout_' + viewNum
    }); 
  })
})



// MB category event
$(document).ready(function(){
  $('.cat-display-icon').on('click', function() {
    var viewNum = $(this).find('span').length
    ga('send', {
      hitType: 'event',
      eventCategory: 'category_page',
      eventAction: 'click',
      eventLabel: 'change_category_layout_' + viewNum
    }); 
  })
})
