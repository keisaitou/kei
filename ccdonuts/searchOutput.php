<?php $page_title = 'C.C.Donuts | 検索結果'; ?>
<?php require 'header.php'; ?>
<table style="margin:100px auto;">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8',
'ccStaff', 'ccDonuts');
?>

<?php
$sql=$pdo->prepare('select * from products where name like ?');
$sql->execute(['%'.$_REQUEST['keyword'].'%']);
foreach ($sql as $row) {
    echo '<tr>';
    echo '<td style="padding: 10px; border-bottom: 1px solid #ccc;">', $row['name'], '</td>';
    echo '<td style="color: red; padding: 10px; border-bottom: 1px solid #ccc;">', $row['price'], '円</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
<?php require 'footer.php'; ?>