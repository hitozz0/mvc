<?php
class About extends Controller{
    public function index($nama='hitoz', $umur=20){
        $data['nama']=$nama;
        $data['umur']=$umur;
        $data['jdl']='about';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['jdl']='pages';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
