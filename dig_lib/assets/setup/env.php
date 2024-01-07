<?php

if (!defined('APP_NAME'))                       define('APP_NAME', 'GNDPC Library');
if (!defined('APP_ORGANIZATION'))               define('APP_ORGANIZATION', 'GNDPC');
if (!defined('APP_OWNER'))                      define('APP_OWNER', 'GNDPC');
if (!defined('APP_DESCRIPTION'))                define('APP_DESCRIPTION', 'GNDPC Library');

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time() + 1 * 60);

if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'gndpolyo_web');
if (!defined('DB_HOST'))                        define('DB_HOST', '127.0.0.1');
// if (!defined('DB_HOST'))                        define('DB_HOST', '162.241.218.223');
if (!defined('DB_USERNAME'))                    define('DB_USERNAME', 'root');
// if (!defined('DB_USERNAME'))                    define('DB_USERNAME', 'gndpolyo_admin');
if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD', ''); //Empty for XAMPP Server
// if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD', 'qwerty@1234');
if (!defined('DB_PORT'))                        define('DB_PORT', '');

if (!defined('MAIL_HOST'))                      define('MAIL_HOST', 'smtp.gmail.com');
if (!defined('MAIL_USERNAME'))                  define('MAIL_USERNAME', 'sumanbala@gndpoly.org');
if (!defined('MAIL_PASSWORD'))                  define('MAIL_PASSWORD', 'yixyuyzdunqvyiny');
if (!defined('MAIL_ENCRYPTION'))                define('MAIL_ENCRYPTION', 'ssl');
if (!defined('MAIL_PORT'))                      define('MAIL_PORT', 465);
