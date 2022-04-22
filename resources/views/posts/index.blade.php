@extends('layouts.login')

@section('content')
<h2>機能を実装していきましょう。</h2>

{!! Form::open(['url'=>'/post-create']) !!}


{{ Form::text('post',null,['class' => 'input']) }}


{{ Form::submit('投稿') }}


{!! Form::close() !!}
@foreach ($posts as $post)
<div>{{ $post->post }}</div>
<div class="content">
		<label class="js-modal-open" href="" post="{{ $post->post }}" id="{{ $post->id }}"><img src="images/edit.png"></label>
	</div>
	<div class="modal js-modal">
		<div class="modal__bg js-modal-close"></div>
		<div class="modal__content">
      <form class="" action="/post-update" method="post">
        @csrf
          <textarea class="edittext" name="post" rows="8" cols="108"></textarea>
          <input type="hidden" name="id" class="post_id" value="">
          <input type="image" name="upPost" class="js-modal-close" src="images/edit.png">
      </form>

		</div>
	</div>

<a class="btn btn-danger" href="/post/{{ $post->id }}/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')"><img src="images/trash-h.png"></a>

@endforeach

@endsection
