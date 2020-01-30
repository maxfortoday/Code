<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>


<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-teaser" style="margin-top: 20px;">
    <div>
    <p>¡Bienvenido/a!</p>
    <p class="csp-input-left">Por favor proporcione su número ID y teléfono para que la compañía de envíos pueda contactarse con usted cuando lleguen a su dirección de entrega.
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
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="148" />
      </div>
      <!-- /LANG -->

<!-- EMAIL DHL@TENEGROUP.COM -->
      <div class="csp-input-full csp-email-ver" style="max-width: 400px;">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Emails.PRIMARY.Address" 
          required="true" 
          require_validation="false" 
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_ES#"
         />
      </div>
<!-- /.EMAIL DHL@TENEGROUP.COM -->

      <!-- Order ID -->
      <div class="csp-input-full csp-order-id" style="max-width: 400px;">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="true" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_ES#"/>
      </div>

      <!-- PHONE -->
      <div class="csp-input-full csp-phone" style="max-width: 400px;">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$order_value" 
          required="true" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_ES#"/>
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
          path="input/FormSubmit" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_ES#" 
          label_button="ENVIAR" 
          on_success_url="/app/dhl_confirm_mx/#" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_ES#"/>
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
