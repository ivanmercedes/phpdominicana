<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidad PHP Dominicana</title>
    <!-- Add Tailwind via CDN for testing purposes, assuming it's compiled in production -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white antialiased">
    <?php include __DIR__ . '/components/home/Hero.php'; ?>
    <?php include __DIR__ . '/components/home/Companies.php'; ?>
    <?php include __DIR__ . '/components/home/Values.php'; ?>
    <?php include __DIR__ . '/components/home/Projects.php'; ?>
    <?php include __DIR__ . '/components/home/LastBlogPosts.php'; ?>
    <?php include __DIR__ . '/components/home/Cta.php'; ?>
</body>
</html>
