@extends('layout')

@section('content')
<center>
<div class="card mb-3" style="width: 40vw;">
  <img class="card-img-top" src="{{ URL::asset($listing['file_path']) }} " alt="Card image cap" style="height: 40vh">
  <div class="card-body">
    <h5 class="card-title">{{ $listing['title'] }}</h5>
    <p class="card-text">{{ $listing['description'] }}</p>
    <p class="card-text"><small class="text-muted">{{ $listing['tags'] }}</small></p>
  </div>
</div>
</center>
@endsection