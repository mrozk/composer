<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require 'vendor/autoload.php';
try{
	// create a log channel
	$log = new Logger('name');
	$log->pushHandler(new StreamHandler('your.log', Logger::WARNING));

	// add records to the log
	$log->addWarning('Foo');
	$log->addError('Bar');
}catch( \Exception $e ){
	echo  $e->getMessage();
}

?>
