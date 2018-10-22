
Docker build 
docker build -it php_test .

Docker with shared volume 

docker run -it --mount type=bind,source=/var/www/html/docker_test,target=/var/www/html  --env-file=env_file php_test 

Docker Multiple environment variables with -e (mutiple files also same)

docker run -t -e MYSQL_HOST='172.17.0.03'  \
>  -e MYSQL_USER='root' \
>  -e MYSQL_PWD='root' \
>  -e MYSQL_DB='docker_test' \
>  php_test

