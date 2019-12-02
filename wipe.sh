#!/bin/bash
docker-compose down;
docker container stop $(docker container list -qa);
docker rm -f $(docker container list -qa);
docker rmi -f $(docker image list -qa);
docker system prune --force --volumes;
