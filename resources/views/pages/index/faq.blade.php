<div class="nk-box bg-dark-1 sd-background">
    <div class="container text-center">
        <div class="nk-gap-2"></div>
        <div class="text-center">
            <h2 class="nk-title h1">Вопросы и ответы</h2>
        </div>

        <div id="accordion">
            @foreach($faq as $question => $answer)
                <div id="faq-{{$loop->index}}">
                    <h5 class="mb-0">
                        <button class="btn btn-link nk-title h1" data-toggle="collapse" data-target="#faq-collapse-{{$loop->index}}" aria-expanded="false" aria-controls="#faq-collapse-{{$loop->index}}">
                            {{$question}}
                        </button>
                    </h5>
                </div>
                <div id="faq-collapse-{{$loop->index}}" class="collapse {{$loop->index === 0 ? 'show' : ''}}" aria-labelledby="faq-{{$loop->index}}" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            {!! $answer !!}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
