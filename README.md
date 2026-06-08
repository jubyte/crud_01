# Projeto 
Atividade crud_01

## Objetivo da aplicação 
Este projeto foi desenvolvido com o objetivo de aprender os conceitos básicos de PHP e sua integração com um banco de dados MySQL

## Tecnologias utilizadas 
- **HTML**: utilizado para estruturar as páginas da aplicação.
- **PHP**: responsável pela lógica do sistema, autenticação de usuários e comunicação com o banco de dados.
- **MySQL**: utilizado para armazenar e gerenciar os dados dos usuários.
- **CSS**: utilizado para estilizar a interface e melhorar a aparência das páginas.

## Estrutura dos arquivos
```text
CRUD_01/
├── infra/
│   └── db/
│       ├── connect.php
│       └── script.sql
│
├── public/
│   ├── component/
│   │   ├── navbar.php
│   │   └── table.php
│   │
│   ├── home.php
│   └── logout.php
│
├── style/
│   └── style.css
│
├── index.php
└── README.md
```

## Funcionamento do Código
Ocorre da seguinte forma:

1. O usuário acessa a tela de login.
2. O sistema verifica as credenciais informadas.
3. Após a autenticação, o usuário é direcionado para a página principal.
4. Na página principal é possível cadastrar novos usuários.
5. Os usuários cadastrados são exibidos em uma tabela.
6. O logout encerra a sessão e retorna para a tela inicial.

## Principais aprendizados 
Foram reforçados os seguintes conceitos:

- Estrutura básica de aplicações em PHP.
- Conexão entre PHP e MySQL.
- Utilização de sessões para controle de acesso.
- Manipulação de dados utilizando comandos SQL.
- Organização de arquivos em componentes reutilizáveis.
- Uso do Git para versionamento e documentação do projeto.
