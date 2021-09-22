<?php
  global $wpdb;

  $sql = "SELECT * FROM {$wpdb->prefix}WhatsAppPlugin";
  $answersql = $wpdb->get_results($sql,ARRAY_A);
  $rowcount = ($wpdb->num_rows)-1;

  function encodeURIComponent($str) {
    $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
    return strtr(rawurlencode($str), $revert);
  }

  $enterpriseNumber = $answersql[$rowcount]["number"];
  $messageEncode = encodeURIComponent($answersql[$rowcount]["message"]);
  $url = "https://wa.me/{$enterpriseNumber}/?text={$messageEncode}";
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
        .btn {
            position: fixed;
            bottom: 40px;
            right: 40px;
            font-family: sans-serif; 
            text-decoration: none; 
            margin: 1em auto; 
            color: #fff; 
            font-size: 0.9em; 
            padding: 1em 2em 1em 3.5em; 
            border-radius: 2em; 
            font-weight: bold; 
            background: #25d366 url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; 
            background-size: 1.6em;
      }
    </style>
  </head>
  <body>
    <?php
        echo "<a class='btn' href='{$url}'>Contacto WhatsApp</a>";
    ?>
  </body>
</html>