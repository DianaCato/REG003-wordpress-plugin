
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
        // require_once(plugin_dir_path(__FILE__).'whatsapp-plugin.php');
        // global $newurl;
        // echo $newurl;
         echo "<a class='btn' href='{$url}'>Contacto WhatsApp</a>";
         echo "url $url "
    ?>
  </body>
</html>