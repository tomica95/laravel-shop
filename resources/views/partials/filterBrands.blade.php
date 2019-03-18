  <!-- ##### Single Widget ##### -->
  @if(!empty($question))
  <div class="widget price mb-50">
                            <!-- Widget Title -->
                       
                            <h6 class="widget-title mb-30">{{$question->question}}</h6>
                            
                            <div id="answers">
                            @foreach($question->answers as $answer)
                                <input type="radio" class="poll-answer" name="radio" id="{{$answer->id}}" value="{{$answer->id}}">{{$answer->answer}}</br></br>
                            @endforeach
                            <div id="poll-result"></div>
                            </div>
                            <!-- Widget Title 2 -->
                            
                        </div>
@endif
                    

                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc">
                                <ul>
                                @foreach($brands as $brand)
                                    <li><a href="{{url('shop/'.$brand->id)}}">{{$brand->name}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>

                        @section('js')

                            <script src="{{asset('js/polls-vote-ajax.js')}}"></script>

                        @endsection