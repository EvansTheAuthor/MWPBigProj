<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KonsulDok</title>
    <script>"https://unpkg.com/vue@3/dist/vue.global.js"</script>
</head>
<body>
    <?php include 'includes/header.php?';?>

    <main>
        <?php include 'pages/{$page}.php';?>
    </main>

    <?php include 'includes/footer.php'; ?>
</body>
</html>