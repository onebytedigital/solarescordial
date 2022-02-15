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

        if (isset($_POST['cadastrar-usuario'])) {
            $usuario = new Usuario();
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);

            \SolaresCordial\Service\UsuarioService::save($usuario);
            \SolaresCordial\Utils\Utils::redirect('configuracoes');
        }

        if (isset($_POST['salvar-usuario'])) {
            $usuario = new Usuario();
            $id = $_POST['id'];
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);

            \SolaresCordial\Service\UsuarioService::update($usuario,$id);
            \SolaresCordial\Utils\Utils::redirect('configuracoes');
        }

        if (isset($_GET['deletar-usuario'])) {
            \SolaresCordial\Service\UsuarioService::deleteById($_GET['id']);
            \SolaresCordial\Utils\Utils::redirect('configuracoes');
        }
    }
}