<?php

namespace SolaresCordial\RepositoryInterface;

use SolaresCordial\Model\Usuario;

interface UsuarioRepositoryInterface
{
    public static function save(Usuario $usuario);

    public static function update(Usuario $usuario, $id);

    public static function delete($usuario);

    public static function findAll();

    public static function findById($id);

    public static function authentication(Usuario $usuario);
}