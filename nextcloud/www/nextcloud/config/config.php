<?php
$CONFIG = array (
  'trusted_domains' => 
  array (
  ),
  'maintenance_window_start' => 1,
  'filelocking.enabled' => true,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
  array (
    'host' => 'redis',
    'port' => 6379,
    'timeout' => 0.0,
    'user' => '',
    'password' => '',
  ),
  'upgrade.disable-web' => true,
  'maintenance' => false,
  'loglevel' => 2,
);
