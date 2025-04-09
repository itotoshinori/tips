<head>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<div>
   <div class="text-center my-4">
      @if(session('error'))
      <div class="alert alert-danger">
         {{ session('error') }}
      </div>
      @endif
   </div>
   @if(session('info'))
   <div class="text-center my-4">
      <div>
         <div class="result-dis">{{session('info')}}</div>
         <div class="result-dis">ご協力ありがとうございました</div>
         <button type="button"
            onclick="location.reload();"
            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            Reset
         </button>
         <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
            >
               {{ __('Log Out') }}
            </button>
         </form>
      </div>
   </div>
   @else
   <form method="POST" action="{{ route('stars.store') }}">
      @csrf
      <div class="text-center my-4">
         <div class="text-xl">担当した店員の評価(星印)をして</div>
         <div class="text-xl">送信ボタンをクリックして下さい</div>
         <div class="text-xl">最低１名評価して下さい</div>
         <button type="submit" class="mr-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            送　信
         </button>
         <button type="button"
            onclick="location.reload();"
            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
            Reset
         </button>
      </div>
      <div class="flex flex-wrap gap-4 justify-center">
         @foreach ($members as $member)
         <div class="p-4 border-4 border-black w-80 bg-white shadow-lg rounded-lg" id={{$member->id}}>
            <p class="text-blue-600 dark:text-sky-400 font-bold text-center text-4xl">
               {{ $member->name }}
            </p>
            <div class="points text-xl" data-member-id="{{$member->id}}">
               ★ ★ ★ ★ ★
            </div>
            <div class="flex justify-center">
               <img src="{{ $member->photo_url }}" class="w-72 h-auto rounded-md shadow-md" alt="サンプル画像">
            </div>
            <input type="hidden" name="point[{{$member->id}}]" id="point-{{$member->id}}" value="0" />
         </div>
         @endforeach
      </div>
   </form>
   @endif
   <script>
      $('#button').on('click', function() {
         alert("クリックされました");
      });
      $(document).ready(function() {
         $('.points').each(function() {
            let memberId = $(this).data('member-id');
            let points = $(this).text().trim().split(' ').map((s, index) =>
               `<span class="point" data-score="${index + 1}">★</span>`
            ).join('');
            $(this).html(points);
         });

         $('.points').on('click', '.point', function() {
            let score = $(this).data('score');
            let memberId = $(this).parent().data('member-id');

            // 色を更新
            $(this).parent().find('.point').each(function() {
               $(this).toggleClass('selected', $(this).data('score') <= score);
            });

            // 点数を input に設定
            $('#point-' + memberId).val(score);
         });
      });
   </script>
   <style>
      .result-dis {
         font-size: 30px;
      }

      .point {
         margin-left:15px;
         font-size: 30px;
         cursor: pointer;
         color: #d8d8d8;
      }

      .point.selected {
         color: gold;
      }

      .button01 {
         background-color: #2f4f4f;
         color: #fff;
         padding: 10px 30px;
         text-decoration: none;
         font-size: 1em;
         margin: auto;
         margin-top: 30px;
         margin-bottom: 30px;
         text-align: center;
      }

      .button01:hover {
         color: #fff;
         opacity: 0.8;
      }
   </style>