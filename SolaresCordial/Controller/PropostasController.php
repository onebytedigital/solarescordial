<?php

namespace SolaresCordial\Controller;

class PropostasController
{
    public function index()
    {
        if (isset($_GET['nova-proposta'])) {
            \SolaresCordial\View\MainView::render('nova-proposta');
        } else {
            \SolaresCordial\View\MainView::render('propostas');
        }
    }
}