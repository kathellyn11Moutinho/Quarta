<?php

/*

get,exibo dados em tela
post, cadrastro dados
put, altero dados
delete, deleto dados

*/
 if(isset($_POST['submit'])){
    include_once('config.php');


    $email= $_POST['email'];
    $nome= $_POST['nome'];
    $telefone= $_POST['telefone'];
    $endereco= $_POST['endereco'];

    $resultado = mysqli_query($conexao,"INSERT INTO 
    usuarios(email,nome,telfone,endereco) values
    ('$email','$nome','$telefone','$endereco')");
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content= "IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>cadrastro de usuários</title>
        <?php
    <?php

    if (isset( $ _POST [ 'enviar' ]))
    {
    
    include_once ( 'config.php' );
    
    $ nome = $ _POST [ 'nome' ];
    $ email = $ _POST [ 'email' ];
    $ data_nasc = $ _POST [ 'data_nasc' ];
    $ genero = $ _POST [ 'genero' ];
    $ cpf = $ _POST [ 'cpf' ];
    
    $ resultado = mysqli_query( $ conexao , " INSERT INTO users(nome,email,data_nasc,genero,cpf) values(' $ nome ',' $ email ',' $ data_nasc ',' $ genero ', ' $ cpf ') ");
    
    }
    
    ?>
    
    <!DOCTYPEhtml >
    < html lang =" en " >
    < head >
        < meta  charset =" UTF-8 " >
        < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
        < meta  name =" janela de visualização " conteúdo =" largura=largura do dispositivo, escala inicial=1,0 " >
        < title > Aula 2 </ title >
        < estilo >
            . caixa {
                position: absolute; 
                higher :  50 % ;
                left :  50 % ;
                to transform :  traduzir ( -50 % ,  -50 % );
                background color : green;
            }
    
            . campo {
                edge :  1 px sólido #fff ; _
                preenchimento :  30 px ;
                itens de alinhamento : centro;
                margin :  20 px ;
                exibição : em linha;
                raio da borda :  36 px  35 px  35 px  10 px ;
                -webkit-border-radius :  36 px  35 px  35 px  10 px ;
                -moz-border-radius :  36 px  35 px  35 px  10 px ;
            }
            . legenda {
                cor :  #fff ; _
                alinhamento de texto : centro;
                exibição : flexível;
            }
            . cadastre-se {
                alinhamento de texto : centro;
                justificar-conteúdo : centro;
                itens de alinhamento : centro;
                margem :  0 ;
                exibição : flexível;
            }
    
            . inputUser {
                raio da borda :  10 px ;
                ;
            }
    
            . texto de entrada {
                cor :  #fff ; _
            }
    
            . botão enviar {
                justificar-conteúdo : centro;
                raio da borda :  15 px ;
                exibição : flexível;
                preenchimento :  5 px ;
            }
        </ estilo >
    </head >
    < corpo >
        < form  action =" index.php " method =" POST " >
            < div  class =" caixa " >
            < classe do conjunto de campos  =" campo " >
                < legend  class =" legend " > Banco Niterói < legend />
                    < label  class =" cadastrar " > Cadastre-se < label />
                        < br >
                            < label  for =" nome " class =" inputtext " > Nome Completo < label />
                                < br >
                                < input  type =" text "   name =" nome " id =" nome " class =" inputUser " obrigatório />  
                                < br >
                                < br >
                            < label  for =" email " class =" inputtext " > email <label />
                                < br >
                                < input  type =" text "   name =" email " id =" email " class =" inputUser " obrigatório/ >  
                                < br >
                                < br >
                            < label  for =" data_nasc " class =" inputtext " > Data de Nascimento < label />
                                < br >    
                            < input  type =" date "   name =" data_nasc " id =" data_nasc " class =" inputUser " obrigatório />
                                < br >
                                
                            < p  class =" inputtext " > Gênero < p >
                                < input  type =" radio " id =" masculino "   name =" genero "   value =" masculino " obrigatório />
                                < label  for =" masculino " > masculino < label />
                                < br >
                                < input  type =" radio " id =" feminino "   name =" genero "   value =" feminino " obrigatório />
                                < label  for =" feminino " > feminino < label />
                                < br >
                                < input  type =" radio " id =" naores "   name =" genero "   value =" naores " obrigatório />
                                < label  for =" feminino " > prefiro nao responder < label />
                                < br >
                                < br >
                            < label  for =" cpf " class =" inputtext " > CPF < label />
                            < br >
                                < input  type =" text "   name =" cpf " id =" cpf " class =" inputUser " obrigatório />
                                < br >
                                < br >
                                < input  type =" submit " name =" submit " id =" submit " class =" submit-button "/>
                
            </ conjunto de campos >
            </ div >
        </ forma >
    
    </ corpo >
    </ html >

    <?php
    /*
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbSenha = '';
    $dbName = 'aula02form';
    */
    $ conexao = new mysqli( 'localhost:3307' , 'root' , 'root' , 'aula02form' );

    if ( $ conexao -> connect_errno )
    {
        echo " Erro em alguma parada ";
    }
    outro
    {
        echo " Conexão rodando redondinha ";
    }

?>

<!DOCTYPEhtml >
< html  lang =" en " >
< head >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" janela de visualização " conteúdo =" largura=largura do dispositivo, escala inicial=1,0 " >
    < título > Documento </ título >
</ head >
< corpo >
    < entrada
</ corpo >
</ html >