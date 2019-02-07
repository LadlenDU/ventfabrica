<?php
// HTTP
define('HTTP_SERVER', 'http://uid2018.hosting1.b-leader.ru/');

// HTTPS
define('HTTPS_SERVER', 'http://uid2018.hosting1.b-leader.ru/');

// DIR
define('DIR_APPLICATION', '/var/www/uid2018/data/www/uid2018.hosting1.b-leader.ru/catalog/');
define('DIR_SYSTEM', '/var/www/uid2018/data/www/uid2018.hosting1.b-leader.ru/system/');
define('DIR_IMAGE', '/var/www/uid2018/data/www/uid2018.hosting1.b-leader.ru/image/');
define('DIR_STORAGE', '/var/www/uid2018/data/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'uid2018_admin');
define('DB_PASSWORD', 'Y1v9D2j3');
define('DB_DATABASE', 'uid2018_opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');