<?php

require_once 'AppController.php';

class MainPageController extends AppController{

    public function page()
    {
        if($this->isPost())
        {
            if($_POST['submit'] == 'fileManager'){
                $url = "http://$_SERVER[HTTP_HOST]/";
                header("Location: {$url}?page=fileManager");
                $this->render('fileManager');
                return;
            }
        }
        $this->render('mainPage');
    }
}