<?php

    session_start();
    
    DEFINE("HOST","127.0.0.1");
    DEFINE("USERNAME","root");
    DEFINE("PASSWORD","ascent");
    DEFINE("DATABASE","bugtracker");
    DEFINE("PORT","3306");

    DEFINE ("HEADER", "WoWEmu 5.4.8 Repack Bugtracker");
    DEFINE ("TITLE", "Bugtracker");
    

    require ("classes/Database.php");
    require ("classes/Admin.php");
    require ("classes/Bugs.php");
    require ("classes/Common.php");

    $Database = new Database();
    $Admin = new Admin();
    $Bugs = new Bugs();
    $Common = new Common();

?>