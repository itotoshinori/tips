<head>
<title>店員評価システム 個人別集計</title>
    <meta http-equiv="content-language" content="ja">
</head>
<div class="container">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <span style="margin-right:10px; font-size: 30px;">■個人別集計表(過去30日前)</span>
        <a href="/members" style="margin-right:10px; font-size: 20px;">
            登録画面
        </a>
        <a href="route('logout')"
            onclick="event.preventDefault();
                                                this.closest('form').submit();" style="font-size: 20px;">
            ログアウト
        </a>
    </form>
    <hr />
    <span class="ranking_span">順位</span>
    <span class="name_span">名前</span>
    <span class="content_span">点数合計
    </span>
    <span class="content_span">平均点数</span>
    <span class="content_span">件数</span>
    <hr />
    @foreach($results as $index => $data)
    <span class="ranking_span">{{ $index+1 }}</span>
    <span class="name_span">{{$data->user->name}}</span>
    <span class="content_span">{{$data->total_point}}</span>
    <span class="content_span">{{floor($data->averave*10)/10}}</span>
    <span class="content_span">{{$data->count}}</span>
    <hr />
    @endforeach
</div>

<style>
    .container {
        width: 100%;
        margin: 0 auto;
        align-items: center;
        font-size: 30px;
    }

    .ranking_span {
        display: inline-block;
        width: 40px;
        text-align: center;
    }

    .name_span {
        display: inline-block;
        width: 180px;
    }

    .content_span {
        display: inline-block;
        width: 200px;
        text-align: end;
    }
</style>