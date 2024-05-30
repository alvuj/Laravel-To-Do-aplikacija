<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Laravel To-Do Aplikacija
Ovo je jednostavna Laravel aplikacija za upravljanje zadacima (To-Do lista). Aplikacija omogućava korisnicima kreiranje, uređivanje i brisanje zadataka.

Funkcionalnosti
Kreiranje novih zadataka
Pregled svih zadataka
Obilježavanje zadataka kao završenih
Pretraga zadataka po opisu
Instalacija
Klonirajte repozitorij:

git clone https://github.com/alvuj/laravel-to-do-aplikacija.git
cd laravel-to-do-aplikacija
Instalirajte zavisnosti koristeći Composer:

composer install
Postavite .env.example na .env i unesite svoju konfiguraciju

Generirajte aplikacijski ključ (nije nužno):

php artisan key:generate
Pokrenite migracije za kreiranje tablica u bazi podataka:

php artisan migrate
Pokrenite razvojni server:

php artisan serve
Aplikacija će biti dostupna na http://localhost:8000. ili http://localhost:8000

Struktura Projekta
app/Http/Controllers/TasksController.php: Kontroler za rukovanje HTTP zahtjevima vezanim za zadatke.
resources/views/tasks: Blade šabloni za prikazivanje zadataka.
create.blade.php: Forma za kreiranje novog zadatka.
index.blade.php: Prikaz liste zadataka sa formom za pretragu i brojem završenih zadataka.
routes/web.php: Definicija ruta za web aplikaciju.
database/migrations: Migracije za kreiranje i modifikaciju tablica u bazi podataka.
2024_05_29_180000_create_tasks_table.php: Kreira tablicu tasks.
2024_05_29_202357_add_complete_to_tasks_table.php: Dodaje kolonu completed_at u tablicu tasks.
Konfiguracija
config/app.php: Glavni konfiguracijski file za Laravel aplikaciju.
composer.json: Konfiguracijski file za Composer, definira zavisnosti i autoload putanje za projekt.
Licenca
Ovaj projekt je licenciran pod MIT licencom. Pogledajte LICENSE file za više informacija.

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
