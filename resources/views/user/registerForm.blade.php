@extends('layouts.index')

@section('css')
<link rel="stylesheet" href="/css/style.css">
<!--　ブートストラップ <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

@endsection

<div class="container">

  <div class="row">
    <form role="form" action="/register" method="post">
      @csrf
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="おなまえ（ひらがな）" tabindex="1">
          </div>
        </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="メールアドレス" tabindex="4">
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="パスワード" tabindex="5">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="パスワード確認" tabindex="6">
          </div>
        </div>
      </div>
      </div>

      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" value="新規登録" class="btn btn-primary btn-block btn-lg"></div>
        <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">ログイン画面へ</a></div>
      </div>
    </form>
  </div>
</div>
</div>