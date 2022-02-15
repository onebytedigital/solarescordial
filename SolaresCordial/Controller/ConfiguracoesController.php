<?php

namespace SolaresCordial\Controller;

use SolaresCordial\Model\Usuario;
use SolaresCordial\Service\UsuarioService;

class ConfiguracoesController
{
    public function index()
    {
        if (isset($_SESSION['usuarioLogado'])) {
            \SolaresCordial\View\MainView::render('configuracoes');
        } else {
            \SolaresCordial\View\MainView::render('login');
        }

        if (isset($_GET['deletar-usuario'])) {
            $usuario = \SolaresCordial\Service\UsuarioService::findById($_GET['id']);
            \SolaresCordial\Service\UsuarioService::delete($usuario);
        }
    }
}