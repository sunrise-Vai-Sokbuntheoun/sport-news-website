<?php
    function lib_css($link){
        return "
            <link rel='stylesheet' href='$link"."resource\lib\bootstrap\css\bootstrap-grid.css'>
            <link rel='stylesheet' href='$link"."resource\lib\bootstrap\css\bootstrap-reboot.css'>
            <link rel='stylesheet' href='$link"."resource\lib\bootstrap\css\bootstrap.css'>
            <link rel='stylesheet' href='$link"."resource\lib\\fontawesome-free-5.3.1-web\css\all.css'>
        ";
    }

    function lib_script($link){
        return "
            <script src='$link"."resource\lib\jquery-3.4.2.js'></script>
            <script src='$link"."resource\lib\bootstrap\js\bootstrap.bundle.js'></script>
            <script src='$link"."resource\lib\bootstrap\js\bootstrap.js'></script>
        ";
    }

    function link_font(){
        return "
            <link href='https://fonts.googleapis.com/css?family=Battambang|Moul&display=swap' rel='stylesheet'>
            ";
    }

    define('SERVER', 'localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','sportnews_db');
?>