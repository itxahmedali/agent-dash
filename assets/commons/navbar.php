<nav class="navbar navbar-expand-lg">
  <div class="px2 d-flex align-items-center">
    <a class="navbar-brand" href="index.php">
      <!-- <img src="./assets/img/SVG/logo.svg" height="" width="100%" alt="logo"> -->
      Agent TC
    </a>
    <div class="navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center">
        <!-- <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>" aria-current="page" href="page1.php">page 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'page2.php' ? 'active' : ''; ?>" href="page2.php">page 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'page3.php' ? 'active' : ''; ?>" href="page3.php">page 3</a>
        </li> -->
        <li class="nav-item">
          <a href="notification.php">
          <div class="notiIco hasBadge">
            <i class="fa fa-bell"></i>
          </div>
          </a>
        </li>
        <li class="nav-item">
          <div class="notiIco d-flex align-items-center">
            <i class="fa fa-sign-out mr1"></i>
            <span>Log Out</span>
          </div>
        </li>
        <!-- <li class="nav-item">
          <div class="csDropDown d-flex align-items-center">
            <div class="imageDiv d-flex align-items-center">
              <div class="imaghe">

              </div>
              <div class="name d-flex flex-column">
                <span>Jacob Gomez</span>
                <span>Member ID: 789456</span>
              </div>
            </div>
            <div class="arrow">
              <i class="fa fa-angle-down"></i>
            </div>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a> -->
          <div class="csDropDown d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="imageDiv d-flex align-items-center">
              <div class="imaghe">

              </div>
              <div class="name d-flex flex-column">
                <span>Jacob Gomez</span>
                <span>Member ID: 789456</span>
              </div>
            </div>
            <div class="arrow">
              <i class="fa fa-angle-down"></i>
            </div>
          </div>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <!-- <button class="signOut">
        <i class="fa fa-sign-out"></i>
        <span>SIGN OUT</span>
      </button> -->
    </div>
  </div>
</nav>

<div id="nav-icon1">
  <span></span>
  <span></span>
  <span></span>
</div>

<div class="sider">
  <div class="sideNave">
    <div class="sidebar sideBardio">
      <div class="sidenav-logo">
        Agent TC
        <!-- <img src="assets/img/SVG/logo_1.svg" height="" width="100%" alt="logo"> -->
      </div>

      <div class="sidenav-btns mt5 d-flex flex-column">
        <div class="items d-flex align-items-center active">
          <div class="img">
            <img src="./assets/img/SVG/profile.svg" height="100%" width="100%" alt="">
          </div>
          <a href="index.php">
            <div class="nameh <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>">
              Profile
            </div>
          </a>
        </div>

        <div class="items d-flex align-items-center">
          <div class="img">
            <img src="./assets/img/SVG/transaction.svg" height="100%" width="100%" alt="">
          </div>
          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>" href="transaction.php">
            <div class="nameh <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>">
              Transaction
            </div>
          </a>
        </div>

        <div class="items d-flex align-items-center">
          <div class="img">
            <img src="./assets/img/SVG/task.svg" height="100%" width="100%" alt="">
          </div>
          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>" href="task.php">
            <div class="nameh <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>">
              Task
            </div>
          </a>
        </div>

        <div class="items d-flex align-items-center">
          <div class="img">
            <img src="./assets/img/SVG/people.svg" height="100%" width="100%" alt="">
          </div>
          <a class="<?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>" href="people.php">
            <div class="nameh <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>">
              People
            </div>
          </a>
        </div>

        <div class="items d-flex align-items-center">
          <div class="img">
            <img src="./assets/img/SVG/documents.svg" height="100%" width="100%" alt="">
          </div>
          <a class="" href="documents.php">
            <div class="nameh <?php echo basename($_SERVER['PHP_SELF']) == 'page1.php' ? 'active' : ''; ?>">
              Documents
            </div>
          </a>
        </div>
      </div>

      <button class="sidenav-signout signOut">
        <i class="fa fa-sign-out"></i>
        <span>SIGN OUT</span>
      </button>
    </div>
  </div>
</div>

<div class="mobileNav">
  <a href="index.php">Agent TC</a>
</div>