<div class="question {{$question['class']}}">
    <div class="question__title">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16"
             viewBox="0 0 16 16">
            <path fill="white"
                  d="M9 10h-2c0-2 1.2-2.6 2-3 0.3-0.1 0.5-0.2 0.7-0.4 0.1-0.1 0.3-0.3 0.1-0.7-0.2-0.5-0.8-1-1.7-1-1.4 0-1.6 1.2-1.7 1.5l-2-0.3c0.1-1.1 1-3.2 3.6-3.2 1.6 0 3 0.9 3.6 2.2 0.4 1.1 0.2 2.2-0.6 3-0.4 0.4-0.8 0.6-1.2 0.7-0.6 0.4-0.8 0.2-0.8 1.2z"></path>
            <path fill="white"
                  d="M8 1c3.9 0 7 3.1 7 7s-3.1 7-7 7-7-3.1-7-7 3.1-7 7-7zM8 0c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8v0z"></path>
            <path fill="white" d="M6.9 11h2v2h-2v-2z"></path>
        </svg>

        {{$question['text']}}
    </div>

    <div class="question__buttons">
        @foreach($question['answers'] as $answer)
            <button class="nk-btn nk-btn-rounded nk-btn-color-main-1" data-answer="{{$answer['attribute']}}">
                {{$answer['text']}}
            </button>
        @endforeach

    </div>
</div>