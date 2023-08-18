
@if(count($listings)==0)
<p>No listings found </p>
@endif

<h1>{{$heading}}</h1>
@foreach($listings as $listing)
  <a href="/listing/{{$listing['id']}}"><h2>{{ $listing['title']}}</h2></a> 
  <p>{{ $listing['description']}}</p>
  @endforeach




  