<?php
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop');


function open_database()
{
    $conn = new mysqli(HOST, USER, PASS, DB);
    if ($conn->connect_error) {
        die('connect error: ' . $conn->connect_error);
    }
    return $conn;
}
function put_SP (){
    $conn=open_database();
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    // Output data of each row
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["barcode"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["quantity_in_stock"] . "</td>";
            echo "<td>" . $row["retail_price"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results found</td></tr>";
    }
}

function put_SP_admin (){
    $conn=open_database();
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    // Output data of each row
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='text-align: center;'><img src='../letterx_83737.png' alt='' class='delete-sp' width=20px ></td>";
            echo "<td>" . $row["barcode"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["quantity_in_stock"] . "</td>";
            echo "<td>" . $row["import_price"] . "</td>";
            echo "<td>" . $row["retail_price"] . "</td>";
            echo "<td><img src='../images-removebg-preview.png' alt='' class='edit-sp' width=50px></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>0 results found</td></tr>";
    }
}
function them_sp(){
    $conn=open_database();
    if (isset($_POST["submit"])) {
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
        
    
}
?>