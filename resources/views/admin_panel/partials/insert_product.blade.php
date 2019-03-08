<select>
    <option>Izaberite kategoriju...</option>
    @foreach($categories as $category)
    <option class="option" value="{{$category->id}}">{{$category->name}}</option>
        
    @endforeach
</select></br></br></br>

    Name:<input type="text" class="name"></br>
    Description:<input type="text" class="description"></br>
    Price:<input type="text" class="price"></br>

    <input type="button" class="insert" value="Insert">

