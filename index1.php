<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>模写用サイト</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="inner effect-fade">
            <div class="header-left">
                <h1 id="top-btn">株式会社dev</h1>
            </div>
            <div class="header-right">
                <nav>
                    <ul>
                        <li>
                            <a href="#about">ABOUT</a>
                        </li>
                        <li>
                            <a href="#news">NEWS</a>
                        </li>
                        <li>
                            <a href="#works">WORKS</a>
                        </li>
                        <li>
                            <a href="#access">ACCESS</a>
                        </li>
                        <li>
                            <a href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="mainvisual effect-fade">
        <h2>くそ無茶ぶりに強い<br>ど田舎のWeb制作会社</h2>
    </section>

    <section class="about" id="about">
        <div class="inner effect-fade">
            <h2>ABOUT</h2>
            <div class="line"></div>
            <p>
                株式会社devは宮城県仙台市を拠点とした、<br>
                めちゃめちゃ無茶ぶりに強いWeb制作会社です。<br>
                検索で最上位表示させたい、売上を爆上げたいなど、<br>
                様々な要望に忠実にお応えします。<br>
                Webの知識が全くない方でも1人のスタッフが365日24時間懇切丁寧にサポートしますので、<br>
                お気軽にお問い合わせください。
            </p>
        </div>
    </section>

    <section class="news" id="news">
        <div class="inner effect-fade">
            <h2>NEWS</h2>
            <div class="line"></div>
            <ul>
                <li><a href="#"><span>2021.04.30</span>***********************</a></li>
                <li><a href="#"><span>2021.04.31</span>***********************</a></li>
                <li><a href="#"><span>2021.04.32</span>***********************</a></li>
                <li><a href="#"><span>2021.04.33</span>***********************</a></li>
                <li><a href="#"><span>2021.04.34</span>***********************</a></li>
            </ul>
            <a href="#" class="news-btn">NEWS一覧</a> 
        </div>
    </section>

    <section class="works" id="works">
        <div class="inner effect-fade">
            <h2>WORKS</h2>
            <div class="line"></div>
            <div class="works-box">
                <div class="works-card-wrapper">
                    <div class="works-card">
                        <img src="images/bar.jpg">
                        <h3>Bar</h3>
                    </div>
                    <div class="works-card">
                        <img src="images/cafe.jpg">
                        <h3>Cafe</h3>
                    </div>
                    <div class="works-card">
                        <img src="images/grocery.jpg">
                        <h3>Grocery store</h3>
                    </div>
                </div>
                <div class="works-card-wrapper">
                    <div class="works-card">
                        <img src="images/gym.jpg">
                        <h3>Gym</h3>
                    </div>
                    <div class="works-card">
                        <img src="images/office.jpg">
                        <h3>Office</h3>
                    </div>
                    <div class="works-card">
                        <img src="images/shearhouse.jpg">
                        <h3>Shear house</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="access" id="access">
        <div class="inner effect-fade">
            <h2>ACCESS</h2>
            <div class="line"></div>
        </div>
        <div class="shopinformation-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d418.0513250392493!2d140.84525591968494!3d38.25426387371216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a285a14f980c7%3A0x351d60bae6ba4a55!2z44OH44Kk44Oq44O844Ok44Oe44K244KtIOadseWMl-Wkp-WtpuW3peWtpumDqOadseW6lw!5e0!3m2!1sja!2sjp!4v1619521398180!5m2!1sja!2sjp" width="45%" height="450" frameborder="0"　style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <table class="shopinformation-table">
                <tr>
                    <th class="shopinformation-table-heading">住所</th>
                    <td>〒980-8579<br>宮城県仙台市青葉区荒巻字青葉6-6-01</td>
                </tr>
                <tr>
                    <th class="shopinformation-table-heading">電話番号</th>
                    <td>022-795-6958</td>
                </tr>
                <tr>
                    <th class="shopinformation-table-heading">Emailアドレス</th>
                    <td>takuji@bfsl.mech.tohoku.ac.jp</td>
                </tr>
                <tr>
                    <th class="shopinformation-table-heading">営業時間</th>
                    <td>0:00-23:59<br>（定休日：年末年始）</td>
                </tr>
                <tr>
                    <th class="shopinformation-table-heading">アクセス</th>
                    <td>青葉山駅出口から徒歩15分<br>仙台駅西口からタクシーで25分</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="inner effect-fade">
            <h2>CONTACT</h2>
            <div class="line"></div>
            <form class="contact-form" method="post" action="sent.php">
                <label for="form-name">お名前</label>
                <p><input id="form-name" type="text" name="name" placeholder="入力してください"></p>
                <label for="form-mail">Emailアドレス</label>
                <p><input id="form-mail" type="email" name="email" placeholder="入力してください"></p>
                <label for="form-title">件名</label>
                <p><input id="form-title" type="title" name="title" placeholder="入力してください"></p>
                <label for="form-detail">お問い合わせ内容</label>
                <p><textarea id="form-detail" type="detail" name="detail" placeholder="入力してください"></textarea></textarea> </p>
                <p><input type="submit" class="contact-btn" name="button" value="送信"></p>
            </form>
        </div>
    </section>

    <footer class="ffect-fade">
        <p><small>©️2021 株式会社dev</small></p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="script.js"></script>
</body>
</html>