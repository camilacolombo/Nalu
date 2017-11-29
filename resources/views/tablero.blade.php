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

                        @foreach ($posteos as $post)
                          <div class="boxed" style="border: 1px solid green">
                            <a href="{{route('comentario', ['id' => $post->id])}}"></a>
                            {{$post->post}}
                          </div>
                        @endforeach

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
