
# Laravel

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/guilhermerodriguesti/docker-nginx-laravel.git
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Brazil"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```

Doc: https://laravel.com/docs/11.x/sanctum

Gerar a key do projeto Laravel
```sh
php artisan key:generate

php artisan migrate

php artisan session:table

https://cheatsheetseries.owasp.org/cheatsheets/Laravel_Cheat_Sheet.html
```


Acessar o projeto
[http://localhost:8000](http://localhost:8000)



