<?php $pageTitle = 'ポートフォリオ｜TOP';?>
<?php require 'header.php' ?>
<body class="bgPattern">
    <main>
        <section>
            <div class="profileImg">
                <img src="img/profileImg.jpg" alt="プロフィール画像">
            </div>
        </section>

        <section>
            <div class="purofileText">
                <p>webの勉強中です!<br>ポートフォリオをご覧頂き、誠にありがとうございます!!</p>
            </div>
            
            <nav class="topNav">
                <img src="img/topBack.jpg" alt="画材">
                
                <ul>
                    <li>
                        <a href="profile.php">
                            <div>
                                <p>自己紹介</p>
                            </div>
                        </a>
                    </li>
                    
                    <li>
                        <a href="gallery.php">
                            <div>
                                <p>色々と作ってみた</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="contact.php">
                            <div>
                                <p>お問い合わせ</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </main>
    
    <?php require 'footer.php' ?>