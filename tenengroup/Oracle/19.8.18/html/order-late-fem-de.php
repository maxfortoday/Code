<rn:theme path="/euf/assets/themes/standard" css="order-date.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script -->


<div class="rn_Container">
  <div class="unsatisfied-box">
    <div class="unsatisfied-teaser">
      <div>#rn:msg:CUSTOM_MSG_ORDER_LATE_TEASER1_FEM_DE#</div>
      <div>#rn:msg:CUSTOM_MSG_ORDER_LATE_TEASER2_FEM_DE#</div>
    </div>
    <hr class="silver-border" />

    <div class="order-late-wrap">
      <div class="order-late-inner">

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-1" 
          name="order-late-option-select" 
          value="Earrings">
        <label class="order-late-select order-late-select25" for="order-late-select-1">
          <div class="order-late-text-wrap order-late-text-wrap100">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT1_TITLE_FEM_DE#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT1_TEXT_FEM_DE#</div>
          </div>
          <div class="order-late-image-wrap order-late-image-wrap100">
            <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/order-earing.png" />
          </div>
        </label>

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-2" 
          name="order-late-option-select" 
          checked="checked" 
          value="Fifty">
        <label class="order-late-select order-late-select25" for="order-late-select-2">
          <div class="order-late-text-wrap order-late-text-wrap100">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT2_DEFAULT_TITLE_FEM_DE#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT2_DEFAULT_TEXT_FEM_DE#</div>
          </div>
          <div class="order-late-image-wrap order-late-image-wrap100">
            <img src="https://mnn.custhelp.com/euf/assets/themes/standard/images/order-products.png" />
          </div>
        </label>

        <input 
          type="radio" 
          class="order-late-option-select" 
          id="order-late-select-3" 
          name="order-late-option-select" 
          value="Refund">
        <label class="order-late-select order-late-select25" for="order-late-select-3">
          <div class="order-late-text-wrap order-late-text-wrap100">
            <div class="order-late-ttl">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT3_TITLE_FEM_DE#</div>
            <div class="order-late-text">#rn:msg:CUSTOM_MSG_ORDER_LATE_OPT3_TEXT_FEM_DE#</div>
          </div>
          <div class="order-late-image-wrap order-late-image-wrap100">
            &nbsp;
          </div>
        </label>
        <strong>#rn:msg:CUSTOM_MSG_LATE_SUPPLIER_TEASER3_FEM_DE#</strong>
        <hr class="silver-border" />

        <form id="rn_QuestionSubmit1" method="post" action="/ci/ajaxRequest/sendForm">
          <div id="rn_ErrorLocation"></div>
          <rn:condition logged_in="false">
          <!-- LANG -->
          <div class="csp-lang-wrap" style="display: none;">
            <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="88" />
            <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="145" />
            <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.order_status" default_value="153" />
          </div>
          <!-- /LANG -->

          <!-- E-MAIL -->
          <div class="csp-input csp-email">
            <div class="teaser">#rn:msg:CUSTOM_MSG_ORDER_LATE_SUPPLIER_EMAIL_FEM_DE#</div>
            <div class="field-inline">
              <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
            </div>
          </div>
          <!-- E-MAIL -->

          <!-- Order ID -->
          <div class="csp-input csp-order-id">
            <div class="teaser teaser-inline">#rn:msg:CUSTOM_MSG_ORDER_LATE_SUPPLIER_ORDER_ID_FEM_DE#</div>
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
            <rn:widget 
              path="input/FormSubmit" 
              label_button="#rn:msg:CUSTOM_MSG_SUBMIT_YOUR_QUESTION_CMD_DE#" 
              label_submitting_message="#rn:msg:CUSTOM_MSG_SUBMITTING_ELLIPSIS_MSG_DE#" 
              on_success_url="/app/thank-late-fem-de" 
              error_location="rn_ErrorLocation" />
            <rn:condition content_viewed="2" searches_done="1">
            <rn:condition_else/>
            <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_DE#" />
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
    document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "145"; // default - earrings

    $('input:radio[name="order-late-option-select"]').change(
    function(){
      if ($(this).val() == 'Refund') {
        document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "144";
      }
      else if ($(this).val() == 'Fifty') {
        document.getElementById('rn_SelectionInput_3_Incident.CustomFields.c.general_reason').value = "145";
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
