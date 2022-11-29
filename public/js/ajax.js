const menuId = @json($menuId);

















let like = $('.'); //like-toggleのついたiタグを取得し代入。
let likeReviewId; //変数を宣言（なんでここで？）
like.on('click', function () { //onはイベントハンドラー
  let $this = $(this); //this=イベントの発火した要素＝iタグを代入
  likeReviewId = $this.data('review-id'); //iタグに仕込んだdata-review-idの値を取得
  //ajax処理スタート
  $.ajax({
    headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
      'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
    url: '/like', //通信先アドレスで、このURLをあとでルートで設定します
    method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
    data: { //サーバーに送信するデータ
      'review_id': likeReviewId //いいねされた投稿のidを送る
    },
  })


  public function like(Request $request){
        $u_id = Auth::user()->id; //1.ログインユーザーのid取得
        $box_id = $request->review_id; //2.投稿idの取得
        $already_liked = Like::where('u_id', $u_id)->where('box_id', $box_id)->first(); //3.

        if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
            $like = new Like; //4.Likeクラスのインスタンスを作成
            $like->box_id = $box_id; //Likeインスタンスにreview_id,user_idをセット
            $like->u_id = $u_id;
            $like->save();
        } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Like::where('box_id', $box_id)->where('u_id', $u_id)->delete();
        }

        //5.この投稿の最新の総いいね数を取得
        $review_likes_count = Box::withCount('likes')->findOrFail($box_id)->likes_count;
        $param = [
            'review_likes_count' => $review_likes_count,
        ];
        return response()->json($param); //6.JSONデータをjQueryに返す
    }
帰ってきた値がdataとして入ってくるため後は表示を変える処理を行います。

like.js
    //通信成功した時の処理
    .done(function (data) {
      $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
      $this.next('.like-counter').html(data.review_likes_count);
    })
    //通信失敗した時の処理
    .fail(function () {
      console.log('fail'); 
    });
