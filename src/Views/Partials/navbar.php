<section class="top-navbar">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="https://iteca-project.fra1.cdn.digitaloceanspaces.com/logo.svg" alt="logo" width="200px">
            </div>
            <nav>
            <?php if (isset($_SESSION['user'])): ?>
                <ul>
                    <li><a href="<?php echo $routes->get('homepage')->getPath(); ?>">Home</a></li>
                    <li><a href="<?php echo $routes->get('gallery')->getPath(); ?>">Gallery</a></li>
                    <li><a href="<?php echo $routes->get('me')->getPath(); ?>">Me</a></li>
                    <li><a href="<?php echo $routes->get('logout')->getPath(); ?>">Logout</a></li>
                </ul>
            <?php else: ?>
                <ul>
                    <li><a href="<?php echo $routes->get('homepage')->getPath(); ?>">Home</a></li>
                    <li><a href="<?php echo $routes->get('gallery')->getPath(); ?>">Gallery</a></li>
                    <li><a href="<?php echo $routes->get('me')->getPath(); ?>">Me</a></li>
                    <li><a href="<?php echo $routes->get('login')->getPath(); ?>">Login</a></li>
                    <li><a href="<?php echo $routes->get('register')->getPath(); ?>">Register</a></li>
                </ul>
            <?php endif; ?>
            </nav>
        </div>
    </div>
</section>