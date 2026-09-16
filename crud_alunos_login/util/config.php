<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "localhost");
define("DB_NAME", "db_alunos_login");
define("DB_USER", "root");
define("DB_PASSWORD", "bancodedados");

//Configuração do ambiente
define("AMB_DEV", true);

//Configuração de acesso
define("BASE_URL", "/vj/crud_alunos_login");

//Configurações de sessão
define("SESSAO_USUARIO_ID", "sessaoUsuId");
define("SESSAO_USUARIO_NOME", "sessaoUsuNome");