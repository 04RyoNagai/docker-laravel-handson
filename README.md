# docker-laraval-handson

### MySQL接続コマンド
docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'

### appコンテナ接続コマンド
docker compose exec app bash

### BootStrap導入
apt install -y nodejs npm
npm install n -g
n stable

// Laravel/uiの導入(メモリオーバーするため一時的に上限解放して実行 & バージョン指定なしだとlaravel/uiのインストールに失敗するため設定)
COMPOSER_MEMORY_LIMIT=-1 $(which composer) require laravel/ui:^3.1

// Bootstrap導入
php artisan ui bootstrap 

// npmをinstall & run
npm install && npm run dev 