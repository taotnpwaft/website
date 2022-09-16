<?php ?>
<header>
  <nav class="navbar navbar-expand navbar-fixed-top bg-dark navbar-dark box-shadow" id="" role="navigation">
    <div class="container-fluid">
      <span class="ham" style="
              font-size: 30px;
              cursor: pointer;
              position: absolute;
              left: 1%;
            " onclick="openNav()">&#9776;</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- <ul class="nav navbar-nav navbar-right collapse-toggle justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog/blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul> -->
      <div class="reg_button">
        <button type="button" id="cmdRegister" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormRegisterModal" style="display: inline-block">
          Register
        </button>
        <button type="button" id="cmdLogin" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormLoginModal" style="display: inline-block">
          Login
        </button>
      </div>
      <div class="icons_user">
        <button class="icons_button" id="noti">
          <div class="notification"></div>
        </button>
        <button class="icons_button" id="messages">
          <div class="mail"></div>
        </button>
        <button class="icons_button" id="user_acc">
          <div class="user"></div>
        </button>
      </div>
      <!-- <form class="d-flex">
              <input class="me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
           </form> -->
    </div>
  </nav>
</header>
