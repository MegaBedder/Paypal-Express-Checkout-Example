<?php
	// sandbox or live
	define('PPL_MODE', 'sandbox');
	define('PPL_LANG', 'EN');
	define('PPL_CURRENCY_CODE', 'EUR'); // USD

	if(PPL_MODE=='sandbox'){
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}
	else{
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}

	define('PPL_LOGO_IMG',   'http://www.sanwebe.com/wp-content/themes/sanwebe/img/logo.png');
	define('PPL_RETURN_URL', 'http://localhost/paypal/process.php');
	define('PPL_CANCEL_URL', 'http://localhost/paypal/cancel_url.php');



    //start session in all pages
    if (version_compare(PHP_VERSION, '5.4.0') >= 0){
        if (session_status() == PHP_SESSION_NONE) { // PHP >= 5.4.0
            session_start();
        }
    }
    else{
        if(session_id() == '') { // PHP < 5.4.0
            session_start();
        }
    }
