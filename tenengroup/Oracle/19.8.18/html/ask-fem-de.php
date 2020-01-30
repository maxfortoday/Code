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
  
@import url('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i');
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i');

.fem-cs-wrapper {
  font-family: 'Lora', sans-serif;
}

.fem-cs-ttl {
  font: 500 24px 'Lora', sans-serif;
  border-bottom: 2px solid #ebebeb;
  padding: 20px 0;
}

.fem-cs-text {
  margin: 25px 0 20px;
  font-family: 'open sans', sans-serif;
  font-size: 16px;
}

.fem-cs-wrapper ul {
  margin-top:  20px;
}

.fem-cs-wrapper ul li { 
  position: relative; 
  margin: 0 0 10px 30px;
  color: black;
}

.fem-cs-wrapper ul li:before {
  position: absolute;
  margin: 8px 0 0 -19px;
  vertical-align: middle;
  display: inline-block;
  width: 6px;
  height: 6px;
  content: "";
  color: #669999;
  border: 1px solid black;
  border-radius: 50%;
  z-index: 2;
  background: #669999;
}

.fem-cs-wrapper ul li a {
  text-decoration: underline;
  color:#336666;
}

.fem-cs-wrapper ul li a:hover {color:#669999;}   

.fem-cs-wrapper hr {
  border: none;
  height: 1px;
  background-color: #ccc;
  margin: 30px 0;
}

</style>

<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="fem-cs-wrapper">
    <div class="fem-cs-ttl">NEHMEN SIE MIT UNS KONTAKT AUF.</div>
    <div class="fem-cs-text">Sollten Sie irgendwelche Fragen haben oder Ihre Gedanken mit uns teilen wollen, werden wir uns freuen, von Ihnen zu hören. Füllen Sie einfach das nachstehende Formular aus, und wir werden so bald wie möglich auf Sie zurückkomme. 
      <ul class="CSList">
       <li><span>Sie können sich auch für schnelle Antworten auf die meisten Fragen an unsere <a href="https://www.forevermom.de/Article.aspx?p=5555&source=emailus" target="_top">FAQ</a> wenden.</span></li>
       <li><span>Besuchen Sie unsere Seite für die <a href="https://www.forevermom.de/OrderTracking.aspx?source=emailus" target="_top"> Mitverfolgung von Bestellungen</a>  um den Status Ihres Kaufs nachzuvollziehen.
.</span></li>
      </ul>
      <hr />
    </div>
  </div>

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">
      <!-- FIRST NAME -->

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="88" />
      </div>
      <!-- /LANG -->

     <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_DE#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_DE#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_DE#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_DE#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
       <rn:widget 
          path="custom/input/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_DE#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_DE#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_DE#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_DE"
           />
      </div>
      <!-- /CATEGORY -->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget path="input/FormInput" name="Contact.Phones.MOBILE.Number" label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_DE#"/>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
     <div class="csp-input-right csp-order-id">
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.order_id_text_field" label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_DE#"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_DE#"/>
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload-reg">
          <span class="optional-label" style="left: 130px;">(Optional)</span>
        <rn:widget 
          path="input/FileAttachmentUpload"
          label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_DE#" />
        <label for="rn_FileAttachmentUpload_18_FileInput">
          <img class="upload-file-img" alt="upload file" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/choose-file-en.png" />
        </label>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
       <rn:widget 
          path="input/FormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_DE#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_DE#" 
          on_success_url="/app/ask_confirm_fem_de" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_DE#" />
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->


<script>
$(document).ready(function(){
  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Bitte füllen Sie dieses Feld aus"}); // updating inputs titles
  
  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
    
  });
});  
</script>
