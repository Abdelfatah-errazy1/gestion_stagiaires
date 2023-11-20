@echo off

REM Start XAMPP Control Panel
start "" "C:\xampp\xampp-control.exe"

REM Wait for XAMPP Control Panel to open (adjust the timeout as needed)
timeout /t 5

REM Start Apache and MySQL
"C:\xampp\xampp_start.exe"

REM Wait for Apache and MySQL to start (adjust the timeout as needed)
timeout /t 6

REM Change directory to your Laravel project directory
cd "c:\xampp\htdocs\nom-du-projet"

REM Start Laravel project
start cmd /k php artisan serve

REM Open Laravel project in browser (adjust the browser and URL as needed)
start chrome http://localhost:8000

exit
