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
                    <img src="images/topFruitDonutSet12pc.png" alt="フルーツドーナツセット（12個入り）">
                </div>

                <div class="productInfoTxt">
                    <h2>フルーツドーナツセット（12個入り）</h2>
                    <p>新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフルーツを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。</p>
                    <p><span>税込  ￥3,500</span></p>
                    <div class="producCounter">
                        <div class="productCounterBox"></div>
                        <a href="cart.php" class="productProfilCartBtn">カートに入れる</a>
                        <button class="wishListBtn"></button>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <?php require 'footer.php'; ?>