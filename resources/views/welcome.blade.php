<!-- layout.blade.php를 사용 하겠다. -->
@extends('layout')  

@section('title')
    Welcome
@endsection

@section('content')
    Welocome
    <!-- <?php foreach($books as $book):?>
        <li><?= $book; ?></li>
    <?php endforeach; ?> 
    아래 문장이 더 안전(javascript 문자이 실행되지 않는다.)하고 깔끔하다...
    -->
    @foreach($books as $book)
        <li>{{ $book }}</li>
    @endforeach
@endsection
