---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://groscery.test/docs/collection.json)

<!-- END_INFO -->

#Group Management

APIs for managing groups
<!-- START_80a34f0de78909fc8d433023aa42a1c8 -->
## Get group items

Get all the group's items

> Example request:

```bash
curl -X GET -G "http://groscery.test/api/groups/items" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/groups/items",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": {
        "id": 1
    }
}
```

### HTTP Request
`GET api/groups/items`


<!-- END_80a34f0de78909fc8d433023aa42a1c8 -->

#Item Management

APIs for managing items
<!-- START_1f6cd66d5c56ac06e56d5fc151f9281f -->
## Add new item

> Example request:

```bash
curl -X POST "http://groscery.test/api/items/add" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/items/add",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/items/add`


<!-- END_1f6cd66d5c56ac06e56d5fc151f9281f -->

<!-- START_1e280180688e4ae837f9838e2ce029d0 -->
## Sets given item out of stock

> Example request:

```bash
curl -X POST "http://groscery.test/api/items/item.out-of-stock/{item_id}" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/items/item.out-of-stock/{item_id}",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/items/item.out-of-stock/{item_id}`


<!-- END_1e280180688e4ae837f9838e2ce029d0 -->

<!-- START_6e0f5b04c6e1fd742d1c52fbbf0f3cbf -->
## Sets given item in stock

> Example request:

```bash
curl -X POST "http://groscery.test/api/items/item.in-stock/{item_id}" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/items/item.in-stock/{item_id}",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/items/item.in-stock/{item_id}`


<!-- END_6e0f5b04c6e1fd742d1c52fbbf0f3cbf -->

#User Management

APIs for managing users
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login user

> Example request:

```bash
curl -X POST "http://groscery.test/api/login" \
    -H "Content-Type: application/x-www-form-urlencoded" \
    -d "email"="1Oe4NT9IacpAnf2E" \
    -d "password"="v5VroN4i9y27CyQw" 
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/login",
    "method": "POST",
    "data": {
        "email": "1Oe4NT9IacpAnf2E",
        "password": "v5VroN4i9y27CyQw"
    },
    "headers": {
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": {
        "token": "{token}"
    }
}
```

### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | User's email
    password | string |  required  | User's password

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register new user

> Example request:

```bash
curl -X POST "http://groscery.test/api/register" \
    -H "Content-Type: application/x-www-form-urlencoded" \
    -d "name"="ju8gUSenE99mGPVC" \
    -d "email"="DpVftU1ez6VAvGAW" \
    -d "password"="HXtBG7t0OymTlZXq" \
    -d "c_password"="HghbzXHvAxjt3S7a" 
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/register",
    "method": "POST",
    "data": {
        "name": "ju8gUSenE99mGPVC",
        "email": "DpVftU1ez6VAvGAW",
        "password": "HXtBG7t0OymTlZXq",
        "c_password": "HghbzXHvAxjt3S7a"
    },
    "headers": {
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": {
        "token": "{token}"
    }
}
```

### HTTP Request
`POST api/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | User's name
    email | email |  required  | User's email
    password | string |  required  | User's password
    c_password | string |  required  | Confirmed password. Should match password

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_a69bb9a29be86907a2edb0c13ea1f993 -->
## User details

Returns basic user information

> Example request:

```bash
curl -X POST "http://groscery.test/api/details" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/details",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": {
        "id": 1,
        "group_id": 1,
        "name": "Tommy",
        "pic_url": "{url|null}}",
        "email": "tommy@usc.edu",
        "email_verified_at": null,
        "created_at": "yyyy-mm-dd hh:mm:ss",
        "updated_at": "yyyy-mm-dd hh:mm:ss"
    }
}
```

### HTTP Request
`POST api/details`


<!-- END_a69bb9a29be86907a2edb0c13ea1f993 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Logout user

> Example request:

```bash
curl -X POST "http://groscery.test/api/logout" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/logout",
    "method": "POST",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": "Token has been revoked"
}
```

### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_a7c568ace3e10f3003efe20573987609 -->
## User items

Returns a user's items

> Example request:

```bash
curl -X GET -G "http://groscery.test/api/users/items" \
    -H "Authorization: Bearer {token}" \
    -H "Accept: application/json" \
    -H "Content-Type: application/x-www-form-urlencoded"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://groscery.test/api/users/items",
    "method": "GET",
    "headers": {
        "Authorization": "Bearer {token}",
        "Accept": "application/json",
        "Content-Type": "application/x-www-form-urlencoded",
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "success": {
        "id": 1
    }
}
```

### HTTP Request
`GET api/users/items`


<!-- END_a7c568ace3e10f3003efe20573987609 -->


