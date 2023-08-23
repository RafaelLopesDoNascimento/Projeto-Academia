<?php 
// Incluindo o Header 

include_once("./templates/header.php");


//instrutores

// Atribuindo os dados recebidos
$nomeGet = $_GET["nome"];
$senhaGet = $_GET["senha"];
$cpfGet = $_GET["cpf"];
// Comando SQL
$lookingFor = "SELECT * FROM instrutor ";
$codigo = $_GET["codigo"];
$stmt = $conn ->prepare($lookingFor);
$stmt->execute();

// Transformando em um array associativo pra facilitar a localização dos dados
$dado = $stmt->fetchAll(PDO::FETCH_ASSOC);

$find = false;

for ($i=0; $i < count($dado); $i++) { 
// Find é usado para marcar se o instrutor existe no DB 
  if ($cpfGet == $dado[$i]["cpf"] && $nomeGet == $dado[$i]["name"] && $senhaGet == $dado[$i]["senha"] && $codigo == 4546) {
    $find = true;
    break;
  } else {
     $find = false;
  }
  
}


 //alunos
$alunos = "SELECT * FROM aluno";

$stmtAluno = $conn->prepare($alunos);
$stmtAluno->fetchAll();
$stmtAluno->execute();
$allAlunos = $stmtAluno->fetchAll();


$conn = null;


?>
<?php if ($find === true) :?>
  
  <div class="home-container instrutor-get-container img-bg">
  <div class="sections">
        <!-- Icone para retorna ao arquivo Index -->

    <a href="<?=$Url_Local ?>" class="Icon">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
      </svg></a>
      <section>
      <h1>Alunos:</h1>
    
        <table>
          <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($allAlunos as $aluno) :?>
              <!-- Foreach para exbir cada dado do aluno separadamente todos seguindo um padrão -->
        <tr >
          <td> <?= $aluno["name"] ?></td>
          <td><?= $aluno["cpf"] ?></td>
          <td><?= $aluno["descricao"] ?></td>
          <td class="thisOne">
            <form action="<?=$Url_Local ?>delete.php?id=<?=$aluno["id"]?>" method="post">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?=$aluno["id"] ?>">
            <button type="submit" class="btn btn-light">Drop</button>
            </form>
          <button type="submit" class="btn btn-light">
          <a href="<?=$Url_Local ?>showAluno.php?id=<?=$aluno["id"]?>">+</a>
            </button>          
          </td>
        </tr>
              <?php endforeach;?>
              <!-- Fim do Foreach -->
          </tbody>
        </table>
        <button type="submit" class="btn btn-light"><a href="javascript:history.go(-1)">Voltar</a></button>
  </div>  
      <?php else:?>
        <!-- Fim do If else -->
        <div class="home-container instrutor-get-container instrutor-get-container-error img-bg">
   <div class="sections">
        <!-- Icone para retorna ao arquivo Index -->
   <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
   <h1>Instrutor não encontrado</h1>

   <button type="submit" class="btn btn-light"><a href="javascript:history.go(-1)">Voltar</a></button>
  </div>
        </div>
        <?php endif; ?>
      
     
  </section>  
  </div>
<?php 
// Incluindo o Footer

include_once("./templates/footer.php");

?>