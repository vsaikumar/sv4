<?php include '../view/header.php'; ?>

 <div id="main">
     
 <?php include '../view/sidebar.php'; ?>
     
<h1>Product List</h1>

   

    <div id="content">
        <!-- display a table of products -->
        <h2><?php echo $current_category->getName(); ?></h2>
        <table border ="1">
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product->getCode(); ?></td>
                <td><?php echo $product->getName(); ?></td>
                <td class="right"><?php echo $product->getPriceFormatted(); ?>
                </td>
                <td><form action="." method="post"
                          id="delete_product_form">
                    <input type="hidden" name="action"
                           value="delete_product" />
                    <input type="hidden" name="product_id"
                           value="<?php echo $product->getID(); ?>" />
                    <input type="hidden" name="category_id"
                           value="<?php echo $current_category->getID(); ?>" />
                    <input type="submit" value="Delete" />
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Product</a></p>
        
        <p><a href="upload.php">Upload Image</a></p> 
    </div>
    </div>
   <br/>
       
<?php include '../view/footer.php'; ?>