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

  <div class="csp-teaser">Skicka dina frågor/kommentarer till oss i nedanstående formulär så kontaktar vi dig inom två arbetsdagar.</div>
  <ul class="csp-teaser-list">
    <li><span>Du kan också läsa i vår <a href="https://www.mittnamnhalsband.se/Article.aspx?p=5058&source=emailus" target="_top">FAQ</a> där du snabbt kan hitta svaren på de flesta frågor.</span></li>
    <li><span>För att få information om din beställning vänligen gå till vår sida för: <a 
    href="https://www.mittnamnhalsband.se/OrderTracking.aspx?source=emailus" target="_top">Sp&aring;ra din best&auml;llning</a></span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="24" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_SE#"/>
        <div id="rn_ErrorNameFirst" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_SE#"/>
        <div id="rn_ErrorNameLast" class="FormInputErrorPlaceholder"></div>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_SE#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_SE#" />
          <div id="rn_ErrorEmail" class="FormInputErrorPlaceholder FormInputErrorPlaceholderForEmail"></div>
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget 
          path="custom/input_se/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_SE#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_SE#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_SE#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_SE"
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
              <span>Berlocken är skadad</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Skadad kedja</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">Vad är fel?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">Allergisk reaktion</option>
              <option value="184">Armbandet är trasigt</option>
              <option value="185" selected="selected">Kedjan är trasig</option>
              <option value="186">Defekt på örhängena</option>
              <option value="187">Glaset är trasigt</option>
              <option value="188">Defekt på ringen</option>
              <option value="189">Låset på kedjan är trasigt</option>
              <option value="190">Gravyren är krokig</option>
              <option value="191">Skadad berlock</option>
              <option value="192">Present asken är skadad</option>
              <option value="193">Limmad sten föll</option>
              <option value="194">Guld pläteringen är borta</option>
              <option value="195">Gravyren är borta</option>
              <option value="196">Ringen är öppen</option>
              <option value="197">Repor på berlocken</option>
              <option value="199">Vassa kanter</option>
              <option value="200">Stenen på berlocken har ramlat</option>
              <option value="201">Silver är missfärgat</option>
              <option value="202">Smycket är böjt</option>
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
          path="custom/FormInput_se/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_SE#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_se/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_SE#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_se/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_SE#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_se/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_SE#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- ITEM NAME -->
      <div class="csp-input-full csp-item-name">
        <rn:widget 
          path="custom/FormInput_se/mnnFormInput" 
          name="Incident.CustomFields.c.item_name" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ITEM_NAME_SE#"/>

          <div id="rn_ErrorItemName" class="FormInputErrorPlaceholder" style="display:none"></div>    
      </div>
      <!-- /ITEM NAME -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_se/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_SE#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_SE#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_SE#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- COUNTRY -->
      <div class="csp-input-right rn_TextInput csp-country">
        <label class="rn_Label">Land <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
          <option value="Argentina">Argentina</option>
          <option value="Australien">Australien</option>
          <option value="Belgien">Belgien</option>
          <option value="Brasilien">Brasilien</option>
          <option value="Canada">Canada</option>
          <option value="Chile">Chile</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Danmark">Danmark</option>
          <option value="Dominikanska Republiken">Dominikanska Republiken</option>
          <option value="Ecuador">Ecuador</option>
          <option value="England">England</option>
          <option value="Estonia">Estonia</option>
          <option value="Finland">Finland</option>
          <option value="Frankrike">Frankrike</option>
          <option value="Gekland">Gekland</option>
          <option value="Holland">Holland</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="India">India</option>
          <option value="Irland">Irland</option>
          <option value="Island">Island</option>
          <option value="Israel">Israel</option>
          <option value="Italien">Italien</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Lettland">Lettland</option>
          <option value="Litauen">Litauen</option>
          <option value="Luxenburg">Luxenburg</option>
          <option value="Malta">Malta</option>
          <option value="NYa Zeeland">NYa Zeeland</option>
          <option value="Norge">Norge</option>
          <option value="Polen">Polen</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Scotland-UK">Scotland-UK</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakien">Slovakien</option>
          <option value="Slovenien">Slovenien</option>
          <option value="Syd Afrika">Syd Afrika</option>
          <option value="Spanien">Spanien</option>
          <option value="Sverige" selected="selected">Sverige</option>
          <option value="Sweitz">Sweitz</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Thailand">Thailand</option>
          <option value="Tjeckien">Tjeckien</option>
          <option value="Turkiet">Turkiet</option>
          <option value="Tyskland">Tyskland</option>
          <option value="USA">USA</option>
          <option value="Ungern">Ungern</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Österrike">Österrike</option>
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
      <div class="csp-input-left csp-zip">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$zip_code"
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ZIP_CODE_SE#"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_SE#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_SE/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_SE#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="custom/FormSubmit_se/mnnFormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_SE#"
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_SE#"
          on_success_url="/app/ask_confirm_se"
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_FR#" />
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
  var _country = $( "#csp-country-select option:selected" ).text();
  $('input[name="Incident.CustomFields.c.country"]').val(_country);

  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Vänligen fyll i detta fält"}); // updating inputs titles

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
