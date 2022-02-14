<?php

namespace SolaresCordial\Controller;

class HomeController
{
    public function index()
    {
        \SolaresCordial\View\MainView::render('home');
    }
}