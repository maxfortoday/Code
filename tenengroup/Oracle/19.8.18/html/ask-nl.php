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

<div class="csp-wrapper"> <!-- csp-wrapper -->

  <div class="csp-teaser">Zend ons je vragen/opmerkingen in het onderstaand formulier en we zullen binnen 3 werkdagen contact met je opnemen.</div>
  <ul class="csp-teaser-list">
    <li><span>Kijk ook in onze <a href="https://www.mijnnaamketting.nl/Article.aspx?p=5058&source=emailus" target="_top">FAQ</a> voor een snel antwoord op uw vraag.</span></li>
    <li><span>Om uw bestelling op te sporen, kijk dan AUB hier: <a 
    href="https://www.mijnnaamketting.nl/OrderTracking.aspx?source=emailus" target="_top">Bestel en Opspoor informatie.</a></span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">
      <!-- FIRST NAME -->

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="12" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_NL#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_NL#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_NL#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_NL#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
          <rn:widget 
          path="custom/input_nl/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_NL#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_NL#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_NL#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_NL"
           />
      </div>
      <div id="txtCustomMessageToChangeMyItem" class="csp-teaser"></div>
      <!-- /CATEGORY -->

      <!-- DAMAGED -->
      <div class="damaged-item-wrap"> <!-- .damaged-item-wrap -->
        <div class="damaged-item-inner">
          <div class="damaged-item-pendant">
            <label for="damaged-item-pendant">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-item-dt.png" />
              <input type="radio" name="damaged-item-option" id="damaged-item-pendant" value="pendant">
              <span>Beschadigde hanger</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Beschadige ketting</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">Wat is het probleem?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">allergische reactie</option>
              <option value="184">Gebroken armband</option>
              <option value="185" selected="selected">Gebroken Ketting</option>
              <option value="186">Gebroken oorbellen</option>
              <option value="187">Gebroken glas</option>
              <option value="188">Gebroken ring</option>
              <option value="189">Gebroken Ketting sluiting</option>
              <option value="190">Gebarste gravering</option>
              <option value="191">gebroken hanger</option>
              <option value="192">Beschadigde kadobox</option>
              <option value="193">Gelijmde steen losgelaten</option>
              <option value="194">Goudvergulde laag versleten</option>
              <option value="195">Zwarte inkt vervaagd</option>
              <option value="196">Oogje geopend</option>
              <option value="197">Krassen op de hanger</option>
              <option value="199">Scherpe randen</option>
              <option value="200">Geboortestoon gevallen</option>
              <option value="201">Aangetast</option>
              <option value="202">Gebogen item</option>
            </select>
          </div>

<!-- user's chosen update from JS -->
          <div class="damaged-answer-wrap">
            <rn:widget 
              path="input/FormInput" 
              name="Incident.c$coupon_reorder_freetext"
            />

            <rn:widget 
              path="input/SelectionInput" 
              name="Incident.c$what_is_wrong"
            />
          </div>

        </div>
      </div> <!-- /.damaged-item-wrap -->
<!-- /DAMAGED -->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget 
          path="custom/FormInput_nl/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_NL#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_nl/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_NL#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_nl/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_NL#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_nl/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_NL#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_nl/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_NL#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_NL#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_NL#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- STATE -->
      <div class="csp-input-right csp-state">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$state" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STATE_NL#"/>
      </div>
      <!-- /STATE -->

      <!-- COUNTRY -->
      <div class="csp-input-left rn_TextInput csp-country">
        <label class="rn_Label">Land <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
