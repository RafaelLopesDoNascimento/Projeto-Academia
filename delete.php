<?php 
// Incluindo o Header 

include_once("./templates/header.php");

// verificando se o Id existe, caso sim atribuira a uma variavel
if (isset($_GET["id"]) != "") {
  $alunoId = $_GET["id"];
} else {
 
}

// Comando para excluir o aluno, usando o id como parâmetro
$queryDropUser = "DELETE FROM aluno WHERE id = :id";
$stmtDelete = $conn->prepare($queryDropUser);
$stmtDelete->bindParam(":id", $alunoId);
$confirm = false;
// try catch para excluir o aluno e confirmar. O confirm serve para exibir uma mensagem, caso seja true ira exibir que a exclusão  ocorreu com sucesso, caso seja false retornara uma mensagem de error
try {
$stmtDelete->execute();
$confirm = true;


} catch (PDOException $e) {
  $confirm = false;


}
?>
<div class="home-container instrutor-get-container img-bg delete">
  <div class="sections">
    <!-- Estrutura If else para ver se tem o id do aluno e se tem a confirmação para exclui-lo -->
    <?php if ($confirm == true && $alunoId != "") :?>
          <!-- Icone para retorna ao arquivo Index -->
      <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
      <h1>Usuario excluido com sucesso</h1>
      <button type="button" class="btn btn-light">
      <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
    </button> 
      <?php else :?>
        <a href="<?=$Url_Local ?>" class="Icon">   
         <!-- Icone para retorna ao arquivo Index -->
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
        <h1>Erro ao excluir usuário</h1>
        <button type="button" class="btn btn-light">
      <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
    </button> 
        <?php endif;?>
            <!-- Estrutura If else para ver se tem o id do aluno e se tem a confirmação para exclui-lo -->
<!-- endif para finalizar  o  If else-->

  </div>
</div>



<?php 
// Incluindo o Footer
include_once("./templates/footer.php");

?>