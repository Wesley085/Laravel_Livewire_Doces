# Laravel Livewire Doces

Sistema de gestão e visualização de receitas de doces, desenvolvido com Laravel 11 e Livewire 3.  
O projeto utiliza Livewire Volt para componentes funcionais e Tailwind CSS para estilização.

## Requisitos

- PHP 8.2 ou superior  
- Composer  
- Node.js & NPM (para compilar o Tailwind CSS)

## Como rodar o projeto baixado

Duplicar o arquivo `.env.example` e renomear para `.env`.

```bash
cp .env.example .env
Alterar no arquivo .env as credenciais do banco de dados.

Instalar as dependências do backend:

composer install
Instalar as dependências do frontend e compilar os assets:

npm install && npm run build
Gerar a chave da aplicação:

php artisan key:generate
Criar o link simbólico para o storage (necessário para exibir imagens das receitas):

php artisan storage:link
Executar as migrations:

php artisan migrate
Executar as seeds (opcional, para popular o banco):

php artisan db:seed
Iniciar o servidor local:

php artisan serve
Acesse o projeto no navegador:

http://127.0.0.1:8000

Funcionalidades Principais
Área Pública: Visualização de receitas e detalhes

Painel Administrativo: Gestão de receitas (CRUD) via Livewire

Autenticação: Sistema de login e registro com Laravel Breeze

Componentes: Uso de Livewire Volt para componentes reativos

Tecnologias Utilizadas
Laravel 11

Livewire 3 + Volt

Tailwind CSS

Alpine.js

Vite
