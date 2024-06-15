FROM dockerfiles/centos-lamp 

WORKDIR /var/www/html
COPY . /var/www/html
RUN rm /var/www/html/Dockerfile
RUN chmod 777 -R /var/www/
RUN chmod 777 /var/www/html/uploads
RUN echo 'ICED{H0Li_..._Y0u_foUND_US!!!}' > /.flag.txt
