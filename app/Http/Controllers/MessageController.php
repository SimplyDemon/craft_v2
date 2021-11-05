<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMessage;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller {
    protected $folderPath = 'pages.admin-price.';
    const QUERY_EXCEPTION_READABLE_MESSAGE = 2;

    public function store( AddMessage $request ) {
        $all          = $request->all();
        $user         = auth()->user();
        $conversation = Conversation::findOrFail( $all['conversation_id'] );

        if ( ! $user->isAdmin && $conversation->user_id !== $user->id ) {
            return Redirect::to( route( 'conversations.index' ) );
        }

        $request->merge( [
            'user_id' => $user->id,
        ] );


        try {
            Message::create( $request->except( '_token' ) );
            $message = 'Добавление выполнено успешно!';
        }
        catch ( QueryException $exception ) {
            $message = $exception->errorInfo[ self::QUERY_EXCEPTION_READABLE_MESSAGE ];
        }

        $request->session()->flash( 'message', $message );

        return Redirect::to( route( 'conversations.show', $conversation->id ) );
    }
}
