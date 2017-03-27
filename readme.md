<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Aplicação - Estoque - Alura

Essa é uma aplicação laravel para o controle de estoque. A mesma está sendo desenvolvida com base no curso "Laravel: facilitando o desenvolvimento PHP" da [Alura](https://www.alura.com.br/).

## Pré requisitos do ambiente

* [PHP 5.6](https://secure.php.net)
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension (--enable-mbstring)
* [NodeJS](https://nodejs.org)
* [Composer](https://getcomposer.org)
* [Bower](http://bower.io)
* [npm](https://www.npmjs.com/)
* [Docker](https://www.docker.com/)

## Mudando o namespace da aplicação

```sh
  $ php artisan app:name estoque
```

## Docker - Laradock 

Esse projeto utiliza para ambiente de desenvolvimento o [Docker](https://www.docker.com/)

E também utiliza o projeto [Laradock](https://github.com/laradock/laradock) que já prepara todo o ambiente que precisamos para trabalhar

### Para usar o Docker - Laradock

Copie o diretório "laradock" para a pasta acima do projeto "trackerFX";

Em seguida acesse o diretório "laradock" através do terminal do docker;

E finalmente execute o comando:

```sh
  $ docker-compose up -d nginx mysql
```

### Instalar pacotes e dependências
```sh
  $ composer install

  $ npm install

  $ bower install

  $ gulp

```

### Rodar o web service com o servidor embutido do PHP 7.0

```sh
  $ php artisan serve

  $ php -S localhost:8000 -t public

  $ php -S localhost:8000 -t public public/index.php
```

### Rodar o web service com o Docker + Laradock

Acesse dentro do diretório "laradock" e execute o comando abaixo:

```sh
  $ docker-compose up -d nginx mysql
```

### Abrir no browser

Com o servidor embutido do PHP:
[http://localhost:8000](http://localhost:8000)

Com o nginx do laradock:
[http://docker-machine-ip/adreninline-ws/public/](http://docker-machine-ip)

### Comandos úteis
```sh
  $ npm install -g bower

  $ npm install --global gulp-cli

  $ php artisan db:seed
```

## Autor do Projeto

[Danilo Righetto - Web Developer](https://br.linkedin.com/in/danilo-righetto)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
