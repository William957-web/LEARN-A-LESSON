FROM ubuntu:14.04

RUN apt-get update && apt-get install -y \
    software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update && apt-get install -y \
    php5 \
    php5-mysql \
    php5-curl \
    php5-json \
    php5-cli \
    php5-gd \
    php5-mcrypt \
    php5-xmlrpc \
    php5-xsl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY . /var/www/html
RUN rm /var/www/html/Dockerfile
RUN chmod 777 -R /var/www/
RUN chmod 777 /var/www/html/uploads
RUN useradd -m -d /home/icedtea -s /bin/bash icedtea
RUN echo 'ICED{H0Li_..._Y0u_foUND_US!!!}' > /home/icedtea/user.txt
USER icedtea
EXPOSE 80

# 啟動 PHP 內建的 Web 伺服器
CMD ["php", "-S", "0.0.0.0:80"]
