<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once './vendor/autoload.php';
use Twilio\Rest\Client;
class SmsController extends CI_Controller {

	function __construct()
    {
       parent::__construct();
    }

    function index(){
    	$sid = 'AC869d389e245e122a46ab1c4ef52f29fc';
		$token = 'e9896def5427dbd101a5dfbab77899e3';
		$client = new Client($sid, $token);

		// Use the client to do fun stuff like send text messages!
		$client->messages->create(
		    // the number you'd like to send the message to
		    '+6281249553383',
		    array(
		        // A Twilio phone number you purchased at twilio.com/console
		        'from' => '+6281249553383',
		        // the body of the text message you'd like to send
		        'body' => 'Hey Jenny! Good luck on the bar exam!'
		    )
		 );

		echo "sukses";

    }
}