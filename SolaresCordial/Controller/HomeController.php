<?php

namespace SolaresCordial\Controller;

use SolaresCordial\Model\Usuario;

class HomeController
{
    public function index()
    {
        \SolaresCordial\View\MainView::render('home');
    }
}