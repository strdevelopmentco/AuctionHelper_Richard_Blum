<?php 
$bidderid = $_POST['bidderid'];
$bidder = Bidder::findBidder($bidderid);

if($bidder){
	echo "<h2>Update Bidder: $bidderid<h2><br>\n";
	echo "<form name=\"bidder\" action =\"index.php\" method=\"post\"><table><tr><td>Bidder ID</td><td>$bidder->bidderid</td></tr><tr><td>Last Name</td><td><input type=\"text\" name=\"lastname\" value=\"$bidder->lastname\"></td></tr><tr><td>First Name</td><td><input type=\"text\" name=\"firstname\" value=\"$bidder->firstname\"></td></tr><tr><td>Address</td><td><input type=\"text\" name=\"address\" value=\"$bidder->address\"></td></tr><tr><td>Phone</td><td><input type=\"text\" name=\"phone\" value=\"$bidder->phone\"></td></tr></table><br><br>\n";
	echo "<input type=\"submit\" name=\"answer\" value=\"Update Bidder\"><input type=\"submit\" name=\"answer\" value=\"Cancel\"><input type=\"hidden\" name=\"bidderid\" value=\"$bidderid\"><input type=\"hidden\" name=\"content\" value=\"changebidder\"></form>\n";
}else{
	echo "<h2>Sorry, Bidder: $bidderid not found</h2>\n";
}
?>

<script language="javascript">
	document.bidder.lastname.focus();
	document.bidder.lastname.select();
</script>