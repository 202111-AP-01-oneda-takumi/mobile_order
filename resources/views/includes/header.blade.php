<nav>
    <div id=logo_image>
        <a href="{{ route('user.top') }}"><img src="/img/logo.png" alt="ロゴ画像"></a>
    </div>
    <ul id="nav_content">
        <li><a href="#intro">はじめに</a></li>
        <li><a href="#try">体験</a></li>
        <li><a href="{{ route('contact.index') }}">お問い合わせ</a></li>
    </ul>
    <div id="sign_in">
        <a class="modal" href="#modal">サインイン</a>
        <div id="modal" style="display:none;">
            <div id="modal_content">
                <h2>ログイン</h2>
                <div class="modal_box">
                    <input type="text" placeholder="メールアドレス"><br>
                    <input type="text" placeholder="パスワード"><br>
                    <div class="submit"><button class="post_button" style="width:100%;" type="submit">送信</button></div>
                </div>
                <div class="modal_box">
                    <a href="#"><img src="/img/twitter.png" alt="画像"></a>
                    <a href="#"><img src="/img/fb.png" alt="画像"></a>
                    <a href="#"><img src="/img/google.png" alt="画像"></a>
                    <a href="#"><img src="/img/apple.png" alt="画像"></a>
                </div>
            </div>
        </div>
    </div>
</nav>


