<!-- ELDAD 1.10.4 -->
<rn:theme path="/euf/assets/themes/standard" css="ask.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-header">Email us</div>

  <div class="csp-teaser">Please send us your questions/comments in the form below, and we will contact you within 48 hours.</div>
  <ul class="csp-teaser-list">
    <li><span>You can also refer to our <a href="javascript: void(0);" onclick="window.top.location.href = 'https://www.mynamenecklacecanada.com/Article.aspx?p=5058&source=emailus';">FAQ</a> for quick answers for most questions.</span></li>
    <li><span>To follow up on your order, please visit the <a href="javascript: void(0);" onclick="window.top.location.href = 'https://www.mynamenecklacecanada.com/OrderTracking.aspx?source=emailus';">Order Tracking Information</a>.</span></li>
  </ul>
  <hr class="CShr">

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
	  <div id="rn_ErrorLocation.Contact.Name.First" style="color:red;font-size:11px"></div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:LAST_NAME_LBL#"/>
      </div>
      <!-- /LAST NAME -->

      <!-- E-MAIL VER -->
      <div class="csp-input-left csp-email-ver">
        <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" require_validation="true" validate_on_blur="false" label_input="#rn:msg:CUSTOM_MSG_Email_Verification#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget path="input/ProductCategoryInput" name="Incident.Category"/>
      </div>
      <!-- /CATEGORY -->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget path="input/FormInput" name="Contact.Phones.MOBILE.Number" label_input="#rn:msg:PHONE_NUMBER_LBL#"/>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.order_id_text_field" label_input="#rn:msg:ORDER_NUMBER_CMD#"/>
      </div>
      <!-- Order ID -->

      <!-- PRODUCT -->
      <!-- div class="csp-input-left csp-product">
        <rn:widget path="input/ProductCategoryInput" name="Incident.Product"/>
      </div -->
      <!-- /PRODUCT -->

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
        <label for="rn_FileAttachmentUpload_18_FileInput">
          <img class="upload-file-img" alt="upload file" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/choose-file-en.png" />
        </label>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget path="input/FormSubmit" label_button="#rn:msg:SUBMIT_YOUR_QUESTION_CMD#" on_success_url="/app/ask_confirm" error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->

<?php
/*
<div class="" onclick="window.top.location.href = 'http://www.google.com';">LINK ME TO GOOGLE</div>

<script type="text/javascript">
function confirmEmail() {
  var email = document.getElementById("rn_TextInput_31_Contact.Emails.PRIMARY.Address").value
  var confemail = document.getElementById("rn_TextInput_33_Incident.CustomFields.c.email_verification").value
  if(email != confemail) {
      alert('Email Not Matching!');
  }
}
</script>
*/
?>