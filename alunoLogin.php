<?php 
// Incluindo o Header 
include_once("./templates/header.php");

?>
<div class="home-container aluno-login img-bg">
  <div class="sections section-other">
        <!-- Icone para retorna ao arquivo Index -->
  <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
    <h1>Aluno</h1>
    <h2>Ja possui uma conta, acesse agora</h2>
    <!-- Enviando os dados para TreinoGet.php -->
    <form action="TreinoGet.php" method="get">
    <label for="">Nome do aluno:</label>  
    <br>
    <input type="text" name="nome" id="">
    <br>
    <label for="">Senha do aluno:</label>  
    <br>
    <input type="text" name="senha" id="">
    <br>
    <label for="">Confirmar senha:</label>  
    <br>
    <input type="text" name="senhaConfirm" id="">
    <br>
    <label for="">CPF do aluno:</label>  
    <br>
    <input type="text" name="cpf" id="">
    <br>
    <button type="submit" class="btn btn-light">
      Login
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