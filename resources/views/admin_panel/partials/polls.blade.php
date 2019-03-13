 
    <h1>Polls</h1>
    <table border="1">
        <tr>
            <td>Id Poll</td>
            <td>Poll question</td>
            <td>Is it active?</td>
        </tr>
        @foreach($polls as $poll)
        <tr>
            <td>{{$poll->id}}</td>
            <td>{{$poll->question}}</td>
            <td>{{$poll->active}}</td>
            <td><button type="button" value="{{$poll->id}}" name="delete-poll" class="delete-poll">Delete</button></td>
            <td><button type="button" value="{{$poll->id}}"
            name="update-poll" class="update-poll">Update</button></td>
        </tr>
        @endforeach    
    </table>






