<?php 
if(isset($_SESSION['login'])){
	$bidderid = $_POST['bidderid'];
	$answer= $_POST['answer'];

	if ($answer == "Update Bidder"){
		$bidder = Bidder::findBidder($bidderid);
		$bidder->bidderid = $_POST['bidderid'];
		$bidder->lastname = $_POST['lastname'];
		$bidder->firstname = $_POST['firstname'];
		$bidder->address = $_POST['address'];
		$bidder->phone = $_POST['phone'];
		$result = $bidder->updateBidder();

		if($result){
			echo "<h2>Bidder: $bidderid has been updated</h2>\n";
		}else{
			echo "<h2>There was a problem updating Bidder: $bidderid</h2>\n";
		}
	} else{
		echo "<h2>Update is cancelled for Bidder: $bidderid</h2>\n";
	}
}else{
	echo "<h2><a href=\"index.php\">Please log in</a></h2>\n";
}
?>