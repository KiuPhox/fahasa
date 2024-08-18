<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $_ENV['DOMAIN']; ?>/dashboard">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $_ENV['DOMAIN']; ?>/dashboard/books">
        <i class="menu-icon mdi mdi-book-open-page-variant"></i>
        <span class="menu-title">Sách</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-account-outline"></i>
        <span class="menu-title">Người dùng</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo $_ENV['DOMAIN']; ?>/dashboard/users">Tài khoản</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo $_ENV['DOMAIN']; ?>/dashboard/ratings">Đánh giá</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo $_ENV['DOMAIN']; ?>/dashboard/orders">
        <i class="menu-icon mdi mdi-cart"></i>
        <span class="menu-title">Đơn hàng</span>
      </a>
    </li>
  </ul>
</nav>