// DT
if(window.location.href.indexOf('NamePreview') > -1  || window.location.href.indexOf('BREPT0') > -1) {
  var url = window.location.href.split('dv=')
  var namePrevie = url[1]
  $('.DataEntryBox input').val(namePrevie)
}

// MB
if(window.location.href.indexOf('NamePreview') > -1 || window.location.href.indexOf('BREPT0') > -1) {
  var url = window.location.href.split('dv=')
  var namePrevie = url[1]
  $('.ProductDataEntryCellControl input').val(namePrevie)
}