<rn:theme path="/euf/assets/themes/standard" css="unsatisfied_form.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>


<div class="rn_Container">
  <div class="unsatisfied-box">
    <div class="unsatisfied-title">Nous sommes d&eacute;sol&eacute;s d'apprendre que nos produits ne r&eacute;pondent pas &agrave; vos attentes. Nous voulons que vous aimiez nos bijoux autant que nous les aimons. Ainsi, nous souhaitons vous offrir plusieurs options pour vous faire sourire. Cliquez pour choisir votre cadeau.</div>
    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-1">
        <label for="unsatisfied-select-1" class="unsatisfied-item-label">Retournez votre bijou et choisissez un autre bijou en &eacute;change. Recevez &eacute;galement 20&euro; suppl&eacute;mentaires &agrave; utiliser pour votre nouveau bijou.<br>
            Exemple : Si le montant original de votre bijou &eacute;tait de 70&euro;, vous aurez 90&euro; &agrave; d&eacute;penser pour votre nouveau bijou.</label>
        <div class="unsatisfied-item-form" style="max-width: 620px;">

            <!-- FORM 1 -->
              <div class="rn_PageContent rn_AskQuestion rn_Container container_notsetas1">
                <form id="rn_QuestionSubmit1" method="post" action="/ci/ajaxRequest/sendForm">
                  <div id="rn_ErrorLocation"></div>
                  <rn:condition logged_in="false">
                  <!-- LANG -->
                  <div class="csp-lang-wrap" style="display: none;">
                    <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="8" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="143" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.order_status" default_value="152" />
                  </div>
                  <!-- /LANG -->

                  <!-- reorder_sku_link -->
                  <div class="csp-input csp-reorder-sku-link">
                    <div class="teaser">Veuillez ins&eacute;rer le lien ou la r&eacute;f&eacute;rence du bijou souhait&eacute; en &eacute;change: </div>
                    <div>
                    <rn:widget 
                      path="input/FormInput" 
                      name="Incident.CustomFields.c.reorder_sku_link" 
                      required="true" 
                    />
                    </div>
                    <div class="teaser reorder-sku-bottom-teaser">Un de nos repr&eacute;sentants vous contactera afin de finaliser<br />votre commande.</div>
                  </div>
                  <!-- reorder_sku_link -->

                  <!-- E-MAIL -->
                  <div class="csp-input csp-email">
                    <div class="teaser">Veuillez inscrire votre adresse email:</div>
                    <div class="field-inline">
                      <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
                    </div>
                  </div>
                  <!-- E-MAIL -->

                  <!-- Order ID -->
                  <div class="csp-input csp-order-id">
                    <div class="teaser teaser-inline">Veuillez inscrire votre num&eacute;ro de commande:</div>
                    <div class="field-inline">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.order_id_text_field" 
                        required="true" 
                      />
                    </div>
                  </div>
                  <!-- Order ID -->

                  <div class="csp-input csp-complaint csp-complaint1">
                    <div class="teaser">S&eacute;lectionnez la raison de non-satisfaction:</div>
                    <div class="field-inline">
                      <select id="reason4incomplete1">
                        <option value="Select" selected>S&eacute;lectionnez:</option>
                        <option value="Missing items">Bijou manquant</option>
                        <option value="Empty envelope">Enveloppe vide</option>
                        <option value="Missing part">Partie manquante</option>
                        <option value="Sent wrong item">Mauvais bijou envoy&eacute;</option>
                        <option value="Sent without gift box">Envoy&eacute; sans boite cadeau</option>
                        <option value="Sent without gift card">Envoy&eacute; sans carte cadeau</option>
                        <option value="All lower case letters">Toutes les lettres en minuscule</option>
                        <option value="Don't like the font">N'aime pas la police</option>
                        <option value="Don't like product design">N'aime pas le design du produit</option>
                        <option value="Engaving not clear">Inscription pas assez claire</option>
                        <option value="Engaving too small">Inscription trop petite</option>
                        <option value="Looks cheap">Mauvaise qualit&eacute;</option>
                        <option value="Monogram font">Police monogramme</option>
                        <option value="Not as described on site">Diff&eacute;rent de la description du site</option>
                        <option value="Receiver didn't like the gift">Le destinataire n'aime pas le cadeau</option>
                        <option value="The size of the item">La taille du bijou</option>
                        <option value="Too thin">Trop fin</option>
                      </select>      
                    </div>
                    <!-- COMPLAINT -->
                    <div class="csp-input-left csp-complaint2_1" style="display: none;">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.describe_reason_freetext_field" 
                        required="true" 
                      />
                    </div>
                    <!-- /COMPLAINT -->
                  </div>

                  <!-- FILE UPLAOD -->
                  <div class="csp-input csp-upload">
                    <div>Veuillez joindre une photo de votre bijou:</div>
                    <div class="attachment-teaser"><strong>Ajoutez les documents</strong></div>
                    <div class="field-inline">
                      <rn:widget path="input/FileAttachmentUpload"/>
                    </div>
                  </div>
                  <!-- /FILE UPLAOD -->

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
                    <rn:widget path="input/FormSubmit" label_button="soumettre" on_success_url="/app/complaint-thank-fr" error_location="rn_ErrorLocation" />
                    <rn:condition content_viewed="2" searches_done="1">
                    <rn:condition_else/>
                    <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
                    </rn:condition>
                  </div>
                  <!-- /SUBMIT -->
                </form>
              </div>
            <!-- FORM 1 -->

        </div>
    </div>

    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-2">
        <label for="unsatisfied-select-2" class="unsatisfied-item-label">Recevez 10% de remboursement sur votre commande initiale.</label>
        <div class="unsatisfied-item-form" style="max-width: 620px;">


            <!-- FORM 2 -->
              <div class="rn_PageContent rn_AskQuestion rn_Container container_notsetas1">
                <form id="rn_QuestionSubmit2" method="post" action="/ci/ajaxRequest/sendForm">
                  <div id="rn_ErrorLocation"></div>
                  <rn:condition logged_in="false">
                  <!-- LANG -->
                  <div class="csp-lang-wrap" style="display: none;">
                    <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="8" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="144" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.order_status" default_value="152" />
                  </div>
                  <!-- /LANG -->

                  <!-- E-MAIL -->
                  <div class="csp-input csp-email">
                    <div class="teaser">Veuillez inscrire votre adresse email:</div>
                    <div class="field-inline">
                      <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
                    </div>
                  </div>
                  <!-- E-MAIL -->

                  <!-- Order ID -->
                  <div class="csp-input csp-order-id">
                    <div class="teaser teaser-inline">Veuillez inscrire votre num&eacute;ro de commande:</div>
                    <div class="field-inline">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.order_id_text_field" 
                        required="true" 
                      />
                    </div>
                  </div>
                  <!-- Order ID -->

                  <!-- reorder_sku_link -->
                  <div class="csp-input csp-complaint csp-complaint2">
                    <div class="teaser">S&eacute;lectionnez la raison de non-satisfaction:</div>
                    <div class="field-inline">
                      <select id="reason4incomplete2">
                        <option value="Select" selected>S&eacute;lectionnez:</option>
                        <option value="Missing items">Bijou manquant</option>
                        <option value="Empty envelope">Enveloppe vide</option>
                        <option value="Missing part">Partie manquante</option>
                        <option value="Sent wrong item">Mauvais bijou envoy&eacute;</option>
                        <option value="Sent without gift box">Envoy&eacute; sans boite cadeau</option>
                        <option value="Sent without gift card">Envoy&eacute; sans carte cadeau</option>
                        <option value="All lower case letters">Toutes les lettres en minuscule</option>
                        <option value="Don't like the font">N'aime pas la police</option>
                        <option value="Don't like product design">N'aime pas le design du produit</option>
                        <option value="Engaving not clear">Inscription pas assez claire</option>
                        <option value="Engaving too small">Inscription trop petite</option>
                        <option value="Looks cheap">Mauvaise qualit&eacute;</option>
                        <option value="Monogram font">Police monogramme</option>
                        <option value="Not as described on site">Diff&eacute;rent de la description du site</option>
                        <option value="Receiver didn't like the gift">Le destinataire n'aime pas le cadeau</option>
                        <option value="The size of the item">La taille du bijou</option>
                        <option value="Too thin">Trop fin</option>
                      </select>      
                    </div>
                    <!-- COMPLAINT -->
                    <div class="csp-input-left csp-complaint2_2" style="display: none;">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.describe_reason_freetext_field" 
                        required="true" 
                      />
                    </div>
                    <!-- /COMPLAINT -->
                  </div>

                  <!-- FILE UPLAOD -->
                  <div class="csp-input csp-upload">
                    <div>Veuillez joindre une photo de votre bijou:</div>
                    <div class="attachment-teaser"><strong>Ajoutez les documents</strong></div>
                    <div class="field-inline">
                      <rn:widget path="input/FileAttachmentUpload"/>
                    </div>
                  </div>
                  <!-- /FILE UPLAOD -->

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
                    <rn:widget path="input/FormSubmit" label_button="soumettre" on_success_url="/app/complaint-thank-fr" error_location="rn_ErrorLocation" />
                    <rn:condition content_viewed="2" searches_done="1">
                    <rn:condition_else/>
                    <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
                    </rn:condition>
                  </div>
                  <!-- /SUBMIT -->
                </form>
              </div>
            <!-- FORM 2 -->



        </div>
    </div>

    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-3">
        <label for="unsatisfied-select-3" class="unsatisfied-item-label">Recevez 50% de r&eacute;duction sur votre prochain achat. S&eacute;lectionnez une occasion sp&eacute;ciale que vous souhaitez c&eacute;l&eacute;brer, et nous vous enverrons un code promotionnel 45 jours avant !</label>
        <div class="unsatisfied-item-form" style="max-width: 620px;">


            <!-- FORM 3 -->
              <div class="rn_PageContent rn_AskQuestion rn_Container container_notsetas1">
                <form id="rn_QuestionSubmit3" method="post" action="/ci/ajaxRequest/sendForm">
                  <div id="rn_ErrorLocation"></div>
                  <rn:condition logged_in="false">
                  <!-- LANG -->
                  <div class="csp-lang-wrap" style="display: none;">
                    <rn:widget path="input/SelectionInput" name="Incident.c$site" default_value="8" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.general_reason" default_value="145" />
                    <rn:widget path="input/SelectionInput" name="Incident.CustomFields.c.order_status" default_value="152" />
                  </div>
                  <!-- /LANG -->

                  <div class="csp-input csp-reorder">
                    <div class="teaser">Ev&egrave;nement</div>
                    <div class="field-inline">
                      <select id="coupon_reorder">
                        <option value="Select" selected>S&eacute;lectionnez:</option>
                        <option value="Valentine">Saint-Valentin</option>
                        <option value="Mother's day">F&ecirc;te des M&egrave;res</option>
                        <option value="Birthday">Anniversaire</option>
                        <option value="Other">Autre</option>
                      </select>
                    </div>
                  </div>

                  <!-- REORDER -->
                  <div class="csp-input-left csp-reorder2" style="display: none;">
                    <rn:widget 
                      path="input/FormInput" 
                      name="Incident.CustomFields.c.coupon_reorder_freetext" 
                      required="true" 
                    />
                  </div>
                  <!-- REORDER -->

                  <!-- DATE -->
                  <div class="csp-input csp-date">
                    <div class="teaser">Date</div>
                    <select id="date-month-ns" name="date-month-ns">
                      <option value="mm" disabled selected>mm</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <select id="date-day-ns" name="date-day-ns">
                      <option value="dd" disabled selected>dd</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>

                    <div class="field-inline field-date-temp date-ns-parent" style="display: none;">
                      <rn:widget path="input/FormInput" name="Incident.CustomFields.c.date_ns" />
                    </div>
                  </div>
                  <!-- /DATE -->

                  <!-- E-MAIL -->
                  <div class="csp-input csp-email">
                    <div class="teaser">Veuillez inscrire votre adresse email:</div>
                    <div class="field-inline">
                      <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
                    </div>
                  </div>
                  <!-- E-MAIL -->

                  <!-- Order ID -->
                  <div class="csp-input csp-order-id">
                    <div class="teaser teaser-inline">Veuillez inscrire votre num&eacute;ro de commande:</div>
                    <div class="field-inline">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.order_id_text_field" 
                        required="true" 
                      />
                    </div>
                  </div>
                  <!-- Order ID -->

                  <div class="csp-input csp-complaint csp-complaint3">
                    <div class="teaser">S&eacute;lectionnez la raison de non-satisfaction:</div>
                    <div class="field-inline">
                      <select id="reason4incomplete3">
                        <option value="Select" selected>S&eacute;lectionnez:</option>
                        <option value="Missing items">Bijou manquant</option>
                        <option value="Empty envelope">Enveloppe vide</option>
                        <option value="Missing part">Partie manquante</option>
                        <option value="Sent wrong item">Mauvais bijou envoy&eacute;</option>
                        <option value="Sent without gift box">Envoy&eacute; sans boite cadeau</option>
                        <option value="Sent without gift card">Envoy&eacute; sans carte cadeau</option>
                        <option value="All lower case letters">Toutes les lettres en minuscule</option>
                        <option value="Don't like the font">N'aime pas la police</option>
                        <option value="Don't like product design">N'aime pas le design du produit</option>
                        <option value="Engaving not clear">Inscription pas assez claire</option>
                        <option value="Engaving too small">Inscription trop petite</option>
                        <option value="Looks cheap">Mauvaise qualit&eacute;</option>
                        <option value="Monogram font">Police monogramme</option>
                        <option value="Not as described on site">Diff&eacute;rent de la description du site</option>
                        <option value="Receiver didn't like the gift">Le destinataire n'aime pas le cadeau</option>
                        <option value="The size of the item">La taille du bijou</option>
                        <option value="Too thin">Trop fin</option>
                      </select>      
                    </div>
                    <!-- COMPLAINT -->
                    <div class="csp-input-left csp-complaint2_3" style="display: none;">
                      <rn:widget 
                        path="input/FormInput" 
                        name="Incident.CustomFields.c.describe_reason_freetext_field" 
                        required="true" 
                      />
                    </div>
                    <!-- /COMPLAINT -->
                  </div>

                  <!-- FILE UPLAOD -->
                  <div class="csp-input csp-upload">
                    <div>Veuillez joindre une photo de votre bijou:</div>
                    <div class="attachment-teaser"><strong>Ajoutez les documents</strong></div>
                    <div class="field-inline">
                      <rn:widget path="input/FileAttachmentUpload"/>
                    </div>
                  </div>
                  <!-- /FILE UPLAOD -->

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
                    <rn:widget path="input/FormSubmit" label_button="soumettre" on_success_url="/app/complaint-thank-fr" error_location="rn_ErrorLocation" />
                    <rn:condition content_viewed="2" searches_done="1">
                    <rn:condition_else/>
                    <rn:widget path="input/SmartAssistantDialog" label_prompt="#rn:msg:OFFICIAL_SSS_MIGHT_L_IMMEDIATELY_MSG#"/>
                    </rn:condition>
                  </div>
                  <!-- /SUBMIT -->
                </form>
              </div>
            <!-- FORM 3 -->

        </div>
    </div>
  </div>
</div>



<script>
  var _day = "dd", _month = "mm";

  $(function() {
    $('.unsatisfied-item-label').on('click', function(){
    	var thisForm = $(this).siblings('.unsatisfied-item-form');
    	var otherForms = $(this).parent('.unsatisfied-item').siblings('.unsatisfied-item').find('.unsatisfied-item-form');
    	$(otherForms).slideUp();
    	$(thisForm).slideDown();
    })

    $("#reason4incomplete1").change(function() {
        $(".csp-complaint2_1 input").val($(this).val());
    }).change();

    $("#reason4incomplete2").change(function() {
        $(".csp-complaint2_2 input").val($(this).val());
    }).change();

    $("#reason4incomplete3").change(function() {
        $(".csp-complaint2_3 input").val($(this).val());
    }).change();

    $("#coupon_reorder").change(function() {
        $(".csp-reorder2 input").val($(this).val());
    }).change();

    $("#date-month-ns").change(function() {
        _day = $(this).val();
        $(".date-ns-parent input").val(_day + '-' + _month);
    }).change();

    $("#date-day-ns").change(function() {
        _month = $(this).val();
        $(".date-ns-parent input").val(_day + '-' + _month);
    }).change();
  });

</script>


