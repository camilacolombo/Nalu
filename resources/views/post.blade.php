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
                      <p><label for="">Postea, hacete conocer</label></p>
                      <textarea name="post" rows="8" cols="80"></textarea>
                      <p><input type="submit" name="" value="Postear"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
