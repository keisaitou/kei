<?php $page_title = 'C.C.Donuts'; ?>
<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
'ccStaff', 'ccDonuts');
?>
<?php 
    
    if (isset($_REQUEST['keyword'])) {
        $sql = $pdo->prepare('SELECT * FROM products WHERE name like ?');
        $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
    } else {
        $sql = $pdo->query('SELECT * FROM products');
    }
    
    $products = $sql->fetchAll(); // すべての結果を配列として取得
    
    foreach ($sql as $row) {
        $id = $row['id'];
        echo '<p>', $id, '</p>';
        echo '<p>';
        echo '<a href="productsprofile.php?id=', $id, '">', $row['name'], '</a>';
        echo '</p>';
    }
    
?>

    <!-- メインエリア -->
    <main>
        <div class="maimImg">
            <img src="images/topMainImg01.png" alt="メインイメージ">
        </div>

    <!-- ニューアイテム -->
    <section class="newItem">
            <div class="newItemInner">
                <div class="item01">
                    <div class="newItemInnerTxstOuter">
                        <h2>新商品</h2>
                    </div> 
                    <p class="summerCitrus">
                        <?php
                            echo  $products[4]['name'];
                        ?>
                    </p>
                        </div>
                
                <a href="productsProfile.php" class="item02">
                    <p class="donutLife">ドーナツのある生活</p>
                </a>
                
                <a href="products.php" class="item03">
                    <p class="ProductInfo">商品一覧</p>
                </a>
            </div>
        </section>

    <!-- 哲学 -->
        <section class="philosophy">
            <h2>Philosophy</h2>
            <p>私たちの信念</p>
            <p>"Creating Connections"</p>
            <p>「ドーナツでつながる」</p>
        </section>

    <!-- ランキング -->
        <section class="ranking">
            <div class="rankngH2">
                <h2>人気ランキング</h2>
            </div>

            <div class="rankingContainer">
                <div class="rankingProduct">
                    <div class="rankingNo rNo1">1</div>
                    <a href="productsProfile.php">
                        <img src="images/topCcDonut.png" alt="CCドーナツ">
                    </a>
                    <h3><?php echo $products[0]['name'];?><!--CCドーナツ 当店オリジナル（5個入り）--></h3>
                    <p class="rankingPrice">税込  ￥1,500</p>
                    
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="rankingProduct">
                    <div class="rankingNo rNo2">2</div>
                    <a href="productsProfile2.php">
                        <img src="images/topFruitDonutSet12pc.png" alt="フルーツドーナツセット（12個入り）">
                    </a>
                    <h3><?php echo  $products[6]['name'];?><!--フルーツドーナツセット（12個入り）--></h3>
                    <p class="rankingPrice">税込  ￥3,500</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="rankingProduct">
                    <div class="rankingNo rNo3">3</div>
                    <a href="productsProfile.php">
                        <img src="images/topFruitDonutSet14pc.png" alt="フルーツドーナツセット（14個入り）">
                    </a>
                    <form action="productsProfile.php" method="post">
                    <h3>
                        <?php echo $products[7]['name'];?><!--フルーツドーナツセット（14個入り）-->
                    </h3>
                    </from>
                    <p class="rankingPrice">税込  ￥4,000</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="rankingProduct">
                    <div class="rankingNo rNo4">4</div>
                    <a href="productsProfile.php">
                        <img src="images/topChocolateDelight.png" alt="チョコレートデライト（5個入り）">
                    </a>
                    <h3><?php echo  $products[1]['name'];?><!--チョコレートデライト（5個入り）--></h3>
                    <p class="rankingPrice">税込  ￥1,600</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="rankingProduct">
                    <div class="rankingNo rNo4">5</div>
                    <a href="productsProfile.php">
                        <img src="images/topBsetPCSelectionBox4pc.png" alt="ベストセレクションボックス（4個入り）">
                    </a>
                    <h3><?php echo  $products[8]['name'];?><!--ベストセレクションボックス（4個入り）--></h3>
                    <p class="rankingPrice">税込  ￥1,200</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="rankingProduct">
                    <div class="rankingNo rNo4">6</div>
                    <a href="productsProfile.php">
                        <img src="images/topStrawberryCrash.png" alt="ストロベ リークラッシュ（5個入り）">
                    </a>
                        <h3><?php echo  $products[5]['name'];?><!--ストロベ リークラッシュ（5個入り）--></h3>
                    <p class="rankingPrice">税込  ￥1,800</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>
            </div>

        </section>
    </main>

<?php require 'footer.php'; ?>