<?php
require_once(__DIR__ . "/../dao/UsuarioDAO.php");
require_once(__DIR__ . "/../service/LoginService.php");

class LoginController{
    private UsuarioDAO $usuarioDao;
    private LoginService $loginService;

    public function __construct(){
        $this->usuarioDao = new UsuarioDAO();
        $this->loginService = new LoginService();
    }

    public function logar(?string $login, ?string $senha){
        //Validação
        $erros = $this->loginService->validar($login, $senha);

        //Logar
        if(empty($erros)) { 
            $usuario = $this->usuarioDao->findByLoginSenha($login, $senha);
       
            if($usuario) {
                //Armazenar na sessão
                $this->loginService->salvarUsuarioSessao($usuario);
            
            } else {
                array_push($erros, "Login ou senha inválidos!");
            }
        } 

        return $erros;

    }

    
}

?>