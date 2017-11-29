@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="" action="#" method="post">
                      {{ csrf_field() }}
                      <p><label for="">Estos son los posteos de las personas que seguis</label></p>
                        @foreach ($post as $post)
                          <div class="posteo" style="border: 1px solid green">
                            {{$post->post}}
                          </div>
                        @endforeach
                          <div class="comentarios">
                            @foreach ($comentario as $comment)
                              <p>{{$comment->comment}}</p>
                            @endforeach
                          </div>
                          <form class="comentarios" action="#" method="post">
                            <label for="comentario">Escribi tu comentario</label>
                            <textarea name="comentario" rows="8" cols="80"></textarea>
                            <input type="submit" name="" value="Comentar">
                          </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
