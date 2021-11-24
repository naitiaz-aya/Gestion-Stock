<?php
include_once("connexion.php");
$sql= "SELECT * FROM product WHERE id=".$_GET['id'];

if (isset($_POST['submit'])) {
    $name =  isset($_POST['product_name'])?$_POST['product_name']:null;
    $category = isset($_POST['product_category'])?$_POST['product_category']:null;
    $quantity = isset($_POST['product_quantity'])?$_POST['product_quantity']:null;
    $price = isset($_POST['product_price'])?$_POST['product_quantity']:null;
    $description = isset($_POST['product_description'])?$_POST['product_description']:null;
    $image = isset($_POST['product_image'])?$_POST['product_image']:null;
    $id=isset($_POST['id'])?$_POST['id']:null;
        echo "test";
        $sql = "UPDATE product 
        SET image = '$image', Name ='$name', Price = $price, Category = '$category', 	quantity = $quantity, Description = '$description' 
        WHERE id=$id";
        $stmt= $con->prepare($sql);
        $stmt->execute(); 
        header("Location: dashboard.php");
    }





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="style/dashboars.css">
    <link href="fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

</head>

<body>
    <div class="grid-container">
        <div class="menu-icon">
            <i class="fas fa-bars header__menu"></i>
        </div>

        <header class="header">
            <div class="header__search"><input type="search" placeholder="Search ..."></div>
            <div class="header__avatar">
                <img src="profile.jpg" alt="profile">
            </div>
        </header>

        <aside class="sidenav">
            <div class="sidenav__close-icon">
                <i class="fas fa-times sidenav__brand-close"></i>
            </div>
            <ul class="sidenav__list">
                <li class="sidenav__list-item"><i class="fas fa-home"></i><a href="dashboard.php">Home</a></li>
                <li class="sidenav__list-item"><i class="fas fa-plus-circle"></i><a href="add.php">Add</a></li>
                <li class="sidenav__list-item"><i class="fas fa-user"></i><a href="#">Profile</a></li>
                <li class="sidenav__list-item"><i class="fas fa-cog"></i><a href="#">Setting</a></li>
            </ul>
        </aside>

        <main class="main">
            <div class="main-cards">
                <div class="card">
                    <!-- add product form -->
                    <div class="title">Update product</div>
                    <?php
                            include 'connexion.php';
                           $reponse = $con->query('SELECT * FROM product WHERE id='.$_GET["id"].'');
                            while ($row = $reponse->fetch()) {
                       
                            ?>
                        <form method="POST" action="edit.php">
                            <div class="user-details">
                                <div class="form-box">
                                    
                                    <div class="input-box">
                                        <span class="details">Product name</span>
                                        <input type="text" name="product_name" placeholder="Enter product name" required VAlue="<?php echo $row ['Name'] ?>" >
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Category</span>
                                        <input type="text" name="product_category" placeholder="Enter product Category" required value="<?php echo $row ['Category'] ?>">
                                    </div>
                                    <div class="input-box">
                                        <span class="details">quantity</span>
                                        <input type="number" name="product_quantity" min="0" placeholder="Enter product quantity" required value="<?php echo $row ['quantity'] ?>">
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Price</span>
                                        <input type="number" name="product_price" min="0" placeholder="Enter product price $" required value="<?php echo $row ['Price']; ?>">
                                    </div>
                                </div>
                                <div class="textarea-box">
                                    <span class="details">description</span>
                                    <textarea name="product_description" id="description" cols="30" rows="10" ><?php echo $row ['Description']; ?></textarea>
                                </div>
                            </div>
<input type="hidden" name="id" value="<?php echo $row ['id']; ?>">
                            <div class="button">
                                <input class="submit" type="submit" name="submit" value="Update product"> 
                                <input type="file" name="product_image" id="upload" value="<?php echo $row ['Image'] ?>" hidden/>
                                <label class="upload" for="upload">Choose file</label>
                            </div>
                        </form>
                        <?php } 
                            $reponse->closeCursor();
                            
                            ?>


                    <!-- end of add product form -->
                </div>
            </div>
        </main>

        <footer class="footer">
            <div class="footer__copyright">&copy; 2021 El-kabli</div>
            <div class="footer__signature">copyright © 2021 all rights reserved</div>
        </footer>
    </div>
    <script src="main.js"></script>
    <script src="REGEX.JS"></script>
</body>

</html>