<table border="1">

    <tr>
        <td>id</td>
        <td>Name</td>
        <td>Picture</td>
        <td>Picture - alt</td>
    </tr>
    @foreach($categories as $category)

        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><img src="{{asset('img/'.$category->src)}}" width="150" height="120"></td>
            <td>{{$category->alt}}</td>
            <td><button value="{{$category->id}}" class="delete-category">Delete</button></td>
            <td><button value="{{$category->id}}" class="update-category">Update</button></td>
        </tr>

    @endforeach

</table>