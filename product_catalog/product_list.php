<?php include 'view/header.php'; ?>

<img src="com_1.jpg" name = "banner" height = "80" width = "145"/>
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
       
    </div>
       
    <div id="content">
        <h1><?php echo $current_category->getName(); ?></h1>
        <ul class="nav">
            <?php foreach ($products as $product) : ?>
            <li>
                <a href="?action=view_product&product_id=<?php
                          echo $product->getID(); ?>">
                <img src = "images/images.jpg" width ="30" height="20">
                    <?php echo $product->getName(); ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        
</div>
   </div>
<?php include 'view/footer.php'; ?>