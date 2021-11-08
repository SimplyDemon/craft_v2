<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddConversation;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class ConversationController extends Controller {
    protected string $name = 'conversations.';
    protected string $folderPath = 'pages.user.conversation.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function index() {
        $user = auth()->user();

        if ( $user->isAdmin ) {
            $all = Conversation::orderBy( 'id', 'desc' )->get();
        } else {
            $all = Conversation::orderBy( 'id', 'desc' )->where( 'user_id', $user->id )->get();
        }


        return view( $this->folderPath . 'index', [
            'all'   => $all,
            'title' => 'Поддержка',
        ] );
    }

    public function create() {

        return view( $this->folderPath . 'create', [
            'title' => 'Создать запрос',
        ] );
    }

    public function store( AddConversation $request ) {
        $user = auth()->user();
        $request->merge( [ 'user_id' => $user->id ] );
        try {
            $single        = Conversation::create( $request->except( '_token' ) );
            $message       = 'Запрос был успешно создан';
            $redirectRoute = route( $this->name . 'show', [
                'id' => $single->id,
            ] );
        }
        catch ( QueryException $exception ) {
            $message       = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
            $redirectRoute = route( $this->name . 'create' );
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( $redirectRoute );
    }


    public function show( int $id ) {
        $single = Conversation::findOrFail( $id );
        $user   = auth()->user();

        if ( ! $user->isAdmin && $single->user_id !== $user->id ) {
            return Redirect::to( route( $this->name . 'index' ) );
        }

        $messages = Message::orderBy( 'id', 'asc' )->where( 'conversation_id', $single->id )->get();

        return view( $this->folderPath . 'show', [
            'single'   => $single,
            'messages' => $messages,
            'title'    => $single->title,
        ] );
    }
}
