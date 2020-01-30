<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<script type="text/javascript">
  function addCss() {
    var head = document.getElementsByTagName('head')[0], link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = '/euf/assets/themes/standard/ask-new-design-non-us.css';
    head.appendChild(link);
    return link;
  }
  addCss();
</script>

<style type="text/css">

.csp-teaser-list li:before {
  background: #fd2f82; 
}

</style>

<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-header">OTA MEIHIN YHTEYTTÄ</div>

  <div class="csp-teaser">Lähetä meille kysymyksesi ja/tai kommenttisi allaolevalla kaavakkeella, ja otamme sinuun yhteyttä pikimmiten.</div>
  <ul class="csp-teaser-list">
    <li><span>Voit myös tarkistaa osiostamme <a href="https://www.nimikoruni.com/Article.aspx?p=5058&source=emailus" target="_top">Usein kysytty&auml;</a> mikäli joku olisi jo aiemmin kysynyt kysymyksesi.</span></li>
    <li><span>Seurataksesi tilauksen kulkua, käytettävissäsi on <a 
    href="https://www.nimikoruni.com/OrderTracking.aspx?source=emailus" target="_top">tilauksen seurantatiedot.</a></span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="9" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_FI#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_FI#"/>
      </div>
      <!-- /LAST NAME -->

      <!-- E-MAIL VER -->
      <div class="csp-input-left csp-email-ver">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Emails.PRIMARY.Address" 
          required="true" 
          require_validation="true" 
          validate_on_blur="false" 
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_FI#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_FI#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
         <rn:widget 
          path="custom/input/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_FI#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_FI#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_FI#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_FI"
           />
      </div>
      <!-- /CATEGORY -->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget path="input/FormInput" name="Contact.Phones.MOBILE.Number" label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_FI#"/>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.order_id_text_field" label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_FI#"/>
      </div>
      <!-- Order ID -->

<?php
/*
      <!-- PRODUCT -->
      <!-- div class="csp-input-left csp-product">
        <rn:widget path="input/ProductCategoryInput" name="Incident.Product"/>
      </div -->
      <!-- /PRODUCT -->
*/
?>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_FI#"/>
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload-reg">
      <span class="optional-label" style="left: 130px;">(Valinnainen)</span>
        <rn:widget 
          path="input/FileAttachmentUpload"
          label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_FI#" />
        <label for="rn_FileAttachmentUpload_18_FileInput">
          <img class="upload-file-img" alt="upload file" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/choose-file-en.png" />
        </label>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="input/FormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_FI#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_FI#" 
          on_success_url="/app/ask_confirm_fi" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_FI#" />
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->

<script>
  
$(document).ready(function(){
  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Täytä tämä kenttä"}); // updating inputs titles

  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
    
  });
});
  
</script>