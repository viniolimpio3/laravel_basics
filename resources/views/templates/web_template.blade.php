<?php
    // $config = get_config_site();
    // $menus = get_menus();

    // $banners = get_banners_site();

    // // /* todos os configs */
    // // dd($config);

    // // /* exemplo uso */
    // // dd(get_banners_site('contato_fix_banner'));
    // // /* verifica se o banner existe. retorna null caso não exista */
    // // echo img_url('banners/' . get_banners_site('contato_fix_banner'));

    // // [2] -> hasMobile -> assets/img/banners/mobile/$file_name
    // $description = (isset($meta_description)) ?  $meta_description : $config->site_title;    
    // $image_src = (isset($image_src)) ? $image_src : img_url('favicon_192x192.png');  
    
    // $css_v = '1.7';
    // $js_v = '1.0';    
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <base href="<?= base_url(); ?>" />
        <meta charset="utf-8">
        <title><?=($title) ?> | <?=$config->site_title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php if (isset($meta_keywords)): ?>
        <meta name="keywords" content="<?=$meta_keywords?>">
        <?php endif?>
        <meta property="og:site_name" content="<?=$config->site_title?>">
        <meta name="description" content="<?=$description?>">
        <meta name="author" content="Bernan Ribeiro">

        <link rel="image_src" href="<?=$image_src?>">             
        
        <!-- bootstrap 4 -->
        <link rel="stylesheet" href="<?=base_url('assets/css')?>/bootstrap.min.css">
        <!-- fontes -->
        <link href="assets/fonts/museo/stylesheet.css" rel="stylesheet">

        <!-- upload files -->
        <link href="assets/lib/upload/css/jquery.filer.css" rel="stylesheet">
        <link href="assets/lib/upload/css/jquery.filer-dragdropbox-theme.css" rel="stylesheet">
        <!-- upload files -->
        

        <!-- carousel -->   
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/lib/owl-carousel/docs/assets/owlcarousel/assets/') ?>owl.carousel.min.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/lib/owl-carousel/docs/assets/owlcarousel/assets/') ?>owl.theme.default.min.css">
        <script src="assets/js/jquery.min.js"></script>


        <!-- lightbox -->
        <link rel="stylesheet" href="<?=base_url('assets/lib/lightbox/css/lightbox.min.css')?>">

        <!-- My Styles -->
        <link href="<?=base_url('assets/css')?>/main.css?v=<?=$css_v?>" rel="stylesheet">
        <!-- carrega css da página - dinâmico -->
        <link rel="stylesheet" href="<?= base_url('assets/css/web/') . $pathCss ?>?v=<?=$css_v?>">

        <!-- Fav and touch icons -->
        <link rel="icon" href="<?=img_url('favicon_32x32.png')?>" sizes="32x32">
        <link rel="icon" href="<?=img_url('favicon_192x192.png')?>" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="<?=img_url('favicon_180x180.png')?>">

    

        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-639857864"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-639857864');
        </script>
            <!-- Event snippet for Visita no site conversion page -->
        <script>
            gtag('event', 'conversion', {'send_to': 'AW-639857864/JKxNCILMm9kBEMjpjbEC'});
        </script>
    </head>

    <body style="padding:0;">    
        <div class="gradient"></div>
        <div class="container">
            <header class="row header-top">
                <div class="header-top-col col-md-12 col-lg-3 d-none d-lg-block d-xl-block">                     
                    <p><img class="header-top-icon" src="<?=base_url('assets/img')?>/icons/top_phone_ico.png" > <?=$config->contact_phone_top?></p>
                </div>
                <div class="header-top-col col-md-12 col-lg-2 d-none d-lg-block d-xl-block">                    
                    <p><img class="header-top-icon" src="<?=base_url('assets/img')?>/icons/top_mail_ico.png"><?=$config->contact_email_top?></p>
                </div>
                <div class="header-top-col col-md-12 col-lg-7 d-none d-lg-block d-xl-block">                    
                    <p><img class="header-top-icon" src="<?=base_url('assets/img')?>/icons/top_marker_ico.png"> <?=$config->andress_company?></p>
                </div>
            </header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <?php $this->load->view('web/_navbar', [ 'menus'=> $menus, 'config'=> $config ]) ?> 
            </nav>
            

            <div class="container-fluid">
                <div class="row">
               
                    <!-- Carregando Conteúdo!!! -->
                    <main>                   
                        <?php $this->load->view($page) ?>
                    </main>
                </div><!--/row-->
            </div><!--/.fluid-container-->

        </div>                                  
           
        <footer class="footer">
        

        <?php $this->load->view('web/_footer', [ 'config'=> $config ]) ?>            
        </footer>

        <input type="hidden" id="base_url" value="<?=base_url()?>" />
    
        <script src="<?=base_url('assets/js')?>/jquery.min.js"></script>

        <script src="<?=base_url('assets/js/')?>/popper.min.js"></script>
        <script src="<?=base_url('assets/js/')?>/bootstrap.min.js"></script>

        <script src="<?=base_url('assets/lib')?>/upload/js/jquery.filer.min.js"></script>
        <script src="<?=base_url('assets/lib')?>/upload/js/custom.js"></script>

        <script src="<?=base_url('assets/lib')?>/jquery.mask.min.js"></script>
        
        <script src="<?=base_url('assets/js')?>/main.js?<?=$js_v?>"></script>
                                                        

        <script src="<?=base_url('assets/lib/lightbox/js/lightbox.min.js')?>"></script>
        
        <!-- CAROUSEL JS -->
        <!-- <script type="text/javascript" src="< ?= base_url('assets/lib/owl-carousel/docs/assets/vendors/')?>jquery.min.js"></script> -->
        <script type="text/javascript" src="<?= base_url('assets/lib/owl-carousel/docs/assets/owlcarousel/')?>owl.carousel.min.js"></script>
        
     
        <?php 
            // if($ckeditor) init_editorhtml();
        ?>
        
    </body>
</html>

