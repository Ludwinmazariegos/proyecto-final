<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
</head>
<body>

    <a href="<?= site_url("/") ?>">HOME</a>

    <?php if (current_user()): ?>
        
        <p>Hello <?= esc(current_user()->name) ?></p>
        
        <a href="<?= site_url("/profile/show") ?>">Profile</a>
        
        <?php if (current_user()->is_admin): ?>
            
            <a href="<?= site_url("/admin/users") ?>">usuarios</a>
            
        <?php endif; ?>
        
        <a href="<?= site_url("/tasks") ?>">Tareas</a>
        
        <a href="<?= site_url("/logout") ?>">cerrar sesion</a>
        
    <?php else: ?>
        
        <a href="<?= site_url("/signup") ?>">Registro</a>    
        
        <a href="<?= site_url("/login") ?>">Iniciar Sesion</a>
        
    <?php endif; ?>

    <?php if (session()->has('warning')): ?>
        <div class="warning">
            <?= session('warning') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('info')): ?>
        <div class="info">
            <?= session('info') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->has('error')): ?>
        <div class="error">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <?= $this->renderSection("content") ?>
    
</body>
</html>





