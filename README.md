# laravel10

<!-- 初回コンテナ起動後 laravel プロジェクト作成 -->
composer create-project "laravel/laravel=10.10" laravel10

<!-- envファイル修正 -->
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel10
DB_USERNAME=mysql_use
DB_PASSWORD=password

<!-- 権限付与 -->
chmod 777 ./storage
chmod 777 ./storage/*
chmod 777 ./storage/*/*

<!-- install livewire -->
composer require livewire/livewire
php artisan make:livewire counter
php artisan livewire:layout

<!-- install breeze -->
composer require laravel/breeze --dev
php artisan breeze:install

<!-- migrate -->
php artisan migrate

<!-- mysql の権限変更 -->
chmod 777 /var/lib
chmod 777 /var/lib/mysql

<!-- mysql への接続 -->
mysql -h 127.0.0.1 laravel10 -u mysql_use -p -P 33067

