
Docker build: 
docker build -t php_test .

To Run the container:
docker run -p 8080:80 php_test

Here 8080 is localhost post 80 exposed port of container. You can browse http://localhost:8080 or http://172.17.0.2

docker run -it tagname bash
(for bash access)

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

# docker compose
docker-compose up
docker-compose build <image_name_from_yml)
docker-compose stop
docker-compose down [-v]

# Docker system prune - remove unused data
docker system prune

# Ubuntu go thru the commands mentioned here
Add the docker group if it doesn't already exist:

sudo groupadd docker
Add the connected user "$USER" to the docker group. Change the user name to match your preferred user if you do not want to use your current user:

sudo gpasswd -a $USER docker
Either do a newgrp docker or log out/in to activate the changes to groups.
sudo setfacl -m user:$USER:rw /var/run/docker.sock

# shared volume ubuntu
docker run -d -v /home/santosh/docker_test/ubuntu_php:/var/www/html -it  -p 9999:80 php_small 
-d for dameon
