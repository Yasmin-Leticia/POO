<?php
require "livro.php";
require "usuario.php";
require "biblioteca.php";

use Livro as livro;
use Usuario as Uuuario;

$usuario = new Usuario('yas', '123');
Biblioteca::createUsuario($usuario);
?>