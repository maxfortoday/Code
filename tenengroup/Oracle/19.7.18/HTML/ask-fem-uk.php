<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

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
    <div class="fem-cs-ttl">CONTACT US</div>
    <div class="fem-cs-text">If you have any questions or want to share your thoughts with us, we’d love to hear from
    you. Simply fill out the form below, and we’ll respond as soon as possible. 
      <ul class="CSList">
       <li><span>Check out our <a href="https://www.forevermom.co.uk/Article.aspx?p=5555&source=emailus" target="_top">HELP CENTER</a> for answers to the most commonly asked questions.</span></li>
       <li><span>Visit our simple <a href="https://www.forevermom.co.uk/OrderTracking.aspx?source=emailus" target="_top">Order Tracking page</a> to follow up on your purchase’s status.</span></li>
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
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="72" />
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

      <!-- E-MAIL VER -->
      <div class="csp-input-left csp-email-ver">
        <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" require_validation="true" validate_on_blur="false" label_input="#rn:msg:CUSTOM_MSG_Email_Verification#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget path="custom/input/CustomProductCategoryInput" name="Incident.Category" required_lvl="1" category_id_key="CUSTOM_CFG_CATEGORIES_LIST_EN_UK"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="true" label_input="#rn:msg:QUESTION_LBL#"/>
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload-reg">
        <span class="optional-label">(Optional)</span>
        <rn:widget path="input/FileAttachmentUpload"/>
        <label for="rn_FileAttachmentUpload_18_FileInput">
          <img class="upload-file-img" alt="upload file" src="https://mnn.custhelp.com/euf/assets/themes/standard/images/choose-file-en.png" />
        </label>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget path="input/FormSubmit" label_button="#rn:msg:SUBMIT_YOUR_QUESTION_CMD#" on_success_url="/app/ask_confirm/#" error_location="rn_ErrorLocation" />
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
