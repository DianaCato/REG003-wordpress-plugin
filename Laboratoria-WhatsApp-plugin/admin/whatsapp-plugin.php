<?php

echo   '<h1>' . get_admin_page_title() . '</h1>';
echo    '<div id="svelte-admin"></div>';

if(isset($_POST["enterpriseName"])){
    $enterpriseName = $_POST["enterpriseName"];
    $enterpriseNumber = $_POST["number"];
    $enterpriseMessage = $_POST["message"];
    var_dump($_POST["enterpriseName"]);
}
