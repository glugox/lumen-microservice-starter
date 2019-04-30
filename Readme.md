# lumen-microservice-starter
Starter project for creating a microservice with Laravel Lumen




## Clone repo & install

```console
git clone https://github.com/glugox/lumen-microservice-starter.git projectname
```

```console
cd projectname && composer install
```

## Env

```console
mv .env.example .env
```

Update path to db file in .env

```console
php artisan jwt:secret
```

## Serve

```
php -S localhost:5030 -t public
```


## POST to http://localhost:5020/auth/login

Content-Type : application/json

{
	"email": "glugox@gmail.com",
	"password": "demo123"
}


## Create models

```console
php artisan make:migration --table=entity CreateEntityTable
php artisan make:model Entity -cfrm
```


