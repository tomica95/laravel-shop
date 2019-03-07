@extends('master')

@section('content')

<div id="content">

    
<!-- content user -->
    <h1>Users</h1>
    <div id="users" class="tabele">
    @include('admin_panel.partials.user')
    </div>
    <hr>
<!-- end user content -->

<!-- contenct product -->
<h1>Products</h1>
    <div id="products" class="tabele">
    @include('admin_panel.partials.products')
    </div><hr>
<!-- end content product -->

<!-- content categories -->
    <h1>Categories</h1>
    @include('admin_panel.partials.categories')

<!-- end content categories -->

</div>

@endsection

@section('js')

    <script src="{{asset('js/delete-watch-ajax.js')}}"></script> 

    <script src="{{asset('js/delete-user-ajax.js')}}"></script>

@endsection