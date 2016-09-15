<?php include '../view/header.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <div id="main">
           <div id="content">
                <?php include '../view/mini_sidebar.php'; ?>
                <h1>Upload Image</h1>
                <form id="upload_form"
                      action="upload.php" method="POST"
                      enctype="multipart/form-data">
                    <input type="hidden" name="action" value="upload"/>
                    <input type="file" name="file1"/>
                    <input id="upload_button" type="submit" value="Upload"/>
                </form>
                <br />
                <h2>Images in the directory</h2>
                <?php if (count($files) == 0) : ?>
                    <p>No images uploaded.</p>
                <?php else: ?>
                    <ul>
                    <?php foreach($files as $filename) :
                        $file_url = $image_dir . '/' .
                                    $filename;
                        $delete_url = '?action=delete&filename=' .
                                      urlencode($filename);
                    ?>
                        <li>
                            <a href="<?php echo $delete_url;?>">
                                <img src="delete.png" alt="Delete"/></a>
                            <a href="<?php echo $file_url; ?>">
                                <?php echo $filename; ?></a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div><!-- end main -->
        </div><!-- end page -->
    </body>
</html>
<?php include '../view/footer.php'; ?>