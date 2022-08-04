<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

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

## Mpdf with laravel

First Install package by following this [package link](https://packagist.org/packages/carlos-meneses/laravel-mpdf) and follow its step. Next is to downlaod fonts from this bangla fonts website [link](https://www.omicronlab.com/bangla-fonts.html). After Completing this step you will keep your font file inside project/vendor/mpdf/mpdf/src/Config/FontVariables.php and open FontVariables.php and search for 'indics' ,then after pothana2000 ,add follwoing code 
```
"nikosh" => ['R' => "Nikosh.ttf",'useOTL' => 0xFF,]

```
You are done completing this step. 

Create a view file ready in your laravel resource folder for pdf. after completing this step then in controller 

## Basic Usage

To use Laravel Mpdf add something like this to one of your controllers. You can pass data to a view in `/resources/views`.

```php
//....
class ReportController extends Controller {
  public function generate_pdf()
  {
    $mpdf = new \Mpdf\Mpdf([
            'default_font_size' => 12,
    		'default_font'	=> 'nikosh'
    ]);
    $mpdf->writeHTML(view('printpdf'));
    $mpdf->output();
  }
}
```
![image](https://user-images.githubusercontent.com/7622577/182757879-5cc44238-4aee-4cc8-871e-f67bca0cc606.png)


