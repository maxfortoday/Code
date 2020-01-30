<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>

<script type="text/javascript">
  function addCss() {
    var head = document.getElementsByTagName('head')[0], link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = '/euf/assets/themes/standard/ugc.css';
    head.appendChild(link);
    return link;
  }
  addCss();
</script>

<style type="text/css">
.csp-ugc-upload label:before {
  content: 'Téléchargez une photo';
}
</style>

<div class="rn_Container">
  <div class="ugc-wrap">

    <form id="rn_QuestionSubmit1" method="post" action="/ci/ajaxRequest/sendForm">
      <div id="rn_ErrorLocation"></div>
      <rn:condition logged_in="false">
      <!-- LANG -->

      <div class="csp-lang-wrap" style="display: none;">
        <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="8" />
        <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="221" />
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.describe_reason_freetext_field" default_value="UGC - Sofie" required="false" />
        <rn:widget path="input/FormInput" name="Incident.CustomFields.c.reorder_sku_link" default_value="UGC Newsletter - Yes" required="false" />
      </div>
      <!-- /LANG -->

      <div class="csp-input-full">
        <!-- FILE UPLAOD -->
        <div class="csp-ugc-upload">
          <label for="rn_CustomFileAttachmentUpload_14_FileInput">
            <rn:widget 
            path="custom/FileAttachmentUpload_MNN/CustomFileAttachmentUpload" 
            required="false" 
            valid_file_extensions="jpg, jpeg, gif, png" 
            label_input="#rn:msg:CUSTOM_MSG_ATTACH_DOCUMENTS_LBL_FR#" />
          </label>
          <div id="rn_ErrorFileAttachement" class="FormInputErrorPlaceholder"></div>
        </div>
         <div class="under-button-text">
            Astuce de style : Soyez surs que votre bijou est clair et centré
          </div>
        <!-- /FILE UPLAOD -->

        <!-- QUESTION -->
        <div class="csp-question">
          <rn:widget 
            path="input/FormInput" 
            name="Incident.Threads" 
            initial_focus="true"
            required="false" 
            label_input="Racontez-nous votre moment unique:"/>
          <div id="rn_ErrorSubject" class="FormInputErrorPlaceholder"></div> 
        </div>
        <!-- /QUESTION -->
      </div>


      <div class="csp-input-left">
        <!-- FIRST NAME -->
        <div class="csp-input csp-first-name">
          <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" label_input="Votre prénom:"/>
          <div id="rn_ErrorNameFirst" class="FormInputErrorPlaceholder"></div>
        </div>
        <!-- /FIRST NAME -->
      </div>

      <div class="csp-input-right">
        <!-- E-MAIL -->
        <div class="csp-input csp-email">
          <div class="field-inline">
            <rn:widget path="input/FormInput" label_input="Votre adresse email:" name="Contact.Emails.PRIMARY.Address" required="true" />
          </div>
        </div>
        <!-- E-MAIL -->
      </div>

      <div class="csp-input-full">
        <div class="contest-rules-wrap">
          <input id="contest-rules" class="contest-rules" type="checkbox" name="contest-rules" value="Yes" checked="checked"> <label for="contest-rules">J'ai lu et j'accepte  <a href="#">les règles</a> de participation à ce jeu.</label>
        </div>

        <div class="contest-promo-wrap">
          <input id="contest-promo" class="contest-promo" type="checkbox" name="contest-promo" value="Yes" checked="checked"> <label for="contest-promo"> Je souhaite recevoir un coupon de bienvenue, un cadeau d'anniversaire et les offres exclusives avant lancement</label>
        </div>
        <div class="offer-ends">
          <p>Commentez et envoyez vos photos avant le 21/08/2018 à minuit</p>
        </div>
      </div>


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
      <div class="csp-submit-ugc">
        <rn:widget path="input/FormSubmit" label_button="ENVOYER" on_success_url="/app/thanks-ugc-fr" error_location="rn_ErrorLocation" />
        <rn:condition content_viewed="2" searches_done="1">
        <rn:condition_else/>
        <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
        </rn:condition>
      </div>
      <div class="hide-option">
        <div class="tc-teaser">Vous devez accepter les termes et conditions pour terminer la procédure d’inscription.</div>
      </div>

      <!-- /SUBMIT -->
    </form>
  </div>
</div>

<script>

  $(function() {
// Show / Hide CTA (User must approve T&C)
    $('input.contest-rules').on('change', function() {     
      $('.hide-option').toggleClass('hide-submit-option');
    });

// Update UGC promotions
    $('input.contest-promo').on('change', function() {
      if(this.checked)
        document.getElementById("rn_TextInput_7_Incident.CustomFields.c.reorder_sku_link").value = "UGC Newsletter - YES";
      else
        document.getElementById("rn_TextInput_7_Incident.CustomFields.c.reorder_sku_link").value = "UGC Newsletter - NO";
    });
  });

// Fix iOS "jump" after choose image
var iOS = (navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false);
var imgCount = 1;
var imgRemoved = false;

$(document).on('click', '.rn_fileRemove', function () {
    imgCount = imgCount - 2;
    imgRemoved = true;
});

$(document).on('DOMNodeInserted', '.rn_FileAttachmentUpload', function () {
//  debugger;
  setTimeout(function(){
    if (iOS && (imgRemoved || $('.rn_Thumbnail img').length == imgCount)) {
      var pos = $('.csp-ugc-upload').position().top;
      window.parent.postMessage('Position_' + pos, "*");
      imgCount++;
      imgRemoved = false;
    }
  }, 100);  
});
// /Fix iOS "jump" after choose image

</script>
