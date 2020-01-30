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
  <div class="csp-header">Contattaci</div>

  <div class="csp-teaser">Mandaci per favore le tue domande o commenti utilizzando il modulo sottostante e ti contatteremo il prima possibile.</div>
  <ul class="csp-teaser-list">
    <li><span>Puoi trovare la risposta alla maggior parte delle domande nella nostra sezione <a href="https://www.collanaconnome.com/Article.aspx?p=5058&source=emailus" target="_top">FAQ</a>.</span></li>
    <li><span>Per aggiornarsi sulla situazione del tuo ordine, ti invitiamo alla sezione <a 
    href="https://www.collanaconnome.com/OrderTracking.aspx?source=emailus" target="_top">Informazioni Tracking Ordini e Spedizioni</a>.</span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">
      <!-- FIRST NAME -->

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="29" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_IT#"/>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_IT#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_IT#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_IT#" />
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
         <rn:widget 
          path="custom/input_it/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_IT#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_IT#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_IT#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_IT"
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
              <span>Ciondolo danneggiato</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Catenina danneggiata</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">Cosa non va?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">Reazione allergica</option>
              <option value="184">Braccialetto danneggiato</option>
              <option value="185" selected="selected">Catenina danneggiata</option>
              <option value="186">Orecchini danneggiati</option>
              <option value="187">Vetro rotto</option>
              <option value="188">Anello danneggiato</option>
              <option value="189">Fermaglio rotto</option>
              <option value="190">Incisione storta</option>
              <option value="191">Ciondolo storto</option>
              <option value="192">Scatola regalo danneggiata</option>
              <option value="193">Pietra scollata</option>
              <option value="194">Placcatura in oro consumata</option>
              <option value="195">Incisione sbiadita</option>
              <option value="196">Gancetto aperto</option>
              <option value="197">Graffi sul ciondolo</option>
              <option value="199">Estremità taglienti</option>
              <option value="200">Pietra pendente scollata</option>
              <option value="201">Ossidato</option>
              <option value="202">Prodotto deformato</option>
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
          path="custom/FormInput_it/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_IT#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_it/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_IT#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_it/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_IT#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_it/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_IT#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_it/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_IT#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_IT#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_IT#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- STATE -->
      <div class="csp-input-right csp-state">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$state" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STATE_IT#"/>
          <div id="rn_ErrorStateName" class="FormInputErrorPlaceholder"></div>  
      </div>
      <!-- /STATE -->

      <!-- COUNTRY -->
      <div class="csp-input-left rn_TextInput csp-country">
        <label class="rn_Label">Stato <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
<option value="Argentinië">Argentinië</option>

<option value="Argentina">Argentina</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Belgio">Belgio</option>
<option value="Brasile">Brasile</option>
<option value="Canada">Canada</option>
<option value="Cile">Cile</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croazia">Croazia</option>
<option value="Cipro">Cipro</option>
<option value="Danimarca">Danimarca</option>
<option value="Ecuador">Ecuador</option>
<option value="Estonia">Estonia</option>
<option value="Finlandia">Finlandia</option>
<option value="Francia">Francia</option>
<option value="Germania">Germania</option>
<option value="Grecia">Grecia</option>
<option value="Giappone">Giappone</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Islanda">Islanda</option>
<option value="India">India</option>
<option value="Inghilterra">Inghilterra</option>
<option value="Irlanda">Irlanda</option>
<option value="Israele">Israele</option>
<option value="Italia" selected="selected">Italia</option>
<option value="Jamaica">Jamaica</option>
<option value="Latvia">Latvia</option>
<option value="Lithuania">Lithuania</option>
<option value="Lussemburgo">Lussemburgo</option>
<option value="Malta">Malta</option>
<option value="Nuova Zelanda">Nuova Zelanda</option>
<option value="Norvegia">Norvegia</option>
<option value="Olanda">Olanda</option>
<option value="Polonia">Polonia</option>
<option value="Portogallo">Portogallo</option>
<option value="Porto Rico">Porto Rico</option>
<option value="Repubblica Ceca">Repubblica Ceca</option>
<option value="Repubblica Dominicana">Repubblica Dominicana</option>
<option value="Scozia">Scozia</option>
<option value="Singapore">Singapore</option>
<option value="Slovacchia">Slovacchia</option>
<option value="Slovenia">Slovenia</option>
<option value="Sud Africa">Sud Africa</option>
<option value="Spagna">Spagna</option>
<option value="Svezia">Svezia</option>
<option value="Svizzera">Svizzera</option>
<option value="Stati Uniti (America)">Stati Uniti (America)</option>
<option value="Taiwan">Taiwan</option>
<option value="Tailandia">Tailandia</option>
<option value="Turchia">Turchia</option>
<option value="Uruguai">Uruguai</option>
<option value="Ungheria">Ungheria</option>
<option value="Venezuela">Venezuela</option>
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
          label_input="#rn:msg:CUSTOM_MSG_ZIP_CODE_IT#"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_IT#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_IT/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_IT#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="custom/FormSubmit_it/mnnFormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_IT#" 
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_IT#" 
          on_success_url="/app/ask_confirm_it" 
          error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_IT#" />
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

  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Si prega di completare questo campo"}); // updating inputs titles

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