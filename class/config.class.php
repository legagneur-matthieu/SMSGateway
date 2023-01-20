<?php

/** * Cette classe sert de fichier de configuration, <br /> * elle contient: * <ul> * <li>les variables de connexion à la base de données</li> * <li>l 'algo utilisé pour les hash</li> * <li>les routes de l 'aplication</li> * </ul> * * mais vous pouvez également y ajouter des variables diverses qui vous seront utile */
class config { /* PDO */

    public static $_PDO_type = "sqlite";
    public static $_PDO_host = "";
    public static $_PDO_dbname = "smsgateway";
    public static $_PDO_login = "";
    public static $_PDO_psw = ""; /* hash */
    public static $_hash_algo = "sha512"; /* routes */
    public static $_route_auth = array();
    public static $_route_unauth = array(); /* Data */
    public static $_title = "SMS Gateway";
    public static $_favicon = "src/logo.png";
    public static $_debug = true;
    public static $_prefix = "smsg";
    public static $_theme = "default";
    public static $_SMTP_host = "localhost";
    public static $_SMTP_auth = false;
    public static $_SMTP_login = "";
    public static $_SMTP_psw = "";
    public static $_sitemap = false;
    public static $_statistiques = false;
    public static $_lurl_key="";

    public static function onbdd_connected() {
        self::$_route_auth = array(
            array("page" => "index", "title" => "Page d'accueil", "text" => "ACCUEIL", "description" => "Index de SMSGateway", "keywords" => "Index, SMSGateway, SMS, Gateway, devwebframework, DWF")
        );
        self::$_route_unauth = array(
            array("page" => "index", "title" => "Page d'accueil", "text" => "ACCUEIL", "description" => "Index de SMSGateway", "keywords" => "Index, SMSGateway, SMS, Gateway, devwebframework, DWF")
        );
    }

}
