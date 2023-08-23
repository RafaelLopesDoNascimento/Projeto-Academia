 <?php 
// Incluindo o Header 
include_once("./templates/header.php");

?>
<div class="home-container img-bg alunoCreate ">
  <div class="sections">
    <!-- Icone para retorna ao arquivo Index -->
  <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
    <h1>Criar conta</h1>
    <h2>Se é novo por aqui, cadastre-se abaixo:</h2>
    <!-- Enviando os dados para TreinoPost.php -->
    <form action="TreinoPost.php" method="post" >
    <label for="">Nome do aluno:</label>  
    <br>
    <input type="text" name="nome" id="" required>
    <br>
    <label for="">Senha do aluno:</label>  
    <br>
    <input type="text" name="senha" id="input01" required>
    <br>
    <label for="">Confirmar senha:</label>  
    <br>
    <input type="text" name="senhaConfirmar" id="input02" required>
    <br>
    <label for="">Idade do aluno:</label>  
    <br>
    <input type="text" name="idade" id="" required>
    <br>
    <label for="">Digite seu CPF abaixo:</label>  
    <br>
    <input type="number" name="cpf" id="" required>
    <br>
    <label for="">Descreva o seu foco na academia:</label>  
    <br>
    <input type="text" name="descricao" id="" required>
    <br>
  
   <button type="submit" class="btn btn-light btn-create">
    Cadastrar
   </button>
    <button type="button" class="btn btn-light">
      <a href="javascript:history.go(-1)" class="button-back">Voltar</a>
    </button> 
    </form>
  </div>
  
</div>
<?php
// Incluindo o Footer
include_once("./templates/footer.php");
?>