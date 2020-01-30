<rn:theme path="/euf/assets/themes/standard" css="order-date.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500');

  body,
  input,
  label,
  select,
  textarea,
  input[type="email"],
  input[type="number"],
  input[type="password"],
  input[type="search"],
  input[type="tel"],
  input[type="text"],
  input[type="url"],
  input[type="color"],
  input[type="date"],
  input[type="datetime"],
  input[type="datetime-local"],
  input[type="month"],
  input[type="time"],
  input[type="week"],
  select[multiple=multiple],
  .rn_Container {
    font-family: 'Montserrat',sans-serif;
    color: black;
  }

  .order-late-wrap {
    color: black;
  }

  .order-late-ttl {
    font-weight: 500;
  }

  .unsatisfied-teaser strong {
    font-weight: 500;
  }

  label.order-late-select {
    border: 1px solid black;
  }

  .order-late-select:before {
    border: 1px solid black;
  }

  .order-late-inner input:checked + label:before {
    background-color: black;
  }

  .rn_FormSubmit button, 
  .rn_FormSubmit button:hover, 
  .rn_FormSubmit button:active, 
  .rn_FormSubmit button:focus {
    background-color: black;
    color: white;
    border-radius: initial;
    height: 50px;
  }

  .order-late-text strong {
    display: block;
    font-weight: 500;
  }

  @media screen and (max-width: 768px) {
    .rn_FormSubmit button, 
    .rn_FormSubmit button:hover, 
    .rn_FormSubmit button:active, 
    .rn_FormSubmit button:focus {
      width: 100%;
    }
  }

</style>

<div class="rn_Container">
  <div class="unsatisfied-box">
    <div class="unsatisfied-teaser">
      <div>#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_TEASER1_OAL_US#</div>
      <div>#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_TEASER2_OAL_US#</div>
    </div>
    <hr class="silver-border" />

    <div class="order-late-wrap">
      <div class="order-late-inner">

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-1" 
          name="order-late-option-select" 
          checked="checked" 
          value="Earrings">
        <label class="order-late-select" for="order-late-select-1">
          <div class="order-late-text-wrap">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT1_TITLE_OAL_US#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT1_TEXT_OAL_US#</div>
          </div>
          <div class="order-late-image-wrap">
            <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/order-earing.png" />
          </div>
        </label>

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-2" 
          name="order-late-option-select" 
          value="Bracelet">
        <label class="order-late-select" for="order-late-select-2">
          <div class="order-late-text-wrap">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT2_TITLE_OAL_US#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT2_TEXT_OAL_US#</div>
          </div>
          <div class="order-late-image-wrap">
            <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/order-bracelet.png" />
          </div>
        </label>

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-3" 
          name="order-late-option-select" 
          value="Necklace">
        <label class="order-late-select" for="order-late-select-3">
          <div class="order-late-text-wrap">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT3_TITLE_OAL_US#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_OPT3_TEXT_OAL_US#</div>
          </div>
          <div class="order-late-image-wrap">
            <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/order-necklace.png" />
          </div>
        </label>
        <strong>#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_TEASER3_OAL_US#</strong>
        <hr class="silver-border" />

        <form id="rn_QuestionSubmit1" method="post" action="/ci/ajaxRequest/sendForm">
          <div id="rn_ErrorLocation"></div>
          <rn:condition logged_in="false">
          <!-- LANG -->
          <div class="csp-lang-wrap" style="display: none;">
            <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="150" />
            <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="151" />
            <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.order_status" default_value="154" />
          </div>
          <!-- /LANG -->

          <!-- E-MAIL -->
          <div class="csp-input csp-email">
            <div class="teaser">#rn:msg:CUSTOM_MSG_ORDER_LATE_SUPPLIER_EMAIL_OAL_US#</div>
            <div class="field-inline">
              <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
            </div>
          </div>
          <!-- E-MAIL -->

          <!-- Order ID -->
          <div class="csp-input csp-order-id">
            <div class="teaser teaser-inline">#rn:msg:CUSTOM_MSG_ORDER_LATE_SUPPLIER_ORDER_ID_OAL_US#</div>
            <div class="field-inline">
              <rn:widget 
                path="input/FormInput" 
                name="Incident.CustomFields.c.order_id_text_field" 
                required="true" 
              />
            </div>
          </div>
          <!-- Order ID -->

          <!-- SUBJECT -->
          <div class="csp-subject" style="display: none;"> 
            <rn:widget path="input/FormInput" name="Incident.Subject" required="false" label_input="#rn:msg:SUBJECT_LBL#"/>
            </rn:condition>
            <rn:condition logged_in="true">
            <rn:widget path="input/FormInput" name="Incident.Subject" required="false" initial_focus="false" label_input="#rn:msg:SUBJECT_LBL#"/>
            </rn:condition>
          </div>
          <!-- /SUBJECT -->

          <!-- SUBMIT -->
          <div class="csp-submit-sates">
            <rn:widget path="input/FormSubmit" label_button="Submit" on_success_url="/app/thank-late-oandl-us" error_location="rn_ErrorLocation" />
            <rn:condition content_viewed="2" searches_done="1">
            <rn:condition_else/>
            <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
            </rn:condition>
          </div>
          <!-- /SUBMIT -->
        </form>
      </div>
    </div>
  </div>
</div>

<script>

  $(function() {
    document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "151"; // default - earrings

    $('input:radio[name="order-late-option-select"]').change(
    function(){
      if ($(this).val() == 'Necklace') {
        document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "155";
      }
      else if ($(this).val() == 'Bracelet') {
        document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "156";
      }

      else if ($(this).val() == 'Earrings') {
        document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "151";
      }
    });
  });

  //send window message to parent
  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
  });
</script>
