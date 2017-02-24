<?php
require_once('database.php');


$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
echo $category_id;


// Delete the product from the database
if ($category_id != false) {
    $query = 'DELETE FROM categories_guitar1
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $success = $statement->execute();
    $statement->closeCursor();
}

include('index.php');
