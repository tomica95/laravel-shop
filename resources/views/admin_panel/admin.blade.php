@extends('master')

@section('content')

<div id="content">

    
<!-- content user -->
    <h1>Users</h1>
    <div id="users" class="tabele">
    @include('admin_panel.partials.user')
    </div>

    <div id="update-user"></div>
    

    <!-- insert user -->
        <h1>Insert user</h1>
        <div id="insert-user">
            @include('admin_panel.partials.insert_user')
        </div>
    <!-- end insert user -->
    </br></br>
<!-- end user content -->
<hr>
<!-- contenct product -->
<div id="products-container">
<h1>Products</h1>
    <div id="products" class="tabele">
    @include('admin_panel.partials.products')
    </div>
    <div id="products-update"></div>
    </div>
    <hr>

    <!-- insert product -->

    <h1>Insert product </h1>

        <div id="insert">

            @include('admin_panel.partials.insert_product')
            
        </div>

<!-- end insert product -->
<hr>
<!-- end content product -->

<!-- content categories -->
    <h1>Categories</h1>
    <div id="categories">
    @include('admin_panel.partials.categories')
    </div>
    </br>
    </br>
    </br>

    <div id="insert-category">
    @include('admin_panel.partials.insert_categories')
    </div>
<!-- end content categories -->



</div>

@endsection

@section('js')

    <script src="{{asset('js/delete-watch-ajax.js')}}"></script> 

    <script src="{{asset('js/delete-user-ajax.js')}}"></script>

    <script src="{{asset('js/delete-category-ajax.js')}}"></script>

    <script src="{{asset('js/insert-product-ajax.js')}}"></script>
    
    <script src="{{asset('js/insert-user-ajax.js')}}"></script>

    <script src="{{asset('js/insert-category-ajax.js')}}"></script>

    <script src="{{asset('js/watch-for-update-ajax.js')}}"></script>

    <script src="{{asset('js/user-for-update-ajax.js')}}"></script>

    

@endsection


<style>

    #content{

        margin:150px;


    }

    

</style>