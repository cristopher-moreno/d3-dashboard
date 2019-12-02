# d3-dashboard

Docker + LAMPP

sudo groupadd docker; sudo groupadd docker-compose; sudo gpasswd -a $USER docker; sudo gpasswd -a $USER docker-compose; sudo usermod -aG docker $USER; sudo usermod -aG docker-compose $USER; newgrp docker; newgrp docker-compose; chown root:$USER .-R

DELETE FOLDERS The steps for doing this are:

In the command-line, navigate to your local repository. 
Ensure you are in the default branch: 
git checkout master 
The rm -r command will recursively remove your folder: 
git rm -r folder-name Commit the change: 
git commit -m "Remove duplicated directory" 
Push the change to your remote repository: 
git push origin master

#NETWORK CONF: https://www.youtube.com/watch?v=SXY0MLHP3hA&t=5s
