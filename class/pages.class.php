<?php

/** * Cette classe sert de "Vue" à votre application, * vous pouvez y développer votre application comme bon vous semble : * HTML, créér et appeler une fonction "private" dans une fonction "public", faire appel à des classes exterieures ... * @author LEGAGNEUR Matthieu <legagneur.matthieu@gmail.com> */
class pages { /** * Cette classe sert de "Vue" à votre application, * vous pouvez y développer votre application comme bon vous semble : * HTML, créé et appelle une fonction "private" dans une fonction "public", faire appel à des classes exterieures ... */

    public function __construct() {
        new robotstxt();
    }

    /**     * Entete des pages */
    public function header() {
        ?> <header class="page-header bg-info"> 
            <img src="src/logo.png" alt="" style="float: right; height: 100%;"/>
            <h1>SMS Gateway <br /><small>Interface HTTP pour l'envoi de SMS</small></h1> 
        </header> <?php
    }

    /**     * Pied des pages */
    public function footer() {
        ?> 
        <footer> <hr /> 
            <p> 2020-<?= date("Y"); ?> D&eacute;velopp&eacute; par LEGAGNEUR Matthieu</p>
            <div style="width: 200px; float: right; position: relative; margin : -40px 10px 10px 0">
                <?php
                (new lurl(config::$_lurl_key))->selfpage_support_btn();
                ?>
            </div>
            <!--[if (IE 6)|(IE 7)]> <p><big>Ce site n'est pas compatible avec votre version d'internet explorer !</big></p> <![endif]--> </footer> <?php
    }

    /**     * Fonction par défaut / page d'accueil */
    public function index() {
        ?> 
        <h2>Qu'es que c'est ?</h2>
        <p>SMS Gateway est une application qui propose une interface HTTP pour envoyer des SMS</p>
        <p>SMS Gateway c'est :</p>
        <ul>
            <li>Gratuit</li>
            <li>Open Source</li>
            <li>Simple d'utilisation</li>
            <li>Compatible avec n'importe quel application ou langage capable d'envoyer des requêtes HTTP</li>
        </ul>
        <hr />
        <h2>Histoire du projet</h2>
        <p>
            Une application similaire existait il y a quelques années 
            <a href="https://fr.androlib.com/android.application.eu-apksoft-android-smsgateway-qqimA.aspx" target="_blank">SMS Gateway par APK SOFT s.r.o</a> <br />
            Mais a disparu suite a un changement de politique de Google vis à vis des applications d'envoi de SMS. <br />
            Or dans le 
            <a href="https://github.com/legagneur-matthieu/DevWebFramework" target="_blank">DevWebFramework</a> 
            une classe sms_gateway.class.php avait été créé et optimisé pour fonctionner avec l'application de APK SOFT s.r.o . <br />
            Afin de ne pas perdre cette classe et la possibilité d'envoyer des SMS avec le DevWebFramework, <br />
            cette nouvelle application SMS Gateway à été créé et publié en open source 
        </p>
        <hr />
        <h2>Comment ça marche ?</h2>
        <h3>Prérequis</h3>
        <p>
            Votre smartphone doit être capable d'envoyer des SMS et doit être connecté a un routeur (Box Internet) <br />
            Vous devez connaître l'IP du smartphone (Ci après noté 192.168.1.xx)
        </p>
        <h3>Installation</h3>
        <p>
            Installer et lancer l'APK sur le téléphone, <br />
            accepter les demandes de permission d’accéder a l'envoi de SMS et au numéro de téléphone (nécessaire a l'envoi de SMS) <br />
            (facultatif) Vous pouvez définir un mot de passe sur l'interface de l'application. Ce mot de passe sera requis dans les requêtes http
        </p>
        <h3>Test</h3>
        <p>
            Depuis votre navigateur allez sur http://192.168.1.xx:8080/run pour vérifier que le serveur répond <br />
            Réponse attendu : {"runing":true} 
        </p>        
        <h3>Envoi de SMS</h3>
        <table class="table" style="width: 500px">
            <tbody>
                <tr>
                    <th>URL</th>
                    <td>http://192.168.1.xx:8080/sendsms</td>
                </tr>
                <tr>
                    <th>Méthodes</th>
                    <td>POST (recommandé) et GET</td>
                </tr>
                <tr>
                    <th>Paramètres</th>
                    <td>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Clé</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>phone</td>
                                    <td>Numéro du destinataire</td>
                                </tr>
                                <tr>
                                    <td>text</td>
                                    <td>texte du SMS a envoyer</td>
                                </tr>
                                <tr>
                                    <td>psw</td>
                                    <td>Le mot de passe si vous l'avez défini</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr />
        <h2>Sécurité</h2>
        <ul>
            <li>
                Contrairement a l'application de APK SOFT s.r.o, l'application n'accède pas aux SMS entrant ni au protocole POP3. <br /> 
            </li>
            <li>
                SMSGateway est conçus pour fonctionner sur un réseau local. <br />
                Il est fortement déconseiller de permettre l'accès direct de votre Gateway depuis l’extérieur de votre réseau local (Internet). <br />
                Si tout de fois vous en avez besoin, nous vous recommandons de créer un service intermédiaire disposant d'un véritable système d’authentification (le DevWebFramework peut répondre à ce besoin)
            </li>
            <li>
                Nous rappelons que <a href="https://www.cnil.fr/fr/la-prospection-commerciale-par-sms-mms" target="_blank">la prospection par SMS</a> est strictement encadré par la loi CNIL. <br />
                Les développeur de SMSGateway se dégage de toute responsabilité en cas d'usage abusif de l'application.
            </li>
        </ul>
        <hr />
        <h2>Liens</h2>
        <ul>
            <li><a href="https://github.com/legagneur-matthieu/cdv_SMSGateway" target="_blank">Github</a></li>
            <li><a href="src/SMSGateway.apk">Télécharger l'APK (Android 8 et plus)</a></li>
            <li>Vous pouvez compiler l'application pour IOS ? <a href="mailto:legagneur.matthieu@gmail.com">Contactez moi</a></li>
        </ul>
        <?php
    }

    /**     * Exemple de login */
    public function login() {
        $auth = new auth("user", "login", "psw");
        if (session::get_auth()) {
            js::redir("index.php");
        }
    }

    public function deco() {
        auth::unauth();
        js::redir("index.php");
    }

}
