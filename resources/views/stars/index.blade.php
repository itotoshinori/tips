<head>
    <meta http-equiv="content-language" content="ja">
</head>
<div class="container">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <span style="margin-right:10px; font-size: 20px;">■個人別集計表(過去30日前から集計)</span>
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
    <span class="content_span">トータル点数
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
        font-size: 15px;
    }

    .ranking_span {
        display: inline-block;
        width: 20px;
        text-align: center;
    }

    .name_span {
        display: inline-block;
        width: 100px;
    }

    .content_span {
        display: inline-block;
        width: 100px;
        text-align: end;
    }
</style>