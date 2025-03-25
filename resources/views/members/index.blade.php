<head>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="flex flex-wrap gap-4 justify-center">
   @foreach ($members as $member)
      <div class="p-4 border-4 border-black w-80 bg-white shadow-lg rounded-lg">
         <p class="text-blue-600 dark:text-sky-400 font-bold text-center">
            {{ $member->name }}
         </p>
         <div class="flex justify-center">
            <img src="{{ $member->photo_url }}" class="w-72 h-auto rounded-md shadow-md" alt="サンプル画像">
         </div>
      </div>
   @endforeach
</div>