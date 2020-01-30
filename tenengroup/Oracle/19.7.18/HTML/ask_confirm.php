<rn:meta title="#rn:msg:QUESTION_SUBMITTED_LBL#" template="standard.php" clickstream="incident_confirm"/>
<rn:theme path="/euf/assets/themes/standard" css="ask.css"/>
<?php 
/* ORG CODE
<div class="rn_Hero"> 
<div class="rn_Container thank-you-title">
<h1>#rn:msg:YOUR_QUESTION_HAS_BEEN_SUBMITTED_LBL#</h1>
</div>
</div>

<img class="dt" src="http://cdn.mynamenecklace.com/images/site/E-mail_us_DT.jpg" />
<img class="mob res-img" src="http://cdn.m.mynamenecklace.com/images/general/E-mail_us_MB.jpg" />
*/
?>

<span id="top"></span>
<div class="rn_PageContent rn_AskQuestion rn_Container thank-you-confirm-wrapper">
  <div class="thank-you-confirm-text thank-you-confirm-title">
  #rn:msg:SUBMITTING_QUEST_REFERENCE_FOLLOW_LBL#
<?php 
/*
<!-- <b>
<rn:condition url_parameter_check="i_id == null">
##rn:url_param_value:refno#.
<rn:condition_else/>
<a href="/app/#rn:config:CP_INCIDENT_RESPONSE_URL#/i_id/#rn:url_param_value:i_id##rn:session#">#<rn:field name="Incident.ReferenceNumber" /></a>.
</rn:condition>
</b>-->
*/
?>
  </div>
<div class="thank-you-confirm-message">
  #rn:msg:SUPPORT_TEAM_SOON_MSG#
</div>
<?php /*
<div class="footer-banner-wrap">
  <img class="footer-banner-confirm dt" src="https://cdn.mynamenecklacecanada.com/images/site/Name_Necklace_confirm_DT.jpg">
  <img class="footer-banner-confirm mob" src="https://cdn.m.mynamenecklacecanada.com/images/general/Name_Necklace_confirm_MB.jpg">
</div>

<script type="text/javascript">
  console.log ('Eldad2');
  window.onload = function() {
    var element = document.getElementById("top");
    element.scrollIntoView();
  };

</script>
*/
?>



<script>
// refresh when user clicks on refresh
if(!!window.performance && window.performance.navigation.type == 2)
{
  window.location.reload();
}

</script>

<rn:condition logged_in="true">
<?php 
/*
<p>
  #rn:msg:NEED_UPD_EXP_OR_M_GO_TO_HIST_O_UPD_IT_MSG#
</p>
<rn:condition_else/>
<p>
  #rn:msg:UPD_ADDR_LG_EXP_OR_M_HIST_C_T_O_UPD_IT_MSG#
</p>
<p>
  #rn:msg:DONT_ACCT_ACCOUNT_ASST_ENTER_EMAIL_MSG#
<a href="/app/#rn:config:CP_ACCOUNT_ASSIST_URL##rn:session#">#rn:msg:ACCOUNT_ASSISTANCE_LBL#</a>
</p>
*/
?>
</rn:condition>
</div>



