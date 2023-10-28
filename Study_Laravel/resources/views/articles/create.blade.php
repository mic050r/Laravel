<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title></title>
</head>

<body class="bg-gradient-to-b from-blue-200 to-blue-400 min-h-screen flex items-center justify-center">
  <div class="p-6 rounded-lg shadow-lg w-96">
    <h1 class="text-3xl font-semibold mb-4">글쓰기</h1>
    <form action="/articles" method="POST">
      <!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>"> -->
      @csrf
      <input type="text" placeholder="글을 입력해주세요" class="w-full p-3 rounded-md mb-4 focus:ring focus:ring-blue-500">
      <button type="submit" class="w-full bg-black text-black font-semibold py-2 rounded-full hover:bg-blue-600 transition duration-200">저장하기</button>
    </form>
  </div>
</body>
</html>