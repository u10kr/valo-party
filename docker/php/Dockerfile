FROM dunglas/frankenphp:1.1-php8.2

ARG USER=www-data
ENV XDG_CONFIG_HOME=/tmp

RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libnss3-tools \
        zlib1g-dev \
        git \
        zip \
        unzip \
        librabbitmq-dev \
        libpq-dev \
        curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

RUN mkdir -p /var/www/.npm && chown -R ${USER}:${USER} /var/www/.npm

RUN install-php-extensions \
    pdo_pgsql \
    pcntl \
    opcache

COPY --from=composer/composer:2-bin /composer /usr/local/bin/

WORKDIR /var/www/html
RUN useradd -D ${USER}; \
    setcap CAP_NET_BIND_SERVICE=+eip /usr/local/bin/frankenphp; \
    chown -R ${USER}:${USER} /data/caddy && \
    chown -R ${USER}:${USER} /config/caddy;
USER ${USER}

EXPOSE 80 443
