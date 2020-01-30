// dt doofinder event
$(document).ready(function () {
  $('.search-bar-results').on("click", ".search-bar-item", function () {
    var url = $(this).find('a').attr('href').split('=');
    var shortId = url[1]
    var inputSuggestion = $('.SearchBox input').val();
    ga('send', {
      hitType: 'event',
      eventCategory: 'header',
      eventAction: 'searchField',
      eventLabel: "click_auto_suggestions_" + inputSuggestion + "_" + shortId
    });
  })
})

// mb doofinder event
$(document).ready(function () {
  $('.search-bar-results').on("click", ".search-bar-item", function () {
    var url = $(this).find('a').attr('href').split('=');
    var shortId = url[1]
    var inputSuggestion =  $('.MasterSearchTextBoxCell input').val();
    ga('send', {
      hitType: 'event',
      eventCategory: 'header',
      eventAction: 'searchField',
      eventLabel: "click_auto_suggestions_" + inputSuggestion + "_" + shortId
    });
  })
})