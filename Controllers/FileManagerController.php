<?php

require_once 'AppController.php';

class FileManagerController extends AppController{

    public function manager()
    {
        $this->render('fileManager');
    }
}