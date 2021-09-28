<?php        
    global $wpdb;

    function encodeURIComponent($str) {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        return strtr(rawurlencode($str), $revert);
    }
    
    if((empty($_POST["enterpriseName"])) || (empty($_POST["number"])) || (empty($_POST["message"]))){
        echo "missing spaces";  
    } else
    {
        $enterpriseName = $_POST["enterpriseName"];
        $enterpriseNumber = $_POST["select"].$_POST["number"];
        $enterpriseMessage = $_POST["message"];
        $messageEncode = encodeURIComponent($enterpriseMessage);
        $sql = "INSERT INTO wp_WhatsAppPlugin ". "(enterprise_name, number, message) ". "VALUES ('$enterpriseName', '$enterpriseNumber', '$enterpriseMessage')";      

        if ($wpdb->query($sql)) {
        echo "New record created successfully in " . "https://wa.me/{$enterpriseNumber}/?text={$messageEncode}";
        } else {
        echo "Error: " . $sql . "<br>" . $wpdb->error;
        }          
    }   
    
?>