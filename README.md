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

# Atualização - ETAPA 2

## Edição e Exclusão de Usuários
As funcionalidades de edição e exclusão foram adicionadas para permitir o gerenciamento dos usuários cadastrados no sistema.

## Alterações
Os seguintes arquivos foram modificados:

- **table.php**: adição dos botões de editar e excluir.
- **editar.php**: responsável pela alteração dos dados do usuário.
- **excluir.php**: responsável pela remoção dos registros.

## Trechos

### Editar Usuário

```php
$sqlUpdate = "UPDATE usuario SET
              usuario = '$novoUsuario',
              senha = '$novaSenha'
              WHERE id = '$id'";
```

Atualiza os dados do usuário selecionado.

### Excluir Usuário

```php
$sql = "DELETE FROM usuario WHERE id = $id";
```

Remove o usuário do banco de dados.

## Dificuldades
No início, tive dificuldade para entender como os arquivos se comunicavam e como o ID do usuário era enviado entre as páginas. Como ainda possuía pouco conhecimento sobre PHP e banco de dados, não implementei a funcionalidade imediatamente.
Após a explicação do professor e algumas pesquisas, consegui compreender melhor o funcionamento do `$_GET`, das consultas SQL e dos redirecionamentos entre páginas.

## Pesquisas e Testes
Foram realizadas pesquisas sobre:

- Comandos SQL `UPDATE` e `DELETE`.
- Utilização do `$_GET`.
- Redirecionamento com `header()`.

Também foram realizados testes para:

- Login de usuários.
- Cadastro de novos registros.
- Exibição da tabela.
- Edição de usuários.
- Exclusão de usuários.

Os testes confirmaram o funcionamento correto das funcionalidades implementadas.
