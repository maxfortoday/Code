<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>
<script type="text/javascript" src="countries.js"></script>
<style type="text/css">
  
.rn_WidgetAttrsValue input, select {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: border-color;
  -moz-transition: border-color;
  transition: border-color;
  background-color: white;
  border-radius: 0.1875em;
  border: 1px solid #999;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.06);
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1em;
  margin-bottom: 0.75em;
  padding: 0.5em 0.5em;
  width: 100%;
}

</style>
<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-header">Change Address</div>

  <div class="csp-teaser">text text text</div>
  <ul class="csp-teaser-list">
    <li><span>text text</span></li>
    <li><span>text text</span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="70" />
      </div>
      <!-- /LANG -->

      <!-- SUBJECT -->
      <div class="csp-subject">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
        <rn:condition logged_in="true">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" initial_focus="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
      </div>
      <!-- /SUBJECT -->

      <!-- Order ID -->
      <div class="csp-input-left">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:ORDER_NUMBER_CMD#"/>
      </div>
      <!-- /Order ID -->

      <!-- Shipping Name -->
      <div class="csp-input-right">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.CustomFields.c.shippingmethod" 
          required="false" 
          label_input="Shipping Name"/>
      </div>
      <!-- /Shipping Name -->

      <!-- E-MAIL VER -->
      <div class="csp-input-left csp-email-ver">
        <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="false" require_validation="true" validate_on_blur="false" label_input="#rn:msg:CUSTOM_MSG_Email_Verification#" />
        <div id="rn_ErrorEmail" class="FormInputErrorPlaceholder FormInputErrorPlaceholderForEmail"></div>
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- STREET -->
      <div class="csp-input-left">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.street"
          required="false" 
          label_input="Street"
        />
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-right">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Address.City"
          required="false" 
          label_input="City"
        />
      </div>
      <!-- /CITY -->

      <!-- COUNTRY -->
      <div class="csp-input-left">
        <rn:widget 
          path="input/FormInput"
          name="Contact.Address.Country"
          required="false" 
          label_input="Country"
        />
      </div>
      <!-- /COUNTRY -->

      <!-- STATE -->
      <div class="csp-input-right">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Address.StateOrProvince"
          required="false" 
          label_input="State"
        />
      </div>
      <!-- /STATE -->

      <!-- ZIP -->
      <div class="csp-input-left">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.postal_code"
          required="false" 
          label_input="Postal code"
        />
      </div>
      <!-- /ZIP -->

      <!-- QUESTION -->
      <div class="csp-question">
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:QUESTION_LBL#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="custom/FormSubmit_mnn/mnnFormSubmit" 
          label_button="UPDATE ADDRESS" 
          on_success_url="/app/ask_confirm_au_uk/#" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="UPDATE ADDRESS"/>
        </rn:condition>
      </div>
      <!-- /SUBMIT -->

    </form>
  </div>
</div> <!-- /csp-wrapper -->


<script>

$(document).ready(function(){
  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Please fill out this field"}); // updating inputs titles

  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
  });
});
  
</script>
