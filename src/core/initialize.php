<?php

namespace src\core;

if (!defined("TOKEN")) {
    define("TOKEN", '');
}
if (!defined("DOMAIN")) {
    define('DOMAIN', '');
}
if (!defined('API')) {
    define('API', "https://api.telegram.org/bot" . TOKEN . "/");
}
if (!defined('BOT_USERNAME')) {
    define('BOT_USERNAME', '');
}
//DB Config
if (!defined('DB_NAME')) {
    define('DB_NAME', '');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', '');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
