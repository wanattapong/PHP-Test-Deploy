
## Dockerfile
```
FROM php:7.2-apache
COPY src/ /var/www/html/
```
## Create image
```
$ docker build -t my-php-app .
```

## Run container
```
$ docker run -d -p 80:80 --name webPHP -v "$PWD":/var/www/html --link mariadb  IMAGENAME:TAG
```
## Docker push
You need to tag your image correctly first with your registryhost:
```
docker tag [OPTIONS] IMAGE[:TAG] [REGISTRYHOST/][USERNAME/]NAME[:TAG]
```
Then docker push using that same tag.
```
docker push NAME[:TAG]
```