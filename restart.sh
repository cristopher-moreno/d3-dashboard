#!/bin/bash
docker-compose down;
docker-compose up -d;
docker-compose ps;
#docker logs -f mysql;