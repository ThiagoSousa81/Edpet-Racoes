<?php

class database{

  public function GetLinkMySQLI()

  {

    $usuario = 'xxxxxx';

    $senha = 'xxxxxxxx';

    $database = 'xxxxxxxxxxx';

    $host = 'xxxxxxxxxxx';



    $mysqli = new mysqli($host, $usuario, $senha, $database);

    return $mysqli;

  }



  private $conn;



  public function __construct() {

    $this->connect();

  }



  // Estabelece uma conexão com o banco de dados

  private function connect() {

    $usuario = 'xxxxxxx';

    $senha = 'xxxxxxxxx';

    $database = 'xxxxxxxxxxxxx';

    $host = 'xxxxxxxxxxxxx';



    $mysqli = new mysqli($host, $usuario, $senha, $database);



    if ($mysqli->connect_error) {

      die("Falha na conexão: " . $mysqli->connect_error);

    }



    $this->conn = $mysqli;

  }



  // Insere um novo usuário no banco de dados

  public function insertUser($nome, $cpf, $email, $senha, $telefone, $whatsapp, $rua, $numero_casa, $bairro, $cidade) {

    try{



      $stmt = $this->conn->prepare("INSERT INTO CLIENTES (ID_CLIENTE, NOME_CLIENTE, CPF_CLIENTE, EMAIL_CLIENTE, HASH_CLIENTE, TELEFONE_CLIENTE, WHATSAPP_CLIENTE, RUA_CLIENTE, N_CASA_CLIENTE, BAIRRO_CLIENTE, CIDADE_CLIENTE) VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");



      $stmt->bind_param("ssssssssss", $nome, $cpf, $email, $senha, $telefone, $whatsapp, $rua, $numero_casa, $bairro, $cidade);

      if ($stmt->execute()) {

        return true;

      } else {

        return false;

      }

    } catch (Exception $e) {

      throw new Exception("Erro ao inserir usuário: " . $e->getMessage());

    }





  }







}





?>
