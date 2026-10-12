<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog CRUD'); ?></title>
    <!-- Kita pakai Bootstrap 5 dari CDN biar cepat dan rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('posts.index')); ?>">📝 Blog CRUD Laravel</a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\aul-tkul\PEMROGRAMAN-WEB\TugasWeb-P10-BlogCRUD\resources\views/layouts/app.blade.php ENDPATH**/ ?>