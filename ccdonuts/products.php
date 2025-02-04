<?php $page_title = 'C.C.Donuts | 商品一覧'; ?>
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
        <section class="productList">
            <h2>商品一覧</h2>

            <div class="mainManu">
                <h3>メインメニュー</h3>
            </div>

            <div class="productListInner">
                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsCcDonut.png" alt="CCドーナツ 当店オリジナル（5個入り）">
                    </a>

                    <div class="productName">
                        <h4><?php ?><?php echo  $products[0]['name'];?><!--CCドーナツ 当店オリジナル（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,500</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsChocolateDelight.png" alt="チョコレートデライト（5個入り）">
                    </a>

                    <div class="productName">
                        <h4><?php echo  $products[1]['name'];?><!--チョコレートデライト（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,600</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsCaramelCream.png" alt="キャラメルクリーム（5個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo  $products[2]['name'];?><!--キャラメルクリーム（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,600</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsPlainClassic.png" alt="プレーンクラシック（5個入り）">
                    </a>
                        <div class="productName">
                        <h4><?php echo  $products[3]['name'];?><!--プレーンクラシック（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,500</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsSummerCitrus.png" alt="【新作】サマーシトラス（5個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo  '【新作】',$products[4]['name'];?><!--【新作】サマーシトラス（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,600</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsStrawberryCrash.png" alt="ストロベリークラッシュ（5個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo  $products[5]['name'];?><!--ストロベリークラッシュ（5個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,800</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>



        <section>
            <div class="mainManu">
                <h3>バラエティーセット</h3>
            </div>


            
            <div class="productListInner">
                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/products12FruitPCDonutSet.png" alt="フルーツドーナツセット（12個入り）">
                    </a>
                        <div class="productName">
                        <h4><?php echo $products[6]['name'];?><!--フルーツドーナツセット（12個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥3,500</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/products14FruitPCDonutSet.png" alt="フルーツドーナツセット（14個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo $products[7]['name'];?><!--フルーツドーナツセット（14個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥4,000</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsBsetSelectionBox4pc.png" alt="ベストセレクションボックス（4個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo $products[8]['name'];?><!--ベストセレクションボックス（4個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,200</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsChocolateCrashBox.png" alt="チョコクラッシュボックス（7個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo $products[9]['name'];?><!--チョコクラッシュボックス（7個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥2,400</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsCreamBox4pc.png" alt="クリームボックス（4個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo $products[10]['name'];?><!--クリームボックス（4個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥1,400</p>
                    <a href="cart.php">
                        <div class="cartIn">
                            <p>カートに入れる</p>
                        </div>
                    </a>
                </div>

                <div class="productItem">
                    <a href="productsProfile.php">
                        <img src="images/productsCreamBox9pc.png" alt="クリームボックス（9個入り）">
                    </a>
                    <div class="productName">
                        <h4><?php echo $products[11]['name'];?><!--クリームボックス（9個入り）--></h4>
                    </div>
                    <p class="ProdutPlice">税込  ￥2,800</p>
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