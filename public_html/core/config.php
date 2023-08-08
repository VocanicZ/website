<?php

return [
  'mysql' => [
    'host' => '127.0.0.1',
    'port' => '3306',
    'username' => 'u302265335_dbmanager',
    'password' => '^C[TKI^c42Na',
    'db' => 'u302265335_webconfig',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'initialise_charset' => true,
    'initialise_collation' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'www.rainbowcreation.net',
    'path' => '',
    'friendly' => true,
    'force_https' => false,
    'force_www' => false,
    'captcha' => true,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
  'email' => [
    'email' => 'contact@rainbowcreation.net',
    'username' => 'contact@rainbowcreation.net',
    'password' => 'Vocanic_Z1',
    'name' => 'RainBowCreation',
    'host' => 'smtp.hostinger.com',
    'port' => 465,
  ],
  'authme' => [
    'address' => 'auth-db611.hstgr.io',
    'port' => '3306',
    'db' => 'u302265335_user',
    'user' => 'u302265335_auth',
    'pass' => '123456789Aaa',
    'table' => 'authme',
    'hash' => 'bcrypt',
  ],
];