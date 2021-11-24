<?php
include_once("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <li class="sidenav__list-item"><i class="fas fa-home"></i><a href="#">Home</a></li>
                <li class="sidenav__list-item"><i class="fas fa-plus-circle"></i><a href="add.php">Add</a></li>
                <li class="sidenav__list-item"><i class="fas fa-user"></i><a href="#">Profile</a></li>
                <li class="sidenav__list-item"><i class="fas fa-cog"></i><a href="#">Setting</a></li>
            </ul>
        </aside>

        <main class="main">
            <div class="main-header">
                <div class="main-header__heading">
                    <h2>welcome <span>mensieur</span></h2>
                </div>
                <div class="main-header__updates"></div>
            </div>

            <div class="main-overview">
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
                <div class="overviewcard">
                    <div class="overviewcard__icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="overviewcard__info">
                        <h3>Total income <span>9000$</span></h3>
                    </div>
                </div>
            </div>

            <div class="main-cards">
                <div class="card">
                    <table>
                        <tbody>
                            <tr>
                                <th class="first">
                                    <input class="checkbox" type="checkbox">
                                </th>
                                <th class="id">Id</th>
                                <th>Image</th>
                                <th class="product-name">Name</th>
                                <th class="price">Price</th>
                                <th class="Category">Category</th>
                                <th class="description">description</th>
                                <th class="quantity">quantity</th>
                                <th class="edit">edit</th>
                                <th class="last"></th>
                            </tr>

                            <?php
                            include 'connexion.php';
                            $reponse = $con->query('SELECT * FROM product');
                            while ($row = $reponse->fetch()) {
                       
                            ?>
                            <tr>
                                <td class="first">
                                    <input class="checkbox" type="checkbox">
                                </td>
                                <td class="id"># <?php echo $row ['id'] ?> </td>
                                <td>
                                    <img data-modal-target="#modal" class="product-img" src="img/<?php echo $row ['Image'] ?>" alt="pizza">
                                </td>
                                <td data-modal-target="#modal" class="product-name"><?php echo $row ['Name'] ?></td>
                                <td class="price"><?php echo $row ['Price']; ?></td>
                                <td class="Category"><?php echo $row ['Category'] ?></td>
                                <th class="description"><?php echo $row ['Description'] ?></th>
                                <td class="quantity"><?php echo $row ['quantity'] ?></td>
                                <td class="edit">
                                    <div class="edit-icon">
                                        <a  href="edit.php?id=<?php echo $row ['id'] ?>"><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Are you sure')"  href="delete.php?id=<?php echo $row ['id'] ?>"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                                <td class="last">
                                    <button data-modal-target="#modal-<?php echo  $row ['id'] ?>" class="view-btn">View</button>
                                </td>
                            </tr>
                            <?php } 
                            $reponse->closeCursor();
                            
                            ?>

    
                        </tbody>
                    </table>
                </div>

            </div>
        </main>


        <?php
                include 'connexion.php';
                $reponse = $con->query('SELECT * FROM product');
                // echo $reponse->rowCount();
                while ($row = $reponse->fetch()) {          
            ?>
        <div class="modal" id="modal-<?php echo  $row ['id'] ?>">
            <div class="modal-header">
                <div class="title">Product info</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
        
            <div class="modal-body">
                <div class="modal-img"><img
                        src="../img/<?php echo $row ['Image'] ?>" alt="pizza"
                        height="100%" width="215px"></div>
                <div class="modal-text">
                    <H2 class="product-title"><?php echo $row ['Name'] ?></H2>

                    <div class="modal-text-popup">
                        <H4 class="details"><?php echo $row ['Category'] ?> </H4>
                        <h4 class="details">Qnt = <?php echo $row ['quantity'] ?></h4>
                    </div>

                    <p id="descrip"><?php echo $row ['Description'] ?></p>
                    <!-- <div class="description"></div> -->
                    <H2 class="price"><?php echo $row ['Price']; ?> $</H2>

                   
                </div>
            </div>
            </div>
            <?php } 
           
                            
            ?>
        
        <div id="overlay"></div>




        <footer class="footer">
            <div class="footer__copyright">&copy; 2021 El-kabli</div>
            <div class="footer__signature">copyright © 2021 all rights reserved</div>
        </footer>
    </div>
    <script src="main.js"></script>
    <script src="script.js"></script>
      

</body>

</html>