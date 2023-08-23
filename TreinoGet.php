<?php 
// Incluindo o Header 

include_once("./templates/header.php");




$nomeGet = $_GET["nome"];
$senhaGet = $_GET["senha"];
$senhaConfirmGet = $_GET["senhaConfirm"];
$cpfGet = $_GET["cpf"];

// Iniciando as variaveis do If else, como false
$nameTable = false;
$senhaTable = false;
$cpfTable = false;


// Comando SQL
$lookingFor = "SELECT * FROM aluno ";
    
// Try catch para o comando SQL
$stmt = $conn ->prepare($lookingFor);
try {
  $stmt->execute();
} catch (PDOException $e) {
  $error = $e->getMessage();
  echo "<h1>Error:</h1> " . $error;
}
// Transformando em um Array associativo
$dado = $stmt->fetchAll(PDO::FETCH_ASSOC);

$find = false;

if ($senhaGet === $senhaConfirmGet) {
  for ($i=0; $i < count($dado); $i++) { 
  
    // Estrutura if else para procurar o usuario no DB, caso ache ira atribuir True para cada dado do usuário, caso contrario atribuira false para Find, que é o resultado final e mais importante
    if ($cpfGet == $dado[$i]["cpf"] && $nomeGet == $dado[$i]["name"] && $senhaGet === $dado[$i]["senha"]) {

      $nameTable = true;
      $senhaTable = true;
      $cpfTable = true;
      $find = true;
      break;
    } else {
       $find = false;
    } 
  } 
} else {

}

// Fechando conexão com o DB
$conn = null;

?>
<div class="home-container container-treino-get section-other2">
  <div class="sections ">
        <!-- Icone para retorna ao arquivo Index -->
  <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>

   <!-- Estrutura If else para ver se os dados foram encontrados  -->
    <?php if ($nameTable == true && $senhaTable == true && $cpfTable == true && !$find == false) :?>
      <h1>Bem vindo <?= $dado[$i]["name"]  ?></h1>
      <h2>Confira seu treino abaixo:</h2>
      <div class="treino">
        <header>Treino de Peito</header> 
        <div class="detalhes-treino">
          <main class="titleTreino"><?= $dado[$i]["treinoPeito"]?></main>
          <section class="descricao"><?= $dado[$i]["treinoPeitoDescricao"]?></section>
        </div>
      </div>
      <div class="treino">
        <header>Treino de Costas</header>
         <div class="detalhes-treino">
          <main class="titleTreino"><?= $dado[$i]["treinoCostas"]?></main>
          <section class="descricao"><?= $dado[$i]["treinoCostasDescricao"]?></section>
        </div>
      </div>
      <div class="treino">
        <header>Treino de Braço</header> 
        <div class="detalhes-treino">  
          <main class="titleTreino"><?= $dado[$i]["treinoBraco"]?></main>
          <section class="descricao"><?= $dado[$i]["treinoBracoDescricao"]?></section>
        </div>
      </div>
      <div class="treino">
        <header>Treino de Perna</header> 
        <div class="detalhes-treino">      
          <main class="titleTreino"><?= $dado[$i]["treinoPerna"]?></main>
          <section class="descricao"><?= $dado[$i]["treinoPernaDescricao"]?></section>
        </div>
      </div>
      <div class="treino">
        <header>Treino de Abdomen</header> 
        <div class="detalhes-treino">  
          <main class="titleTreino"><?= $dado[$i]["treinoAbdomen"]?></main>
    
          <section class="descricao"><?= $dado[$i]["treinoAbdomenDescricao"]?></section>
        </div>
      </div>
      <div class="treino">
        <header>Treino de Cardio</header>
         <div class="detalhes-treino">  
          <main class="titleTreino"><?= $dado[$i]["treinoCardio"]?></main>
          <section class="descricao"><?= $dado[$i]["treinoCardioDescricao"]?></section>
        </div>
      </div>
      <button type="button" class="btn btn-light">
                <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
              </button>
    </div>
  </div>
      <?php else :?>
        <div class="home-container container-treino-get section-other">
          <div class="sections ">

            <h1>Aluno não encontrado</h1>
            <h2>Erro na autentificação das informações</h2>
            <button type="button" class="btn btn-light">
                <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
              </button>
            <?php endif;?>
          </div>
        </div>

<?php 
// Incluindo o Footer
include_once("./templates/footer.php");

?>
