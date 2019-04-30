# lumen-microservice-starter
Starter project for creating a microservice with Laravel Lumen


## Usage



Clone repo

```
git clone https://github.com/glugox/lumen-microservice-starter.git projectname
```

```
cd projectname && composer install
```

```
php artisan jwt:secret
```

Update path to db file in .env


POST to http://localhost:5020/auth/login

Content-Type : application/json

{
	"email": "glugox@gmail.com",
	"password": "demo123"
}



Create models...

```
php artisan make:migration --table=entity CreateEntityTable
php artisan make:model Entity -cfrm
```


```

```