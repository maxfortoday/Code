var head= document.getElementsByTagName('head')[0];
var byScript= document.createElement('script');
byScript.src= '//apps.bumpyardpro.com//Scripts/connect.js';
byScript.id = 'connectScript';
head.appendChild(byScript);

byScript.onload = function(){
  BY.chat({
      baseDomain: 'bumpyardpro.com/',                  
      appsSubDomain: 'apps',
      streamId: 'piNq8iEeLSDo_fsR_fwvWLbA%3d%3d',                  
      trackerStreamId: ''
  });

  var linkUrl = $("link[rel='canonical']").attr("href").toLowerCase();
  var pageType = '';
  if(linkUrl.indexOf("article") > -1) {
    pageType = 'article';
  }else  if(linkUrl.indexOf("products") > -1) {
    pageType = 'products';
  }else  if(linkUrl.indexOf("shoppingcart") > -1) {
    pageType = 'shoppingcart';
  }else  if(linkUrl.indexOf("ordertracking") > -1) {
    pageType = 'ordertracking';
  }else  if(linkUrl.indexOf("product") > -1) {
    pageType = 'product';
  }else  if(linkUrl.indexOf("account") > -1) {
    pageType = 'account';
  }else  if(linkUrl.indexOf("checkout") > -1) {
    pageType = 'checkout';
  }else  if(linkUrl.indexOf("searchresult") > -1) {
    pageType = 'search-result';
  }else  if(linkUrl.indexOf("customersupport") > -1) {
    pageType = 'customersupport';
  }else {
     pageType = 'home-page';
  }

DYO.waitForElement('#btnImgPreButton_ifrChat', function(){

    $('#btnImgPreButton_ifrChat').on('click', function(){
      ga('send', {
          hitType: 'event',
          eventCategory: 'dy_custom_events_us',
          eventAction: 'clicked_on_chat',
          eventLabel: 'page_type_' + pageType
      });
    })

  })
};
