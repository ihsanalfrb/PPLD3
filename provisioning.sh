#!/bin/bash
docker login
docker pull pplc3/ui-lipsy
# installed app:
	# apache2 
	# python3 
	# python3-pip 
	# mysql-server-5.7 
	# phpmyadmin
	# django
	# git
	
docker stop lipsy
docker rm lipsy
docker run -it -p 80:80 -p 8000:8000 -d --name=lipsy pplc3/ui-lipsy
docker exec lipsy wget -O /var/www/html/build.sh https://gitlab.com/PPL2017csui/PPLC3/raw/develop/build.sh
echo -e "Now, you can deploy app using following code : \n\n\t docker exec lipsy bash /var/www/html/build.sh"