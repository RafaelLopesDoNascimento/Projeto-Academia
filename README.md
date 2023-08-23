  DESCRIÇÃO DO PROJETO

  Este é um programa com um sistema de CRUD usando MySQL, foi usado o Boostrap como Framework no mesmo.

  Index: Esta é a página inicial em que o usuário tem o primeiro contato com o sistema, onde pode fazer o cadastro ou efetuar o login, na mesma pagina o instrutor tambem pode fazer o login.

  Helpers: Nessa pagina estão codigos que auxiliarão durante o decorrer dos arquivos.
  Na connection.php, esta o codigo de acesso ao DB, nesse projeto sera usado PDO para manipular os dados.
  Na url.php, está o caminho para acessar os arquivos do servidor, para não precisar reescrever, e deixar o sistema mais prático.

  Style: Contém o arquivo CSS de estilização das páginas. 

  Templates: Contém os arquivos de header e footer, todos eles são inclusos em cada arquivo servindo como header e footer para cada um.

  AlunoCreate: Este arquivo obtem os dados e envia para TreinoPost.php onde irá trabalhar os dados.

  AlunoLogin: Envia os dados para TreinoGet.php que irá trabalhar eles

  Delete: Este arquivo serve para executar a exclusão de um aluno. OBS: só pode ser acessado por um instrutor com o código de acesso da academia 

  InstrutorLogin: Neste arquivo ele obtem os dados do instrutor assim como o código da academia, então redireciona para intrutorGet.php.
  
  InstrutorGet: Usa os dados recebidos do intrutorLogin para verificar se os dados estão iguais aos do DB, então exibir todos os aluno onde pode atualizar os seus treino ou excluir.

  ShowAluno: Mostra o treino e os dados do aluno selecionado para manipula-los.

  TreinoGet: É feito uma verificação se os dados do aluno recebido pelo alunologin.php batem com os dados do DB, então mostra o seu treino.

  TreinoPost: É feito uma verificação se os dados fornecidos pelo aluno já existem no sistema, para ver se ele pode ser cadastrado ou não.

  Update: Neste arquivo é feito a atualização dos treinos do aluno pelo instrutor.