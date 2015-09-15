<?php

namespace App\Http\Controllers;

use App\Http\Requests\TextRequest;
use App\Repositories\TextRepositoryInterface;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    protected $textRepository;

    /**
     * @param TextRepositoryInterface $textRepository
     */
    public function __construct(TextRepositoryInterface $textRepository)
    {
        $this->textRepository = $textRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = $this->textRepository->all();
        return view('welcome', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TextRequest $request
     * @return int
     */
    public function store(TextRequest $request)
    {
        // get the text field value
        $text = $request->input('text');

        // Test if the message have been created
        if ($this->textRepository->add($text)) {
            Session::flash('success', 'Message successfully created');
        } else {
            Session::flash('error', 'Message could not be created');
        }

        // redirect to homepage
        return redirect(route('message.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        // Test if the message have been deleted
        if ($this->textRepository->destroy($id)) {
            Session::flash('success', 'Message successfully removed');
        } else {
            Session::flash('error', 'Message could not be deleted');
        }

        // redirect to homepage
        return redirect(route('message.index'));
    }
}
