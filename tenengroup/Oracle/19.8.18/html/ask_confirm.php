<rn:meta title="#rn:msg:QUESTION_SUBMITTED_LBL#" template="standard.php" clickstream="incident_confirm"/>
<rn:theme path="/euf/assets/themes/standard" css="ask.css"/>

<span id="top"></span>
<div class="rn_PageContent rn_AskQuestion rn_Container thank-you-confirm-wrapper">
  <div class="thank-you-confirm-text thank-you-confirm-title">
    #rn:msg:SUBMITTING_QUEST_REFERENCE_FOLLOW_LBL#
  </div>
<div class="thank-you-confirm-message">
		One of our representatives will respond to your email within 1 business day.<br />
		Thanks for your patience.

<?php /*  #rn:msg:SUPPORT_TEAM_SOON_MSG# */ ?>
</div>

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



