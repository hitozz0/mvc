<?php
class Home extends Controller{
    public function index(){
        $data['jdl']='home pages';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');

        // echo'test';
    }
}