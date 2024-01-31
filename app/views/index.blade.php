<html>

<head>
    <title>Welcome to my Site</title>
</head>
<body>
<h1>Tiktok Video Downloader</h1>
<div>{{ $variable1 }}</div>
<div>{{ $error or 'No Errors' }}</div>
<div>{{ $varr }}</div>
<div>{!! $varr !!}</div>
{{--the hien the html neu co --}}
@if(isset($arr))
    @foreach($arr as $item)
        <div>{{$item}}</div>
    @endforeach
@endif
</body>
</html>