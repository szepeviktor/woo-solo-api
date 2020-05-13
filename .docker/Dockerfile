FROM wordpress:5.4.1-php7.2

RUN curl -sS https://getcomposer.org/installer | php \
  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash - \
  && sudo apt-get install -y nodejs

RUN npm install -g npm

COPY entrypoint.sh /entrypoint.sh

ENTRYPOINT["/entrypoint.sh"]
