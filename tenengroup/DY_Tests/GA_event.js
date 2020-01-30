$('#view-cart').on('click', function() {
  ga('send', {
    hitType: 'event',
    eventCategory: 'dy_custom_event_us',
    eventAction: 'click',
    eventLabel: 'continue_shopping'
  }); 
})

$('#goto-btn').on('click', function() {
  ga('send', {
    hitType: 'event',
    eventCategory: 'dy_custom_event_us',
    eventAction: 'click',
    eventLabel: 'go_to_bag'
  }); 
})

$('.product-card-modal-carousel').on('click', function() {
  ga('send', {
    hitType: 'event',
    eventCategory: 'dy_custom_event_us',
    eventAction: 'click',
    eventLabel: 'on_the_product'
  }); 
})


DYO.waitForElement('', function () {});