<?php $page_title = 'C.C.Donuts'; ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
'ccStaff', 'ccDonuts');
?>

        <div class="idNameBorder">
            <p>TOP＞商品一覧＞CCドーナツ 当店オリジナル（5個入り）</p>
        </div>

        <div class="idNameBorder">
            <p>ようこそ ゲスト様</p>
        </div>
    </header>


    <!-- メインエリア -->
    <main>
        <section class="productProfileContainer">
            <div class="productProfileInner">
                <div class="productImg">
                    <img src="images/productsCcDonut.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                </div>

                <div class="productInfoTxt">
                    <h2>CCドーナツ 当店オリジナル（5個入り）</h2>
                    <p>当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。</p>
                    <p><span>税込  ￥1,500</span></p>
                    <div class="producCounter">
                        <div class="productCounterBox"></div>
                        <button class="productProfilCartBtn">カートに入れる</button>
                        <button class="wishListBtn"></button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require 'footer.php'; ?>