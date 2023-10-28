<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <title></title>
</head>
<body>
  <h1>글쓰기<h1>
  <form action="/articles" method="POST">
    <input type="text">
    <input type="button" value="저장하기">
  </form>
</body>
</html>