<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php 
    /*retorna a url do servidor*/
    function UrlAtual(){
        $dominio = $_SERVER['HTTP_HOST'];
        $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $url;
    }

    /*compara url*/
    $string_url = UrlAtual();
    $find_url = strstr($string_url, 'localhost');
    if($find_url == true){
        $local = 'http://localhost/wiki/';
    }
    else{
        $local = 'https://wiki.cremilton.com/';
    }

    /*define os assets conforme a url*/
    if(UrlAtual() == $local){
        $css = 'assets/css/style.min.css';
        $js = 'assets/js/app.min.js';
        $favicon = 'assets/img/favicon.png';
        $img = 'assets/img/logo.png';
        $title = 'Wiki Lab';
        $homeclass = ' home';
    } else{
        $css = '../assets/css/style.min.css';
        $js = '../assets/js/app.min.js';
        $favicon = '../assets/img/favicon.png';
        $img = '../assets/img/logo.png';
        
        /*define o title de acordo com a url*/
        $clonagem = $local . 'clonagem/';
        $suporte = $local . 'suporte/';
        $ubuntu = $local . 'ubuntu/';
        $windows = $local . 'windows/';
        $gpo = $local . 'gpo/';
        $bat = $local . 'bat/';
        $doc = $local . 'doc/';

        if (UrlAtual() == $clonagem) {
            $title = 'Clonagem - LAB';
        }
        elseif (UrlAtual() == $suporte) {
            $title = 'Suporte - LAB';
        }
        elseif(UrlAtual() == $ubuntu) {
            $title = 'Ubuntu - LAB';
        }
        elseif(UrlAtual() == $windows) {
            $title = 'Windows - LAB';
        }
        elseif(UrlAtual() == $gpo) {
            $title = 'GPO - LAB';
        }
        elseif(UrlAtual() == $bat) {
            $title = 'BAT-Shell - LAB';
        }
        else{
            $title = 'Documentação - LAB';
        }
    }
?>
    <title><?php echo $title; ?></title>
    <link rel="author" href="https://cremilton.com/">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $css; ?>">    
    <link rel="shortcut icon" type="image/png" href="<?php echo $favicon; ?>"/>

    <!-- Prism -->
    <link rel="stylesheet" href="../prism/prism.css">

    <!--Open Graph Protocol-->
    <!--Facebook-->
    <meta property="fb:app_id" content="261341871382612"/> 
    <meta property="og:title" content="Wiki - Laboratórios de Informática"/>
    <meta property="og:description" content="Essa página serve como um guia de consulta rápida, fornecendo apoio no trabalho de cuidar dos Laboratórios de Informática."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://wiki.cremilton.com"/>
    <meta property="og:site_name" content="Wiki Lab"/>
    <meta property="og:image" content="https://cremilton.com/tema/cgf.png"/>
    <meta property="og:image:width" content="570">
    <meta property="og:image:height" content="380">
    <!--Twitter-->
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:url" content="https://wiki.cremilton.com/"/>
    <meta name="twitter:title" content="Wiki - Laboratórios de Informática"/>
    <meta name="twitter:description" content="Essa página serve como um guia de consulta rápida, fornecendo apoio no trabalho de cuidar dos Laboratórios de Informática."/>
    <meta name="twitter:image:src" content="https://wiki.cremilton.com/assets/img/logo.png"/>
    <!--Open Graph Protocol-->
    
    <!--Google Search Console verification-->
    <meta name="google-site-verification" content="UBWJFgFYcLOgToFsoGIDjqg3aC6CHsqbr9Txf2Dx1Fs" />

    <!--Pinterest verification-->
    <meta name="p:domain_verify" content="29e2539fc7db454a8b5db4e041830f17"/>

</head>
<body id="topo" class="wrapper<?php echo $homeclass;?>">
    <header>
        <div class="intro">
            <a class="logo" href="<?php echo $local; ?>"><img src="<?php echo $img; ?>" alt="Cremilton Logo"></a>
            <ul class="menu">
                <li><a href="<?php echo $local; ?>">Home</a></li>
                <li><a href="https://cremilton.com/">Contato</a></li>
            </ul>
        </div>
    </header>