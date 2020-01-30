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

  <div class="csp-teaser">Bitte benutzen Sie dieses Formular um uns zu kontaktieren. Wir werden Ihre Fragen schnellstmöglich beantworten.</div>
  <ul class="csp-teaser-list">
    <li><span>Sie können sich auch für schnelle Antworten auf die meisten Fragen an unsere <a href="https://www.meinenamenskette.com/Article.aspx?p=5058&source=emailus" target="_top">FAQ</a> wenden.</span></li>
    <li><span>Um Ihren Bestellstatus zu überprüfen, klicken Sie bitte auf <a 
    href="https://www.meinenamenskette.com/OrderTracking.aspx?source=emailus" target="_top">Bestellungs- und Versandinformationen</a>.</span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="4" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_DE#"/>
        <div id="rn_ErrorNameFirst" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_DE#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_DE#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_DE#" />
          <div id="rn_ErrorEmail" class="FormInputErrorPlaceholder FormInputErrorPlaceholderForEmail"></div>
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget 
          path="custom/input_de/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_DE#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_DE#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_DE#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_DE"
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
              <span>Defekter Anhänger</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Defekte Kette</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">Was ist falsch?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">Allergische Reaktion</option>
              <option value="184">Defektes Armband</option>
              <option value="185" selected="selected">Kette gerissen</option>
              <option value="186">Defekte Ohrstecker</option>
              <option value="187">Gebrochenes Glas</option>
              <option value="188">Defekter Ring</option>
              <option value="189">Defekter Verschluss</option>
              <option value="190">Schlampige Gravur</option>
              <option value="191">Verbogener Anhänger</option>
              <option value="192">Defekte Geschenkbox</option>
              <option value="193">Geklebter Stein abgefallen</option>
              <option value="194">Vergoldung löst sich</option>
              <option value="195">Gravur Schwärzung verblast</option>
              <option value="196">Öse hat sich geöffnet</option>
              <option value="197">Anhänger zerkratzt</option>
              <option value="199">Scharfe Kanten</option>
              <option value="200">Stein von Charm abgefallen</option>
              <option value="201">Silber verfärbt sich</option>
              <option value="202">Verbogenes Produkt</option>
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
<!-- /DAMAGED -->

        </div>
      </div> <!-- /.damaged-item-wrap -->


      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_DE#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_DE#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_DE#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_DE#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- ITEM NAME-->
      <div class="csp-input-full csp-item-name">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Incident.CustomFields.c.item_name" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ITEM_NAME_DE#"/>
          <div id="rn_ErrorItemName" class="FormInputErrorPlaceholder" style="display:none"></div>    
      </div>
      <!-- /ITEM NAME -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_de/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_DE#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_DE#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_DE#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- STATE -->
      <div class="csp-input-right csp-state">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$state" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STATE_DE#"/>
      </div>
      <!-- /STATE -->

      <!-- COUNTRY -->
      <div class="csp-input-left rn_TextInput csp-country">
        <label class="rn_Label">Land <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
<option value="Argentinien">Argentinien</option>
<option value="Australien">Australien</option>
<option value="Belgien">Belgien</option>
<option value="Brasilien">Brasilien</option>
<option value="Chile">Chile</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Dänemark">Dänemark</option>
<option value="Domenikanische Republik">Domenikanische Republik</option>
<option value="Deutschland" selected="selected">Deutschland</option>
<option value="Ecuador">Ecuador</option>
<option value="Estland">Estland</option>
<option value="England">England</option>
<option value="Finland">Finland</option>
<option value="Frankreich">Frankreich</option>
<option value="Griechenland">Griechenland</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Island">Island</option>
<option value="Indien">Indien</option>
<option value="Irland">Irland</option>
<option value="Israel">Israel</option>
<option value="Italien">Italien</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Lettland">Lettland</option>
<option value="Litauen">Litauen</option>
<option value="Luxemburg">Luxemburg</option>
<option value="Malta">Malta</option>
<option value="Niederlande">Niederlande</option>
<option value="Neu Seeland">Neu Seeland</option>
<option value="Norwegen">Norwegen</option>
<option value="Östrerreich">Östrerreich</option>
<option value="Polen">Polen</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Scotland-UK">Scotland-UK</option>
<option value="Singapore">Singapore</option>
<option value="Slovakai">Slovakai</option>
<option value="Slovenien">Slovenien</option>
<option value="Süd Afrika">Süd Afrika</option>
<option value="Spanien">Spanien</option>
<option value="Schweden">Schweden</option>
<option value="Schweiz">Schweiz</option>
<option value="Taiwan">Taiwan</option>
<option value="Thailand">Thailand</option>
<option value="Türkei">Türkei</option>
<option value="Tschechische Republik">Tschechische Republik</option>
<option value="Ungarn">Ungarn</option>
<option value="U.S.A">U.S.A</option>
<option value="Uruguay">Uruguay</option>
<option value="Venezuela">Venezuela</option>
<option value="Zypern">Zypern</option>
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
          label_input="#rn:msg:CUSTOM_MSG_ZIP_CODE_DE#"/>
        <div id="rn_ErrorZipName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /ZIP -->

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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_DE#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_DE/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_DE#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
         <rn:widget 
          path="custom/FormSubmit_de/mnnFormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_DE#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_DE#" 
          on_success_url="/app/ask_confirm_de" 
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
  
  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Bitte füllen Sie dieses Feld aus"}); // updating inputs titles
  
  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    

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
});  
</script>
