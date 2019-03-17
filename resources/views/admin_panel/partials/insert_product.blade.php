<form method="POST" action="{{url('/admin/insert-product')}}" enctype="multipart/form-data">
@csrf
<select name="brand_id">
    <option>Izaberite kategoriju...</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
        
    @endforeach
</select></br></br></br>

    Name:<input type="text" name="name"></br></br>
    Description:<input type="text" name="description"></br></br>
    Price:<input type="text" name="price"></br></br>

    Picture:<input type="file" name="src"></br></br>

    Alt:<input type="text" name="alt"></br></br>



    <input type="submit" class="insert" value="Insert">

</form>
@if($errors->any)

@foreach($errors->all() as $error)

{{$error}}

@endforeach
@endif