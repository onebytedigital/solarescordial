<?php

namespace SolaresCordial\Repository;

use SolaresCordial\DAO\DAO;
use SolaresCordial\Model\Usuario;
use SolaresCordial\RepositoryInterface\UsuarioRepositoryInterface;

class UsuarioUsuarioRepository implements UsuarioRepositoryInterface
{
    public static function save(Usuario $usuario)
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
        $query->execute(array($usuario->getNome(), $usuario->getEmail(), $usuario->getSenha()));
    }

    public static function update(Usuario $usuario, $id)
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?");
        $query->execute(array($usuario->getNome(),$usuario->getEmail(),$usuario->getSenha(),$usuario));
    }

    public static function delete($usuario)
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("DELETE usuarios FROM usuarios WHERE id = ?");
        $query->execute(array($usuario));
    }

    public static function findAll()
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("SELECT * FROM usuarios order by nome");
        $query->execute();
        $usuarios = $query->fetchAll();

        return $usuarios;
    }

    public static function findById($id)
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("SELECT id FROM usuarios WHERE id = ?");
        $query->execute(array($id));
        $result = $query->fetch();
        $usuario = $result['id'];

        return $usuario;
    }

    public static function authentication(Usuario $usuario)
    {
        $query = \SolaresCordial\DAO\DAO::conectar()->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $query->execute(array($usuario->getEmail(),$usuario->getSenha()));
        $result = $query->fetchAll();

        if (count($result) != 0) {
            $_SESSION['usuarioLogado'] = $result[0]['nome'];
            \SolaresCordial\Utils\Utils::redirect('admin');
        } else {
            echo '<script>alert("Usuário ou senha incorretos")</script>';
        }
    }
}