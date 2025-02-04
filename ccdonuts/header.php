    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="common/reset.css">
        <link rel="stylesheet" href="styles/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&family=Sriracha&display=swap" rel="stylesheet">
        <title><?php echo isset($page_title) ? $page_title : 'C.C.Donuts'; ?></title>
    </head>
    <body>
        <!-- ヘッダー -->
        <header>
            <div class="headerInner">
                <div class="headerContainer">
                    <h1>
                        <a href="index.php">
                            <img src="images/shopLogo.png" alt="C.C.Donutsロゴ">
                        </a>
                    </h1>

                    <div class="loginContainer">
                        <img src="images/loginIcon.png" alt="ログインアイコン">
                        <img src="images/cartIcon.png" alt="カートアイコン">
                    </div>
                </div>

                <form action="searchOutput.php" method="POSt" class="search">
                    <input type="submit" value="" class="serchIcon">
                    <input type="text" name="keyword">
                </form>
            </div>

            <div class="idNameBorder">
                <p></p>
            </div>

            <div class="idNameBorder">
                <p></p>
            </div>
    </header>