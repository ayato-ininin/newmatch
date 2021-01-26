<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    public function chatRoomUsers()
    {
        return $this->hasmany('App\ChatRoomUser');
    }

    public function chatMesages()
    {
        return $this->hasmany('App\ChatMessage');
    }
}
