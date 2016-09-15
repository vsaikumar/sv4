<?php include 'view/header.php'; ?>

   <div id="main">
       <div id="sidebar"> 
        <h1>Categories</h1>
        <ul class="nav">
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category->getID(); ?>">
                    <?php echo $category->getName(); ?>
                </a>
            </li>
            <?php endforeach; ?>
        
         <h1>Manager</h1>
        <a href="product_manager/index.php">Admin</a>
      
    </ul>
         <img src="images/com_1.jpg" name = "banner" height = "130" width = "175"/>

    </div>
       <script type ="text/javascript">
    
<!--Hide from old browsers
var rotateBanner;
var banner = new Array(1);
var curBanner = 0;
    banner[0] = "images/com_1.jpg"; 
    banner[1] = "images/com_2.jpg";
    banner[2] = "images/com_3.jpg";
                
function rotate(){
    if(curBanner == 2)
        curBanner = 0;
    else
        ++curBanner;
    document.images[0].src = banner[curBanner];
}
function startRotating(){
    rotateBanner = setInterval("rotate()", 2500);
}
//--></script>
    <div id="content">
        <h1><?php echo $product->getName(); ?></h1>
        <div id="left_column">
            <p>
                <img src="<?php echo $product->getImagePath(); ?>"
                    alt="<?php echo $product->getImageAltText(); ?>" width ="450" heigh ="480" />
            </p>
        </div>

        <div id="right_column">
            <p><b>List Price:</b> R<?php echo $product->getPriceFormatted(); ?></p>
            <p><b>Discount:</b> <?php echo $product->getDiscountPercent(); ?>%</p>
            <p><b>Your Price:</b> R<?php echo $product->getDiscountPrice(); ?>
                 (You save R<?php echo $product->getDiscountAmount(); ?>)</p>
        </div>
    </div>
</div>
 
<?php include 'view/footer.php'; ?>