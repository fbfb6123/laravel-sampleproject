<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<form action="/hello/create" method="post">
    @csrf
    <div>NAME:<input type="text" name="name"></div>
    <div>MAIL:<input type="text" name="mail"></div>
    <div>age:<input type="text" name="age"></div>
    <input type="submit">
</form>
</body>
</html>
