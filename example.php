<?php
/*
AmolecoinRPC-PHP
A simple class for making calls to Amolecoin's API using PHP.
https://github.com/amolecoin/amolecoinrpc-php/
====================
The MIT License (MIT)
Copyright (c) 2018 David Gilbert
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
====================


====================
AmolecoinRPC-PHP Example 
A simple example to disply the info of the node and confirm a successful
connection to the RPC host on the server for making connections.
====================
*/

//Include the AmolecoinRPC-PHP class
require_once('amolecoin-rpc.php');

//Initialize AmoleCoin connection/object
$amolecoin = new Amolecoin('username','password');

//Optionally, you can specify a host and port.
//$amolecoin = new Amolecoin('username','password','host','port');
// Defaults are:
//	host = localhost
//	port = 9111
//	proto = http

//If you wish to make an SSL connection you can set an optional CA certificate or leave blank
//This will set the protocol to HTTPS and some CURL flags
//$amolecoin->setSSL('/full/path/to/mycertificate.cert');

//Make calls to amolecoind as methods for your object. Responses are returned as an array.
//Examples:

//Get the info of the Amolecoind Daemon
$amolecoin->getinfo();

//Get Transaction information
//$amolecoin->getrawtransaction('0e3e2357e806b6cdb1f70b54c3a3a17b6714ee1f0e68bebb44a74b1efd512098',1);

//Get Sepcific Block Information
//$amolecoin->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f');


// The full response (not usually needed) is stored in $this->response while the raw JSON is stored in $this->raw_response
// When a call fails for any reason, it will return FALSE and put the error message in $this->error
// Example:
//echo $amolecoin->error;
// The HTTP status code can be found in $this->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.
// Example:
//echo $amolecoin->status;
