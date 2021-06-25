<?php

echo "Hello World\n";

// MySQL
$mysql = new PDO("mysql:host=mysql", "root", "password");
$version = $mysql->query("SELECT VERSION()");
$version = $version->fetch();
echo "MySQL ${version[0]}".PHP_EOL;

// PostgreSQL
$mysql = new PDO("pgsql:host=postgres", "postgres", "password");
$version = $mysql->query("SELECT VERSION()");
$version = $version->fetch();
echo "PostgreSQL ${version[0]}".PHP_EOL;

// Redis
$redis = new Redis();
$redis->connect('redis');
$info = $redis->info();
echo "Redis ${info['redis_version']}".PHP_EOL;

// Memcached
$memcached = new Memcached();
$memcached->addServer('memcached', 11211);
$version = $memcached->getVersion();
echo "Memcache ".array_pop($version).PHP_EOL;
