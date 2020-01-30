<rn:meta title="#rn:msg:SHP_TITLE_HDG#" template="standard_mnn.php" clickstream="home"/>

<div class="main-top-msg" style="display: none;">#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_MESSAGE#</div> 
<div class="rn_PageContent rn_Container rn_Home">
    <div class="rn_ContentDetail">
        <rn:widget 
          path="navigation/VisualProductCategorySelector" 
          numbered_pagination="true" 
          prefetch_sub_items=false 
          prefetch_sub_items_non_ajax=true 
          type="category" 
          maximum_items="4" 
          top_level_items="#rn:msg:CUSTOM_MSG_HOME_CATEGORIES_NUMBERS#" />
    </div>
    <aside class="rn_SideRail" role="complementary">
        <div class="top-answers-right">
            <div class="rn_Title"><h3>#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_ANSWERS_TITLE#</h3></div>
            <rn:widget 
              path="reports/TopAnswers" 
              limit="10" />
        </div>
    </aside>
</div>

<!-- If the popup should be only on HP -->
<script>
function showTopMsg(show_hide) {
  var showHide = show_hide.toLowerCase();
  if (showHide == "show") {
    $('.main-top-msg').show();
  }
};
var show_hide = '#rn:msg:CUSTOM_MSG_HELP_CENTER_TOP_MESSAGE_SHOW_HIDE#';
showTopMsg(show_hide);

</script>