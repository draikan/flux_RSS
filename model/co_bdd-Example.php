<?php
    try
    {
        $bdd = new PDO("mysql:host=localhost;dbname=yourDBname;charset=utf8","loginFORphpmyadmin","passwordFORphpmyadmin");
    }
    catch(Exception $e)
    {
         die("erreur de connexion");
    }