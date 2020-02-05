<style type="text/css">
  .carousel-control.right {
    left: auto;
    right: 0;
    background-image: none !important;
    background-repeat: repeat-x !important;
  }
  .carousel-control.left{
    background-image: none !important;
    background-repeat: repeat-x !important;
  }
</style>
<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
    <div class="carousel-inner">
      @foreach(\App\Client::all()->chunk(6) as $key => $clients)
        <div class="item {{$key == 0? 'active':''}}">
            @foreach($clients as $clien)
            <div class="col-md-2 col-sm-6 col-xs-12"><a href="javascript:void(0)"><img style="height: 130px;width: auto;" src="/photos/share/{{$clien->logo}}" class="img-responsive"></a></div>
            @endforeach
        </div>        
      @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>