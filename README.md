# Simple_REST_API (Now JWT protected)
Simple JTW protected REST api combining two different APIs in to one (IMDB open api & Openlibrary api)

### tech stack
Visual studio code 1.36.1  
PHP 7.3.7  
Laravel Framework 5.8.29  
Composer 1.8.6  
GuzzleHttp 6.x  


## JWT Authentication endpoints

### Sending HTTP GET to /getBook or /getMovie endpoints without token in header results in:
```
{
    "status": "Authorization Token not found"
}
```

### Registering user via /register endpoint returns created user details and the token:
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


### Logging in via /login endpoint returns the toke to use:

![alt text](https://i.imgur.com/OoMc6JP.png)
```
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU2NDA4MDA4OCwiZXhwIjoxNTY0MDgzNjg4LCJuYmYiOjE1NjQwODAwODgsImp0aSI6InZLbTkwdjA4ak9oZEdoczIiLCJzdWIiOjIsInBydiI6IjAyMWY4MzkyY2RhODZmY2EyMjQ5YTI4YWQwOWI5ZWI3MjEyYzVhNTgifQ.IzMSaUeS6Al7DTH_BmFDKFM70n3fuvEteztWcSElZ6Y"
}
```

## REST Api end points

### Sending HTTP GET to /getMovie endpoint with title, year & version parameters & token in header returns:
![alt text](https://i.imgur.com/pDPdsTb.png)
```
{
    "Title": "Birds",
    "Year": "2009",
    "Rated": "N\/A",
    "Released": "01 Apr 2009",
    "Runtime": "7 min",
    "Genre": "Animation, Short",
    "Director": "Filipe Abranches",
    "Writer": "Filipe Abranches",
    "Actors": "N\/A",
    "Plot": "N\/A",
    "Language": "N\/A",
    "Country": "Portugal",
    "Awards": "N\/A",
    "Poster": "N\/A",
    "Ratings": [
        {
            "Source": "Internet Movie Database",
            "Value": "5.4\/10"
        }
    ],
    "Metascore": "N\/A",
    "imdbRating": "5.4",
    "imdbVotes": "13",
    "imdbID": "tt1961467",
    "Type": "movie",
    "DVD": "N\/A",
    "BoxOffice": "N\/A",
    "Production": "N\/A",
    "Website": "N\/A",
    "Response": "True"
}
```


### Sending HTTP GET to /getBook with ISBN parameter & token in the header returns:
![alt text](https://i.imgur.com/t23vafg.png)
```
{
    "ISBN:0252006860": {
        "info_url": "https:\/\/openlibrary.org\/books\/OL24231988M\/Their_Eyes_were_Watching_God",
        "bib_key": "ISBN:0252006860",
        "preview_url": "https:\/\/openlibrary.org\/books\/OL24231988M\/Their_Eyes_were_Watching_God",
        "thumbnail_url": "https:\/\/covers.openlibrary.org\/b\/id\/6388993-S.jpg",
        "details": {
            "publishers": [
                "University of Illinois Press"
            ],
            "classifications": {},
            "created": {
                "type": "\/type\/datetime",
                "value": "2010-05-20T21:29:36.729384"
            },
            "title": "Their Eyes were Watching God",
            "identifiers": {},
            "covers": [
                6388993
            ],
            "isbn_13": [
                "978-0252006869"
            ],
            "last_modified": {
                "type": "\/type\/datetime",
                "value": "2010-05-20T21:30:00.678492"
            },
            "latest_revision": 3,
            "key": "\/books\/OL24231988M",
            "publish_date": "March 1, 1978",
            "works": [
                {
                    "key": "\/works\/OL1890347W"
                }
            ],
            "type": {
                "key": "\/type\/edition"
            },
            "revision": 3
        },
        "preview": "noview"
    }
}
```
