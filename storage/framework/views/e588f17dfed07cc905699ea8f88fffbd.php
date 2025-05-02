<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Smart Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Admin Dashboard</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <p>Here admin can validate users (Simulation only).</p>
    <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">Back to Home</a>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\smart-portfolio\smart-portfolio\resources\views/dashboard.blade.php ENDPATH**/ ?>