# Gabage Collection Api
A simple API for keeping tabs on Garbage collection day and time.
### Build with
* Laravel
* MySql

## How use the Api

Method | URI 
--- | --- | 
GET | api/days   
POST | api/days     
GET | api/days/showDaily/{day} 
GET | api/days/type/{day}  
GET | api/days/{day}      
PUT | api/days/{day} 
DELETE | api/days/{day} 

## Example:
**GET garbage type**
```
GET /api/type/secco
```
**Response:**
```javascript
{
    "id": 6,
    "day": "Martedì",
    "time": "08:00",
    "type": "Secco",
    "created_at": "2021-05-03T09:16:10.000000Z",
    "updated_at": "2021-05-03T09:16:10.000000Z"
}
```

## Acknowledgements
* [Laravel](https://laravel.com/)
* [MySql](https://www.mysql.com/)
* [XAMMP](https://www.apachefriends.org/index.html/)
* [Composer](https://getcomposer.org/)

