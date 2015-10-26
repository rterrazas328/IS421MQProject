<?php namespace MQProject\Http\Controllers;

use MQProject\Commands\mp4tomp3;
//use Queue;


class MP4FileController extends Controller{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    //long task
    public function process(){

        //echo "dispatching...";
        $this->dispatch(new mp4tomp3());
        //Queue::push(new mp4tomp3());
        return view('home');
    }



}