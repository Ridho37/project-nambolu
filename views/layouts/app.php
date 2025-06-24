<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $pageTitle ?? 'Nambolu'; ?></title>
    
    <link rel="stylesheet" href="/assets/css/style.css"> 
</head>
<body>
    
    <header>
        <?php require_once __DIR__ . '/../partials/header.php'; ?>
    </header>

    <main>
        <?php 
            echo $content ?? '<p style="color: red; text-align: center;">Error: Konten halaman tidak tersedia.</p>'; 
        ?>
    </main>

    <footer>
        <?php require_once __DIR__ . '/../partials/footer.php'; ?>
    </footer>

</body>
</html>