<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>UrlEncurtador</title>
</head>
<body>
    <form method="post">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">Encurtar</button>
    </form>
</body>
</html>

<?php 
require_once '../app/UrlController.php';
$urlController = new UrlController();


if (isset($_GET['url_short'])) {
    $originalUrl = $urlController->UrlDescurtada($_GET['url_short']);

    if ($originalUrl) {
        header("Location: $originalUrl");
        exit;
    } else {
        echo "URL curta inválida.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url_long = $_POST['url'];
    $nova_url = $urlController->encurtarUrl($url_long);
    $base = "http://localhost/URLencurt/public"; 

    echo "A URL curta é: <a href='$base/index.php?url_short=$nova_url'>$nova_url</a><br>";
    echo "A URL longa é: <a href='$url_long'>$url_long</a>";
}
?>
