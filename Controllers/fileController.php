<?php
require_once CORE.'Controller.php';

class fileController extends Controller
{
    public function index($id='', $name='')
    {
        $this->view('file//index',[
            'name' => $name,
            'id' => $id
        ]);
        $this->view->render();
    }
}