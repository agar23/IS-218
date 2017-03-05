<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories_guitar1
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories_guitar1
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $category = $statement->fetch();
    $statement->closeCursor();
    $category_name = $category['categoryName'];
    return $category_name;
}

function add_category($categories, $category_name){
  global $db;
  $result = count($categories);
  echo $result;
  $category_id = $result + 1;
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
?>
