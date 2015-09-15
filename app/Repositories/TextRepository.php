<?php

namespace App\Repositories;

use App\Message;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class TextRepository implements TextRepositoryInterface
{

    /**
     * @param $text
     * @return bool
     */
    public function add($text)
    {
        $message       = new Message();
        $message->text = $text;

        return $message->save();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        $messages = Message::all();

        return $messages;
    }

    /**
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return Message::destroy($id);
    }
}
