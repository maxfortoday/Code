<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>


<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-teaser" style="margin-top: 20px;">
    <div>
    <p>Welcome!</p>
    <p class="csp-input-left">Please enter your order ID and phone number so we can let the currier contact you when they arrive at your shipping address.
    <p class="csp-input-right">
      <img class="dhl-img" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/dhl-tg.png" />
    </p>
  </div>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="146" />
      </div>
      <!-- /LANG -->

<!-- EMAIL DHL@TENEGROUP.COM -->
      <div class="csp-input-full csp-email-ver" style="max-width: 400px;">
        <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" require_validation="false" label_input="#rn:msg:CUSTOM_MSG_Email_Verification#" />
      </div>
<!-- /.EMAIL DHL@TENEGROUP.COM -->

      <!-- Order ID -->
      <div class="csp-input-full csp-order-id" style="max-width: 400px;">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="true" 
          label_input="#rn:msg:ORDER_NUMBER_CMD#"/>
      </div>

      <!-- PHONE -->
      <div class="csp-input-full csp-phone" style="max-width: 400px;">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$order_value" 
          required="true" 
          label_input="#rn:msg:PHONE_NUMBER_LBL#"/>
      </div>
      <!-- /PHONE -->

      <!-- SUBJECT -->
      <div class="csp-subject" style="max-width: 400px;">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
        <rn:condition logged_in="true">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" initial_focus="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
      </div>
      <!-- /SUBJECT -->

      <!-- SUBMIT -->
      <div class="csp-submit" style="text-align: left; margin: 0; margin-left: 23px;">
        <rn:widget 
          path="custom/FormSubmit_mnn/mnnFormSubmit" 
          label_button="SUBMIT" 
          on_success_url="/app/dhl_confirm_us/#" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
        </rn:condition>
      </div>
      <!-- /SUBMIT -->

    </form>
  </div>
</div> <!-- /csp-wrapper -->

<script>
  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
  });
</script>
