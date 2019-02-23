AmolecoinRPC-PHP
===============

A simple class for making calls to Amolecoin's API using PHP.

Getting Started
---------------
1. Include amolecoin-rpc.php into your PHP script:

	`require_once('amolecoin-rpc.php');`
2. Initialize Amolecoin connection/object:

	`$amolecoin = new Amolecoin('username','password');`

	Optionally, you can specify a host, port. Default is HTTP on localhost port 9111.

	`$amolecoin = new Amolecoin('username','password','localhost','9111');`

	If you wish to make an SSL connection you can set an optional CA certificate or leave blank
	`$amolecoin->setSSL('/full/path/to/mycertificate.cert');`

3. Make calls to amolecoind as methods for your object. Examples:

	`$amolecoin->getinfo();`
	`$amolecoin->getrawtransaction('0e3e2357e806b6cdb1f70b54c3a3a17b6714ee1f0e68bebb44a74b1efd512098',1);`
	`$amolecoin->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f');`

Additional Info
---------------
* When a call fails for any reason, it will return false and put the error message in $amolecoin->error

* The HTTP status code can be found in $amolecoin->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in $amolecoin->response while the raw JSON is stored in $amolecoin->raw_response
