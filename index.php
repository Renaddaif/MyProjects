<?php $page = "home"; include_once("include/header.php"); ?>
<?php include_once("include/db-connect.php"); ?>
<?php 
  $restaurants_qry = executeQuery("select * from restaurant order by id desc limit 6;"); 
  $restaurants = array();
  while ($restaurant = mysqli_fetch_array($restaurants_qry))
     $restaurants[] = $restaurant;
?>

<div class="image-text-container ">
    <div class="imgTitle">
        <img src="img/header.png" alt="Restaurants">
    </div>
</div>

<div class="border restaurants">

    <div class="image-gallery">
        <?php foreach ($restaurants as $key => $restaurant) { ?>
        <figure>
            <a href="restaurant-profile.php?id=<?php echo $restaurant['id']; ?>">
                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($restaurant['logo']); ?>" width="280"
                    height="200" alt="<?php echo $restaurant['name']; ?>">
            </a>
            <figcaption>
                <h3><a href="restaurant-profile.php?id=<?php echo $restaurant['id']; ?>"><?php echo $restaurant['name']; ?></a></h3>
                <p>To view menu and more information about <?php echo $restaurant['name']; ?> restaurant:</p>
                <div class="site"><a href="<?php echo $restaurant['website_url']; ?>">visit site</a></div>
            </figcaption>
        </figure>
        <?php } ?>
    </div>

    <div class="block center">
        <a href="restaurants.php">
            <div class="action-button">View More</div>
        </a>
    </div>

</div>

<?php include_once("include/footer.php"); ?>