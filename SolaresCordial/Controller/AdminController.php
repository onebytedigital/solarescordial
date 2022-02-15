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

        if (isset($_POST['logar'])) {
            $usuario = new \SolaresCordial\Model\Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);

            \SolaresCordial\Service\UsuarioService::authentication($usuario);
        }
    }
}