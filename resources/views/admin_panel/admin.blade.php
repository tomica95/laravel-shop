@extends('master')

@section('content')

<div id="content">

    
<!-- content user -->
    <div class="tabele">
    @include('admin_panel.partials.user')
    </div>
<!-- end user content -->

<!-- contenct product -->
    <div id="products" class="tabele">
    @include('admin_panel.partials.products')
    </div>
<!-- end content product -->

</div>


<style>
    #content{
        margin-top:150px;
        margin-left:300px;
        margin-bottom:150px;

    }
    .tabele{
        margin-top:30px;
    }

</style>
@endsection

@section('js')

    <script src="{{asset('js/delete-watch-ajax.js')}}"></script> 

@endsection