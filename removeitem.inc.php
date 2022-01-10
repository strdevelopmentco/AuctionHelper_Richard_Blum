<?php 
if(isset($_SESSION['login'])){
$item = $_POST['itemid'];
$item = Item::findItem($itemid);
$result = $item->removeItem();

if($result){
	echo "<h2>Item: $itemid has been removed</h2>\n";
}else{
	echo "<h2>Sorry, there\'s been a problem with removing Item: $itemid</h2>\n";
 }
}else{
	echo "<h2><a href=\"index.php\">Please log in</a><h2>\n";
}
?>