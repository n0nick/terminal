<?php
if (!empty($_POST['input']))
{
	$st = $_POST['input'];

	switch($st)
	{
		case 'numbers':
			print join("\n",array(1,2,3,4,5,6,7,8,9,10));
			break;
		case 'sleep':
			print "sleeping...\n";
			sleep(2);
			print "slept!";
			break;
		case 'error':
			header('HTTP/1.0 Internal Server Error');
			print 'AAAAAAAAAHHHHHHHHHH!!! That hurt!!!';
			break;
		case 'help':
			print <<<HELP
Welcome to Ultimate-Complicated-Command-Line-Server 3000 Elite.
Available commands:
	numbers		Print numbers from 1..10
	sleep		Sleep for 2 seconds
	error		Return a 500 Server Error
	help		Print this help message
Any other text will be automagically reversed and printed.

Good luck!
HELP;
			break;
		case 'reverse':
		default:
			print strrev($_POST['input']);
	}
}
else
{
	print 'i need some input';
}
print "\n";
?>
