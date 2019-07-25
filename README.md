# Simple_REST_API (Now JWT protected)
Simple rest api made with PHP (Laravel framework)

### tech stack
Visual studio code 1.36.1
PHP 7.3.7
Laravel Framework 5.8.29
Composer 1.8.6
GuzzleHttp 6.x

#### Simple JTW protected api combining two different APIs in to one (IMDB open api & Openlibrary api)

##### Using /getBook or or /getMovie endpoints without token in header results in:
```
{
    "status": "Authorization Token not found"
}


```

##### Registering user via /register endpoint returns created user details and the token:
![alt text](https://i.imgur.com/IE6Jwr3.png)
```
{
    "user": {
        "name": "Linda Ahola",
        "email": "lindaahola@gmail.com",
        "updated_at": "2019-07-25 18:06:32",
        "created_at": "2019-07-25 18:06:32",
        "id": 2
    },
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9yZWdpc3RlciIsImlhdCI6MTU2NDA3Nzk5MiwiZXhwIjoxNTY0MDgxNTkyLCJuYmYiOjE1NjQwNzc5OTIsImp0aSI6IkxWMEhqZjlFWFhtNmRZNFAiLCJzdWIiOjIsInBydiI6IjAyMWY4MzkyY2RhODZmY2EyMjQ5YTI4YWQwOWI5ZWI3MjEyYzVhNTgifQ.rLwG25kmuuNs4yKKG1-AbqCRuPHy6n4Qhl3HAtecpvk"
}


```
![alt text](http://url/to/img.png)
```
dsads
```
![alt text](http://url/to/img.png)
```
dsads
```
![alt text](http://url/to/img.png)
```
dsads
```
![alt text](http://url/to/img.png)
```
dsads
```
