@extends('admin.layouts.primary')
@section('content')
    <style>
        body {
            margin-top: 20px;
        }

        .chat-messages {
            display: flex;
            flex-direction: column;
            max-height: 800px;
            overflow-y: scroll
        }

        .chat-message-left,
        .chat-message-right {
            display: flex;
            flex-shrink: 0
        }

        .chat-message-left {
            margin-right: auto
        }

        .chat-message-right {
            flex-direction: row-reverse;
            margin-left: auto
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .flex-grow-0 {
            flex-grow: 0 !important;
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important;
        }
    </style>
    <?php $currentUser = auth()->user() ?>
    <main class="content">
        <div class="card">
            <h1 class="card-header">
                {{ $title ?? $single->title }}
            </h1>
        </div>


        <div class="container p-0">
            <div class="card">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="position-relative">
                            <div class="chat-messages p-4">
                                @if(!$messages->isEmpty())
                                    @foreach($messages as $message)

                                        <div class="chat-message-{{$currentUser->id === $message->user->id ? 'right' : 'left' }} pb-4">
                                            <div>
                                                <div class="text-muted small text-nowrap mt-2">{{date('d-m-Y',strtotime($message->created_at))}}</div>
                                                <div class="text-muted small text-nowrap mt-2">{{date('H:i:s',strtotime($message->created_at))}}</div>
                                            </div>
                                            <br>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                                <div class="font-weight-bold mb-1">{{$message->user->name}}</div>
                                                {{$message->text}}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>


                        <form method="post" action="{{route('messages.store')}}">
                            @csrf
                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">

                                    <input type="hidden" name="conversation_id" value="{{$single->id}}">
                                    <input type="text" name="text" class="form-control" placeholder="Type your message">
                                    <button class="btn btn-primary">Send</button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
