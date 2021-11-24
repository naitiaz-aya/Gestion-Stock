<?php
include_once("connexion.php");

    $name =  isset($_POST['product_name'])?$_POST['product_name']:null;
    $category = isset($_POST['product_category'])?$_POST['product_category']:null;
    $quantity = isset($_POST['product_quantity'])?$_POST['product_quantity']:null;
    $price = isset($_POST['product_price'])?$_POST['product_quantity']:null;
    $description = isset($_POST['product_description'])?$_POST['product_description']:null;
    $image = isset($_POST['product_image'])?$_POST['product_image']:null;


if (isset($_POST['submit'])) {
   
//    echo "test";
    $sql = "INSERT INTO product (image, Name, Price, Category, 	quantity, Description) VALUES ('$image', '$name', '$price','$category','$quantity','$description')";
    $stmt= $con->prepare($sql);
    $stmt->execute(); 
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
                    <div class="title">New product</div>
                        <form method="POST" id="formX" action="add.php"  >
                            <div class="user-details">
                                <div class="form-box">
                                   
                                    <div class="input-box">
                                        <span class="details">Product name</span>
                                        <input name="product_name" type="text" placeholder="Enter product name" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Category</span>
                                        <input name="product_category" type="text" placeholder="Enter product Category" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">quantity</span>
                                        <input name="product_quantity" min="0" type="number" placeholder="Enter product quantity" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Price</span>
                                        <input name="product_price" min="0" type="number" placeholder="Enter product price $" required>
                                    </div>
                                </div>
                                <div class="textarea-box">
                                    <span class="details">description</span>
                                    <textarea name="product_description" id="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="button">
                                <input class="submit" name="submit" type="submit" value="Add product"> 
                                <input name="product_image" type="file" id="upload" hidden/>
                                <label class="upload" for="upload">Choose file</label>
                            </div>
                        </form>




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
    <SCript src="REGEX.JS"></SCript>
</body>

</html>