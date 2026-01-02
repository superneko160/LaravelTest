FROM php:8.3-fpm-trixie

# コンテナ内のサーバー環境変数の設定
# Composer は安定版を利用
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# インストール可能なパッケージ一覧更新とNode.jsのインストール
RUN apt-get update && \
    apt-get install -y curl && \
    # Node.js 24のインストール
    curl -fsSL https://deb.nodesource.com/setup_24.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g pnpm && \
    # Laravelに必要なパッケージインストール
    # gd拡張に必要なライブラリも含む
    apt-get -y install --no-install-recommends git unzip libzip-dev libicu-dev libonig-dev \
    libpng-dev libjpeg-dev libfreetype6-dev libwebp-dev && \
    # パッケージインストールで使用したキャッシュファイル削除
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    # gdの設定 (freetype, jpeg, webpを有効化)
    docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp && \
    # PHPの拡張ライブラリインストール
    docker-php-ext-install intl pdo_mysql gd zip bcmath

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /data

