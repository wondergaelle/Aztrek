<?php require_once __DIR__ . '/../../functions.php'; ?>
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/admin/", true) ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>">
                    <i class="fa fa-home"></i>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/pays/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/pays/">
                    <i class="fa fa-cutlery"></i>
                    Pays
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/sejours/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/sejours/">
                    <i class="fa fa-book"></i>
                    Séjours
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isActive("/crud/circuits/") ? 'active' : ''; ?>" href="<?php echo SITE_ADMIN; ?>crud/circuits/">
                    <i class="fa fa-book"></i>
                    Circuits
                </a>
            </li>
        </ul>
    </div>
</nav>