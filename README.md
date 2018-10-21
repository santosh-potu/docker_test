
Docker build 
docker build -it php_test .

Docker with shared volume 

docker run -it --mount type=bind,source=/var/www/html/docker_test,target=/var/www/html  --env-file=env_file php_test 
