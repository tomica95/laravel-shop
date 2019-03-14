<select name="whichQ" class="whichQ"> 
    <option>Choose question</option>
    @foreach($polls as $poll)
        <option value="{{$poll->id}}">{{$poll->question}}</option>
    @endforeach
</select>
    </br></br></br>

    Answer:<input type="text" class="poll-answer">

    </br></br></br>

    <input type="button" class="insert-answer-button" value="Insert">