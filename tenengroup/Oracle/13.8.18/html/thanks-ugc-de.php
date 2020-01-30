<rn:meta title="#rn:msg:QUESTION_SUBMITTED_LBL#" template="standard.php" clickstream="incident_confirm"/>
<rn:theme path="/euf/assets/themes/standard" css="ask-new-design.css" />

<script type="text/javascript">
  function addCss() {
    var head = document.getElementsByTagName('head')[0], link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = '/euf/assets/themes/standard/ugc-thanks.css';
    head.appendChild(link);
    return link;
  }
  addCss();
</script>

<span id="top"></span>
<div class="rn_PageContent rn_AskQuestion rn_Container thank-you-confirm-wrapper">
  <div class="ugc-thanks-ttl">
    Danke fürs Teilen! <span>Sie sehen toll aus!</span>
  </div>
  <div class="ugc-thanks-teaser">
    Wir werden am 21. August den Gewinner bekannt geben
  </div>
  <div class="ugc-thanks-btn-wrap">
    <hr class="ugc-thanks-hr" />
    <a class="ugc-thanks-btn" href="/app/ugc-de">
      Laden Sie ein Bild hoch
    </a>
  </div>

<rn:condition logged_in="true">
</rn:condition>
</div>
