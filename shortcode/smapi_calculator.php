<?php 

    function smapi_calculator() {

        global $wpdb;
        $table_name = $wpdb->prefix."smapi";
        $month_12 = $wpdb->query("SELECT month_12 FROM $table_name LIMIT 1");
        $month_24 = $wpdb->query("SELECT month_24 FROM $table_name LIMIT 1");
        $month_36 = $wpdb->query("SELECT month_36 FROM $table_name LIMIT 1");
        $month_48 = $wpdb->query("SELECT month_48 FROM $table_name LIMIT 1");
        $month_60 = $wpdb->query("SELECT month_60 FROM $table_name LIMIT 1");
        print_r($month_12);
        $content =  '<form method="post" action="" id="smapi_calculator">';
            $content .= '<div class="form-group">';
                $content .= '<label for="smapi_amount">Hur mycket vill du låna?</label>';
                $content .= '<input type="number" name="smapi_amount" id="smapi_amount" placeholder="0" /></div>';
               # $content .= '<input type="hidden" name="smapi_interest_month_12" id="smapi_interest_month_12" value="'.echo get_option("stored_smapi_email") .'" />';
               # $content .= '<input type="hidden" name="smapi_interest_month_24" id="smapi_interest_month_24" value="'.echo get_option("stored_smapi_email") .'" />';
               # $content .= '<input type="hidden" name="smapi_interest_month_36" id="smapi_interest_month_36" value="'.echo get_option("stored_smapi_email") .'" />';
               # $content .= '<input type="hidden" name="smapi_interest_month_48" id="smapi_interest_month_48" value="'.echo get_option("stored_smapi_email") .'" />';
               # $content .= '<input type="hidden" name="smapi_interest_month_60" id="smapi_interest_month_60" value="'.echo get_option("stored_smapi_email") .'" />';
            $content .= '</div>';
            $content .= '<hr />';
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
        return $content;
    }

?>