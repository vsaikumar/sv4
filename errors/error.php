<?php include '../view/header.php'; ?>

<P ALIGN = center> |
<a href="../index.php"> Task 1 </a> |
<a href="motor_vehicle_dealer.php"> Task 2 </a> |
<a href="../diagram.htm"> Task 3 </a>
<a href="../wat2.php"> Task 4 </a> |</P> 

   <div id="main">
    <h1 class="top">Error</h1>
    <p><?php echo $error; ?></p>
</div>
   <br/>
       <P ALIGN = center> <IFRAME   SRC = '../motor_vehicle_dealer.txt' 
           SROLLING = 'yes' WIDTH = '1200' HEIGHT = '400' 
           FRAMEBORDER = '1' > </IFRAME> </P>
       
<?php include '../view/footer.php'; ?>