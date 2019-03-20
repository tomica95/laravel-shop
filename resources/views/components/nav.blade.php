 <!-- Nav Start -->
 <div class="classynav">
                        <ul>
                            <li><a href="{{url('/shop')}}">Shop</a></li>
                            @if((request()->session()->has('user')) && request()->session()->get('user')->role_id == 1)
                            <li><a href="{{url('/admin')}}">Admin</a></li>

                            @endif
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <li><a href="{{url('/about')}}">About author</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->