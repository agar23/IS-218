<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>

  <!-- add code for the rest of the table here -->

        <?php foreach ($categories as $category) : ?>
        <tr>
          <td>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?></a>
          </td>
          <td>
            <form action="delete_category.php" method="post">
              <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>" >
              <input type="submit" value="Delete">
          </form>
         </td>
        </tr>
        <?php endforeach; ?>

    </table>

    <h2>Add Category</h2>

    <!-- add code for the form here -->

      <label>Category:</label>
      <form action="add_category.php" method="post"
            id="category_list">
      <input type="text" name="category_id1">
      <input type="submit" value="Add"><br>
      </form>

    <br>
    <p><a href="index.php">List Products</a></p>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
