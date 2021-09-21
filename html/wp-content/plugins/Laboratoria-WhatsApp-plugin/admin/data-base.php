<?php        
    global $wpdb;

    if((empty($_POST["enterpriseName"])) || (empty($_POST["number"])) || (empty($_POST["message"]))){
        echo "missing spaces";  
    } else
    {
        $enterpriseName = $_POST["enterpriseName"];
        $enterpriseNumber = $_POST["select"].$_POST["number"];
        $enterpriseMessage = $_POST["message"];
        $sql = "INSERT INTO wp_WhatsAppPlugin ". "(enterprise_name, number, message) ". "VALUES ('$enterpriseName', '$enterpriseNumber', '$enterpriseMessage')";      

        if ($wpdb->query($sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $wpdb->error;
          }
    }
    
?>