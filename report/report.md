PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php/20131226/php_pdo_pgsql.dll' - /usr/lib/php/20131226/php_pdo_pgsql.dll: cannot open shared object file: No such file or directory in Unknown on line 0
PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php/20131226/php_pgsql.dll' - /usr/lib/php/20131226/php_pgsql.dll: cannot open shared object file: No such file or directory in Unknown on line 0
PHPUnit 5.7.17 by Sebastian Bergmann and contributors.

.FF.............                                                  16 / 16 (100%)

Time: 20.1 seconds, Memory: 37.25MB

There were 2 failures:

1) Tests\Feature\DaftarThreadTest::test_daftar_thread_page_response
Expected status code 200 but received 500.
Failed asserting that false is true.

/home/geraldo/PhpstormProjects/ppl/PPLD3/vendor/laravel/framework/src/Illuminate/Foundation/Testing/TestResponse.php:62
/home/geraldo/PhpstormProjects/ppl/PPLD3/tests/Feature/DaftarThreadTest.php:23

2) Tests\Feature\DeleteCommentTest::test_delete_comment_response
Failed asserting that 404 matches expected 200.

/home/geraldo/PhpstormProjects/ppl/PPLD3/tests/Feature/DeleteCommentTest.php:28

FAILURES!
Tests: 16, Assertions: 21, Failures: 2.


[1;37;40mCode Coverage Report:     [0m
[1;37;40m  2017-04-19 12:06:29     [0m
[1;37;40m                          [0m
[1;37;40m Summary:                 [0m
[37;41m  Classes: 24.00% (6/25)  [0m
[37;41m  Methods: 15.48% (13/84) [0m
[37;41m  Lines:   26.59% (46/173)[0m

\App::TagBatik
  [30;42mMethods: 100.00% ( 1/ 1)[0m   [30;42mLines: 100.00% (  1/  1)[0m
\App\Console::Kernel
  [30;42mMethods: 100.00% ( 2/ 2)[0m   [30;42mLines: 100.00% (  3/  3)[0m
\App\Exceptions::Handler
  [30;43mMethods:  66.67% ( 2/ 3)[0m   [37;41mLines:  50.00% (  3/  6)[0m
\App\Http\Controllers::PageController
  [37;41mMethods:   0.00% ( 0/ 4)[0m   [30;43mLines:  66.67% ( 18/ 27)[0m
\App\Providers::AppServiceProvider
  [30;42mMethods: 100.00% ( 2/ 2)[0m   [30;42mLines: 100.00% (  2/  2)[0m
\App\Providers::AuthServiceProvider
  [30;42mMethods: 100.00% ( 1/ 1)[0m   [30;42mLines: 100.00% (  3/  3)[0m
\App\Providers::EventServiceProvider
  [30;42mMethods: 100.00% ( 1/ 1)[0m   [30;42mLines: 100.00% (  2/  2)[0m
\App\Providers::RouteServiceProvider
  [30;42mMethods: 100.00% ( 4/ 4)[0m   [30;42mLines: 100.00% ( 14/ 14)[0m
