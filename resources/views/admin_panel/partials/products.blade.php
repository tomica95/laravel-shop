<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Picture</td>
        <td>Alt</td>
    </tr>
    @foreach($watches as $watch)
    <tr>
        <td>{{$watch->id}}</td>
        <td>{{$watch->name}}</td>
        <td>{{$watch->description}}</td>
        <td>{{$watch->price}}</td>
        <td><img src="{{$watch->src}}" width="100" heigth="140"></td>
        <td>{{$watch->alt}}</td>
        <td>
        
        <button class="delete-watch" value="{{$watch->id}}">Delete</button>
       
        </td>
        <td>
            <button class="update-watch" value="{{$watch->id}}">Update</button>
        </td>
    </tr>
    @endforeach

</table>