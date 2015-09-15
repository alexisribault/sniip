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
     * Add a message to the database
     *
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
     * View all messages
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        $messages = Message::all();

        return $messages;
    }

    /**
     * Delete a message
     *
     * @param $id
     * @return int
     */
    public function destroy($id)
    {
        return Message::destroy($id);
    }
}
