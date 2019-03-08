<select id="brand_id">
    <option>Izaberite kategoriju...</option>
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->name}}</option>
        
    @endforeach
</select></br></br></br>

    Name:<input type="text" class="name"></br></br>
    Description:<input type="text" class="description"></br></br>
    Price:<input type="text" class="price"></br></br>

    <input type="button" class="insert" value="Insert">

