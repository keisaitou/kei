
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
     // フォームから送信されたデータを取得
     $name = $_POST['user_name'];  // 名前
     $yomi = $_POST['user_name_yomi'];  // フリガナ
     $email = $_POST['user_mail'];  // メールアドレス
     $message = $_POST['message'];  // メッセージ

     // 私たちのメールアドレス
    $yourEmail = "keisaito65@gmail.com";  // ここに自分のメールアドレスを入れる

    // メールの内容
    $subject = "お問い合わせ内容の確認";  // メールのタイトル
    $messageBody = "お名前: " . $name . "\n" . "フリガナ: " . $yomi . "\n" . "メールアドレス: " . $email . "\n" . "メッセージ: " . $message;  // メールの本文
}

// メールを送る
if (mail($yourEmail, $subject, $messageBody)) {
    echo "お問い合わせ内容が送信されました。";
} else {
    echo "送信に失敗しました。";
}


// お客さんへのメール
$clientSubject = "お問い合わせの確認";  // 件名
$clientMessage ="この度はお問い合わせ誠に有難うございます。\n以下の内容で承りました。\n返信までしばらくお待ちください。\n\n"."お名前: " . $name . "\n" . "フリガナ: " . $yomi . "\n" . "メールアドレス: " . $email . "\n" . "メッセージ: " . $message. "\n\n\nURL:http://k3110.stars.ne.jp/portfolio/";  // メールの内容

// クライアントへのメール送信
if (mail($email, $clientSubject, $clientMessage)) {
    // クライアントへの確認メールが送信された場合、thankYou.phpにリダイレクト
    header('Location: thankYou.php');  // 「送信ありがとうございます」のページに移動
    exit();  // リダイレクト後にスクリプトを終了
} else {
    echo "確認メールの送信に失敗しました。";
}

?>