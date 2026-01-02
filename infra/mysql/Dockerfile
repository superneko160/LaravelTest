FROM mysql:8.4

ENV MYSQL_DATABASE=laravel \
  MYSQL_USER=sneko \
  MYSQL_PASSWORD=secret \
  MYSQL_ROOT_PASSWORD=secret \
  TZ=Asia/Tokyo

# https://ja.stackoverflow.com/questions/90732/docker%E3%81%A7mysql%E3%82%B3%E3%83%B3%E3%83%86%E3%83%8A%E3%81%8C%E8%B5%B7%E5%8B%95%E5%BE%8C%E3%81%99%E3%81%90%E3%81%ABexited-1%E3%81%AB%E3%81%AA%E3%81%A3%E3%81%A6%E3%81%97%E3%81%BE%E3%81%86
# COPY ./my.cnf /etc/mysql/my.cnf
# RUN chmod 644 /etc/mysql/my.cnf
