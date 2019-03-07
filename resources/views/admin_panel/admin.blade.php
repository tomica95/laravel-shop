@extends('master')

@section('content')

<div id="content">

    
<!-- content user -->
    <div id="users" class="tabele">
    @include('admin_panel.partials.user')
    </div>
<!-- end user content -->

<!-- contenct product -->
    <div id="products" class="tabele">
    @include('admin_panel.partials.products')
    </div>
<!-- end content product -->

</div>

@endsection

@section('js')

    <script src="{{asset('js/delete-watch-ajax.js')}}"></script> 

    <script src="{{asset('js/delete-user-ajax.js')}}"></script>

@endsection