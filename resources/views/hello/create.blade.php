<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<form action="/hello/create" method="post">
    @csrf
    <div>TITLE:<input type="text" name="title"></div>
    <input type="submit">
</form>
</body>
</html>
