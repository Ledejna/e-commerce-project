<?php 
    session_start();
?>
<!-- THE UPLOAD ROOM BOX -->
<?php 
    $msg = "";
    // If upload button is pressed
    if(isset($_POST['upload-room'])) {
        $target = "img/".basename($_FILES['image']['name']);

        // connect to the database

        $db = mysqli_connect("localhost", "root", "", "clothesdb");

        // Get all the submitted data from the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $category = $_POST['category'];
        $posted_by = $_SESSION['userUid'];

        if(empty($image)) {
            header("Location: dashboard.php?empty-image");
            die();   
        }

        $sql = "INSERT INTO add_product(Image, Text, title, price, discount , category , posted_by) 
        VALUES ('$image', '$text', '$title' , '$price', '$discount', '$category' , '$posted_by')";
        mysqli_query($db, $sql); // stores the dubmitted data into the database table: add_product

        // This moves the uploaded image inside the folder -> Images
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "There was a problem uploading photo";
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="icon" href="/images/icons/caesaricon.png">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Clothing - Admin dashboard</title>
</head>
<body>

    
    <section id="mainsection">
    <h1> ADMIN DASHBOARD, WELCOME <span style="color: #eba016"><?php echo strtoupper($_SESSION['userUid'])?></span> </h1>
        <div class="add-product-form">
        <h1> ADD PRODUCTS TO PRODUCTS PAGE </h1>
        <a href="index.php" style="color: black"><img src="img/dark-logo.png" width="200"></a>
            <form method="post" action="" enctype="multipart/form-data">
                <div class="form-container">
                    <input type="file" name="image">
                    <input name="title"  placeholder="Product Brand">
                    <input name="text"  placeholder="Short descrtiption about product">
                    <label> Price </label>
                    <input type="number" name="price" style="width: 50px" value="1">
                    <label> Discount </label>
                    <input type="number" name="discount" style="width: 50px" value="1">
                    <select name="category" id="category">
                        <option selected>Choose Category</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                    </select>
                    <input type="submit" name="upload-room" value="Uploade Image">
                </div>

            </form>
        </div>
    </section>
    <div class="user-table">
    <h1> Insert, edit or delete users </h1>
    <table class="content-table">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Usergroup </th>
                </tr>
            </thead>
            <tbody>
            <?php 

                $db = mysqli_connect("localhost", "root", "", "clothesdb");
                $sql = "SELECT * FROM users";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>" . $row['idUsers'] . "</td>
                            <td>" . $row['uidUsers'] . "</td>
                            <td>" . $row['emailUsers'] . "</td>
                            <td>" . $row['usergroup'] . "</td>";
                    echo "</tr>";
                };
            ?>
            </tbody>
        </table>
        <div class="insert-update">
            <form action="includes/insert.php" method="POST">
                <h1> Insert user </h1>
                <label>Username </label> <input type="text" name="insert-username">
                <label>Email </label> <input type="email" name="insert-email">
                <label>Password </label> <input type="password" name="insert-password">
                <label>Usergroup </label> <input type="number" max="2" min="0" name="insert-usergroup">
                <input type="submit" name="insert-submit" value="Insert user">
            </form>
            <form action="includes/update.php" method="POST">
                <h1> Edit user </h1>
                <label>Select Users ID to edit </label> <input type="number" name="update-id">
                <label>New username </label> <input type="text" name="update-username">
                <label>New email </label> <input type="email" name="update-email">
                <label>New usergroup </label> <input type="number" max="2" min="0" name="update-usergroup">
                <input type="submit" name="update-submit" value="Edit user">
            </form>
            <form action="includes/delete.php" method="POST">
                <h1> Delete user </h1>
                <label>User ID </label> <input type="number" name="delete-id">
                <input type="submit" name="delete-submit" value="Delete user">
            </form>
        </div>
        </div>
        
    <?php require './includes/footer.php' ?>

</body>
</html>