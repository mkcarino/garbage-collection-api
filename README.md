# Gabage Collection Api
A simple API for keeping tabs on Garbage collection day and time.
### Build with
* Laravel
* MySql

## How use the Api

Method | URI | Name | Action
--- | --- | --- | ---
GET | api/days | days.index | App\Http\Controllers\DayController@index     
POST | api/days | days.store | App\Http\Controllers\DayController@store      
GET | api/days/showDaily/{day} | days.showDaily | App\Http\Controllers\DayController@showDaily 
GET | api/days/type/{day} | days.showType | App\Http\Controllers\DayController@showType  
GET | api/days/{day} | days.show | App\Http\Controllers\DayController@show      
PUT | api/days/{day} | days.update | App\Http\Controllers\DayController@update
DELETE | api/days/{day} | days.destroy | App\Http\Controllers\DayController@destroy   

## Acknowledgements
* [Laravel](https://laravel.com/)
* [MySql](https://www.mysql.com/)
* [XAMMP](https://www.apachefriends.org/index.html/)
* [Composer](https://getcomposer.org/)

