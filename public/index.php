<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
//This style is from the script
require_once __DIR__ . '/../generated-conf/config.php';

//For testing!! Remove after test!!
//require_once __DIR__ . '/../vendor/autoload.php';
//require_once __DIR__ . '/../generated-conf/config.php';
//$oCustomer = new \Ism\Model\Customer();
//$oCustomer->setFirstname('Arne');
//$oCustomer->save();
//echo $oCustomer->getId();
// ^ delete the code above after testing


return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <title></title>
    </head>
    <body>

    </body>
</html>