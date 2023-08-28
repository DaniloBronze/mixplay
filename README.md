<div align="center">
  <h1>Projeto de MVC em PHP</h1>
  <p>Um simples projeto de MVC (Model-View-Controller) em PHP para gerenciamento de vídeos.</p>
</div>

## Índice

- [Visão Geral](#visão-geral)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Utilização](#utilização)
- [Contribuição](#contribuição)
- [Licença](#licença)

## Visão Geral

Este projeto é um exemplo de aplicação MVC em PHP que lida com o gerenciamento de vídeos. Ele demonstra como estruturar um projeto usando o padrão Model-View-Controller para separar as preocupações de lógica de negócios, apresentação e manipulação de dados.

## Estrutura do Projeto

A estrutura básica do projeto é a seguinte:
```bash
projeto-mvc-php/
├── public/
│ ├── index.php
│ ├── img/
│ │ └── uploads/
├── src/
│ ├── Mvc/
│ │ ├── Controller/
│ │ │ ├── Controller.php
│ │ │ ├── Error404Controller.php
│ │ │ ├── ...
│ │ ├── Entity/
│ │ │ ├── Video.php
│ │ │ ├── ...
│ │ ├── Repository/
│ │ │ ├── VideoRepository.php
│ │ │ ├── ...
├── views/
│ ├── video-form.php
│ ├── video-list.php
│ ├── ...
├── banco.sqlite
├── criar-usuario.php
└── README.md
```

## Pré-requisitos

- PHP 7.2 ou superior.
- PDO (PHP Data Objects)
- SQLite (banco de dados)

## Instalação

1. Clone este repositório:

```bash
git clone https://github.com/DaniloBronze/mixplay.git
```

Instale as dependências usando o Composer (se aplicável):
```bash
composer install
```

## Utilização

Configure o banco de dados SQLite (banco.sqlite) de acordo com as suas necessidades.

Execute o script criar-usuario.php para criar um novo usuário no banco de dados:
```bash
php criar-usuario.php usuario@example.com senha123
```
Ao criar o user e senha, a senha vai virar um hash, algo semelhante a isso:

```bash
$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a
```

Acesse a aplicação através do arquivo public/index.php em um servidor web compatível com PHP.

## Contribuição
Contribuições são bem-vindas! Siga as etapas abaixo para contribuir:

Clone o repositório: git clone https://github.com/DaniloBronze/mixplay.git
Crie um branch para sua contribuição: git checkout -b minha-contribuição
Faça as alterações e commit: git commit -am 'Adiciona minha contribuição'
Envie o branch: git push origin minha-contribuição
Abra um Pull Request explicando suas alterações.

   
