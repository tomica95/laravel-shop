  <!-- ##### Top Catagory Area Start ##### -->
  <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                @foreach($brands as $brand)
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url({{asset('img/'.$brand->src)}});">
                        <div class="catagory-content">
                            <a href="{{url('shop/'.$brand->id)}}">{{$brand->name}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->