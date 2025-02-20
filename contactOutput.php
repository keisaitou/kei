<?php
$pageTitle = 'ポートフォリオ｜お問い合わせ内容';
require 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
    $yomi = $_POST['user_name_yomi'];
    $email = $_POST['user_mail'];
    $message = $_POST['message'];  
}
?>

<h2 class="contactOutPutH2">入力内容のご確認</h2>

<form action="contactSend.php" method="POST" class="contactOutContainer">
    <div class="contactOutInner">
        <h3>お名前:</h3>
        <p><?php echo htmlspecialchars($name); ?></p>
        <input type="hidden" name="user_name" value="<?php echo htmlspecialchars($name); ?>">
    </div>

    <div class="contactOutInner">
        <h3>フリガナ:</h3>
        <p><?php echo htmlspecialchars($yomi); ?></p>
        <input type="hidden" name="user_name_yomi" value="<?php echo htmlspecialchars($yomi); ?>">
    </div>

    <div class="contactOutInner">
        <h3>メールアドレス:</h3>
        <p><?php echo htmlspecialchars($email); ?></p>
        <input type="hidden" name="user_mail" value="<?php echo htmlspecialchars($email); ?>">
    </div>

    <div class="contactOutInner">
        <h3>お問い合わせ内容:</h3>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>
        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message); ?>">
    </div>

    <div class="submitContainer">
        <button type="button" onclick="window.history.back();">戻る</button>
        <button type="submit">送信</button>
    </div>
</form>

<?php require 'footer.php'; ?>
