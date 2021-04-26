<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index(){
        $data = [
            'title' => 'VanillaMVC'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'ABOUT'
        ];
        $this->view('pages/about', $data);
    }

}

?>