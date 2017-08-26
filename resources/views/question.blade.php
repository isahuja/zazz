<br><br><br><br>
<div class="questionbank">
<div class="question">{{ $question->question }}</div>
<input type="radio" name="{{ $question->id . '-radio' }}" value="yes"> Yes &nbsp;
<input type="radio" name="{{ $question->id . '-radio' }}" value="no"> No
<div class="submitans">
<button class="btn submit-option" data-id="{{ $question->id }}">Submit</button>
</div>
</div>