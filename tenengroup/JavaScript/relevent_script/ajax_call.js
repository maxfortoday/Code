
$(document).ready(function () {
  $.ajax({
    type: "GET",
    id: "connectScript",
    url: "https://apps.bumpyardpro.com//Scripts/connect.js",
    dataType: "script"
  });


  var addBY = document.createElement("script");
  addBY.type = "text/javascript";
  addBY.src = "https://apps.bumpyardpro.com//Scripts/connect.js";
  addBY.id = "connectScript"
  $(".RightTop").append(addBY);
  console.log('added by to RightTop class -> search for: apps.bumpyardpro.com');
  
  setTimeout( function(){ 
    myPara.setAttribute("id", "connectScript");
    myPara.id = ID;
    console.log('Whats up doc?');
    BY.chat({
      baseDomain: 'bumpyardpro.com/',                  
      appsSubDomain: 'apps',
      streamId: 'piNq8iEeLSDo_fsR_fwvWLbA%3d%3d',                  
      trackerStreamId: ''
    });
  }, 2000 );

});