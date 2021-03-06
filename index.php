<?php
    session_start();

    // Pegar direto do Banco de dados depois !
    $_SESSION["funcionario"] = ['Matheus', 'Roberto','Ferro'];

    if(isset($_POST['send'])){
        $selected = $_POST['opt'];
        

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Pagamento</title>
</head>
<body>
    <section class="container">
        <div class="box-icon-painel">
            <div class="icon-painel"></div>
        </div>
        <header class="painel-admin">
            <div class="img-perfil"><img src="" alt=""></div>
            <div class="menu-registrar-hora">
                    <h1>REGISTRAR HORA</h1>
                    <div class="iconmenu"></div>
                </div>
            <section class="container-registrar-hora">
                <form method="POST" class="formulario-hora">
                    <div class="box-form">
                        <legend>FUNCIONÁRIO:</legend>
                        <select name="opt">
                            <?php 
                                $getFuncionario = $_SESSION["funcionario"];
                                $totalFuncionario = count($getFuncionario);
                                for($i=0; $i<$totalFuncionario; $i++){
                                    echo "<option value=$getFuncionario[$i]>$getFuncionario[$i]</option>";
                                }                   
                            ?>
                        </select>
                    </div>

                    <div class="box-form">
                        <legend>ENTRADA: </legend>
                        <input type="time" name="entrada" required />
                    </div>

                    <div class="box-form">
                        <legend>SAÍDA:</legend>
                        <input type="time" name="saida" required />
                    </div>

                    <div class="box-form">
                        <input type="submit" name="send" value="Registrar"/>
                    </div>
                </form>
            </section>        
        </header>

        <section class="teste">
            <h1>PORTAL</h1>
        </section>
    </section>

    <script
        src="https://code.jquery.com/jquery-3.5.0.js" 
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" 
        crossorigin="anonymous">
    </script>

    <script>
        let painel = $('.painel-admin').hide(0);
        let containerRegistroHora = $('.container-registrar-hora').slideUp(0);
        let menuRegistrarHora = $('.menu-registrar-hora');
        let iconePainel = $('.icon-painel');
        let iconeMenu = $('.iconmenu');
        $(document).ready(function(){
            $('.box-icon-painel').click(function(){
                $('.teste').toggleClass('active');
                iconePainel.toggleClass('active');
                painel = $('.painel-admin').toggle(0);
                if(iconePainel.hasClass('active')){
                    $('.box-icon-painel').animate({
                        "left":"30%"
                    },200)
                }else{
                    $('.box-icon-painel').animate({
                        "left":"0"
                    },200)
                }
            })

            menuRegistrarHora.click(function(){      
                iconeMenu.toggleClass('active');
                menuRegistrarHora.toggleClass('active');
                containerRegistroHora.slideToggle(200);
            })
        })



            /*

                switch(opt){
                    case 0:
                        $('.menu-registrar-hora').removeClass('active');
                        $('.container-registrar-hora').slideToggle(200);            
                        $('.iconmenu').css({
                            "transform":"rotate(180deg)"
                        })
                        opt=1;
                        break;
                    case 1:
                        $('.menu-registrar-hora').toggleClass('active');
                        $('.container-registrar-hora').slideToggle(200);            
                        $('.iconmenu').css({
                            "transform":"rotate(0deg)" 
                        })


                        opt=0;
                        break;
                }

            */
    </script>

</body>
</html>

