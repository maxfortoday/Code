// http://securedemo.tenengroup.com/secure.payment/newdefault.aspx?&lt=6&_ga=2.2305136.1191301243.1566124785-1956073709.1538987084

// get the text
var text = $('#FirstName').text();

// set the item in localStorage
localStorage.setItem('test', text);

// alert the value to check if we got it
alert(localStorage.getItem('test'));


$('#BtnCreditCheckout').click(function(){
  var text = $('#FirstName').val();
  localStorage.setItem('FirstName', text);
  $('.top-page-menu-wrap .top-page-track-prder').after('<div id="space">Welcome Back, ' + localStorage.getItem('FirstName') + '</div>');
});