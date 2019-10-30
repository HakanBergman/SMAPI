<?php
    
    /* SMAPI Settings */
    $postData = array('email' => $_GET['username'], 'password' => $_GET['password']);
    $json_url = "http://snurra.datadelenhc.com/api/v1/login";

    /* Setup cURL */
    $ch = curl_init($json_url);
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    /* Send cURL Request */
    $response = curl_exec($ch);
    if($response === FALSE) { die(curl_error($ch)); }
    
    /* Decode the result */
    $responseData = json_decode($response, TRUE);
    print_r($responseData);

?>