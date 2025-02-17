<?php $pageTitle = 'ポートフォリオ｜色々と作ってみた'; ?>
<?php require 'header.php'; ?>
    <div class="profileImg">
        <img src="img/profileImg.jpg" alt="プロフィール画像">
    </div>

    <div class="purofileText">
        <p>学校の授業で作成した作品や、独学で勉強した作品をご紹介します。</p>
    </div>

    <div class="workContainer">
        <div class="workInner">
            <a href="cont/animalshop/index.html" target="_blank">
                <img src="img/galleryAnimal.png" alt="ペットショップページ">
                <h2>ペットショップの紹介ページ</h2>
                <p>ペットショップの紹介ページを作成しました。<br>このような生き物が居たら面白いな、素敵だなと思いながらAIにプロンプトを指示して画像を作成しました。</p>
            </a>
        </div>
    
        <div class="workInner">
            <a href="cont/reform/index.html" target="_blank">
                <img src="img/galleryReform.png" alt="">
                <h2>リフォーム会社のページ</h2>
                <p>リフォーム会社を仮定してコーディングをHTMLとCSSだけで行いました。</p>
            </a>
        </div>

        <div class="workInner">
            <a href="cont/taiwan/index.html" target="_blank">
                <img src="img/galleryTaiwan.png" alt="">
                <h2>台湾の旅行案内</h2>
                <p>旅行案内のページを仮定して作成しました。JavaScriptでローディング画面、ハンバーガーメニューを作成しました。</p>
            </a>
        </div>

        <div class="workInner">
            <a href="cont/calendar/index.html" target="_blank">
                <img src="img/galleryCalendar.png" alt="">
                <h2>カレンダー</h2>
                <p>JavaScriptでカレンダーを作成しました。youtubeで作り方の動画を見ながら作成しました。</p>
            </a>
        </div>

        <div class="workInner">
            <a href="cont/omikuji/index.html" target="_blank">
                <img src="img/galleryOmikuji.png" alt="">
                <h2>おみくじ</h2>
                <p>おみくじを作成しました、JavaScriptのランダムを使用しました。一回だけクリックしてみてください。</p>
            </a>
        </div>

        <div class="workInner">
            <a href="cont/countdown/index.html" target="_blank">
                <img src="img/galleryTimer.png" alt="">
                <h2>カウントダウンタイマー</h2>
                <p>今日の残り時間を表示します。焦らないで！！</p>
            </a>
        </div>

    </div>

<?php require 'footer.php'; ?>