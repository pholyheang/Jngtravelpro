<style type="text/css">
    .carousel-control.right {
        left: auto;
        right: 0;
        background-image: none !important; 
   }

    .carousel-control.left{
        background-image: none;
        background-repeat: repeat-x;
    }
</style>
<div class="col-md-4">
    <div class="col-xs-12" id="slider">
        <!-- Top part of the slider -->
        <div class="row">
            <div class="col-sm-12" id="carousel-bounding-box">
            	Feature News<hr style="margin-top: 0px; margin-bottom: 0px;">
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                    	@foreach(App\News::all() as $key => $new)
                        <div class="{{$key==0? 'active': ''}} item" data-slide-number="{{$key}}">
                        	<a href="/news/single-view/{{$new->slug}}"><img src="/photos/share/thumbs/{{$new->photo}}" class="img-responsive" style="width: 100%;"></a>
                        </div>
                        @endforeach                           
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="clear"></div><br>
            <div class="col-md-12">
                Recent UpLoad<hr>  
                @foreach(App\News::all() as $key => $new)
                <div class="row" style="margin-bottom: 15px;">
                    <a href="/news/single-view/{{$new->slug}}">
                        <div class="col-md-4">
                           <img src="/photos/share/thumbs/{{$new->photo}}" class="img-responsive">            
                        </div>               
                        <div class="col-md-8 ">                   
                            <b>{{ $new->title }}</b>
                        </div>
                    </a>
                </div>    
                @endforeach                    
            </div>                
        </div>
    </div>
    <amp-auto-ads type="adsense"
              data-ad-client="ca-pub-8133991552698389">
    </amp-auto-ads>
</div>