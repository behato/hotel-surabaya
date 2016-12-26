@extends("main")

@section("content")

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://placehold.it/1360x300" alt="...">
      <div class="carousel-caption">
        Lorem Ipsum sit amet dolor
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1360x300" alt="...">
      <div class="carousel-caption">
        Lorem Ipsum sit amet dolor
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1360x300" alt="...">
      <div class="carousel-caption">
        Lorem Ipsum sit amet dolor
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="row grid-hotel">
@foreach($data as $key)
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="https://origin.pegipegi.com/jalan/images/pictS/Y7/Y970057/Y970057009.jpg" alt="...">
      <div class="caption">
        <h3>{{TitleShorter($key->nama_hotel)}}</h3>
        <p>Stars <span class="badge">{{$key->bintang}}</span></p>
        <p><a href="#" class="btn btn-primary" role="button">Detail</a> <a href="http://{{$key->website}}" class="btn btn-default" role="button">Website</a></p>
      </div>
    </div>
  </div>
  @endforeach
  <center><div class="center">{{$data->links()}}</div></center>
</div>

@endsection