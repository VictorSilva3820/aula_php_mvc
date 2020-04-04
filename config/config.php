<?php 
    #Arquivos diretorios raizes

    $PastaInterna="aula_php_mvc/";
    define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");   
    
    if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){
        define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
    }else{
        define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
    }

    #Diretórios especificos
    define('DIRADMIN', DIRPAGE."{$PastaInterna}public/admin/");
    define('DIRAUDIO', DIRPAGE."{$PastaInterna}public/audio/");
    define('DIRCSS', DIRPAGE."{$PastaInterna}public/css/");
    define('DIRDESIGN', DIRPAGE."{$PastaInterna}public/design/");
    define('DIRIMG', DIRPAGE."{$PastaInterna}public/img/");
    define('DIRJS', DIRPAGE."{$PastaInterna}public/js/");
    define('DIRVIDEO', DIRPAGE."{$PastaInterna}public/video/");

    #Acesso ao DB
    define('HOST', "localhost");
    define('DB', "nomedb");
    define('USER', "nomeUser");
    define('PASS', "senhaUser");
?>