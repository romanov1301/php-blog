 <?php require 'config.php' ?>
 <header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $config['title'];?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Main</a></li>
              <li><a href="about.php">About_me</a></li>
              <li><a href="<?php echo$config["mail_url"]; ?>">My_mail</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <?php


      $categories = mysqli_query($connection, 'SELECT * FROM `articles_categories`');





      ?>


      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              <?php 
              while( $cat = mysqli_fetch_assoc($categories) ){ ?>
                <li><a href="/categories.php?id=<?php echo $cat['id'];?>"><?php echo $cat['title']; ?></a></li>


                <?php
              }


               ?>
              
            
            </ul>
          </nav>
        </div>
      </div>
    </header>