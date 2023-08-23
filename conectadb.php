<?php
  ## ARQUIVO DE ACESSO AO BANCO DE DADOS ##
    ## ALERTA EM MODO PROFISSIONAL ARQUIVO DEVE-SE MANTER OCULTO E PROTEGIDO ##

    ## LOCALIZA O PC OU SERVIDOR COM O BANCO (NOME DO COMPUTADOR)
    $servidor = "localhost:3306";
    ## NOME DO BANCO
    $banco = "Magicatsite";
    ##USUARIO DE ACESSO
    $usuario = "admin";
    ##SENHA DO USUARIO
    $senha = "123";

    #LINK DE CONEXÃO
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);

?>