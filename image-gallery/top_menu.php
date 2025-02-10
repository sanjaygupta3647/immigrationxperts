<div class="collapse navbar-collapse pull-right" id="navbar">
    <ul class="nav navbar-nav navbar-left">
        <?php if (isset($_SESSION['userid'])) { ?>
            <li>
                <p class="navbar-text">
                    <strong>Welcome!</strong> You're signed in as <strong><a href="#"><?php echo $_SESSION['name']; ?></a></strong> | 
                    <a href="/image-gallery/gallery.php">Gallery</a> | 
                    <a href="/image-gallery/logout.php">Log Out</a>
                </p>
            </li>
        <?php } else { ?>
            <li><p class="navbar-text">You are Logged Out!</p></li><br>
            <li><a href="/image-gallery/index.php">Login</a></li>                
        <?php } ?>
    </ul>
</div>
