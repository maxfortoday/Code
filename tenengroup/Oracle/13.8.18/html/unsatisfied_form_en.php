<rn:theme path="/euf/assets/themes/standard" css="unsatisfied_form.css" />
<rn:meta title="#rn:msg:ASK_QUESTION_HDG#" template="standard.php" clickstream="incident_create"/>
<div class="rn_Container">
  <div class="unsatisfied-box">
    <h1 class="unsatisfied-header">we are here to help!</h1>
    <div class="unsatisfied-title">We’re sorry you weren’t satisfied with your purchase. Let’s try to work this out! <br>
          Select one of the below offers:</div>
    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-1">
        <label for="unsatisfied-select-1" class="unsatisfied-item-label">Return your original jewelry and reorder any product and receive an additional $20 to spend on your reorder. <br>
            Example: If your original cost was $70, you will have $90 to spend on your reorder.</label>
        <div class="unsatisfied-item-form">this is the form you choosed</div>
    </div>

    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-2">
        <label for="unsatisfied-select-2" class="unsatisfied-item-label"> Receive 10% refund back from your original purchase.</label>
        <div class="unsatisfied-item-form">this is the form you choosed</div>
    </div>

    <div class="unsatisfied-item">
        <input type="radio" name="unsatisfied-select" id="unsatisfied-select-3">
        <label for="unsatisfied-select-3" class="unsatisfied-item-label">Receive 50% off your next gift purchase. <br>
            Select the occasion below you wish to celebrate, and we’ll send a promo code 45 days prior!</label>
        <div class="unsatisfied-item-form">this is the form you choosed</div>
    </div>
  </div>
</div>

<script>

$('.unsatisfied-item-label').on('click', function(){
	var thisForm = $(this).siblings('.unsatisfied-item-form');
	var otherForms = $(this).parent('.unsatisfied-item').siblings('.unsatisfied-item').find('.unsatisfied-item-form');
	$(otherForms).slideUp();
	$(thisForm).slideDown();
})

</script>
