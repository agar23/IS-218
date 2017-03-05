<?php
// Get all categories
$query = 'SELECT * FROM categories_guitar1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include '../view/header.php'; ?>

<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <!-- add category rows here -->
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
    <!-- add code for form here -->
    <label>Category:</label>
      <form action="index.php" method="post"
            id="category_list">
      <input type="text" name="category_name">
      <input type="submit" name="action" value="add_category"><br>
      </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
