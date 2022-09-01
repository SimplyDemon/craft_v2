@extends('pages.user.main-template', ['title' => $title ?? 'Калькулятор крафта Asterios'])
@section('user-content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', "Просмотр беседы #{$single->id}.")
<?php $currentUser = auth()->user() ?>

<div class="nk-social-container">
    <h2 class="nk-title">Переписка</h2>
    @if(!$messages->isEmpty())
        @foreach($messages as $message)
            <div class="nk-social-messages-single">
                <div
                    class="nk-social-messages-single-content text-position-{{$currentUser->id === $message->user->id ? 'right' : 'left' }}">
                    <div class="nk-social-messages-single-meta">
                        <p><b>{{$message->user->name}}</b> {{date('d-m-Y H:i:s',strtotime($message->created_at))}}
                        </p>
                    </div>
                    <div
                        class="nk-social-messages-single-text @if(!$message->is_read)sd-conversation__new-message-color @endif">
                        {{$message->text}}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <form method="post" action="{{route('messages.store')}}">
        @csrf
        <input type="hidden" name="conversation_id" value="{{$single->id}}">
        <div class="nk-social-messages-single">
                <div class="nk-social-messages-single-content">
                    <div class="nk-social-messages-single-text">
                        <form action="#" novalidate="novalidate">
                            <textarea name="text" class="form-control" placeholder="Сообщение" rows="4"></textarea>
                            <div class="nk-gap"></div>
                            <button class="nk-btn float-right ready">
                                <span class="link-effect-inner">
                                    <span class="link-effect-shade">
                                        <span>Отправить</span>
                                    </span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </form>

</div>

@endsection
