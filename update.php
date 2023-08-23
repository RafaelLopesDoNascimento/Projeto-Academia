<?php 
// Incluindo o Header 
include_once("./templates/header.php");

// If else para ver se os inputs estão vazios
  if ( isset($_POST["treinoPeito"] ) && isset($_POST["treinoBraco"])  && isset($_POST["treinoCardio"])  && isset($_POST["treinoAbdomen"])  && isset($_POST["treinoCostas"])  && isset($_POST["treinoPerna"]) ) {
    $treinoPeito = $_POST["treinoPeito"];
    $treinoBraco = $_POST["treinoBraco"];
    $treinoCardio = $_POST["treinoCardio"];
    $treinoAbdomen = $_POST["treinoAbdomen"];
    $treinoCostas = $_POST["treinoCostas"];
    $treinoPerna = $_POST["treinoPerna"];

    $treinoPeitoDescricao = $_POST["treinoPeitoDescricao"];
    $treinoBracoDescricao = $_POST["treinoBracoDescricao"];
    $treinoCardioDescricao= $_POST["treinoCardioDescricao"];
    $treinoAbdomenDescricao = $_POST["treinoAbdomenDescricao"];
    $treinoCostasDescricao = $_POST["treinoCostasDescricao"];
    $treinoPernaDescricao = $_POST["treinoPernaDescricao"];
  } else {
    echo "inputs vazios <br>";
  }
// If else para ver se os inputs estão vazios

$alunoId = $_GET["id"];
// Comandos SQL para atualizar o treino do aluno
$queryUpdatePeito = "UPDATE aluno SET treinoPeito = :treinoPeito WHERE id = :id";
$queryUpdateBraco = "UPDATE aluno SET treinoBraco = :treinoBraco WHERE id = :id";
$queryUpdateCardio = "UPDATE aluno SET treinoCardio = :treinoCardio WHERE id = :id";
$queryUpdateAbdomen = "UPDATE aluno SET treinoAbdomen = :treinoAbdomen WHERE id = :id";
$queryUpdateCostas = "UPDATE aluno SET treinoCostas = :treinoCostas WHERE id = :id";
$queryUpdatePerna = "UPDATE aluno SET treinoPerna = :treinoPerna WHERE id = :id";

$queryUpdatePeitoDescricao = "UPDATE aluno SET treinoPeitoDescricao = :treinoPeitoDescricao WHERE id = :id";
$queryUpdateBracoDescricao = "UPDATE aluno SET treinoBracoDescricao = :treinoBracoDescricao WHERE id = :id";
$queryUpdateCardioDescricao = "UPDATE aluno SET treinoCardioDescricao = :treinoCardioDescricao WHERE id = :id";
$queryUpdateAbdomenDescricao = "UPDATE aluno SET treinoAbdomenDescricao = :treinoAbdomenDescricao WHERE id = :id";
$queryUpdateCostasDescricao = "UPDATE aluno SET treinoCostasDescricao = :treinoCostasDescricao WHERE id = :id";
$queryUpdatePernaDescricao = "UPDATE aluno SET treinoPernaDescricao = :treinoPernaDescricao WHERE id = :id";
// Comandos SQL para atualizar o treino do aluno

// Passando os parametros para cada comando SQL
$stmt1 = $conn->prepare($queryUpdatePeito);
$stmt1->bindParam(":treinoPeito", $treinoPeito);
$stmt1 ->bindParam(":id", $alunoId);

$stmt2 = $conn->prepare($queryUpdateBraco);
$stmt2->bindParam(":treinoBraco", $treinoBraco);
$stmt2 ->bindParam(":id", $alunoId);

$stmt3 = $conn->prepare($queryUpdateCardio);
$stmt3->bindParam(":treinoCardio", $treinoCardio);
$stmt3 ->bindParam(":id", $alunoId);

$stmt4 = $conn->prepare($queryUpdateAbdomen);
$stmt4->bindParam(":treinoAbdomen", $treinoAbdomen);
$stmt4 ->bindParam(":id", $alunoId);

$stmt5 = $conn->prepare($queryUpdateCostas);
$stmt5->bindParam(":treinoCostas", $treinoCostas);
$stmt5 ->bindParam(":id", $alunoId);

$stmt6 = $conn->prepare($queryUpdatePerna);
$stmt6->bindParam(":treinoPerna", $treinoPerna);
$stmt6 ->bindParam(":id", $alunoId);

$stmt7 = $conn->prepare($queryUpdatePeitoDescricao);
$stmt7->bindParam(":treinoPeitoDescricao", $treinoPeitoDescricao);
$stmt7 ->bindParam(":id", $alunoId);

$stmt8 = $conn->prepare($queryUpdateBracoDescricao);
$stmt8->bindParam(":treinoBracoDescricao", $treinoBracoDescricao);
$stmt8 ->bindParam(":id", $alunoId);

$stmt9 = $conn->prepare($queryUpdateCardioDescricao);
$stmt9->bindParam(":treinoCardioDescricao", $treinoCardioDescricao);
$stmt9 ->bindParam(":id", $alunoId);

$stmt10 = $conn->prepare($queryUpdateAbdomenDescricao);
$stmt10->bindParam(":treinoAbdomenDescricao", $treinoAbdomenDescricao);
$stmt10 ->bindParam(":id", $alunoId);

$stmt11 = $conn->prepare($queryUpdateCostasDescricao);
$stmt11->bindParam(":treinoCostasDescricao", $treinoCostasDescricao);
$stmt11 ->bindParam(":id", $alunoId);

$stmt12 = $conn->prepare($queryUpdatePernaDescricao);
$stmt12->bindParam(":treinoPernaDescricao", $treinoPernaDescricao);
$stmt12 ->bindParam(":id", $alunoId);

// Passando os parametros para cada comando SQL

// Iniciando a variavel confirm
$confirm = false;
if ( isset($_POST["treinoPeito"] ) && isset($_POST["treinoBraco"])  && isset($_POST["treinoCardio"])  && isset($_POST["treinoAbdomen"])  && isset($_POST["treinoCostas"])  && isset($_POST["treinoPerna"]) ) {
  // Try catch para tentar executar os $stmts
  try {
    $stmt1->execute();
    $stmt2->execute();
    $stmt3->execute();
    $stmt4->execute();
    $stmt5->execute();
    $stmt6->execute();
    $stmt7->execute();
    $stmt8->execute();
    $stmt9->execute();
    $stmt10->execute();
    $stmt11->execute();
    $stmt12->execute();
    $confirm = true;
    
    } catch (PDOException $e) {
    echo $e . "<h1> Um erro ocorreu</h1>";
    $confirm = false;
    }

} else {
  echo "<h2>Um erro acorreu ao obter os dados</h2>";
}


?>
<div class=" home-container show-aluno img-bg update">
  <div class="sections">
    <!-- If else para mostrar uma mensagem se a atualização foi um sucesso ou não -->
    <?php if ($confirm == true) :?>
     <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
   <h1>O treino do Aluno(a) atualizado com sucesso!</h1>
     <button type="button" class="btn btn-light">
    <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
  </button>
   <?php else :?>
    <h1>Um erro ocorreu</h1>
      <button type="button" class="btn btn-light">
    <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
  </button>
    <?php endif; ?>
  </div>
</div>



<?php 
// Incluindo o Footer

include_once("./templates/footer.php");

?>