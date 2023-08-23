<?php 
// Incluindo o Header 

include_once("./templates/header.php");


?>
<div class="home-container container-instrutor-login img-bg">
  <div class="sections">
  <a href="<?=$Url_Local ?>" class="Icon">
      <!-- Icone para retorna ao arquivo Index -->
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
   <div class="formInstrutorLogin">

     <h1>Instrutor</h1>
   
     <h2>Acesso do Instrutor</h2>
     <form action="instrutorGet.php" method="get" required>
     <label for="">Nome do instrutor:</label>  
     <br>
     <input type="text" name="nome" id="" required>
     <br>
     <label for="">Senha do Instrutor:</label>  
     <br>
     <input type="text" name="senha" id="" required>
     <br>
     <label for="">CPF do instrutor:</label>  
     <br>
     <input type="text" name="cpf" id="" required>
     <br>
     <label for="">Codigo da academia:</label>  
     <br>
     <input type="text" name="codigo" id="" required>
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
</div>


<?php 
// Incluindo o Footer
include_once("./templates/footer.php");

?>