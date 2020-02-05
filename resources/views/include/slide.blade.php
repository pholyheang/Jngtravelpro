<div class=" overflownone">
    <div class="col-md-3 information nopaddingleft nopaddingright hidden-sm hidden-xs">
         <h3>Why Us</h3>
         <ul class="information_menu">
            @foreach(App\Post::where('category_id', 1)->get() as $key => $srow)
              <?php $n = $key + 1;?>
              <li data-id="{{$n}}" class="{{ $n === 1 ? 'active' : ''}}" ><a href="/view-details/{{$srow->slug}}"><i class=" {{$srow->icon}}"> </i> {{$srow->title}}</a></li>
            @endforeach               
         </ul>       
    </div>
    <div class="col-md-9 nopaddingleft nopaddingright">
        <div class="slideshow">
          @foreach(App\Post::where('category_id', 1)->get() as $key => $srow)
          <?php $n = $key + 1;?>
              <div class="overlay-id{{$n}} overlay-item" style="color: white;">
                <p>{!! str_limit(strip_tags($srow->intro), 570) !!}</p>
              </div>
          @endforeach
          <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
             <ol class="carousel-indicators">
              @foreach(\App\SlideShow::where('slide_for', 1)->get() as $key => $slrow )
                <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{ $key === 0 ? 'active' :''}}"></li>
              @endforeach
             </ol>
             <div class="carousel-inner" role="listbox">
                @foreach(\App\SlideShow::where('slide_for', 1)->get() as $key => $slrow )
                <div class="item {{ $key === 0 ? 'active' :''}}">
                   <img src="/photos/share/{{$slrow->slide}}" alt="{{$slrow->title}}" style="width: 100%; height: 100%;">
                   <div class="carousel-caption">
                      <h3>{{$slrow->title }}</h3>
                      <p>{{str_limit(strip_tags($slrow->intro), 260)}}</p>
                   </div>
                </div>                
                @endforeach
             </div>            
          </div>
        </div>
    </div>
</div>
<div class="row visible-xs visible-sm ">
    <div class="col-md-12 mobile-menu-bg">
       <ul class="information_menu_mobile">
          <li class="active"><a href="#"><i class="fa fa-calendar-plus-o"></i> <span class="hidden-xs">Lorem ipsum</span></a></li>
          <li><a href="#"><i class="fa fa-commenting-o"></i> <span class="hidden-xs">Praesent posuere</span></a></li>
          <li><a href="#"><i class="fa fa-medkit"></i> <span class="hidden-xs">Phasellus imperdiet</span></a></li>
          <li><a href="#"><i class="fa fa-heartbeat"></i> <span class="hidden-xs">In accumsan</span></a></li>
       </ul>
       <div class="clearfix"></div>
    </div>
</div>
