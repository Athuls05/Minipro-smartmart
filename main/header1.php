<header class="header">

   <div class="flex">

      <a href="#" class="logo">Smartmart</a>

      
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>