<?php function calculator() { ?>

    <form method="post" action="" id="smapi_calculator">
        <div class="form-group">
            <label for="smapi_amount">Hur mycket vill du låna?</label>
            <div><input type="number" name="smapi_amount" id="smapi_amount" placeholder="0" /></div>
        </div>
        <div class="form-group">
            <button type="button" name="smapi_button">Skicka offert</button>
        </div>
    </form>

<?php } ?>