# docker-laraval-handson

### MySQL接続コマンド
docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'

### appコンテナ接続コマンド
docker compose exec app bash
