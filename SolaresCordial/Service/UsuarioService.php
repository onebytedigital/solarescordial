<?php

namespace SolaresCordial\Service;

use SolaresCordial\Model\Usuario;

class UsuarioService
{
    public static function save(Usuario $usuario)
    {
        \SolaresCordial\Repository\UsuarioUsuarioRepository::save($usuario);
    }

    public static function authentication(Usuario $usuario)
    {
        \SolaresCordial\Repository\UsuarioUsuarioRepository::authentication($usuario);
    }

    public static function update($usuario,$id)
    {
        \SolaresCordial\Repository\UsuarioUsuarioRepository::update($usuario,$id);
    }

    public static function findAll()
    {
        return \SolaresCordial\Repository\UsuarioUsuarioRepository::findAll();
    }

    public static function deleteById($id)
    {
        \SolaresCordial\Repository\UsuarioUsuarioRepository::deleteById($id);
    }

    public static function findById($id)
    {
        return \SolaresCordial\Repository\UsuarioUsuarioRepository::findById($id);
    }
}