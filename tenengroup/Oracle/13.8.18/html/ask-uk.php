<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<style type="text/css">
  .gift-for-wrap {
    margin-bottom: 20px;
    width: 99.5%;
  }

  .gift-for-ttl {
    font-weight: bold;
    font-size: 12px;

  }
</style>


<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-header">Email us</div>

  <div class="csp-teaser">Please send us your questions/comments in the form below, and we will contact you within 48 hours.</div>
  <ul class="csp-teaser-list">
    <li><span>You can also refer to our <a href="https://www.mynamenecklace.co.uk/Article.aspx?p=5058&source=emailus" target="_top">FAQ</a> for quick answers for most questions.</span></li>
    <li><span>To follow up on your order, please visit the <a href="https://www.mynamenecklace.co.uk/OrderTracking.aspx?source=emailus" target="_top">Order Tracking Information</a>.</span></li>
  </ul>
  <hr class="CShr">

  <div class="rn_PageContent rn_AskQuestion rn_Container">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="30" />
      </div>
      <!-- /LANG -->

      <!-- FIRST NAME -->
      <div class="csp-input-left csp-first-name">
        <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" initial_focus="true" label_input="#rn:msg:FIRST_NAME_LBL#"/>
        <div id="rn_ErrorNameFirst" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FIRST NAME -->

      <!-- LAST NAME -->
      <div class="csp-input-right csp-last-name">
        <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" label_input="#rn:msg:LAST_NAME_LBL#"/>
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
          label_input="#rn:msg:CUSTOM_MSG_Email_Verification#" />
          <div id="rn_ErrorEmail" class="FormInputErrorPlaceholder FormInputErrorPlaceholderForEmail"></div>
      </div>
      <div class="clr email-var-end"></div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget 
          path="custom/input_uk/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_EN_UK"
        />
      </div>
      <div id="txtCustomMessageToChangeMyItem" class="csp-teaser">
      </div>
      <!-- /CATEGORY -->

      <!-- DAMAGED -->
      <div class="damaged-item-wrap"> <!-- .damaged-item-wrap -->
        <div class="damaged-item-inner">
          <div class="damaged-item-pendant">
            <label for="damaged-item-pendant">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-item-dt.png" />
              <input type="radio" name="damaged-item-option" id="damaged-item-pendant" value="pendant">
              <span>Damaged Item</span>
            </label>
          </div>
          <div class="damaged-item-chain">
            <label for="damaged-item-chain">
              <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/damaged-chain-dt.jpg" />
              <input type="radio" name="damaged-item-option" id="damaged-item-chain" value="chain" checked="checked">
              <span>Damaged Chain</span>
            </label>
          </div>

          <div class="damaged-item-reason-wrap">
            <div class="damaged-item-reason-ttl">What is wrong?</div>
            <select class="damaged-item-reason" onchange="rnDamageReason(this);">
              <option value="183">Allergic reaction</option>
              <option value="184">Broken bracelet</option>
              <option value="185" selected="selected">Broken Chain</option>
              <option value="186">Broken earrings</option>
              <option value="187">Broken glass</option>
              <option value="188">Ring broke</option>
              <option value="189">Chain clasp broke</option>
              <option value="190">Crooked engraving</option>
              <option value="191">Crooked pendant</option>
              <option value="192">Damaged giftbox</option>
              <option value="193">Glued stone fell</option>
              <option value="194">GP wore off</option>
              <option value="195">Black Ink faded</option>
              <option value="196">Loop opened</option>
              <option value="197">Scratches on pendant</option>
              <option value="199">Sharp edges</option>
              <option value="200">Charm stone fell</option>
              <option value="201">Tarnished</option>
              <option value="202">Bent product</option>
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

    <!-- GIFT FOR -->
      <div style="display: none;">
        <rn:widget path="input/FormInput" name="Incident.c$gift" label_input="This is a gift for:" />
      </div>

      <div class="gift-for-wrap" style="display: none;">
        <div class="gift-for-ttl">This is a gift for:</div>
        <select class="gift-for" onchange="rnGiftFor(this);">
          <option value="Wife">Wife</option>
          <option value="Husband">Husband</option>
          <option value="Mother">Mother</option>
          <option value="Father">Father</option>
          <option value="Myself" selected="selected">Myself</option>
          <option value="Other">Other</option>
        </select>
        <div class="gift-for-answer"></div>
      </div>
      <!-- /GIFT FOR -->

      <!-- PHONE -->
      <div class="csp-input-left csp-phone">
        <rn:widget 
          path="custom/FormInput_uk/mnnFormInput" 
          name="Contact.Phones.MOBILE.Number" 
          required="false" 
          label_input="#rn:msg:PHONE_NUMBER_LBL#"/>
          <div id="rn_ErrorPhoneNumber" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /PHONE -->

      <!-- Order ID -->
      <div class="csp-input-right csp-order-id">
        <rn:widget 
          path="custom/FormInput_uk/mnnFormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          required="false" 
          label_input="#rn:msg:ORDER_NUMBER_CMD#"/>
          <div id="rn_ErrorOrderID" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /Order ID -->

      <!-- Inscription on item -->
      <div class="csp-input-left csp-inscription-item">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.c$reorder_sku_link" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_INSCRIPTION_ITEM_EN#"/>
          <div id="rn_ErrorInscriptionItem" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Inscription on item -->

      <!-- Change length -->
      <div class="csp-input-right csp-chain-length">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.c$update_chain_length" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CHANGE_CHAIN_LENGTH_EN#"/> 
          <div id="rn_ErrorChainLength" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Change length -->

      <!-- ITEM NAME -->
      <div class="csp-input-full csp-item-name">
        <rn:widget 
          path="custom/FormInput_uk/mnnFormInput" 
          name="Incident.CustomFields.c.item_name" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_ITEM_NAME_EN#"/>
          <div id="rn_ErrorItemName" class="FormInputErrorPlaceholder" style="display:none"></div>
      </div>
      <!-- /ITEM NAME -->

      <!-- Shipping Name -->
      <div class="csp-input-left csp-shipping-name">
        <rn:widget 
          path="custom/FormInput_mnn/mnnFormInput" 
          name="Incident.c$ship_to" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_SHIP_TO_EN#"/>
          <div id="rn_ErrorShippingName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /Shipping Name -->

      <!-- STREET -->
      <div class="csp-input-right csp-street">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$street" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_STREET_ADDRESS_EN#"/>
        <div id="rn_ErrorStreetName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /STREET -->

      <!-- CITY -->
      <div class="csp-input-left csp-city">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.c$city" 
          required="false" 
          label_input="#rn:msg:CUSTOM_MSG_CITY_EN#"/>
        <div id="rn_ErrorCityName" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /CITY -->

      <!-- COUNTRY -->
      <div class="csp-input-right rn_TextInput csp-country">
        <label class="rn_Label">Country <span class="rn_Required" aria-label="Required">*</span></label>
        <select id="csp-country-select" name="csp-country-select" onchange="updateCountry();">
