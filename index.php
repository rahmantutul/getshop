<?php 
  ob_start();
  include('Template/header.php')
?>

    <?php 
      // Banner Section 
      include('Template/sections/_banner-area.php');
      // End Banner section 

      // Top sell section
      include('Template/sections/_topsale-area.php');
      // End top sell section

      //  Special section 
      include('Template/sections/_special-price-area.php');
      // End special section

      //  Add area
        include('Template/sections/_add-area.php');
      // End add area

      // New phone section
        include('Template/sections/_new-phones-area.php');
      // End new phone section

      // blog area
        include('Template/sections/_blog-area.php')
      // End blog area 
    ?>


<?php
   include('Template/footer.php')
?>