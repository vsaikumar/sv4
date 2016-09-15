<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body{
            background-color: cyan;
        }
    </style>
</head>
<body>


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
        <a href="../product_manager/index.php">Admin</a>
        
         <h1>Home</h1>
        <a href="../index.php">Home</a>
    </ul>
        
    </div>
    </body>
</html>