<option value="Albania">Albania</option>
<option value="Andorra">Andorra</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Brazil">Brazil</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Canada">Canada</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="El Salvador">El Salvador</option>
<option value="Estonia">Estonia</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Greece">Greece</option>
<option value="Guatemala">Guatemala</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Kuwait">Kuwait</option>
<option value="Latvia">Latvia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedonia">Macedonia</option>
<option value="Malaysia">Malaysia</option>
<option value="Malta">Malta</option>
<option value="Mexico">Mexico</option>
<option value="Monaco">Monaco</option>
<option value="Montenegro">Montenegro</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Norway">Norway</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Scotland - UK">Scotland - UK</option>
<option value="Serbia">Serbia</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Taiwan">Taiwan</option>
<option value="Thailand">Thailand</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Turkey">Turkey</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom" selected="selected">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
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
          label_input="#rn:msg:CUSTOM_MSG_POST_CODE_EN#"/>
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
        <rn:widget 
          path="input/FormInput" 
          name="Incident.Threads" 
          required="false" 
          label_input="#rn:msg:QUESTION_LBL#"/>
        <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
      </div>
      <!-- /QUESTION -->

      <!-- FILE UPLAOD -->
      <div class="csp-upload">
        <rn:widget 
      path="custom/FileAttachmentUpload_UK/CustomFileAttachmentUpload" 
      required="false" 
      label_input="#rn:msg:CUSTOM_MSG_FILE_ATTACHEMENT_EN#" />
        <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
      </div>
      <!-- /FILE UPLAOD -->

      <!-- SUBMIT -->
      <div class="csp-submit">
        <rn:widget 
          path="custom/FormSubmit_uk/mnnFormSubmit" 
          label_button="#rn:msg:SUBMIT_YOUR_QUESTION_CMD#" 
          on_success_url="/app/ask_confirm_au_uk/#" 
          error_location="rn_ErrorLocation" />
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

// default gift option
document.getElementById('rn_TextInput_14_Incident.CustomFields.c.gift').value = "Myself";

// Uppdate gift option.
function rnGiftFor(gift) {
  document.getElementById('rn_TextInput_14_Incident.CustomFields.c.gift').value = gift.value;
}

// Updates the damaged reason to rn 
function rnDamageReason(reason) {
  $("#rn_SelectionInput_12 select").val(reason.value);
}

$(document).ready(function(){

  // Country
  var _country = $( "#csp-country-select option:selected" ).text();
  $('input[name="Incident.CustomFields.c.country"]').val(_country);

  $("#rn_QuestionSubmit input, #rn_QuestionSubmit textarea").attr({"title" : "Please fill out this field"}); // updating inputs titles

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
