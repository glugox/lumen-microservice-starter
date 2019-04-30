# lumen-microservice-starter
Starter project for creating a microservice with Laravel Lumen


## Usage



Clone repo

```console
git clone https://github.com/glugox/lumen-microservice-starter.git projectname
```

```console
cd projectname && composer install
```

Rename .env.example to .env and update path to db file in .env

```console
php artisan jwt:secret
```


POST to http://localhost:5020/auth/login

Content-Type : application/json

{
	"email": "glugox@gmail.com",
	"password": "demo123"
}



Create models...


```console
php artisan make:migration --table=entity CreateEntityTable
php artisan make:model Entity -cfrm
```


```

```