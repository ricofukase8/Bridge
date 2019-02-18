<!-- Header section -->
  <header class="header-section set-bg" style="background-image: url(assets/img/bridgemain.png)">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="site-logo">
            <h3>BRIDGE</h3><br>
            <p>-NexSeed-</p>
          </div>
          <div class="nav-switch">
            <i class="fa fa-bars"></i>
          </div>
        </div>
        <div class="col-lg-9 col-md-9">
          <?php if (strpos($_SERVER['REQUEST_URI'], 'edit.php') === false) : ?>
          <a href="#mypage" class="site-btn header-btn" data-toggle="modal" >MYPAGE</a>
          <?php endif; ?>
          <nav class="main-menu">
            <ul>
                <?php if (strpos($_SERVER['REQUEST_URI'], 'home.php') === false) : ?>
                <li><a href="home.php" id="link">HOME</a></li>
                <?php endif; ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], 'like.php') === false) : ?>
                <li><a href="like.php" id="link">LIKE</a></li>
                <?php endif; ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], 'edit.php') === false) : ?>
                <li><a href="edit.php" id="link">EDIT</a></li>
                <?php endif; ?>
                <li><a href="main.php" id="link">LOG OUT</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>