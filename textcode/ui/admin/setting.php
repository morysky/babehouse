<?php

class setting {

    public function execute() {
        $title = Http_Request::get('title', 0);
        $nav1 = Http_Request::get('nav1', '');
        var_dump($title);
        var_dump($var1);
    }
}
