# ATriana -> Utilizar imagen Ubuntu como base
FROM ubuntu 

ARG DEBIAN_FRONTEND=noninteractive

# ATriana -> Actualizar repositorio de paquetes
RUN apt update 

# ATriana -> Instalar Apache, PHP y utilidades para conectar con MSSQL de AWS RDS
RUN apt install -y apache2 \
    apache2-utils \
    php \
    libapache2-mod-php \
    php-mysql \
    mysql-client

# ATriana -> Instalar el SDK de .NET
RUN apt install -y dotnet-sdk-7.0

# ATriana -> Instalar el JDK de Java 11
RUN apt install -y \
    openjdk-11-jdk-headless \
    maven

# ATriana -> Instalar Postgresql
RUN apt install -y \    
    postgresql

# ATriana -> Instalar Utilities
RUN apt install -y wget \
    apt-transport-https \
    software-properties-common \
    git

# ATriana -> Instalar VS Code
RUN wget -q https://packages.microsoft.com/keys/microsoft.asc -O- | apt-key add - && \
    add-apt-repository "deb [arch=amd64] https://packages.microsoft.com/repos/vscode stable main" && \
    apt update && apt install -y code

RUN apt clean 

EXPOSE 80

COPY app /var/www/html/app

CMD ["apache2ctl", "-D", "FOREGROUND"]