<?php
// Incluindo o Header 

 include_once("./templates/header.php");
//  resgatando o id passado na url 
$aluno = false;
if (isset($_GET["id"])) {
  
  $alunoId = $_GET["id"];
  $aluno = true;
} else {
 
}
 
 
//  Comando SQL
 $querySelect = "SELECT * FROM aluno WHERE id = :id";
 $stmt =  $conn->prepare($querySelect);
 $stmt ->bindParam(":id", $alunoId);
 
//  Try catch para tentar executar o SQL
 try {

  $stmt->execute();
  $aluno = true;

 } catch (PDOException $e) {
  echo "<h1> Aluno não encontrado </h1>";
  $aluno = false;

 }
//  Transformando em um array associativo para resgatar os dados de uma forma mais prática
 $dados = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

<div class="home-container show-aluno img-bg">
  <div class="sections section-table">
        <!-- Icone para retorna ao arquivo Index -->
  <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>

   <?php if (  $aluno == true) :?>
  <h1><?=$dados["name"]?></h1>

<table border="" id="table">
  <thead>
<tr> 
  <td>Peito</td>
  <td>Braço</td>
  <td>Cardio</td>
  <td>Perna</td>
  <td>Abdomen</td>
  <td>Costas</td>
</tr>
</thead>
<tbody class="tbody">
<tr>
    <td>  <?= $dados["treinoPeito"]?></td> 
    <td>  <?= $dados["treinoBraco"]?></td> 
    <td>  <?= $dados["treinoCardio"]?></td> 
    <td>  <?= $dados["treinoPerna"]?></td> 
    <td>  <?= $dados["treinoAbdomen"]?></td>
     <td>  <?= $dados["treinoCostas"]?></td> 
    </tr>
    <tr>
    <td>  <?= $dados["treinoPeitoDescricao"]?></td> 
    <td>  <?= $dados["treinoBracoDescricao"]?></td> 
    <td>  <?= $dados["treinoCardioDescricao"]?></td> 
    <td>  <?= $dados["treinoPernaDescricao"]?></td> 
    <td>  <?= $dados["treinoAbdomenDescricao"]?></td>
     <td>  <?= $dados["treinoCostasDescricao"]?></td> 
    </tr>

  </tbody>
</table>

<h1>
  Atualizar Treino do aluno
</h1>

<form action="<?=$Url_Local ?>update.php?id=<?=$alunoId ?>" method="POST">
<label for="">Treino de Peito</label>
<br>
<input type="text" name="treinoPeito" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoPeitoDescricao" id="">
<br>
<label for="">Treino de Braco</label>
<br>
<input type="text" name="treinoBraco" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoBracoDescricao" id="">
<br>
<label for="">Treino de Cardio</label>
<br>
<input type="text" name="treinoCardio" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoCardioDescricao" id="">
<br>
<label for="">Treino de Abdomen</label>
<br>
<input type="text" name="treinoAbdomen" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoAbdomenDescricao" id="">
<br>
<label for="">Treino de Costas</label>
<br>
<input type="text" name="treinoCostas" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoCostasDescricao" id="">
<br>
<label for="">Treino de Perna</label>
<br>
<input type="text" name="treinoPerna" id="">
<br>
<label for="">Descrição do treino:</label>
<br>
<input type="text" name="treinoPernaDescricao" id="">
<br>

<button type="submit" class="btn btn-light"> 
Enviar
</button>
</form>
<?php else:?>
  <h1>Aluno não encontrado:</h1>
  <?php endif;?>
<button type="button" class="btn btn-light">
<a href="javascript:history.go(-1)" class="button-back">Voltar</a>
</button>
  </div>
</div>
<?php
 // Incluindo o Footer
 include_once("./templates/footer.php")

?>