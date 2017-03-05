<?php

function get_products_by_category(){
	global $db
	$query = 'select * from products_guitar1;';
	$statement = $db->prepare($query);
	$statement->execute();
	$products = $statement->fetchAll();
	return $products;
	}
?>
