<?php 
// Incluindo o Header 
include_once("./templates/header.php");
include_once("./helpers/connection.php");



$nome = $_POST["nome"];
$senha = $_POST["senha"];
$confirmSenha = $_POST["senhaConfirmar"];
$idade = $_POST["idade"];
$descricao = $_POST["descricao"];
$cpf = $_POST["cpf"];

class NewAluno {
  // propriedades
  public $nome;
  public $senha;
  public $confirmSenha;
  public $idade;
  public $descricao;
  public $cpf;

// Construtor para criar um aluno
  public function __construct($nome, $senha, $idade, $descricao, $cpf, $confirmSenha) {
    $this->nome = $nome;
    $this->senha = $senha;
    $this->idade = $idade;
    $this->descricao = $descricao;
    $this->cpf = $cpf;
    $this->confirmSenha = $confirmSenha;
  }
// Metodos
  public function Insert() {
// Chamando a variavel de conexão($conn) para usar no metodo Insert
    global $conn;
    // Comando SQL
    $insert = "INSERT INTO aluno (name, idade, descricao, senha, cpf) VALUES (:nome, :idade, :descricao, :senha, :cpf)";
    $stmtInsert = $conn->prepare($insert);
    
    $stmtInsert->bindParam(":nome", $this->nome);
    $stmtInsert->bindParam(":idade", $this->idade);
    $stmtInsert->bindParam(":descricao", $this->descricao);
    $stmtInsert->bindParam(":senha", $this->senha);
    $stmtInsert->bindParam(":cpf", $this->cpf);
  
    $queryAll = "SELECT * FROM aluno";
    
    $stmt = $conn->prepare($queryAll);
    $stmt->execute();
    $allDados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Primeira etapa de verificação, para ver se a senha e senha de confimação estão iguais
if ($this->senha == $this->confirmSenha) {
  // Estrutura de repetição para ver se o CPF já está cadastrado no banco 
  for ($i=0; $i < count($allDados); $i++) { 
  // If else para ver se o CPF da vez ja esta cadastrado
   if ($this->cpf ==  $allDados[$i]["cpf"] ) {
  
   } else {
    try {
      $stmtInsert->execute();
      $_SESSION["msg"] = "cadastrado com sucesso";
      echo "<h1> Ola " . $this->nome .", agora você pode fazer o login na página inicial: </h1>";
      break;
    } catch (PDOException $e) {
    echo "<h1>Usuario já cadastrado</h1>";
    break;
    }
   }
  }
} else {
echo "<h1>Senhas incorretas</h1>";
}
// Fechando conexão com DB
    $conn = null;
  }
}

// Criando um novo aluno com a class NewAluno
$User = new NewAluno($nome, $senha, $idade, $descricao, $cpf, $confirmSenha);


?>
<div class="home-container img-bg alunoPost">
<div class="sections">
      <!-- Icone para retorna ao arquivo Index -->
<a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
  <?= $User->Insert();?>
  <button type="button" class="btn btn-light">
                <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
              </button>
  <button type="button" class="btn btn-light">
      <a href="<?= $Url_Local ?>/index.php" class="button-back">Home</a>
      </button>
  
  </div>
</div>
<?php 
// Incluindo o Footer

include_once("./templates/footer.php");

?>