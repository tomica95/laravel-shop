<table border="1">
    <tr>
        <td>
            Id Poll
        </td>
        <td>
            Poll question
        </td>
        <td>    
            Id answer
        </td>
        <td>
            Poll Answers
        </td>
    </tr>
    @foreach($answers as $answer)
    <tr>
        <td>{{$answer->question->id}}</td>
        <td>{{$answer->question->question}}</td>
        <td>{{$answer->id}}</td>
        <td>{{$answer->answer}}</td>
        <td><button value="{{$answer->id}}" class="delete-answer">Delete</button></td>
        <td><button value="{{$answer->id}}" class="update-answer">Update</button></td>
    </tr>
    @endforeach
</table>