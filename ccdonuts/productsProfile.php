<?php $page_title = 'C.C.Donuts | 商品詳細'; ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
'ccStaff', 'ccDonuts');
?>


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
                        <!-- <div class="productCounterBox"></div> -->
                        <input type="number" name="pc" id="pc" min="1" max="99" class="productCounterBox" >
                        <a href="cart.php" class="productProfilCartBtn">カートに入れる</a>
                        <button class="wishListBtn"></button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require 'footer.php'; ?>