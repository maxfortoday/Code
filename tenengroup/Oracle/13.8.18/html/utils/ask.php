<!-- ELDAD 1.0.6 -->
<div class="top-banner-wrap">
  <img class="dt" src="https://cdn.mynamenecklace.com/images/site/E-mail_us_DT.jpg" />
  <img class="mob" src="https://cdn.m.mynamenecklace.com/images/general/E-mail_us_MB.jpg" />
</div>

<rn:theme path="/euf/assets/themes/standard" css="ask.css" />

<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<div class="csp-wrapper" id="rn_SuccessLocation"> <!-- csp-wrapper -->
  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">
      <!-- FIRST NAME -->

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="3" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:FIRST_NAME_LBL#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:LAST_NAME_LBL#"/>
      </div>
      <!-- /LAST NAME -->

      <!-- E-MAIL -->
      <div class="csp-email">
        <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" label_input="#rn:msg:EMAIL_ADDR_LBL#"/>
      </div>
      <!-- E-MAIL -->

      <!-- E-MAIL VER -->
      <!-- div class="csp-input-right csp-email-ver">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.email_verification" required="true" label_input="#rn:msg:CUSTOM_MSG_Email_Verification#"/>
      </div -->
      <!-- E-MAIL VER-->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget path="input/FormInput" name="Contact.Phones.MOBILE.Number" label_input="#rn:msg:PHONE_NUMBER_LBL#"/>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.order_id" label_input="#rn:msg:ORDER_NUMBER_CMD#"/>
      </div>
      <!-- Order ID -->

      <!-- PRODUCT -->
      <div class="csp-input-left csp-product">
        <rn:widget path="input/ProductCategoryInput" name="Incident.Product"/>
      </div>
      <!-- /PRODUCT -->

      <!-- CATEGORY -->
      <div class="csp-input-right csp-category">
        <rn:widget path="input/ProductCategoryInput" name="Incident.Category"/>
      </div>
      <!-- /CATEGORY -->

      <!-- SUBJECT -->
      <div class="csp-subject">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
        <rn:condition logged_in="true">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" initial_focus="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
      </div>
      <!-- /SUBJECT -->

      <!-- QUESTION -->
      <div class="csp-question">
        <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:QUESTION_LBL#"/>
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <span class="optional-label">(Optional)</span>
        <rn:widget path="input/FileAttachmentUpload"/>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget path="input/FormSubmit" label_button="#rn:msg:SUBMIT_YOUR_QUESTION_CMD#" on_success_url="/app/ask_confirm" error_location="rn_ErrorLocation" success_location="rn_SuccessLocation"/>
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->


<script type="text/javascript">
function confirmEmail() {
  var email = document.getElementById("rn_TextInput_31_Contact.Emails.PRIMARY.Address").value
  var confemail = document.getElementById("rn_TextInput_33_Incident.CustomFields.c.email_verification").value
  if(email != confemail) {
      alert('Email Not Matching!');
  }
}
</script>