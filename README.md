# 🏀 NBA Stats

**NBA Stats** é um sistema web desenvolvido com **PHP** e **MySQL** para realizar o cadastro, edição, exclusão e listagem de jogadores de basquete. Possui visual moderno, responsivo e inspirado na identidade visual da **NBA**.

## 🚀 Funcionalidades

- **Página Inicial**: Vídeo de fundo, navbar fixa e atalhos para as principais seções.
- **Cadastro de Jogadores**: Formulário completo com nome, altura, posição, títulos etc.
- **Listagem**: Tabela responsiva com jogadores cadastrados e ações de editar/excluir.
- **Edição/Exclusão**: Formulários dinâmicos e confirmação antes de deletar.
- **Navbar Responsiva**: Links internos e externos (League Pass, Loja, Ingressos...).
- **Visual Moderno**: Estilo baseado nas cores e tipografia da NBA, com fonte Oswald (Google Fonts).

## 📁 Estrutura de Pastas

```
NbaStats/
├── css/
│   ├── CadastrarJogador.css
│   ├── EditarJogador.css
│   ├── ListarJogador.css
│   └── PaginaInicial.css
│
├── conexão/
│   ├── AtualizarJogador.php
│   ├── connect.php
│   ├── ExcluirJogador.php
│   ├── Methods.php
│   ├── processaJogador.php
│   ├── RotaExcluir.php
│   └── RotaListar.php
│
├── database/
│   └── projetobaska.sql
│
├── images/
│   ├── inicial.png
│   └── nbatrailer.mp4
│
├── PaginaInicial.php
├── CadastrarJogador.php
├── EditarJogador.php
└── ListarJogador.php
```


## 🛠️ Tecnologias Utilizadas

- **Frontend**: HTML5, CSS3, Font Awesome, Google Fonts (Oswald)
- **Backend**: PHP (POO + procedural)
- **Banco de Dados**: MySQL / MariaDB
- **Extras**: Vídeo de fundo, carregamento dinâmico de títulos

## 🧪 Como Rodar o Projeto

1. Clone o repositório para a pasta `htdocs` do XAMPP/WAMP.
2. Importe o banco de dados:
   - Acesse o `phpMyAdmin`
   - Importe o arquivo `database/projetobaska (1).sql`
3. Ajuste as credenciais do banco em `conexão/connect.php`.
4. Certifique-se de que os arquivos `nbatrailer.mp4` e `inicial.png` estão na pasta `images/`.
5. Acesse o sistema via: [http://localhost/NbaStats/PaginaInicial.php](http://localhost/NbaStats/PaginaInicial.php)

## 🔍 Observações

- Layout 100% responsivo
- O vídeo de fundo pode ser substituído/removido facilmente
- Estrutura de código pronta para manutenção e expansão

## 📚 Créditos

Projeto desenvolvido por **Ryan Dias** e **Luan Prates**, com fins acadêmicos e de aprendizado. Inspirado no universo da NBA.

