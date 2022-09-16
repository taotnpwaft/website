<header>
    <nav class="navbar navbar-expand navbar-fixed-top bg-dark navbar-dark box-shadow" id="" role="navigation">
        <div class="container-fluid">
            <span class="ham" style="font-size:30px;cursor:pointer; position: absolute;left:1%;" onclick="openNav()">&#9776;</span>
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
            <?php if (!isAuthenticated()) { ?>
                <div class="reg_button">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormLoginModal" style="display:inline-block">
                        Login
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormRegisterModal" style="display:inline-block">Register</button>
                </div>
            <?php } else { ?>
                <div class="header_icons">
                    <div class="notificationdrop">
                        <button class="icons_button notification">
                        </button>
                    </div>
                    <div class="messagedrop">
                        <button class="icons_button mail" id="messages">
                        </button>
                    </div>
                    <div class="profiledrop">
                        <button class="icons_button user">
                        </button>
                        <div class="profiledrop-content">
                            <div class="profiledetails">
                                <span><?=$_SESSION['User']['Username'];?></span>
                                <br>
                                <span class="profile-email"><?=$_SESSION['User']['EmailAddress'];?></span>
                            </div>
                            <a href="#"><i class="fa fa-gear"></i>Settings</a>
                            <a href="#" onclick="logOut()"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- <form class="d-flex">
                    <input class="me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->

        </div>
    </nav>
</header>

<div class="p-5 container-fluid rounded bg-primary text-white text-center" style="text-shadow: black 0.3em 0.3em 0.3em;">
    <div class="col-md-2"><img src="taotlogo.png" height="128" width="128" /></div>
    <h1>The Art of Tech: Not Playing with a Full Tech</h1>

</div>


<div id="TAOTSideNav" class="TAOTSideNav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="users.html"><i class="fas fa-users" aria-hidden="true"></i><span> Members</span></a>
    <a href="/website/chat.html" class="nav-link"><i class="fas fa-users" aria-hidden="true"></i><span>
            Chat</span></a>
    <a href="/website/blog/blog.html" class="nav-link"><i class="fas fa-blog" aria-hidden="true"></i><span>
            Blog</span></a>
    <a href="contact.html" class="nav-link"><i class="fas fa-envelope" aria-hidden="true"></i><span>
            Contact</span></a>
    <a href="settings.html" class="nav-link"><i class="fas fa-users-cog" aria-hidden="true"></i><span>
            Settings</span></a>
    <a href="admin.html" class="nav-link"><i class="fas fa-user-shield" aria-hidden="true"></i><span>
            Admin</span></a>
    <input aria-label="dark mode toggle" role="switch" type="checkbox" id="toggle" class="toggle_bottom">
</div>
