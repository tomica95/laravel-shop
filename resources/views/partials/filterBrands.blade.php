  <!-- ##### Single Widget ##### -->
  <div class="widget price mb-50">
                            <!-- Widget Title -->
                            @foreach($questions as $question)
                            <h6 class="widget-title mb-30">{{$question->question}}</h6>
                            @endforeach
                            @foreach($answers as $answer)
                                <input type="radio" class="poll-answer">{{$answer->answer}}</br></br>
                            @endforeach
                            <!-- Widget Title 2 -->
                            
                        </div>

                    

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