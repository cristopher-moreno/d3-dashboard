#!/usr/bin/env bash
git pull origin master;
git add *;
git commit -m "update";
git push origin master;
echo "Remote Git repository has been updated.";

CURR_TIME=$(date "+%d/%m/%Y (%H:%M:%S)") 
echo "Last update at: "$CURR_TIME>>log;
