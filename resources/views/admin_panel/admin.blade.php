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
<!-- content product -->
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
    
    <div id="update-category"></div>
    </br>
    </br>

    <div id="insert-category">
    @include('admin_panel.partials.insert_categories')
    </div>
    <hr>
    
<!-- end content categories -->

<!-- content polls -->
<div id="polls-table"> 
    @include('admin_panel.partials.polls')
    </div>
    </br>
    </br>
    <!-- poll update -->
    <div id="poll-update">
    </div>
    <!-- end poll update -->
    <!-- insert poll -->

    <div id="insert-poll">
     @include('admin_panel.partials.insert-poll')
    </div>

    <!-- end poll insert -->
<!-- end content polls -->
<!-- polls anwers -->
    <div id="answers">
        <h1>Answers</h1>
        @include('admin_panel.partials.answers')
    
    </div></br>
    <div id="update-answer"></div>
    </br>
    <!-- insert answer -->
        <div id="insert-answer">
            <h1>Insert answer</h1>
            @include('admin_panel.partials.insert-answer')
        </div>
        </br></br>
    <!-- end insert answer -->
<!-- end content polls answers -->
<!-- User activity -->
    
        
        @include('admin_panel.partials.activity')
        
</div>

@endsection

@section('js')

    <script src="{{asset('js/delete-watch-ajax.js')}}"></script> 

    <script src="{{asset('js/delete-user-ajax.js')}}"></script>

    <script src="{{asset('js/delete-category-ajax.js')}}"></script>

    <script src="{{asset('js/insert-user-ajax.js')}}"></script>

    <script src="{{asset('js/insert-category-ajax.js')}}"></script>

    <script src="{{asset('js/watch-for-update-ajax.js')}}"></script>

    <script src="{{asset('js/user-for-update-ajax.js')}}"></script>

    <script src="{{asset('js/category-for-update-ajax.js')}}"></script>

    <script src="{{asset('js/poll-delete-ajax.js')}}"></script>

    <script src="{{asset('js/insert-poll-ajax.js')}}"></script>

    <script src="{{asset('js/poll-for-update-ajax.js')}}"></script>

    <script src="{{asset('js/insert-answer-ajax.js')}}"></script>

    <script src="{{asset('js/delete-answer-ajax.js')}}"></script>

    <script src="{{asset('js/update-answer-ajax.js')}}"></script>

    <script src="{{asset('js/sort-activity-desc.js')}}"></script>

    

    

@endsection


<style>

    #content{

        margin:150px;


    }

    

</style>