<?php 

    function smapi_calculator() {

        global $wpdb;
        $table_name = $wpdb->prefix."smapi";
        $smapi_results = $wpdb->get_results("SELECT * FROM $table_name LIMIT 1");
        $content =  '<form method="post" action="" id="smapi_calculator">';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Hur mycket vill du låna?</label>';
                $content .= '<input type="number" name="smapi_amount" id="smapi_amount" placeholder="0" />';
                $content .= '<input type="hidden" name="smapi_interest_month_12" id="smapi_interest_month_12" value="'.$smapi_results[0]->month_12.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_24" id="smapi_interest_month_24" value="'.$smapi_results[0]->month_24.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_36" id="smapi_interest_month_36" value="'.$smapi_results[0]->month_36.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_48" id="smapi_interest_month_48" value="'.$smapi_results[0]->month_48.'" />';
                $content .= '<input type="hidden" name="smapi_interest_month_60" id="smapi_interest_month_60" value="'.$smapi_results[0]->month_60.'" />';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 12 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_12" id="smapi_month_12" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 24 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_24" id="smapi_month_24" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 36 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_36" id="smapi_month_36" placeholder="0" disabled/></div>';
            $content .= '</div>';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 48 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_48" id="smapi_month_48" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Månadskostnad över 60 månader</label>';
                $content .= '<div><input type="number" name="smapi_month_60" id="smapi_month_60" placeholder="0" disabled/></div>';
            $content .= '</div>';   
            $content .= '<div class="form-group">';
                $content .= '<button type="button" name="smapi_button">Skicka offert</button>';
            $content .= '</div>';                                                      
        $content .= '</form>';
        $content .= "<p><strong><i>Betalning</i></strong></p>";
        $content .= "<p>Hyran i ovanstående alternativ erlägges kvartalsvis i förskott.</p>";
        $content .= "<p><strong><i>Avtalstidens slut</i></strong></p>";
        $content .= "<p>1) Hänvisar Smart Provider i Sverige AB till leverantören.</p>";        
        $content .= "<hr />";
        $content .= "<p>Alla siffror i finansieringsförslaget är ungefärliga och angivna exkl. moms och gäller efter sedvanlig kreditprövning.</p>";
        $content .= "<p>Hör gärna av Er för eventuella frågor eller alternativa finansieringsförslag till sales@smartprovider.se</p>";
        return $content;
    }

?>