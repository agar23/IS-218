<?php
require_once('database.php');

//get categories from DB
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

//count how many categories are present already
$result = count($categories);

//add one for new category
$category_id = $result + 1;
$category_name = filter_input(INPUT_POST, 'category_id1');

if ($category_id == null || category_id == null) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database
    $query = 'INSERT INTO categories_guitar1
                 (categoryID, categoryName)
              VALUES
                 (:category_id, :category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':category_name', $category_name);
    $statement->execute();
    $statement->closeCursor();

}

    // Display the Product List page
    include('category_list.php');





?>
