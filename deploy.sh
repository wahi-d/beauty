#!/bin/bash

cd /var/www/html/hob1

git pull origin main

docker rm -f $(docker ps -aq)

docker build --no-cache -t myapp .

docker run -d -p 80:80 myapp
