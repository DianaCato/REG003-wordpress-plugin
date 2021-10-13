<?php        

    function encodeURI($str) {
        $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
        return strtr(rawurlencode($str), $revert);
    }

    function getData (){
        $enterpriseName = $_POST["enterpriseName"];
        $enterpriseNumber = $_POST["select"].$_POST["number"];
        $enterpriseMessage = $_POST["message"];
        $messageEncode = encodeURI($enterpriseMessage);
        return [$enterpriseName, $enterpriseNumber, $enterpriseMessage, $messageEncode];
    }

    function sendData($enterpriseData){
        global $wpdb;
        $sql = "INSERT INTO {$wpdb->prefix}WhatsAppPlugin ". "(enterprise_name, number, message) ". "VALUES ('$enterpriseData[0]', '$enterpriseData[1]', '$enterpriseData[2]')";      

        if ($wpdb->query($sql)) {
            $sendMessage = "New record created successfully in " . "https://wa.me/{$enterpriseData[1]}/?text={$enterpriseData[3]}";
            return $sendMessage;
        } else {
            $sendMessage = "Error: " . $sql . "<br>" . $wpdb->error;
            return $sendMessage;
        }
    } 
    
    function verifyGaps (){
        if((empty($_POST["enterpriseName"])) || (empty($_POST["number"])) || (empty($_POST["message"]))){
            echo "Missing Spaces";  
        } else
        {
            $message = sendData(getData());     
            echo $message;
        }   
    }    
    
    verifyGaps();
    
?>