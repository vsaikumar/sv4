<?php include '../view/header.php'; ?>


   <div id="main">
       
    <?php include '../view/mini_sidebar.php'; ?>
       <div id ="content">  
    <h1>Add Product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category->getID(); ?>">
                <?php echo $category->getName(); ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br />

        <label>Code:</label>
        <input type="input" name="code" />
        <br />

        <label>Name:</label>
        <input type="input" name="name" />
        <br />

        <label>List Price:</label>
        <input type="input" name="price" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br />
    </form>
    <p><a href="index.php?action=list_products">View Product List</a></p>
       </div>
       </div>
<?php include '../view/footer.php'; ?>