<?php
    $search = isset($_REQUEST['ProID']) ? $_REQUEST['ProID'] : '';

    include_once('config.php');
    $query = "select * from tbl_product where id='$search' ";
    $result = mysqli_query($connect, $query) or die('Error :$query' . mysqli_error($connect));
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $img = $row['image'];
        $name = $row['name'];
        $price = $row['price'];
        $cate = $row['category'];
    
    $query_detail = "select * from tblpro_detail where id='$search'";
    $query_gallery = "select * from tblpro_gallery where id='$search'";
    $result_detail = mysqli_query($connect, $query_detail) or die('Error :$query_detail' . mysqli_error($connect));
    $result_gallery = mysqli_query($connect, $query_gallery) or die('Error :$query_detail' . mysqli_error($connect));
    $row_detail = mysqli_fetch_assoc($result_detail);
    $row_gallery = mysqli_fetch_assoc($result_gallery);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $name; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="assets/logo.png"/>
        <link rel="stylesheet" href="css/flickity.css">
        <link rel="stylesheet" href="css/item-style.css">
        <script src="https://use.fontawesome.com/836bb0b6ce.js"></script>
        <script src="js/flickity.pkgd.js"></script>
    </head>
    <body>
        <!-- Navigation-->
    <section class="header">
        <nav>
            <a href="index.php"><img src="assets/logo.png"></a>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="#">Community</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
        </nav>
        <div class="carousel-menu">
            <div class="menu">
            <a href="index.php">Back to Store</a>
            <a class="current" href="#"><?php echo $name; ?></a>
            </div>
            <input type="text" placeholder="Search..." name="search">
        </div>
    </section>
        <!-- Product section-->
        <section class="pro-carousel">
            <div class="column">
            <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/gallery/<?PHP echo $row_gallery['image1']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gallery/<?PHP echo $row_gallery['image2']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gallery/<?PHP echo $row_gallery['image3']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/gallery/<?PHP echo $row_gallery['image4']; ?>" class="d-block w-100">
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators5" data-slide-to="0"><a href="#"><img
                        src="images/gallery/<?PHP echo $row_gallery['image1']; ?>" class="d-block w-100"></a></li>
                <li data-target="#carouselExampleIndicators5" data-slide-to="1"><a href="#"><img
                        src="images/gallery/<?PHP echo $row_gallery['image2']; ?>" class="d-block w-100"></a></li>
                <li data-target="#carouselExampleIndicators5" data-slide-to="2"><a href="#"><img
                        src="images/gallery/<?PHP echo $row_gallery['image3']; ?>" class="d-block w-100"></a></li>
                <li data-target="#carouselExampleIndicators5" data-slide-to="3"><a href="#"><img
                        src="images/gallery/<?PHP echo $row_gallery['image4']; ?>" class="d-block w-100"></a></li>
            </ol>
        </div>
            <div class="column">
                <div class="product-card" >
                      <div class="product-img">
                      <img class="card-img" src="images/<?php echo $img; ?>">
                      </div>
                      <div class="product-price">
                        <p style="margin-top: 20px; margin-bottom: 0px; font-size: 25px;"><?php echo $name; ?></p>
                      <p>$<?php echo $price; ?></p>
                      <button class="buy-btn"><a>Buy Now</a></button>
                      <div class="pro-info">
                        <div class="label"><p>Developer: </p></div><?PHP echo $row_detail['developer']; ?><br>
                      </div>
                      <div class="pro-info">
                        <div class="label"><p>Publisher: </p></div><?PHP echo $row_detail['publisher']; ?><br>
                      </div>
                      <div class="pro-info">
                        <div class="label"><p>Release Date: </p></div><?PHP echo $row_detail['release_date']; ?>
                      </div>
                      </div>
                  </div>
                  </div>
        </section>
        <section class="product-descript">
            <div class="pro-genre">
                <h3 style="font-family: 'helvetica'; font-weight: bold; font-size: 50px;"><?php echo $name; ?></h3>
                <p>Genres</p>
                <p><?PHP echo $row_detail['genre']; ?></p>
                <hr style="height:2px;border-width:0;background-color:gray;margin-right: 325px;">
            </div>
            <div class="pro-desc">
                <p><pre style="font-family:Arial, Helvetica, sans-serif; color: #fff; font-size: 16px; margin-right: 20%;"><?PHP echo $row_detail['description']; ?></pre></p>
                <p>System Requirement</p>
                <p>Minimum:</p>
                <p><pre style="font-family:Arial, Helvetica, sans-serif; color: #fff; font-size: 16px;"><?PHP echo $row_detail['minimum']; ?></pre></p>
                <p>Recommended:</p>
                <p><pre style="font-family:Arial, Helvetica, sans-serif; color: #fff; font-size: 16px;"><?PHP echo $row_detail['recommended']; ?></pre></p>
            </div>
            <?php
            }
    ?>
        </section>
        <!-- Related items section-->
        <!-- Footer-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer-container">
            <div class="footer">
              <div class="footer-heading footer-1">
                <h2>About Us</h2>
                <a href="#">Home</a>
                <a href="#">Services</a>
                <a href="#">FAQ</a>
                <a href="#">Term of Services</a>
              </div>
              <div class="footer-heading footer-2">
                <h2>Social Media</h2>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Youtube</a>
                <a href="#">Twitter</a>
              </div>
              <div class="footer-email-form">
                <h2>Newsletter</h2>
                <p>Subscribe to our mailing list to receive updates on new <br>arrivals, special offers and other discount information.</p>
                <input type="email" placeholder="Enter your email address" id="footer-email">
                <input type="submit" value="Sign Up" id="footer-email-btn">
              </div>
            </div>
            <div class="small-footer">
              <div class="small-footer-container">
                <div class="copyright">
                  <p>Copyright &copy; 2021 <span>Gleam.</span> All Rights Reserved.</p>
                </div>
                <div class="social">
                  <a href="#" class="fa fa-twitter fa-4x icon-3d" style="font-size: 20px"></a>
                  <a href="#" class="fa fa-facebook fa-4x icon-3d" style="font-size: 20px"></a>
                  <a href="#" class="fa fa-instagram fa-4x icon-3d" style="font-size: 20px"></a>
                  <a href="#" class="fa fa-youtube fa-4x icon-3d" style="font-size: 20px"></a>
                </div>
              </div>
            </div>
          </div>
        <!-- Bootstrap core JS-->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <!-- Core theme JS-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>