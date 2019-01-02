# moodle-redissentinel
Cache store for Moodle based on the redis store, for instances using Redis Sentinel master-slave replication

This plugin allows Moodle to access a Redis replication set.  An example configuration would be a Moodle cluster where Redis is running on each web server, with a single server configured as the "master" node. 

In this example configuration, Moodle will always perform cache reads on the localhost. Before making a cache write, it will check with sentinel to determine the master node, and then perform the write on the master node.

Relative to the default Moodle redis plugin, there are two additional settings:
* Sentinel Server: The name and port of the host running Sentinel i.e. "localhost:26379"
* Master Set Name: The name of the master set configured in your sentinel.conf file, i.e. "mymaster"

To learn more about Redis replication and sentinel, visit https://redis.io/topics/replication
