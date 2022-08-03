<?php 

// Include da conexão com o banco de dados
Include 'conexao.php';


try{
    // exibe as variaveis globais recebidas via POST
   // echo"<pre>";
    // var_dump($_POST);
   //  echo"</pre>";

   // Variaveis que recebem os dados enviados
    $titulo = $_POST['titulo'];
    $local =  $_POST['local'];
    $valor =  $_POST['valor'];
    $desc =  $_POST['desc'];

    // variavel que recebe a query SQL que será executada no BD
    $sql = "INSERT INTO 
                tb_viagens
            (
                `titulo`,
                `local`,
                `valor`,
                `desc`
            )
            VALUES
            (
                '$titulo',
                '$local',
                '$valor',
                '$desc'
            )
                ";
            
            // prepara a ececuçaõ da query SQL acima
            $comando = $con->prepare($sql);

            // executa o comando com a query no banco de dados
            $comando ->execute();

            // exibe msg de sucesso ao inserir
            echo "Cadastro realizado com sucesso";
     
}catch(PDOException $erro){

}

// Final da conexão


?>