<?php

/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "form_clientes");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.megazordecleiton.com.br");
define("CONF_URL_TEST", "https://www.localhost/cadastro");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "MegaZorde");
define("CONF_SITE_TITLE", "Faça seu cadastro no MegaZorde");
define(
    "CONF_SITE_DESC",
    "MegaZorde é um site pra ver se eu to baum ou não"
);
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "up.com.br");
define("CONF_SITE_ADDR_STREET", "Praça é Nossa");
define("CONF_SITE_ADDR_NUMBER", "0000");
define("CONF_SITE_ADDR_COMPLEMENT", "Bloco A, Sala 208");
define("CONF_SITE_ADDR_CITY", "Muriaé");
define("CONF_SITE_ADDR_STATE", "MG");
define("CONF_SITE_ADDR_ZIPCODE", "44701-157");



/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "message");
define("CONF_MESSAGE_INFO", "info icon-info");
define("CONF_MESSAGE_SUCCESS", "success icon-success");
define("CONF_MESSAGE_WARNING", "warning icon-warning");
define("CONF_MESSAGE_ERROR", "error icon-warning");


/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "megaweb");
define("CONF_VIEW_APP", "megaapp");
define("CONF_VIEW_TELE", "teleweb");
define("CONF_VIEW_MED", "medweb");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.gmail.com");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "carloseduardopr.dev@gmail.com");
define("CONF_MAIL_PASS", "glghwkpvrujuytrc");
define("CONF_MAIL_SENDER", ["name" => "Carlos Eduardo", "address" => "carlosProriz17@outlook.com"]);
define("CONF_MAIL_SUPPORT", "carloseduardopr.dev@gmail.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
