FROM php:8.1-cli

# Install the SOAP extension
RUN apt-get update && apt-get install -y libxml2-dev \
    && docker-php-ext-install soap

COPY . /app
WORKDIR /app
EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000"]
