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

![TestConexionBD](https://dev.azure.com/AndresTrianaArroyo/ff1d9cbe-8f36-4006-909e-c6bd7fa76192/_apis/git/repositories/94654416-47c5-49b1-aeba-62c36021c0b3/items?path=/TestConexionBD.jpg&versionDescriptor%5BversionOptions%5D=0&versionDescriptor%5BversionType%5D=0&versionDescriptor%5Bversion%5D=main&resolveLfs=true&%24format=octetStream&api-version=5.0)

#  Download Image

docker pull atriana1/arroyo_devops:1.0