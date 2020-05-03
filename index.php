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
        <h1>testandogit</h1>
        <header class="painel-admin">
            <div class="img-perfil"><img src="./images/foto.png"></div>
            <form method="POST">
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
                    <input type="submit" name="send" value="Enviar"/>
                </div>
            </form>
        </header>


    </section>


    <script
        src="https://code.jquery.com/jquery-3.5.0.js" 
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" 
        crossorigin="anonymous">
    </script>

    <script>

    </script>

</body>
</html>

<?php
    // Limpar a sessão
    session_destroy();
?>