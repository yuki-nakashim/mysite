<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>送信用サイト</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
      <h1 id="top-btn">株式会社dev</h1>        
    </header>

    <main>
      <div class="thanks-message">お問い合わせいただきありがとうございます。</div>

      <div class="display-contact">
        <div class="form-title">入力内容</div>

        <div class="form-item">■ 名前</div>
        <?php echo $_POST["name"] ?>

        <div class="form-item">■ メールアドレス</div>
        <?php echo $_POST["email"] ?>

        <div class="form-item">■ 件名</div>
        <?php echo $_POST["title"] ?>

        <div class="form-item">■ 内容</div>
        <?php echo $_POST["detail"] ?>
    </div>
    </main>

    <footer>
        <p><small>©️2021 株式会社dev</small></p>
    </footer>

</body>
</html>