<section class="top-navbar">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="https://iteca-project.fra1.cdn.digitaloceanspaces.com/logo.svg" alt="logo" width="200px">
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo $routes->get('homepage')->getPath(); ?>">Home</a></li>
                    <li><a href="<?php echo $routes->get('gallery')->getPath(); ?>">Gallery</a></li>
                    <li><a href="<?php echo $routes->get('me')->getPath(); ?>">Me</a></li>
                </ul>
        </div>
    </div>
</section>