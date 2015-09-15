<?php

namespace App\Repositories;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories
 */
interface TextRepositoryInterface
{

    /**
     * Add a message to the database
     *
     * @param $text
     * @return mixed
     */
    public function add($text);

    /**
     * View all messages
     *
     * @return mixed
     */
    public function all();


    /**
     * Delete a message
     *
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
