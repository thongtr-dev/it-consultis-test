FROM wordpress:6.2.2-php8.1-apache
COPY --chown=www-data:www-data .. /var/www/html
VOLUME /var/www/html
COPY --chown=www-data:www-data wp-config-docker.php /usr/src/wordpress
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
