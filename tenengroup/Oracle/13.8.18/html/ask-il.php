<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<script type="text/javascript">
  function addCss() {
    var head = document.getElementsByTagName('head')[0], link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = '/euf/assets/themes/standard/ask-new-design-rtl.css';
    head.appendChild(link);
    return link;
  }
  addCss();
</script>

<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-teaser">צור עימנו קשר ונחזור אליך בהקדם</div>
  <ul class="csp-teaser-list">

    <li><span>תוכלו גם לקבל מענה לשאלות נפוצות בעמוד "<a href="https://www.mynamenecklace.co.il/pages/faq" target="_top">שאלות ותשובות</a>" שלנו.</span></li>
    <!-- li><span>על מנת לעקוב אחר ההזמנה, ניתן לבדוק את <a href="https://www.mynamenecklace.co.il/pages/faq" target="_top">דף מעקב אחר ההזמנה</a>.</span></li -->
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="31" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-right csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_IL#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-left csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_IL#"/>
      </div>
      <!-- /LAST NAME -->

      <!-- E-MAIL VER -->
      <div class="csp-input-right csp-email-ver">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Emails.PRIMARY.Address" 
          required="true" 
          require_validation="true" 
          validate_on_blur="false" 
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_IL#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_IL#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
         <rn:widget 
          path="custom/input/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_IL#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_IL#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_IL#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_IL"
           />
      </div>
      <!-- /CATEGORY -->

       <!-- PHONE -->
      <div class="csp-input-right csp-phone">
        <rn:widget path="input/FormInput" name="Contact.Phones.MOBILE.Number" label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_IL#"/>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-left csp-order-id">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.order_id_text_field" label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_IL#"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_IL#"/>
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload-reg">
         <rn:widget 
          path="input/FileAttachmentUpload"
          label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_IL#" />
        <label for="rn_FileAttachmentUpload_18_FileInput">
          <img class="upload-file-img" alt="upload file" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/choose-file-en.png" />
        </label>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="input/FormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_IL#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_IL#" 
          on_success_url="/app/ask_confirm_il" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_IL#" />
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->



<script>
$(document).ready(function(){
  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "נא למלא שדה זה"}); // updating inputs titles

  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
    
  });
});  
</script>