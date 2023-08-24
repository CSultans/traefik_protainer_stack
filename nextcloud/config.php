<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'trusted_proxies' => 
  array (
    0 => '10.0.0.0/16',
  ),
  'passwordsalt' => 'y2b8MidqySc+HzQxtXovXBWB7bwqUA',
  'secret' => 'q9Ojk4svqMmHTmvsrt/cGWkaUUcaJs0QfL1pzxvpWAKWHZHf',
  'trusted_domains' => 
  array (
    0 => 'nextcloud.t99ltd.info',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '27.0.2.1',
  'overwriteprotocol' => 'https',
  'overwrite.cli.url' => 'https://nextcloud.t99ltd.info',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'Change_this_password',
  'instanceid' => 'oc3na2m3ssc8',
  'installed' => true,
);