#Salary calculator
This program calculates a employee salary based in the hours, time of the day and day that employee worked.

##Installation Process (Win):
* Download and Install Laragon (full) from https://laragon.org/download/index.html
* Restart your computer
* Download this repo code unzip it and copy it to C:\laragon\www and change folder name to only: SalaryCalculator
* Open Laragon and then open laragon terminal in the project route C:\laragon\www\SalaryCalculator and run: composer install
* Start Laragon
* Open a web browser and type salarycalculator.test
* That's it, happy Testing!

##Solution Overview

To save the program rules three arrays were used. One storing the week and weekend days. Other to store the hours range and one to store the usd amount. 
To calculate how much an employee has to recieve the next steps are followed:
1. Split the input per days
2. Then for each day determinate if it is week or weekend it will return 0 for week and 1 for weekend
3. Then determinate the hour range for each day it will return de range id 1 for 00:01 - 09:00, 2 for 09:01 - 18:00 15 and 3 for 18:01 - 00:00 20 USD
4. After that and extra calculation is made to determine the number of hours in that range.
5. And then in the usd array ([1 => [25,30],2 => [15,20],3 => [20,25]]) is selected the usd amount using the range id obtained earlier to select the array key and then final int value is selected using the weekorweekend value, also obtained earlier and then this value is multiplied by the number of hours. For example for MONDAY that is a week day the weekOrWeekend value will be 0 and if the worked hours are from  10:00 to 12:00 the rangeId will be 2 then in the usd array the selected value will be usdArray[2][0] obtaining 15 and then is multiplied by the 2 hours giving 30 in total. 
6. Finally, every day values are added to get the total salary.

In this solution a Worker class was implemented to store the worker information: name, workedHours and Salary. And a Calculate class was created to manage the salary calculation process. Also a WorkerGenerator class was created to manage the workers creation process, this class is responsible for splitting the input file for each worker and then create the workers and also helps to validate that minimun 5 inputs are stored in the input file.
A test input file called input.txt is available in the root folder.



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

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
