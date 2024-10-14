# Sistema de Autenticação e Postagem

Este é um projeto simples de autenticação de usuários e gerenciamento de posts. Ele oferece funcionalidades para registro, login, logout e criação de posts, implementadas com Laravel.

## Funcionalidades

-   **Registro de usuário**: Os usuários podem se registrar para acessar o sistema.
-   **Login**: Os usuários registrados podem fazer login para acessar o painel.
-   **Logout**: Os usuários autenticados podem se desconectar.
-   **Criação de Posts**: Os usuários podem criar posts após a autenticação.
-   **Proteção de rotas**: A maioria das rotas importantes (home, criação de posts) estão protegidas por middleware de autenticação.

## Requisitos

-   PHP >= 8.0
-   Composer
-   Banco de dados (MySQL, PostgreSQL ou SQLite)

## Instalação

1. **Clone o repositório**:

    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio
    ```

2. **Instale as dependências**:

    ```bash
    composer install
    ```

3. **Configure o ambiente**:

    Crie um arquivo `.env` baseado no arquivo `.env.example` e configure as variáveis de ambiente, como conexão com o banco de dados.

    ```bash
    cp .env.example .env
    ```

    Configure o banco de dados e outras variáveis conforme necessário.

4. **Gere a chave de aplicação**:

    ```bash
    php artisan key:generate
    ```

5. **Migre o banco de dados** (caso esteja usando um banco relacional):

    ```bash
    php artisan migrate
    ```

6. **Acesse o aplicativo**:

    Após configurar o ambiente e migrar o banco de dados, inicie o servidor embutido do Laravel:

    ```bash
    php artisan serve
    ```

    O aplicativo estará disponível em `http://localhost:8000`.

## Rotas

Aqui estão as principais rotas do sistema:

### Autenticação

-   **Página de registro**: `GET /`
    Exibe o formulário de registro.

-   **Registrar usuário**: `POST /register`
    Processa o registro de um novo usuário.

-   **Página de login**: `GET /login`
    Exibe o formulário de login.

-   **Login do usuário**: `POST /login`
    Processa o login de um usuário.

-   **Logout do usuário**: `GET /logout`
    Desloga o usuário autenticado e o redireciona para a página inicial.

### Home

-   **Página principal (home)**: `GET /home`
    Exibe a página inicial do sistema. Esta rota é protegida por middleware de autenticação (`auth`).

### Posts

-   **Criar post**: `GET /posts`
    Exibe o formulário para criar um novo post. Esta rota é protegida por middleware de autenticação (`auth`).

-   **Salvar post**: `POST /posts`
    Processa a criação de um novo post. Esta rota também é protegida por middleware de autenticação (`auth`).

## Estrutura do Projeto

-   `app/Http/Controllers/Auth/`
    Controladores responsáveis pela autenticação: `RegisterController`, `LoginController`.

-   `app/Http/Controllers/Home/`
    Controlador responsável pela página inicial: `HomeController`.

-   `app/Http/Controllers/Post/`
    Controlador responsável pela criação de posts: `PostController`.

-   `routes/web.php`
    Arquivo de rotas onde todas as rotas do sistema estão definidas.

## Autores

-   **Danillo Ferreira** – _Desenvolvedor_
    [GitHub](https://github.com/nilloferreiira)

# Próximo passos

-   Implementar uma rota pra retornar todos os posts
-   dividir melhor as rotas de posts
