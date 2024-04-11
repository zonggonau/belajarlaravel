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

## membuat seeder

misalkan sudah ada file migration dan kemudian kita akan buat file seeder terpisah

buat seeder baru untuk table ```songs```
```
php artisan make:seeder SongSeeder
```

buat seeder baru untuk table ```artists```
```
php artisan make:seeder ArtistSeeder
```

## membuat model
misalkan kita sudah punya migrasi dan juga seeder

membuat model baru untuk table ```songs```
```
php artisan make:model Song
```

membuat model baru untuk table ```artists```
```
php artisan make:model Artis
```

## Membuat factory

misalkan kita sudah punya model dengan nama Song
kemudian kita akan buat factory yang terhubung ke model Song

```
php artisan make:factory SongFactory --model=Song
```
### Model **Song**
tidak banyak perubahan yang dilakukan
pastikan saja menggunakan
```
use Illuminate\Database\Eloquent\Factories\HasFactory;
```
dan juga
```
use HasFactory;
```

![model](https://github.com/zonggonau/belajarlaravel/assets/45115034/ed04ad5a-1892-4e02-9d3c-71b30a8ecc83)

### Migration
![migration](https://github.com/zonggonau/belajarlaravel/assets/45115034/51a27197-64d4-4aab-99ec-e0f6cf685fe1)

### Factory
pastikan menyertakan atau menggunakan model song
```
use App\Models\Song;
```
tambahkan juga
```
protected $model = Song::class;
```
pastikan nama field di factory sama dengan yang ada di migration
bisa juga menggunakan faker, berikut contoh untuk membuat sebuah kalimat
```
fake()->sentence()
```
![factory](https://github.com/zonggonau/belajarlaravel/assets/45115034/094c1bd1-77b8-4613-933d-455afaf153bd)

### Seeder
tambahkan script berikut untuk membuat seeder bedasarkan factory yang sudah dibuat
```
Song::factory(5)->create();
```
![seeder](https://github.com/zonggonau/belajarlaravel/assets/45115034/d582a063-1f0b-4d74-a7a5-3865d37e5367)

kemudian tambahkan ```SongSeeder::class``` pada file **DatabaseSeeder.php**
![database_seeder](https://github.com/zonggonau/belajarlaravel/assets/45115034/c94bc524-f5de-48d6-9bde-137323e75838)
