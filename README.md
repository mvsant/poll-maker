<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Poll maker

An app made for create optional polls in a simple and fast way.

This Project make use of [Pusher](https://pusher.com/) channel messenger, you need to provide Pusher credentials and (sa1 cluster) for realtime broadcast.

## Technologies used

- Laravel Framework 9.21.3
- PHP 8.0.22
- Mysql Ver 15.1 Distrib 10.4.24-MariaDB, for Linux
- NPM 8.11.0
- Nodejs v16.16.0
- Tailwind 3.1.6
- Pusher-js   7.3.0
- Pusher-php-server 7.0
- Flowbite-js 1.5.2 (CDN)

And others Laravel packages in-the-box.

**Note: different versions of PHP and Laravel may cause this project not work as expected**

## Installation 

Copy and paste commands below to get started:

```bash
git clone git@github.com:mvsant/poll-maker.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:refresh --seed
php artisan serve
#Go to link localhost:8000
```

## About Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
