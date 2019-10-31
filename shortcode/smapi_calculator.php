<?php 

    function smapi_calculator() {
        $content =  '<form method="post" action="" id="smapi_calculator">';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Hur mycket vill du låna?</label>';
                $content .= '<div><input type="number" name="smapi_amount" id="smapi_amount" placeholder="0" /></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<button type="button" name="smapi_button">Skicka offert</button>';
            $content .= '</div>';
        $content .= '</form>';
        return $content;
    }

?>