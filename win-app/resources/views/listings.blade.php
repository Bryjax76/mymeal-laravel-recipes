@extends('layout')

@section('content')

@unless(count($listings) == 0)


<div class="container_list">

  <div class="row">
    @foreach($listings as $listing)
    <div class="col-4 d-flex justify-content-sm-center">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$listing['file_path']}}" alt="Card image cap" style="height: 25vh;">
        <div class="card-body">
          <h5 class="card-title">{{ $listing['title'] }}</h5>
          <p class="card-text">{{ $listing['description'] }}</p>
          <a href="/listings/{{$listing['id']}}" class="btn btn-primary">Check out!</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>








@else
    <p>No Listing Found</p>
@endunless

@endsection
