<?php include '../view/header.php'; ?>
 
<P ALIGN = center> |
<a href="../index.php"> Task 1 </a> |
<a href="motor_vehicle_dealer.php"> Task 2 </a> |
<a href="../diagram.htm"> Task 3 </a>
<a href="../wat2.php"> Task 4 </a> |</P> 

<div id="main">
    <h1 class="top">Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p>Error message: <?php echo $error_message; ?></p>
    <p>&nbsp;</p>
</div><!-- end main -->
<br/>
       <P ALIGN = center> <IFRAME   SRC = '../motor_vehicle_dealer.txt' 
           SROLLING = 'yes' WIDTH = '1200' HEIGHT = '400' 
           FRAMEBORDER = '1' > </IFRAME> </P>
       
<?php include '../view/footer.php'; ?>