SysSocial
=========

A Symfony project created on January 24, 2017, 1:01 am.

Utilizado PHP7.0, Symfony 3.X, Composer, Doctrine ORM 

=== Configurando o Database com Doctrine ORM ===

1) Configurar # app/config/parameters.yml com host, nome, usuário e senha do Banco de Dados MySQL para permitir acesso da aplicação

2)Executar o comando "php bin/console doctrine:database:create"

3)Gerar as entidades do banco através do comando "php bin/console doctrine:generate:entities AppBundle"
Entidades: Company, Partner, User

4) Criar tabelas através das entidades pelo comando "php bin/console doctrine:schema:update --force"

5) Inserir na tabela "app_users" o comando em SQL: "INSERT INTO `app_users` (`id`, `username`, `password`, `email`, `is_active`) VALUES
(1, 'admin', '$2a$08$jHZj/wJfcVKlIwr5AvR78euJxYK7Ku5kURNhNx.7.CSIJ3Pq6LEPC', 'admin@admin.com', 1);"
Isso ira inserir o usuario admin, com a senha admin para acesso da aplicação

=== Acessando e utilizando aplicação ===

1) Ao terminar de configurar o DB, executar o comando, ainda na pasta do projeto "php bin/console server:run", então a aplicação começara a rodar localmente, sendo acessada pelo ip e porta: 127.0.0.1:8000

2)Ao acessar a aplicação, você sera encaminhado para a tela de login, onde pede autenticação para acessar o resto do conteúdo, utilize o usuário salvo admin com a senha admin

3) Na proxima tela, você encontrara dois painéis, um para busca e registro de Sócio e outro para busca e registro de Empresa

4) Como o BD está vazio, registre alguns sócios e empresas clicando no botão Registrar, onde você sera encaminhado para um formulário que deve ser preenchido para registro de novo Sócio ou Empresa.
e
5) Após registrar novos sócios e empresas, a efetuação da busca é feita através do CPF do Sócio e pelo CNPJ da Empresa, onde se deve colocar exatamente como foi registrado na entrada de texto e após clicar em Buscar

6) Quando é encontrado um sócio ou empresa registrada, você é encaminhado para um page contendo todas as informações registradas sobre sócio ou empresa, onde você pode editar, clicando no botão Editar e sendo encaminhado para um formulário de edição, apagar clicando no botão Deletar, onde o mesmo é apagado do registro e a tela é redirecionada para o inicio ou sim
