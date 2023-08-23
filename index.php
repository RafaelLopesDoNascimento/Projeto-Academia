<?php 
// Incluindo o Header 
include_once("./templates/header.php");
?>
 <!-- Icone para retorna ao arquivo Index -->
  <div class="home home-container img-bg">
 <div class="sections">
   <a href="<?=$Url_Local ?>" class="Icon">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
   </svg></a>
   </div>
      <!-- Icone para retorna ao arquivo Index -->
   <h1>ALWAYS FIT </h1>
   <h2>The best for your life start here </h2>
    <div class="center-container">
<!-- Carrossel -->

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item container-img active">
          
            <img  src="https://img.freepik.com/fotos-premium/interior-moderno-de-academia-com-novos-equipamentos-de-ginastica_93675-122914.jpg" class="carrossel-img" alt="...">
          
  </div>
  <div class="carousel-item container-img">
          
            <img  src="https://img.freepik.com/fotos-gratis/equipamentos-modernos-em-uma-academia-dentro-de-casa-interior-da-sala-de-fitness-com-bicicletas-de-fitness_613910-6644.jpg" class="carrossel-img" alt="...">
          
  </div>
  <div class="carousel-item container-img">
          
            <img  src="https://totalhealth.com.br/uploads/pagina/elemento/campo/2022/07/IwSRiiSHMhBe8RWM/imagem.jpg" class="carrossel-img" alt="...">
          
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>

<!-- Carrossel -->
      
       
<div class="users">
<div class="aluno user-container">
   
   <h2>Aluno</h2>
   <div class="submits">
<!-- Acesso para os demais arquivos -->
     <a href="<?= $Url_Local?>alunoCreate.php" class="btn btn-light">Criar conta</a>
     <a href="<?= $Url_Local?>alunoLogin.php" class="btn btn-light">Login</a>
   </div>
 </div>
 <div class="treinador user-container">
   <h2>Treinador</h2>
   <div class="submits">

     <a href="<?= $Url_Local?>instrutorLogin.php" class="btn btn-light">Login</a>
   </div>
 </div>
</div>
     
    
     </div>
  </div>
</div>
<?php 
// Incluindo o Footer
include_once("./templates/footer.php");
?>
  
