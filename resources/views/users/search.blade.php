@extends('layouts.login')

@section('content')
<!-- <form class="" action="/result" method="get">
  <input type="text" name="" value="null" class="input" placeholder="ユーザー名">
  <input type="submit" name="" value="検索" class="">
</form> -->

{{Form::open(['url'=>'/result'])}}
{{Form::text('search-form',null,['class' => 'input'])}}
{{Form::submit('送信',['class' => 'search-button'])}}
{{Form::close()}}

<table class="searchlist">
@foreach ($list as $list)
    <div>{{ $list->username }}</div>
@endforeach
</table>
@endsection
