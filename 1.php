<!DOCTYPE html>
<!--
Desenvolva um programa para efetuar a leitura de um valor inteiro positivo ou negativo e apresentar
o número lido como sendo um valor positivo, ou seja, o programa deverá apresentar o módulo de um número
fornecido
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 1</title>
       </head>
    <body>
        <div class="container">
            <div>
                <form action="#" method="get">
                    <fieldset>
                        <legend>Módulo do Número</legend>
                        <label for="id_numero">Número</label>
                        <input type="number" id="id_numero" name="numero" placeholder="Informe um número positivo ou negativo">
                    </fieldset>
                <input type="submit" value="Enviar">
            </form>
            </div>
            <div>
                <h3>Resultado:</h3>
                <?php
                    if(isset($_GET['numero']));{
                       $num = $_GET['numero'];
                       if($num > -1);
                       {
                            echo($num);
                       }else
                       
                       {
                            $num = $num * (-1);
                            echo($num);
                       }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