<option value="Argentinië">Argentinië</option>
<option value="Australië">Australië</option>
<option value="België">België</option>
<option value="Brazilië">Brazilië</option>
<option value="Canada">Canada</option>
<option value="Chili">Chili</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cyprus">Cyprus</option>
<option value="Denemarken">Denemarken</option>
<option value="Dominikaanse Republiek">Dominikaanse Republiek</option>
<option value="Duitsland">Duitsland</option>
<option value="Ecuador">Ecuador</option>
<option value="Estland">Estland</option>
<option value="Finland">Finland</option>
<option value="Frankrijk">Frankrijk</option>
<option value="Griekenland">Griekenland</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hongarije">Hongarije</option>
<option value="Ierland">Ierland</option>
<option value="Ijsland">Ijsland</option>
<option value="India">India</option>
<option value="Israël">Israël</option>
<option value="Italië">Italië</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Letland">Letland</option>
<option value="Litouwen">Litouwen</option>
<option value="Luxemburg">Luxemburg</option>
<option value="Malta">Malta</option>
<option value="Nederland" selected="selected">Nederland</option>
<option value="Nieuw Zeeland">Nieuw Zeeland</option>
<option value="Noorwegen">Noorwegen</option>
<option value="Polen">Polen</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Schotland">Schotland</option>
<option value="Singapore">Singapore</option>
<option value="Slowakije">Slowakije</option>
<option value="Slovenië">Slovenië</option>
<option value="Spanje">Spanje</option>
<option value="Taiwan">Taiwan</option>
<option value="Thailand">Thailand</option>
<option value="Tsjechië">Tsjechië</option>
<option value="Turkijë">Turkijë</option>
<option value="Uruguay">Uruguay</option>
<option value="Venezuela">Venezuela</option>
<option value="Verenigd Koninkrijk">Verenigd Koninkrijk</option>
<option value="Verenigde Staten">Verenigde Staten</option>
<option value="Zuid-Afrika">Zuid-Afrika</option>
<option value="Zweden">Zweden</option>
<option value="Zwitserland">Zwitserland</option>
        </select>
          <div id="rn_ErrorCountryName" class="FormInputErrorPlaceholder"></div>
        <div class="csp-country-hidden">
          <rn:widget 
            path="input/FormInput" 
            name="Incident.c$country" 
            required="false" 
            label_input="Country - dummy field"
          />
        </div>

      </div>
      <!-- /COUNTRY -->

      <!-- ZIP -->
      <div class="csp-input-right csp-zip">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$zip_code"
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ZIP_CODE_NL#"/>
        <div id="rn_ErrorZipName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /ZIP -->

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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_NL#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_NL/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_NL#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
       <rn:widget 
          path="custom/FormSubmit_nl/mnnFormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_NL#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_NL#" 
          on_success_url="/app/ask_confirm_nl" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_NL#" />
        </rn:condition>
      </div>
      <!-- /SUBMIT -->
    </form>
  </div>
</div> <!-- /csp-wrapper -->


<script>
// Update Category after selection 
var _globData = [];
function _push2list(data){
  if(data!=null){
    if(!isDataInList(data[0].id, _globData)){
      for(var k=0;k<data.length;k++){
        _globData.push(data[k]);
      }
    }
  }   
};
function isDataInList(catId, displayCategoryList) {
var catFound = false;
  for(var i = 0; i < displayCategoryList.length; i++) {
    if(catId == displayCategoryList[i].id) {
      catFound = true;
      break;
    }
  }
  return catFound;
};
// /Update Category after selection 

// Updates the country into the rn_country 
function updateCountry() {
  _country = $( "#csp-country-select option:selected" ).text();
  $('input[name="Incident.CustomFields.c.country"]').val(_country);
}

// Updates the damaged reason to rn 
function rnDamageReason(reason) {
  $("#rn_SelectionInput_12 select").val(reason.value);
}

$(document).ready(function(){
  // default country (change address)
  var _country = $( "#csp-country-select option:selected" ).text();
  $('input[name="Incident.CustomFields.c.country"]').val(_country);

  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Gelieve het veld in te vullen"}); // updating inputs titles

  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");        
  });

// Damaged option click
  $('.damaged-item-chain').click(function(){ // If user clicks on damaged chain
    $('.damaged-item-reason-wrap').hide();
    $(".damaged-item-reason").val("185");
    document.getElementById('rn_TextInput_11_Incident.CustomFields.c.coupon_reorder_freetext').value = "chain";    
    $("#rn_SelectionInput_12 select").val("185");
  });

  $('.damaged-item-pendant').click(function(){ // If user clicks on damaged pendant
    $('.damaged-item-reason-wrap').show();
    $(".damaged-item-reason").val("193");
    document.getElementById('rn_TextInput_11_Incident.CustomFields.c.coupon_reorder_freetext').value = "pendant";
    $("#rn_SelectionInput_12 select").val("193");
  });

});
  
</script>