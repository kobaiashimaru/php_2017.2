<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 08</title>
        </head>
    <body>
        <!-- Um ano é bissexto se for divisível por 4 e não for divisível por 100. Também são
bissextos os divisíveis por 400. Desenvolva um programa para determinar se um
ano informado é bissexto. -->
        <div class="container">
            <div class="row">
                <form method="POST" name="Ex08" action="#">
                <legend>Ano Bissexto</legend>
                <fieldset>
                    <label for="id_ano">Informe o Ano</label>
                    <input type="number" id="id_ano" name="ano">
                </fieldset>
                <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="row">
                <?php
                if(isset($_POST['ano']))
                {
                $ano = $_POST['ano'];
                if($ano%4 == 0 && $ano%100 != 0)
                {
                    echo("O ano informado, $ano, é Bissexto");
                }
                else
                {
                    echo("O ano informado, $ano, não é Bissexto");
                }
                }
                ?>
            </div>    
        </div>
    </body>
</html>
