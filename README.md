![Laravel Nepal](https://github.com/pratiksh404/laranepal/blob/main/img/laranepal.png)

[![Stars](https://img.shields.io/github/stars/pratiksh404/laranepal)](https://github.com/pratiksh404/laranepal/stargazers)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/pratiksh/lara-nepal.svg?style=flat-square)](https://packagist.org/packages/pratiksh/lara-nepal)

# LaraNepal

## Install

```bash
composer require pratiksh/laranepal
```

then publish the package seeds

```sh
php artisan import:nepal
```

then call them in DatabaseSeeder.php

```sh
   class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinceSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(MunicipalitySeeder::class);
    }
}
```

that's it you are good to go

`Note` if seeder not found run `composer dump-autoload`

## Usage

Package uses facade `LaraNepal` to retrive

- Provinces
- Districts
- Municipalities

```sh
// use Pratiksh\LaraNepal\Facade\LaraNepal;

$provinces = LaraNepal::provinces();
$districts = LaraNepal::districts();
$municipalities = LaraNepal::municipalities();
```

## Relations

Package also provides relation among provinces, districts and municipalities.

```sh
// use Pratiksh\LaraNepal\Facade\LaraNepal;

// Province District Relation
$province = LaraNepal::provinces()->first();
$provinces->districts; // Retrives districts of that particular province

// District Province Relation
$district = LaraNepal::districts()->first();
$district->province; // Retrives province where that district belongs to.

// District Municipality Relation
$district = LaraNepal::districts()->first();
$district->municipalities;

// Muncipality district relation
$municipality = LaraNepal::municipalities()->first();
$municipality->district; // Retrive district where that municipality belongs to
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email pratikdai404@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
