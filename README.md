
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

Docker access local DB

(in linux type ip addr show and look for the docker0 ip). it will be 172.17.0.1

Some docker commands in hand

docker run --rm -it -p 192.168.99.100:3000:3000 docker-react

docker-machine ip default -- gets the virtual machine ip address

docker build -t tagname .

docker ps => list containers
docker ps -a => list all container
docker ps -a -p => list all container id's
docker ps -l => list the last active container

docker-machine ip default
docker run --rm -it -p 192.168.99.100:3000:3000 react-demo

//remove containers
docker rm -f $(docker ps -aq)
//images
docker rmi -f $(docker images -aq)

images -> layers -> containers
class -> inheritance -> instance 

nginx - daemon off; nginx to run frontend in containers


docker run -it tagname bash

List all containers (only IDs)
docker ps -aq

Stop all running containers
docker stop $(docker ps -aq)

Remove all containers
docker rm $(docker ps -aq)

Remove all images
docker rmi $(docker images -q)

// to remove all running containers
docker-compose stop

docker container stop $(docker ps -aq)

docker container rm $(docker ps -aq)

# remove all images
docker rmi $(docker images -q)
