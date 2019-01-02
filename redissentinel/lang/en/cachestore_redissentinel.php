<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Redis Cache Store - English language strings
 *
 * @package   cachestore_redis
 * @copyright 2013 Adam Durana
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redis Sentinel';
$string['prefix'] = 'Key prefix';
$string['prefix_help'] = 'This prefix is used for all key names on the Redis server.
* If you only have one Moodle instance using this server, you can leave this value default.
* Due to key length restrictions, a maximum of 5 characters is permitted.';
$string['prefixinvalid'] = 'Invalid prefix. You can only use a-z A-Z 0-9-_.';
$string['privacy:metadata:redis'] = 'The Redis cachestore plugin stores data briefly as part of its caching functionality. This data is stored on an Redis server where data is regularly removed.';
$string['privacy:metadata:redis:data'] = 'The various data stored in the cache';
$string['serializer_igbinary'] = 'The igbinary serializer.';
$string['serializer_php'] = 'The default PHP serializer.';
$string['server'] = 'Server';
$string['server_help'] = 'This sets the hostname or IP address of the Redis server to use for reading keys.  This will be a master or a slave server.  i.e. localhost';
$string['sentinel_server'] = 'Sentinel Server';
$string['sentinel_server_help'] = 'This sets the hostname or IP address of the Redis Sentinel server to use. Usually this will be the same as the server but a different port. i.e. localhost:5000';
$string['master_set_name'] = 'Master Set Name';
$string['master_set_name_help'] = 'The name of the sentinel master set as defined in sentinel.conf i.e. "mymaster"';
$string['password'] = 'Password';
$string['password_help'] = 'This sets the password of the Redis server.';
$string['test_server'] = 'Test server';
$string['test_server_desc'] = 'Redis server to use for testing.';
$string['test_sentinel_server'] = 'Test Sentinel Server';
$string['test_sentinel_server_desc'] = 'This sets the hostname or IP address of the Redis Sentinel test server to use. Usually this will be the same as the server but a different port. i.e. localhost:5000';
$string['test_master_set_name'] = 'Test Master Set Name';
$string['test_master_set_name_desc'] = 'The name of the sentinel master set as defined in sentinel.conf i.e. "mymaster"';
$string['test_password'] = 'Test server password';
$string['test_password_desc'] = 'Redis test server password.';
$string['test_serializer'] = 'Serializer';
$string['test_serializer_desc'] = 'Serializer to use for testing.';
$string['useserializer'] = 'Use serializer';
$string['useserializer_help'] = 'Specifies the serializer to use for serializing.
The valid serializers are Redis::SERIALIZER_PHP or Redis::SERIALIZER_IGBINARY.
The latter is supported only when phpredis is configured with --enable-redis-igbinary option and the igbinary extension is loaded.';
