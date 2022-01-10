<?php
if(isset($_SESSION['login'])){
	$bidderid=$_POST['bidderid'];
	$bidder = Bidder::findBidder($bidderid);
	$result = $bidder->removeBidder();
	if($result){
		echo "<h2>Bidder: $bidderid has been deleted from the Bidders list</h2>\n";
	}
	else {
		"<h2>Sorry, there\'s been a problem with removing Bidder: $bidderid</h2>\n";
	}
} 
else{
	echo "<h2>Please log in first</h2>\n";
}
?>