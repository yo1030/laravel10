# laravel10

<!-- 初回コンテナ起動後 laravel プロジェクト作成 -->
composer create-project "laravel/laravel=10.*" laravel10

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

