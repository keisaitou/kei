
<?php $pageTitle = 'ポートフォリオ｜お問い合わせ'; ?>
<?php require 'header.php';?>



    <div class="profileImg">
        <img src="img/profileImg.jpg" alt="プロフィール画像">
    </div>

    <div class="purofileText">
        <p>ご質問、お問い合わせ等ありましたら、お気軽にご連絡ください。</p>
    </div>

    <section>
        <div class="formSec">
            <form action="contactOutput.php" method="post">
                <p>
                    <label>お名前<span>※必須</span><input type="text" name="user_name" required></label>
                </p>

                <p>
                    <label>フリガナ<span>※必須</span><input type="text" name="user_name_yomi" required></label>
                </p>

                <p>
                    <label>メールアドレス<span>※必須</span><input type="email" name="user_mail" required></label>
                </p>

                <p>
                    <label>メッセージ<span>※必須</span><textarea name="message" required></textarea></label>
                </p>
                <p class="submitBtn"><input type="submit" value="確認画面"></p>
            </form>
        </div>
    </section>

    <?php require 'footer.php'; ?>
