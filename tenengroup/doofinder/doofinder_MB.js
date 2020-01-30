$(function () {
  var timer;
  var container = $('.search-bar-results-container');
  var showAllLabelText = container.attr('data-doofinder-showall-label');
  var hashid = container.attr('data-doofinder-hashid');
  var auth = container.attr('data-doofinder-auth');
  var interval = container.attr('data-doofinder-interval');
  var resultsCount = container.attr('data-doofinder-results-count');
  var minimalSearchLength = container.attr('data-doofinder-search-length');
  var orderTrackMinLength = container.attr('data-doofinder-search-order-track-min-length');
  var statUrl = container.attr('data-doofinder-stat-url');
  var searchUrl = container.attr('data-doofinder-search-url');

  var ulSearch = $('<ul></ul>').addClass('search-bar-results');
  container.append(ulSearch);
  container.append($('<hr/>'));
  var showAll = $('<div></div>').addClass('search-bar-results-show-all').text(showAllLabelText).click(function () {
      $('#MasterSearchButton')[0].click();
  });
  container.append(showAll);

  var searchPage = document.location.href.toLowerCase().indexOf('searchresult');
  function sendGaSerch(eventCategory, eventAction, eventLabel) {
      ga('send', {
          hitType: 'event',
          eventCategory: eventCategory,
          eventAction: eventAction,
          eventLabel: eventLabel
      });
  };

  $('#MasterSearchButton').on('click',
      function (e) {
          var searchVal = $("#SearchTextBox").val().trim();
          $("#SearchTextBox").val(searchVal);
          if (searchVal.length < 1) {
              e.stopPropagation();
              return false;
          }
          else if (searchVal.length >= orderTrackMinLength && /^\d+$/.test(searchVal)) {
              window.location = './ordertracking.aspx?tm=' + searchVal;
              return false;
          }

          if (searchPage < 0) {
              sendGaSerch('header', 'searchField', 'clickSubmitSearch');
          }

          e.preventDefault();
          e.stopPropagation();
          // search before submit to ensure that redirect will work
          lookupandpostback($.trim(searchVal));
      });

  $("#SearchTextBox").on('input', function () {
      if (location.href.toLowerCase().indexOf("searchresult.aspx") > -1 || resultsCount == 0) { //search page or doofinder is disabled
          return;
      }
      clearTimeout(timer);
      var ms = interval; // milliseconds
      var val = this.value;
      timer = setTimeout(function () {
          lookup($.trim(val));
      }, ms);
  });

  $('#SearchTextBox').focus(function () {
      container.hide();

      if (searchPage < 0) {
          sendGaSerch('header', 'searchField', 'putCursor');
      } else {
          sendGaSerch('searchReasults', 'searchField', 'putCursor');
      }

  });

  $('#SearchTextBox').on('blur', function () {
      if (searchPage > 0) {
          sendGaSerch('searchReasults', 'searchField', 'leaveFocus');
      }
  });

  $("#searchResultsLoadMore").on('click', function () {
      sendGaSerch('searchReasults', 'click', 'loadMore');
  });

  $('.search-results-prod').on('click', function () {
      var prodIndex = $('.search-results-prod').index(this) + 1;
      var prodLink = $(this).attr('href');
      var prodId = prodLink.substring(prodLink.indexOf('p=') + 2, prodLink.indexOf('p=') + 6);
      var evLabel = 'Product ID: ' + prodId + ' Product index: ' + prodIndex;
      sendGaSerch('searchReasults', 'resultsClick', evLabel);
  });

  var doofinderRegister = function (dfid, searchTerm) {
      var data = {
          dfid: dfid,
          query: searchTerm,
          random: new Date().getTime()
      };

      $.ajax({
          type: "GET",
          url: statUrl,
          data: data,
          contentType: "application/json; charset=utf-8",
          dataType: "json"
      });
  }

  function lookup(searchinput) {

      if (searchinput.length < minimalSearchLength) {
          container.hide();
      } else {

          $.ajaxSetup({
              headers: {
                  'Authorization': auth
              }
          });
          $.get(searchUrl + "?hashid=" + hashid + "&rpp=" + resultsCount + "&transformer=basic&query=" + encodeURIComponent(searchinput), function (data) {

              ulSearch.empty();
              if (data.redirection) {
                  $("#doofinder-redirect")[0].value = data.redirection.url;
              }
              else {
                  $("#doofinder-redirect")[0].value = "";
              }
              if (data.results.length > 0) {
                  $(data.results).each(function (i, result) {
                      var li = $('<li></li>').addClass('search-bar-item').append(
                          $('<a/>').attr('href', result.link).on('click',
                              function () { doofinderRegister(result.dfid, searchinput) }).append(
                              $('<img/>').attr('src', result.image_link)
                          ).append(
                              $('<span></span>').text(result.title)
                              )
                      );
                      ulSearch.append(li);
                  });
                  container.show();
              }
              else {
                  container.hide();
              }

          });
      }
  }

  function lookupandpostback(searchinput) {
      $.ajaxSetup({
          headers: {
              'Authorization': auth
          }
      });
      $.get(searchUrl + "?hashid=" + hashid + "&rpp=" + resultsCount + "&transformer=basic&query=" + encodeURIComponent(searchinput), function (data) {

          container.hide();
          if (data.redirection) {
              $("#doofinder-redirect")[0].value = data.redirection.url;
          }
          else {
              $("#doofinder-redirect")[0].value = "";
          }

          __doPostBack('ctl00$MasterSearchButton', '');

      }).fail(function () {
          __doPostBack('ctl00$MasterSearchButton', '');
      });
  }

  $(document).on('click', '.search-bar-results .search-bar-item', function () {
      var url = $(this).find('a').attr('href').split('=');
      var shortId = url[1]
      var inputSuggestion =  $('.MasterSearchTextBoxCell input').val();
      sendGaSerch('header', 'searchField', 'click_auto_suggestions_' + inputSuggestion + '_' + shortId);
  });

});