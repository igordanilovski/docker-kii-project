<h2>Проект по предметот Дизајн и архитектура на софтвер</h2>
<ul>
    <li>
        <strong>Домашна задача 1</strong>
            <p>Документацијата на овој проект во однос на барањата од првата домашна задача се наоѓа во <a href="https://github.com/igordanilovski/DIANS/tree/master/Documentation">Documentation</a> фолдерот.</p>
<p>Целосната бизнис логика на апликацијата за процесот на Pipe & Filter е напишана во фајлот на <a href="https://github.com/igordanilovski/DIANS/blob/master/app/Http/Controllers/GetOnlineData.php" target="_blank">следниот линк</a>, а моделот кој од бекенд комуницира со локална MySQL база на податоци во која се зачувани ентитетите се наоѓа на <a target="_blank" href="https://github.com/igordanilovski/DIANS/blob/master/app/Models/Places.php">следниот линк</a>.</p>
    </li>
    <br>
    <li>
        <strong>Домашна задача 2</strong>
        <p>Потребните документи за овој дел од домашната задача се наоѓаат во фолдерот Homework 2 (поставен е во Documentation фолдерот) достапен на следниот <a href="https://github.com/igordanilovski/DIANS/tree/master/Documentation/Homework%202">линк</a>.</p>
        <p>Во однос на техничкиот прототип, апликацијата е градена врз основа на PHP Laravel фрејмворкот (поради тоа кодот не е ставен во фолдерот prototype, само видеото е прикачено во истиот. За тоа кој код е искористен и напишан, доколку сакате да го видите подоле е објаснето!), па истата се започнува со командата <code>php artisan serve</code> во главниот фолдер на апликацијата која што ja запонува веб апликацијата и креирани се следните рути:</p>
        <code>
            localhost:8080/prototype/get
        </code>
        <br>
        <code>
            localhost:8080/prototype/get/{id}
        </code>
        <p>Првата рута ги прикажува сите рекорди од MySQL базата во plain HTML, втората рута ги прикажува деталите само за специфицираниот рекорд од базата по даден <code>id</code>. Доколку не е пронајден таков рекорд за даденото <code>id</code> се враќа соодветна порака.
        <p>Логиката за овој дел од задачата е напишана во <code>RecordController</code> контролерот кој се наоѓа во фолдерот со контролери на следниот <a href="https://github.com/igordanilovski/DIANS/tree/master/app/Http/Controllers">линк</a>.</p>
        <p>Соодветните views за прикажување може да ги погледнете на следниот <a href="https://github.com/igordanilovski/DIANS/tree/master/resources/views">линк</a>.</p>
    </li>
    <br>
    <li>
        <strong>Домашна задача 3</strong>
        <p>Проектот е прикачен на <a href="http://still-garden-35576.herokuapp.com/">Heroku</a>. Апликацијата како извор на податоци користи MySQL база на податоци.</p>
    </li>
    <br>
    <li>
        <strong>Домашна задача 4</strong>
        <p>Проектот е прикачен на <a href="https://still-garden-35577.herokuapp.com/">Heroku</a> (различен е линкот од претходната Домашна задача). Во однос на претходната домашна, напрaвени се неколку промени во кодот, односно извршено е рефакторирање (воглавно во логиката кај контролерите).
        Исто така креирани се API повици кои враќаат соодветни резултати во JSON формат кои понатака би можеле да се искористат за било каква намена. Пример пристап до истите:
        </p>
        <code>
            http://still-garden-35577.herokuapp.com/api/places/
        </code>
        <br>
        <code>
            http://still-garden-35577.herokuapp.com/api/places/{id}
        </code>
        <p>НАПОМЕНА: Промените во кодот за оваа домашна се во <a href="https://github.com/igordanilovski/DIANS/tree/development">development</a> бренчот, и новата апликација на Heroku за оваа домашна поврзана е со <a href="https://github.com/igordanilovski/DIANS/tree/development">development</a> бренчот.</p>
    </li>
</ul>

<hr>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**
- **[Romega Software](https://romegasoftware.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
