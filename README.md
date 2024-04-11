#

## Setup and steps

Setup database connection
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=belajarlaravel_janzen
DB_USERNAME=root
DB_PASSWORD=root
```

Generate key
```
php artisan key:generate
```

Migrate database
```
php artisan migrate
```

Jika database sudah dimigraasi sebelumnya dan perlu mgirate lagi, gunakan ```migrate:fresh``` untuk migrasi ulang
```
php artisan migrate:fresh
```

reset atau hapus table di database
```
php artisan migrate:reset 
```

cata membuat table baru menggunakan migration

Membuat migration saja

contoh kita buat table "songs"
```
php artisan make:migration create_songs_table
```

selanjutnya misalkan kita buat table untuk "artists"
```
php artisan make:migration create_artists_table
```


download perubahan baru dari remote
```
git pull
```


## clone project pertama kali

setup ```.env``` atur koneksi database

Generate key
```
php artisan key:generate
```

install composer
```
composer install
```

lakukan migrasi database bisa gunakan ```php artisan migrate``` atau ```php artisan migrate:fresh``` atau migrasi dengan seeder ```php artisan migrate:fresh --seed```

## membuat model sekalian dengan migrasi, controller, seeder dan factory

```
php artisan make:model Category -mcsf
```

jalankan migrasi dengan disertakan sekalian isi data di database gunakan ```--seed```
```
php artisan migrate:fresh --seed
```