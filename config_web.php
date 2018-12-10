<?php

	// CONFIG
	
	// The web admin password
	define('PASSWORD', 'password');
	
	// The password of the daemon on the remote server (This has to be exactly 40 characters).
	// This has to match the password in your daemon config file.
	define('DAEMON_URI', 'http://user:pass@yourdaemonip:port');

	// Error reporting?
	error_reporting(0);
	
	// Use Curl?
	define('USE_CURL', true);
	
?>
