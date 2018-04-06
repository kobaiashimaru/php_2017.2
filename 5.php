<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Exercício 02 / Exercicio 05</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!-- Escreva um programa para que leia um número e verifique se ele se encontra no
intervalo entre 5 e 20. -->
        <div class="container">
            <div class="row">
                <form method="POST" name="Ex05" action="#">
                <legend>Está no intervalo de 5 a 20?</legend>
                <fieldset>
                    <label for="id_inteiro">Digite um número Inteiro</label>
                    <input type="number" id="id_inteiro" name="id_inteiro">
                </fieldset>
                <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="row">
                <?php
                if(isset($_POST['id_inteiro'])){
                $inteiro = $_POST['id_inteiro'];
                
                if($inteiro < 5 || $inteiro > 20){
                    echo("O número está fora do intervalo");
                    }else{
                    echo("O número está no intervalo");             
                }
                }
                
                
                ?>
            </div>    
        </div>
    </body>
</html>