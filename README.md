#  Compile Image

docker build -t atriana1/arroyo_devops:1.0 . -f Dockerfile

#  List Images

docker images

#  Run Image

docker run --name arroyo-apache -d -p 80:80 atriana1/arroyo_devops:1.0

#  Interactive Connection

docker exec -it arroyo-apache /bin/bash

##  Test Connection between Docker and RDS MySQL

mysql -h arroyomysql.cbtpihhbembs.us-west-2.rds.amazonaws.com -P 3306 -u admin -p Colombia2023.

SELECT * FROM ArroyoDb.Personas;

#  Download Image

docker pull atriana1/arroyo_devops:1.0