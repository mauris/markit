@extends('default')
@section('content')

    <div class="jumbotron">
      <h1>Woah! Something's not right</h1>
      <p>We can't find the page you asked for. Give us a little time, <i>maybe</i> it'll be back later.</p>
      <p><a class="btn btn-primary btn-lg" role="button" href="{{URL::previous()}}">Go back</a></p>
    </div>
@stop