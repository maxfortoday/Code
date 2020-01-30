<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />

<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<style type="text/css">
  .rn_TextInput .rn_Label { text-align: left; display: block; }
  .rn_DateInput select { width: 150px; }
</style>

<div class="csp-wrapper"> <!-- csp-wrapper -->
  <div class="csp-header" style="text-align: center; margin: auto; width: 100%;">TG AAQ</div>

  <div class="rn_PageContent rn_AskQuestion rn_Container" style="margin: auto; width: 800px;">
    <form id="rn_QuestionSubmit" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">

      <!-- LANG -->
      <div class="csp-lang-wrap">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="90" />
      </div>

      <!-- SUBJECT -->
      <div class="csp-subject">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
        <rn:condition logged_in="true">
        <rn:widget path="input/FormInput" name="Incident.Subject" required="false" initial_focus="false" label_input="#rn:msg:SUBJECT_LBL#"/>
        </rn:condition>
      </div>
      <!-- /SUBJECT -->

      <!-- E-MAIL -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Contact.Emails.PRIMARY.Address" 
          required="true" 
          require_validation="false" 
          label_input="Email" />
      </div>
      <!-- E-MAIL VER-->

      <!-- CATEGORY -->
      <div class="csp-input-full csp-category">
        <rn:widget 
          path="custom/input/CustomProductCategoryInput" 
          name="Incident.Category" 
          required_lvl="1" 
          category_id_key="CUSTOM_CFG_CATEGORIES_LIST_CA"
          />
      </div>
      <!-- /CATEGORY -->




      <!-- Tracking number -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.item_name" 
          initial_focus="true" 
          label_input="Tracking number"/>
      </div>

      <!-- Hold csr -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.hold_csr" 
          initial_focus="true" 
          label_input="Hold csr"/>
      </div>

      <!-- hold_packing -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.hold_packing" 
          initial_focus="true" 
          label_input="Hold Packing"/>
      </div>

      <!-- wismo_status -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.wismo_status" 
          initial_focus="true" 
          label_input="Wismo Status"/>
      </div>

      <!-- Delivery eta -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.delivery_eta" 
          initial_focus="true" 
          label_input="Delivery eta"/>
      </div>

      <!-- Shipping date -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.shipping_date" 
          initial_focus="true" 
          label_input="Shipping date"/>
      </div>

      <!-- SKU -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.sku" 
          initial_focus="true" 
          label_input="SKU"/>
      </div>

      <!-- Refund -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.refund_om" 
          initial_focus="true" 
          label_input="Refund"/>
      </div>

      <!-- currency -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.currency" 
          initial_focus="true" 
          label_input="Currency"/>
      </div>

      <!-- Total Cost -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.total_cost" 
          initial_focus="true" 
          label_input="Total Cost"/>
      </div>

      <!-- Event Level -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.event_level" 
          initial_focus="true" 
          label_input="Event Level"/>
      </div>

      <!-- order_id_text_field -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.order_id_text_field" 
          initial_focus="true" 
          label_input="Order id (text field)"/>
      </div>




      <!-- Email -->
      <div class="csp-input-full">
<!-- 
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.Email" 
          initial_focus="true" 
          label_input="Email"/>
-->
      </div>

      <!-- Shipping Type -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.shipping_type" 
          initial_focus="true" 
          label_input="Shipping Type"/>
      </div>

      <!-- Shipping Method -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.shipping_method" 
          initial_focus="true" 
          label_input="Shipping Method"/>
      </div>

      <!-- payment_date -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.payment_date" 
          initial_focus="true" 
          label_input="payment_date"/>
      </div>

      <!-- Item id no. 1 -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.item_id_no_1" 
          initial_focus="true" 
          label_input="Item id no. 1"/>
      </div>

      <!-- Item cost no. 1 -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.item_cost_no_1" 
          initial_focus="true" 
          label_input="Item cost no. 1"/>
      </div>

      <!-- Item description no. 1 -->
      <div class="csp-input-full">
        <rn:widget 
          path="input/FormInput" 
          name="Incident.CustomFields.c.item_description_no_1" 
          initial_focus="true" 
          label_input="Item description no. 1"/>
      </div>




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
  $(".rn_CustomProductCategoryInput > button").click(function(ev){
    //send window message to parent
    window.parent.postMessage({
      'func': 'parentFunc',
      'message': 'setscroll'
    }, "*");    
    
  });
});  
</script>
