<?
require_once 'includes/MCAPI.class.php';

$apikey = '21be3e0c4c4d9c5055115a49b93b7ed5-us2';
$listId = '7251f0e871';

$email = $_GET["email"];

if ($email != "") {
		
	$api = new MCAPI($apikey);

	$retval = $api->listSubscribe( $listId, $email);
	
	if ($api->errorCode){
		echo("Sorry, you couldn't be signed up at the moment.<br />".$api->errorMessage);
	} else {
	   echo("Thanks, you should receive a confirmation email in the next ten minutes.");
	}

}
?>
