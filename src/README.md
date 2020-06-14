# Note App
This a note application.



## How to build in Docker?

1. build docker-compose file.

```shell
$ docker-compose build --no-cache

```

2. run the image you build.

```shell
$ docker-compose up -d
```

3. you can confirm status running container of Docker.

```shell
$ docker-compose ps
```



## How to run `php artisan` command?


```shell
$ docker exec note_app php artisan (command)
```



## How to stop container of Docker?

```shell
$ docker-composer stop
```


