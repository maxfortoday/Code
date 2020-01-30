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

  <div class="csp-teaser">Envoyez-nous vos questions/commentaires dans l'espace ci-dessous, et nous vous contacterons le plus rapidement possible.</div>
  <ul class="csp-teaser-list">
    <li><span>Trouvez vos réponses en consultant notre <a href="https://www.moncollierprenom.com/Article.aspx?p=5058&amp;source=emailus" target="_top">FAQ</a>.</span></li>
    <li><span>Pour suivre votre commande, nous vous invitons à consulter votre <a href="https://www.moncollierprenom.com/OrderTracking.aspx?source=emailus" target="_top">Suivi de commande</a>.</span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="8" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:CUSTOM_MSG_FIRST_NAME_LBL_FR#"/>
        <div id="rn_ErrorNameFirst" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:CUSTOM_MSG_LAST_NAME_LBL_FR#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification_FR#"
          label_validation="#rn:msg:CUSTOM_MSG_REENTER_A_VALUE_FOR_THE_FIELD_S_LBL_FR#" />
          <div id="rn_ErrorEmail" class="FormInputErrorPlaceholder FormInputErrorPlaceholderForEmail"></div>
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget 
          path="custom/input_fr/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          label_input="#rn:msg:CUSTOM_MSG_CATEGORY_LBL_FR#" 
          label_all_values="#rn:msg:CUSTOM_MSG_ALL_CATEGORIES_LBL_FR#" 
          label_nothing_selected="#rn:msg:CUSTOM_MSG_SELECT_A_CATEGORY_LBL_FR#"
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_FR"
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
              <span>Pendentif endommagé</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Chaine endommagée</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">Quel est le problème?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">Réaction allergique</option>
              <option value="184">Bracelet endommagé</option>
              <option value="185" selected="selected">Chaine cassée</option>
              <option value="186">Boucles d'oreilles endommagées</option>
              <option value="187">Verre cassé</option>
              <option value="188">Bague endommagée</option>
              <option value="189">Fermoir cassé</option>
              <option value="190">Inscription penchée</option>
              <option value="191">Pendentif tordu</option>
              <option value="192">Boite cadeau abimée</option>
              <option value="193">Pierre de naissance</option>
              <option value="194">Plaqué Or disparait</option>
              <option value="195">Inscription noire disparaît</option>
              <option value="196">Boucle ouverte</option>
              <option value="197">Rayures sur le pendentif</option>
              <option value="199">Bords éguisés</option>
              <option value="200">Pierre du pendentif est tombée</option>
              <option value="201">Bijou terne</option>
              <option value="202">Bijou tordu</option>
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
          path="custom/FormInput_fr/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_PHONE_NUMBER_LBL_FR#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_fr/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ORDER_NUMBER_CMD_FR#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_fr/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_FR#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_fr/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_FR#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- ITEM NAME-->
      <div class="csp-input-full csp-item-name">
        <rn:widget 
          path="custom/FormInput_fr/mnnFormInput" 
          name="Incident.CustomFields.c.item_name" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ITEM_NAME_FR#"/>
          <div id="rn_ErrorItemName" class="FormInputErrorPlaceholder" style="display:none"></div>    
      </div>
      <!-- /ITEM NAME -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_FR#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_FR#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_FR#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- STATE -->
      <div class="csp-input-right csp-state">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$state" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STATE_FR#"/>
      </div>
      <!-- /STATE -->

      <!-- COUNTRY -->
      <div class="csp-input-left rn_TextInput csp-country">
        <label class="rn_Label">Pays <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
<option value="Afrique du Sud">Afrique du Sud</option>
<option value="Allemagne">Allemagne</option>
<option value="Argentine">Argentine</option>
<option value="Australie">Australie</option>
<option value="Autriche">Autriche</option>
<option value="Belgique">Belgique</option>
<option value="Brésil">Brésil</option>
<option value="Canada">Canada</option>
<option value="Chili">Chili</option>
<option value="Chypre">Chypre</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatie (Hrvatska)">Croatie (Hrvatska)</option>
<option value="Danemark">Danemark</option>
<option value="Ecosse-UK">Ecosse-UK</option>
<option value="Espagne">Espagne</option>
<option value="Estonie">Estonie</option>
<option value="États-Unis">États-Unis</option>
<option value="Équateur">Équateur</option>
<option value="Finlande">Finlande</option>
<option value="France" selected="selected">France</option>
<option value="Grèce">Grèce</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hongrie">Hongrie</option>
<option value="Inde">Inde</option>
<option value="Irlande">Irlande</option>
<option value="Islande">Islande</option>
<option value="Israël">Israël</option>
<option value="Italie">Italie</option>
<option value="Jamaïque">Jamaïque</option>
<option value="Japon">Japon</option>
<option value="Lettonie">Lettonie</option>
<option value="Lituanie">Lituanie</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Malte">Malte</option>
<option value="Norvège">Norvège</option>
<option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
<option value="Pays-Bas">Pays-Bas</option>
<option value="Pologne">Pologne</option>
<option value="Porto Rico">Porto Rico</option>
<option value="Portugal">Portugal</option>
<option value="République dominicaine">République dominicaine</option>
<option value="République tchèque">République tchèque</option>
<option value="Roumanie">Roumanie</option>
<option value="Royaume-Uni">Royaume-Uni</option>
<option value="Singapour">Singapour</option>
<option value="Slovaquie">Slovaquie</option>
<option value="Slovénie">Slovénie</option>
<option value="Suède">Suède</option>
<option value="Suisse">Suisse</option>
<option value="Taiwan">Taiwan</option>
<option value="Thaïlande">Thaïlande</option>
<option value="Turquie">Turquie</option>
<option value="Uruguay">Uruguay</option>
<option value="Venezuela">Venezuela</option>
        </select>
          <div id="rn_ErrorCountryName" class="FormInputErrorPlaceholder"></div>
        <div class="csp-country-hidden">
          <rn:widget 
            path="input/FormInput" 
            name="Incident.c$country" 
            required="false" 
            label_input="Country holder"
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
          label_input="#rn:msg:CUSTOM_MSG_ZIP_CODE_FR#"/>
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
        <rn:widget path="input/FormInput" name="Incident.Threads" required="false" label_input="#rn:msg:CUSTOM_MSG_QUESTION_LBL_FR#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_FR/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_FR#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="custom/FormSubmit_fr/mnnFormSubmit" 
          label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_FR#"
          label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_FR#"
          on_success_url="/app/ask_confirm_fr"
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

  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Veuillez remplir ce champ"}); // updating inputs titles

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
