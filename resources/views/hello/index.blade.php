<!doctype html>
<html lang="ja">
<head>
    <title>Index</title>
</head>
<body>
<h1>Hello/Index</h1>
<form action="/hello" method="post">
    @csrf
    <div>NAME:<input type="text" name="name"></div>
    <div>MAIL:<input type="text" name="mail"></div>
    <div>TEL:<input type="text" name="tel"></div>
    <input type="submit">
</form>
<hr>
<ol>
    @for($i = 0;$i < count($keys);$i++)
        <li>{{$keys[$i]}}:{{$values[$i]}}</li>
    @endfor
</ol>
@foreach($items as $user)
    <tr>
        <td>{{$user->name}}</td>
    </tr>
@endforeach
</body>
</html>


