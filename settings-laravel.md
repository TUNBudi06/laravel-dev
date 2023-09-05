# installing bootstrap in build laravel

## need to configure in resources

1. download laravel first Bruh
2. after that follow below command
   ```
    composer require laravel/ui
   ```
   >> just little notice cos in my laravel was v8.6.12 i sugget use this command `composer require laravel/ui:^3.4`
3. start installation: `php artisan ui bootstrap`
4. if you want change the file name of scss inside resources you need to change webpack.mix.js
5. after that gathering files by `npm install`
6. then compiling by `npm run production`
    >> just for dev you can use `npm run dev`
