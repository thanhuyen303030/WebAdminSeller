<?php
require 'connection.php';
if (isset($_POST["submit"])) {
  echo 'hello there';
  $barcode = $_POST['barcode'];
  $name = $_POST['name'];
  $title = $_POST['title'];
  $avatar = $_POST['avatar'];
  $import_price = $_POST['import_price'];
  $retail_price = $_POST['retail_price'];
  $description = $_POST['description'];
  $category_id = $_POST['category_id'];
  $created_at = date('Y-m-d H:i:s'); // Current date and time
  $updated_at = date('Y-m-d H:i:s'); // Current date and time
  $quantity_sold = 0; // Default value
  $quantity_in_stock = $_POST['quantity_in_stock']; // Assuming this is provided in the form
  $deleted = 0; // Default value




  $query = "INSERT INTO products (barcode, name, title, avatar, import_price, retail_price, description, category_id, created_at, updated_at, quantity_sold, quantity_in_stock, deleted) 
        VALUES ('$barcode', '$name', '$title', '$avatar', $import_price, $retail_price, '$description', $category_id, '$created_at', '$updated_at', $quantity_sold, $quantity_in_stock, $deleted)";
  mysqli_query($conn, $query);

  echo
    "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Insert Data</title>
</head>
<style media="screen">
  label {
    display: block;
  }
</style>

<body>
<form method="post" action="">
  <table>
    <tr>
      <td><label for="barcode">Barcode:</label></td>
      <td><input type="text" id="barcode" name="barcode" required></td>
    </tr>
    <tr>
      <td><label for="name">Tên sản phẩm:</label></td>
      <td><input type="text" id="name" name="name" required></td>
    </tr>
    <tr>
      <td><label for="title">Tiêu đề:</label></td>
      <td><input type="text" id="title" name="title" required></td>
    </tr>
    <tr>
      <td><label for="avatar">Avatar:</label></td>
      <td><input type="text" id="avatar" name="avatar" required></td>
    </tr>
    <tr>
      <td><label for="import_price">Giá nhập:</label></td>
      <td><input type="text" id="import_price" name="import_price" required></td>
    </tr>
    <tr>
      <td><label for="retail_price">Giá bán:</label></td>
      <td><input type="text" id="retail_price" name="retail_price" required></td>
    </tr>
    <tr>
      <td><label for="description">Mô tả:</label></td>
      <td><textarea id="description" name="description" required></textarea></td>
    </tr>
    <tr>
      <td><label for="category_id">Category Id:</label></td>
      <td><input type="text" id="category_id" name="category_id" required></td>
    </tr>
    <tr>
      <td><label for="quantity_in_stock">Số lượng trong kho:</label></td>
      <td><input type="number" id="quantity_in_stock" name="quantity_in_stock" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit" value="Submit"></td>
    </tr>
  </table>
</form>


</body>

</html>