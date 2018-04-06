<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 010</title>
        </head>
    <body>
        <!-- Escreva um algoritmo para que solicite o salário e o valor da prestação de um
empréstimo pretendido. Seu programa deve exibir uma mensagem se baseando
na seguinte estrutura:
a. Se a prestação for maior que 20% do salário: “Empréstimo não pode ser
concedido”.
b. Se a prestação for igual a 20% do salário: “Empréstimo em analise”
c. Se a prestação for menor que 20% do salário: “Empréstimo pode ser
concedido”. -->
        <div class="container">
            <div class="row">
                <form method="POST" name="Ex010" action="#">
                <legend>Análise para Empréstimo</legend>
                <fieldset>
                    <div>
                        <label for="id_salario">Informe o Salário</label>
                        <input type="number" id="id_salario" name="salario">
                    </div>
                    <div>
                        <label for="id_prestacao">Informe o valor da Prestação do Empréstimo</label>
                        <input type="number" id="id_prestacao" name="prestacao">
                    </div>
                </fieldset>
                <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="row">
                <h3>Situação da Análise</h3>
                
                <?php
                    if(isset($_POST['salario']))
                    {
                    $salario = $_POST['salario'];
                    $prestacao = $_POST['prestacao'];

                    if($prestacao > ($salario*20)/100)
                    {
                        echo("Empréstimo não pode ser concedido");
                    }
                    elseif($prestacao == ($salario*20)/100)
                    {
                        echo("Empréstimo em análise");
                    }
                    else
                    {
                        echo("Empréstimo pode ser concedido");
                    }
                    }
                ?>
            </div>    
        </div>
    </body>
</html>
