<?php 

class HomeController {
    public static function index() {
        template::view('Dashboard');
    }
}