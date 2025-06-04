# Usa a imagem oficial do Ubuntu como base
FROM ubuntu:latest

# Define variáveis de ambiente para evitar perguntas durante a instalação
ENV DEBIAN_FRONTEND=noninteractive

RUN mkdir -p /app
WORKDIR /app

# PHP e extensões comuns
RUN apt-get update; apt install php php-cli php-zip php-mbstring php8.3-xml php8.3-mbstring php8.3-pdo php8.3-zip php8.3-curl php8.3-sqlite3 \
    git unzip curl -y

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"; \
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"; \
    php composer-setup.php; \
    php -r "unlink('composer-setup.php');"; \
    mv composer.phar /usr/local/bin/composer


RUN curl -fsSL https://php.new/install/linux/8.4

RUN composer global require laravel/installer
ENV PATH="/root/.composer/vendor/bin:$PATH"

# Comando para iniciar o Apache quando o contêiner for executado
CMD ["sleep", "infinity"]
