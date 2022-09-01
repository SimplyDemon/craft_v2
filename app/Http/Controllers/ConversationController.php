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
            $redirectRoute = route( $this->name . 'show', [
                'id' => $single->id,
            ] );
        }
        catch ( QueryException $exception ) {
            $message       = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
            $redirectRoute = route( $this->name . 'create' );
        }


        return Redirect::to( $redirectRoute );
    }


    public function show( int $id ) {
        $single = Conversation::findOrFail($id);
        $user = auth()->user();

        if (!$user->isAdmin && $single->user_id !== $user->id) {
            return Redirect::to(route($this->name . 'index'));
        }

        $messages = Message::orderBy('id', 'asc')->where('conversation_id', $single->id)->get();
        $messagesNotRead = Message::orderBy('id', 'asc')->where('conversation_id', $single->id)->where(
            'is_read',
            0
        )->where('user_id', '!=', $user->id);
        if ($messagesNotRead->count() > 0) {
            $messagesNotRead->update(['is_read' => 1]);
            $columnNameForUpdate = $user->is_admin ? 'is_has_new_messages_for_admin' : 'is_has_new_messages_for_user';
            $single->update([
                $columnNameForUpdate => 0,
            ]);
        }
        /* For cases without messages */
        if ($user->is_admin && $single->is_has_new_messages_for_admin) {
            $single->update([
                'is_has_new_messages_for_admin' => 0,
            ]);
        }

        return view($this->folderPath . 'show', [
            'single' => $single,
            'messages' => $messages,
            'title' => $single->title,
        ]);
    }
}
