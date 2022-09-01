@extends('pages.user.main-template', ['title' => $title ?? 'Калькулятор крафта Asterios'])
@section('user-content')
    @if(isset($title))
@section('title', $title)
@endif
@section('description', 'Все существующие беседы. Можно связаться с администрацией для сообщения о баге или своём предложении.')
<div class="nk-social-profile-info-actions">
    <a href="{{ route( 'conversations.create' ) }}" class="nk-btn ready">
        <span class="link-effect-inner">
            <span class="link-effect-shade"><span>Создать запрос</span></span>
        </span>
    </a>
</div>
@if ($all)
    <h2 class="nk-title">Список запросов</h2>
    <div class="table-responsive nk-social-messages">
        <table class="table table-bordered">
            <thead class="thead-default">
            </thead>
            <tbody>
            @foreach($all as $single)
                <tr>
                    <td class="nk-social-messages-description">
                        <div
                            class="nk-social-messages-subject @if((auth()->user()->is_admin && $single->is_has_new_messages_for_admin) || (!auth()->user()->is_admin && $single->is_has_new_messages_for_user))sd-conversation__new-message-color @endif">
                            <a href="{{ route( 'conversations.show', [ 'id' => $single->id ] ) }}"> {{$single->title}}</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
