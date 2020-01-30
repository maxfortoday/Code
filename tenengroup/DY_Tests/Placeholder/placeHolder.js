<span style="display: none;" class="giftBoxPlaceHolder">bon anniversaire ! Julien</span>

  // DT placeholder for gift box
  if($(".giftBoxPlaceHolder").length > 0) {
    for(var i = 0 ; i < $(".giftBoxPlaceHolder").length ; i++ ) {
      var giftBoxPlaceHolder = $($('.giftBoxPlaceHolder')[i]).text();
      var giftBoxPlaceHolderNext = $($('.giftBoxPlaceHolder')[i]).closest('[id*=dataentry], [class*=ProductBoxDataEntryAdd]').find('.DataEntryBox textarea, .DataEntryBox input');
      $(giftBoxPlaceHolderNext).attr('placeholder', giftBoxPlaceHolder);
    }
  }

  // MB placeholder for gift box
  if($(".giftBoxPlaceHolder").length > 0) {
    for(var i = 0 ; i < $(".giftBoxPlaceHolder").length ; i++ ) {
      var giftBoxPlaceHolder = $($('.giftBoxPlaceHolder')[i]).text();
      var giftBoxPlaceHolderNext = $($('.giftBoxPlaceHolder')[i]).closest('[id*=ROW]').nextAll('[id*=ROW]').find('[class*=ProductDataEntry]')
      $(giftBoxPlaceHolderNext).attr('placeholder', giftBoxPlaceHolder);
    }
  }
