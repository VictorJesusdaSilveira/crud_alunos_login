<?php
require_once(__DIR__ . "/../dao/UsuarioDAO.php");


class LoginService{
    public function validar(?string $login, ?string $senha): array{
        $erros = [];

        if(! $login)
            array_push($erros, "Informe o login!");

        if(! $senha)
            array_push($erros, "Informe a senha!");

        return $erros;
    }
}



?>