<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <title><?php echo isset($pageTitle) ? $pageTitle : ''; ?></title>
</head>
<body class="bgPattern">
    <header class="hd">
        <h1 class="name"><a href="index.php">Saitou profile</a></h1>

        <nav class="PcNav">
            <ul>
                <li><a href="index.php">TOP</a></li>
                <li><a href="profile.php">プロフィール</a></li>
                <li><a href="gallery.php">色々と作ってみた</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <!-- 隠しヘッダー -->
    <div class="hdHidden">
        <h2 class="name"><a href="index.php">Saitou profile</a></h1>
        <nav class="PcNav">
            <ul>
                <li><a href="index.php">TOP</a></li>
                <li><a href="profile.php">プロフィール</a></li>
                <li><a href="gallery.php">色々と作ってみた</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>   
    </div>