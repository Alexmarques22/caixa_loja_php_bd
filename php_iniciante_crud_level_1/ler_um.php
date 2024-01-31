<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Ler um Registro - Tutorial PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">

    <?php

if (isset($_GET['id'])) {
  
    $id = $_GET['id'];

  
    echo "ID do registro: $id";
} else {
    
    die("Erro: O parâmetro 'id' não foi encontrado na URL.");
}
include 'config/bancodedados.php';

try {
   

} 

catch (PDOException $exception) {
   
    die('Erro: ' . $exception->getMessage());
}
$query="SELECT id, nome, descricao, preco
FROM produtos WHERE id=?    
LIMIT 1;";

?>
        <div class="pageheader">
            <h1>Ler Produtos</h1>

        </div>
    </div>


<!-- jQuery (Necessário para os plugins JavaScript do Bootstrap.) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- JavaScript do Bootstrap mais recente, compilado e minimizado. -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>