<?php
    $json_url = "http://snurra.datadelenhc.com/api/v1/login"
    $json_result = file_get_contents($json_url);
    var_dump(json_decode($json_result));
    echo "something was posted";    
?>