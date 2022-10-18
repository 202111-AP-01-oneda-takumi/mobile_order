@extends('layouts.index')
@section('title', 'cafe-cafe')

@section('news')
<div id="alert" class="container">
    <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
</div>
@endsection

@section('content')
<div id="main_title">
    <h1>あなたの<br>好きな空間を作る。</h1>
</div>

<section id="intro" class="container main">
    <div id="intro_boxs">
        <div class="intro_box">
            <img src="img/cafe1.jpg" alt="画像">
            <p>東京<br>車で15分</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe2.jpg" alt="画像">
            <p>神奈川<br>車で30分</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe3.jpg" alt="画像">
            <p>愛知<br>車で1時間</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe4.jpg" alt="画像">
            <p>京都<br>車で40分</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe5.jpg" alt="画像">
            <p>岡山<br>車で1.5時間</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe6.jpg" alt="画像">
            <p>鹿児島<br>車で50分</p>
        </div>
        <div class="intro_box">
            <img src="img/cafe7.jpg" alt="画像">
            <p>沖縄<br>車で2時間</p>
        </div>
    </div>
</section>

<section id="location" class="container main">
    <h2 class="sub_title">好きなロケーションを選ぼう</h2>
    <div id="location_boxs">
        <div class="location_box">
            <img src="img/intro1.jpg" alt="画像">
            <p>クラシック</p>
        </div>
        <div class="location_box">
            <img src="img/intro2.jpg" alt="画像">
            <p>バー</p>
        </div>
        <div class="location_box">
            <img src="img/intro3.jpg" alt="画像">
            <p>キャンプ</p>
        </div>
        <div class="location_box">
            <img src="img/intro4.jpg" alt="画像">
            <p>リゾート</p>
        </div>
    </div>
    <div id="goto">
        <div id="goto_box">
            <h2>Go To Eats</h2>
            <p>
                キャンペーンを利用して、全国で食事しよう。<br>
                いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
            </p>
        </div>
    </div>
</section>

<section id="try" class="container main">
    <div>
        <h2 class="sub_title">カフェ作りを体験しよう</h2>
        <p>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
    </div>
    <div id="try_boxs">
        <div class="try_box">
            <img src="img/exp1.jpg" alt="画像">
            <div>ジョブ体験</div>
            <p>カフェカウンターを体験しよう。</p>
        </div>
        <div class="try_box">
            <img src="img/exp2.jpg" alt="画像">
            <div>レシピ体験</div>
            <p>美味しいレシピを考えてみよう。</p>
        </div>
        <div class="try_box">
            <img src="img/exp3.jpg" alt="画像">
            <div>プロモーション体験</div>
            <p>お店の宣伝を手伝ってみよう。</p>
        </div>
    </div>
</section>

<section id="host" class="container main">
    <h2 class="sub_title">全国のホストに仲間入りしよう</h2>
    <div id="host_boxs">
        <div class="host_box">
            <img src="img/host1.jpg" alt="画像">
            <p>ビジネス</p>
        </div>
        <div class="host_box">
            <img src="img/host2.jpg" alt="画像">
            <p>コミュニティ</p>
        </div>
        <div class="host_box">
            <img src="img/host3.jpg" alt="画像">
            <p>食べ歩き</p>
        </div>
    </div>
</section>

<a href="#" class="jump">
    Jump To Top
</a>
@endsection

@section('js')
<script src="/js/jquery.inview.min.js"></script>
@endsection
