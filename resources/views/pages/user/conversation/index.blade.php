@extends('pages.user.main-template', ['title' => $title ?? 'Craft Calc'])
@section('user-content')

    <div class="nk-social-profile-info-actions">
        <a href="{{ route( 'conversations.create' ) }}" class="nk-btn link-effect-4 ready"><span class="link-effect-inner"><span class="link-effect-l"><span>Создать запрос</span></span><span class="link-effect-r"><span>Создать запрос</span></span><span class="link-effect-shade"><span>Создать запрос</span></span></span></a>
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
                            <div class="nk-social-messages-subject">
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
