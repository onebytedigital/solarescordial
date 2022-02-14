<?php

namespace SolaresCordial\Controller;

class AdminController
{
    public function index() {
        if (isset($_SESSION['usuarioLogado'])) {
            \SolaresCordial\View\MainView::render('dashboard');
        } else {
            \SolaresCordial\View\MainView::render('login');
        }
    }
}