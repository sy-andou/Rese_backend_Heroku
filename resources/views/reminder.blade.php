<!DOCTYPE html>
<html lang="ja">

<body>
  <p>{{$reserve->user->name}}<span>様</span></p>
  <br />
  <p>いつもお世話になります。</p>
  <p>飲食店予約システムReseからの自動送信メールになります。</p>
  <br />
  <p>本日は、下記の通り飲食店のご予約を承っております。</p>
  <p>ご確認のほどよろしくお願いいたいます。</p>
  <br />
  <br />
  <p>-----------------------------------------------------------------</p>
  <br />
  <p>ご予約名：<span>{{$reserve->name}}</span></p>
  <p>店名：<span>{{$reserve->shop->name}}</span></p>
  <p>日時：<span>{{$reserve->date}}</span><span>&nbsp;</span><span>{{$reserve->time}}</span></p>
  <p>人数：<span>{{$reserve->number}}</span></p>
  <br />
  <p>-----------------------------------------------------------------</p>

</body>

</html>