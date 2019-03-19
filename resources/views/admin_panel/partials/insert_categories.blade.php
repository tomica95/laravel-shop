<form method="POST" action="{{url('/admin/insert-category')}}" enctype="multipart/form-data">
@csrf
Category name:<input type="text" name="catName"></br></br>

Picture:<input type="file" name="src"></br></br>

Picture alt:<input type="text" name="alt"></br></br>


<input type="submit" value="Insert" class="insert-category">

</form>
