<?php
global $pdo;
global $URL;
/**
 * CHAMANDO A CONEXÃO COM O BANCO DE DADOS.
 */
include('../app/config/config.php');
/***
 * #########################################################################################################
 *   ( CRUD ) - CREATE - ( CRIAR CADASTRO DENTRO DO BANCO DE DADOS ) - SALVAR DADOS NO BANCO DE DADOS
 * #########################################################################################################
 */
$nome             = $_POST['nome'];
$ap_paterno       = $_POST['ap_paterno'];
$ap_materno       = $_POST['ap_materno'];
$rg               = $_POST['rg'];
$cpf              = $_POST['cpf'];
$data_nasc        = $_POST['data_nasc'];
$genero           = $_POST['genero'];
$pais             = $_POST['pais'];
$celular          = $_POST['celular'];
$cep              = $_POST['cep'];
$foto_perfil      = $_POST['foto_perfil'];
$email            = $_POST['email'];
$senha            = $_POST['senha'];
$cargo            = $_POST['cargo'];
$data_criacao     = $_POST['data_criacao'];

$user_criador = "prwilliannascimento@hotmail.com";

date_default_timezone_set("America/Sao_Paulo");
$horaAtual = date('Y-m-d h:i:s');
$estado = '1';

$nome_foto_perfil = "Sisfarmacia -".date('Y-m-d-h-i-s');
$filename = $nome_foto_perfil."_". $_FILES['file']['name'];
$localdaImage = "update_usuarios/".$filename;

move_uploaded_file( $_FILES['file']['tmp_name'],$localdaImage);


$cadastro = $pdo->prepare("INSERT INTO tb_usuarios 
            ( nome, ap_paterno, ap_materno, rg, cpf, data_nasc, genero, pais, celular, cep, foto_perfil , email, senha, cargo, estado, user_criador, data_criacao)
            VALUES(:nome,:ap_paterno,:ap_materno,:rg,:cpf,:data_nasc,:genero,:pais,:celular,:cep,:foto_perfil,:email,:senha,:cargo,:estado,:user_criador,:data_criacao)");

$cadastro->bindParam(':nome',$nome);
$cadastro->bindParam(':ap_paterno',$ap_paterno);
$cadastro->bindParam(':ap_materno',$ap_materno);
$cadastro->bindParam(':rg',$rg);
$cadastro->bindParam(':cpf',$cpf);
$cadastro->bindParam(':data_nasc',$data_nasc);
$cadastro->bindParam(':genero',$genero);
$cadastro->bindParam(':pais',$pais);
$cadastro->bindParam(':celular',$celular);
$cadastro->bindParam(':cep',$cep);
$cadastro->bindParam(':foto_perfil',$filename);
$cadastro->bindParam(':email',$email);
$cadastro->bindParam(':senha',$senha);
$cadastro->bindParam(':cargo',$cargo);
$cadastro->bindParam(':user_criador',$user_criador);
$cadastro->bindParam(':data_criacao',$horaAtual);
$cadastro->bindParam(':estado',$estado);

if($cadastro->execute()){
    //echo "Usuário inserido no banco de dados, com sucesso!";
    header('Location: '.$URL.'/usuarios');
}else{
    echo "Erro ao tentar cadastrar o usuário no banco de dados";
}

/***
 * #########################################################################################################
*/
/***
 * #########################################################################################################
 *   ( CRUD ) - CREATE - ( CRIAR CADASTRO DENTRO DO BANCO DE DADOS ) - SALVAR DADOS NO BANCO DE DADOS
 * #########################################################################################################
 */






