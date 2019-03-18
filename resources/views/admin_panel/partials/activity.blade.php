<div id="aktiv">
<table border="1">
    <tr>
        <td>Description</td>
        <td>created_at</td>
        <td>updated_at</td>
        <td>Client user</td>
            <td>
            
            <button class="sort-desc">Sort by date desc</button>
 
            </td>
    </tr>
    @foreach($activities as $activity)
        <tr>
            <td>{{$activity->description}}</td>
            <td>{{$activity->created_at}}</td>
            <td>{{$activity->updated_at}}</td>
            <td>{{$activity->client}}</td>
        </tr>
    @endforeach
    
</table>
</div>