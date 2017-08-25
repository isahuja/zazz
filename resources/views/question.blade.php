<br><br><br><br>
{{ $question->question }}
<input type="radio" name="{{ $question->id . '-radio' }}" value="yes"> Yes
<input type="radio" name="{{ $question->id . '-radio' }}" value="no"> No
<button class="submit-option" data-id="{{ $question->id }}">Submit</button>