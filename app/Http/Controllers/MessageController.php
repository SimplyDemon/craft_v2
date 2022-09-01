<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMessage;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller {
    protected string $folderPath = 'pages.admin-price.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function store( AddMessage $request ) {
        $all = $request->all();
        $user = auth()->user();
        $conversation = Conversation::findOrFail($all['conversation_id']);

        $columnNameForUpdate = $user->is_admin ? 'is_has_new_messages_for_user' : 'is_has_new_messages_for_admin';
        $conversation->update([
            $columnNameForUpdate => 1,
        ]);

        if (!$user->isAdmin && $conversation->user_id !== $user->id) {
            return Redirect::to(route('conversations.index'));
        }

        $request->merge([
            'user_id' => $user->id,
        ]);


        try {
            Message::create( $request->except( '_token' ) );
            $message = 'Сообщение отправлено.';
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( 'conversations.show', $conversation->id ) );
    }
}
