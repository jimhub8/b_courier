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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/open" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/open"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/clockwork/1" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/clockwork/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_01a252c50bd17b20340dbc5a91cea4b7 -->
## _debugbar/telescope/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/telescope/1" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/telescope/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET _debugbar/telescope/{id}`


<!-- END_01a252c50bd17b20340dbc5a91cea4b7 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/stylesheets" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/stylesheets"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_debugbar/assets/javascript" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/assets/javascript"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://localhost/_debugbar/cache/1/" 
```

```javascript
const url = new URL(
    "http://localhost/_debugbar/cache/1/"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_ffeb21a323d661b8d5ed8072620cc36e -->
## laravel-websockets
> Example request:

```bash
curl -X GET \
    -G "http://localhost/laravel-websockets" 
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET laravel-websockets`


<!-- END_ffeb21a323d661b8d5ed8072620cc36e -->

<!-- START_7a96267d047ecbef5cd21c3dd1691fe0 -->
## laravel-websockets/api/{appId}/statistics
> Example request:

```bash
curl -X GET \
    -G "http://localhost/laravel-websockets/api/1/statistics" 
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/api/1/statistics"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "peak_connections": {
        "x": [],
        "y": []
    },
    "websocket_message_count": {
        "x": [],
        "y": []
    },
    "api_message_count": {
        "x": [],
        "y": []
    }
}
```

### HTTP Request
`GET laravel-websockets/api/{appId}/statistics`


<!-- END_7a96267d047ecbef5cd21c3dd1691fe0 -->

<!-- START_69dd61efc04363546d99d1d7cba7bf4c -->
## laravel-websockets/auth
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/auth" 
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/auth"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/auth`


<!-- END_69dd61efc04363546d99d1d7cba7bf4c -->

<!-- START_5f593177feb1276b604ea7c2cec73a03 -->
## laravel-websockets/event
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/event" 
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/event"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/event`


<!-- END_5f593177feb1276b604ea7c2cec73a03 -->

<!-- START_a114cbb106b4fbbabe00910c4c3fa19c -->
## laravel-websockets/statistics
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/statistics" 
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/statistics"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/statistics`


<!-- END_a114cbb106b4fbbabe00910c4c3fa19c -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/1" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_66df3678904adde969490f2278b8f47f -->
## Authenticate the request for channel access.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/broadcasting/auth" 
```

```javascript
const url = new URL(
    "http://localhost/broadcasting/auth"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET broadcasting/auth`

`POST broadcasting/auth`


<!-- END_66df3678904adde969490f2278b8f47f -->

<!-- START_74706f9979b233af4884ef84e0ec7c73 -->
## api/apiSearch/{search}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/apiSearch/1" 
```

```javascript
const url = new URL(
    "http://localhost/api/apiSearch/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/api\/apiSearch\/1?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/api\/apiSearch\/1?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/api\/apiSearch\/1",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET api/apiSearch/{search}`


<!-- END_74706f9979b233af4884ef84e0ec7c73 -->

<!-- START_52f6a9277217e607b313ff8f0a357aa0 -->
## api/woocommerce
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/woocommerce" 
```

```javascript
const url = new URL(
    "http://localhost/api/woocommerce"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET api/woocommerce`

`POST api/woocommerce`

`PUT api/woocommerce`

`PATCH api/woocommerce`

`DELETE api/woocommerce`

`OPTIONS api/woocommerce`


<!-- END_52f6a9277217e607b313ff8f0a357aa0 -->

<!-- START_3205ce71c134175d802bda484c46394e -->
## api/shipment
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/shipment" 
```

```javascript
const url = new URL(
    "http://localhost/api/shipment"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET api/shipment`


<!-- END_3205ce71c134175d802bda484c46394e -->

<!-- START_8258d421f456b2d71668be13ab2c6919 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/shipment" 
```

```javascript
const url = new URL(
    "http://localhost/api/shipment"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/shipment`


<!-- END_8258d421f456b2d71668be13ab2c6919 -->

<!-- START_bea6a4710aa000c21b76424a43974df2 -->
## api/shipment/{shipment}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/shipment/1" 
```

```javascript
const url = new URL(
    "http://localhost/api/shipment/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET api/shipment/{shipment}`


<!-- END_bea6a4710aa000c21b76424a43974df2 -->

<!-- START_c8173b2bedca44632bcbb485f4bb4ffe -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/shipment/1" 
```

```javascript
const url = new URL(
    "http://localhost/api/shipment/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/shipment/{shipment}`

`PATCH api/shipment/{shipment}`


<!-- END_c8173b2bedca44632bcbb485f4bb4ffe -->

<!-- START_2c89045893cfc9898aef3e7c5facd1ab -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/shipment/1" 
```

```javascript
const url = new URL(
    "http://localhost/api/shipment/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/shipment/{shipment}`


<!-- END_2c89045893cfc9898aef3e7c5facd1ab -->

<!-- START_d519b68b3d3020c16f569a939a3bd022 -->
## api/glSearch/{search}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/glSearch/1" 
```

```javascript
const url = new URL(
    "http://localhost/api/glSearch/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/glSearch/{search}`


<!-- END_d519b68b3d3020c16f569a939a3bd022 -->

<!-- START_ddc5ea523d62154609ac550d33d0989c -->
## api/getShipments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getShipments" 
```

```javascript
const url = new URL(
    "http://localhost/api/getShipments"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET api/getShipments`


<!-- END_ddc5ea523d62154609ac550d33d0989c -->

<!-- START_41b239c1b451af6c9a8cba102520ee38 -->
## api/getLogedinUsers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/getLogedinUsers" 
```

```javascript
const url = new URL(
    "http://localhost/api/getLogedinUsers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET api/getLogedinUsers`


<!-- END_41b239c1b451af6c9a8cba102520ee38 -->

<!-- START_4c5ececbb7a60537296d5ab5e9e0bb8a -->
## confirmation
> Example request:

```bash
curl -X GET \
    -G "http://localhost/confirmation" 
```

```javascript
const url = new URL(
    "http://localhost/confirmation"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET confirmation`

`POST confirmation`

`PUT confirmation`

`PATCH confirmation`

`DELETE confirmation`

`OPTIONS confirmation`


<!-- END_4c5ececbb7a60537296d5ab5e9e0bb8a -->

<!-- START_547c594c3a805318f2d486e5b751052b -->
## register_url
> Example request:

```bash
curl -X GET \
    -G "http://localhost/register_url" 
```

```javascript
const url = new URL(
    "http://localhost/register_url"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "ConversationID": "",
    "OriginatorCoversationID": "",
    "ResponseDescription": "success"
}
```

### HTTP Request
`GET register_url`

`POST register_url`

`PUT register_url`

`PATCH register_url`

`DELETE register_url`

`OPTIONS register_url`


<!-- END_547c594c3a805318f2d486e5b751052b -->

<!-- START_fe4183e484be156a72421d02fa43f3e7 -->
## validation
> Example request:

```bash
curl -X GET \
    -G "http://localhost/validation" 
```

```javascript
const url = new URL(
    "http://localhost/validation"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET validation`

`POST validation`

`PUT validation`

`PATCH validation`

`DELETE validation`

`OPTIONS validation`


<!-- END_fe4183e484be156a72421d02fa43f3e7 -->

<!-- START_b2654e7e22296413be9def5c9ba36d8f -->
## Redirect the user to the Social media authentication page.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login/1" 
```

```javascript
const url = new URL(
    "http://localhost/login/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET login/{service}`


<!-- END_b2654e7e22296413be9def5c9ba36d8f -->

<!-- START_141bf24f04835d5230946d95086545ab -->
## Obtain the user information from Social media.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login/1/callback" 
```

```javascript
const url = new URL(
    "http://localhost/login/1/callback"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET login/{service}/callback`


<!-- END_141bf24f04835d5230946d95086545ab -->

<!-- START_c0f505b72e10817948e65eb5eb744708 -->
## Search the products table.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/search" 
```

```javascript
const url = new URL(
    "http://localhost/search"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "error": "No results found, please try with different keywords."
}
```

### HTTP Request
`GET search`


<!-- END_c0f505b72e10817948e65eb5eb744708 -->

<!-- START_d6e099d5d513c114dc2a2bef4b0a963a -->
## woo_orders
> Example request:

```bash
curl -X GET \
    -G "http://localhost/woo_orders" 
```

```javascript
const url = new URL(
    "http://localhost/woo_orders"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
null
```

### HTTP Request
`GET woo_orders`


<!-- END_d6e099d5d513c114dc2a2bef4b0a963a -->

<!-- START_7cb64c86564488f3edbd1d430ce5ed74 -->
## signup/activate/{token}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/signup/activate/1" 
```

```javascript
const url = new URL(
    "http://localhost/signup/activate/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "This activation token is invalid."
}
```

### HTTP Request
`GET signup/activate/{token}`


<!-- END_7cb64c86564488f3edbd1d430ce5ed74 -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" 
```

```javascript
const url = new URL(
    "http://localhost/login"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" 
```

```javascript
const url = new URL(
    "http://localhost/login"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" 
```

```javascript
const url = new URL(
    "http://localhost/logout"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" 
```

```javascript
const url = new URL(
    "http://localhost/register"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" 
```

```javascript
const url = new URL(
    "http://localhost/register"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" 
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" 
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" 
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" 
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" 
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" 
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_1edf00becb8c9ea2cd19fe261d3e88da -->
## screen
> Example request:

```bash
curl -X GET \
    -G "http://localhost/screen" 
```

```javascript
const url = new URL(
    "http://localhost/screen"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET screen`


<!-- END_1edf00becb8c9ea2cd19fe261d3e88da -->

<!-- START_1ea43de898ddf804991977fba85cc729 -->
## screen_chart
> Example request:

```bash
curl -X GET \
    -G "http://localhost/screen_chart" 
```

```javascript
const url = new URL(
    "http://localhost/screen_chart"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET screen_chart`


<!-- END_1ea43de898ddf804991977fba85cc729 -->

<!-- START_45dfd8541ea78648c470a4434a82412a -->
## get_data
> Example request:

```bash
curl -X GET \
    -G "http://localhost/get_data" 
```

```javascript
const url = new URL(
    "http://localhost/get_data"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET get_data`


<!-- END_45dfd8541ea78648c470a4434a82412a -->

<!-- START_63d2709ba5fc77aa88f0ed42bc5544ee -->
## get_filter_data/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/get_filter_data/1" 
```

```javascript
const url = new URL(
    "http://localhost/get_filter_data/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET get_filter_data/{id}`


<!-- END_63d2709ba5fc77aa88f0ed42bc5544ee -->

<!-- START_401610f5e484f3803dbaa2baa4f556cc -->
## screen_filter_chart/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/screen_filter_chart/1" 
```

```javascript
const url = new URL(
    "http://localhost/screen_filter_chart/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET screen_filter_chart/{id}`


<!-- END_401610f5e484f3803dbaa2baa4f556cc -->

<!-- START_43270a5f39d01325d0c686f1a406739f -->
## screen_chart_1
> Example request:

```bash
curl -X GET \
    -G "http://localhost/screen_chart_1" 
```

```javascript
const url = new URL(
    "http://localhost/screen_chart_1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET screen_chart_1`


<!-- END_43270a5f39d01325d0c686f1a406739f -->

<!-- START_0dbdd14a48b741bc7e92ea854bbce7fa -->
## get_data_1
> Example request:

```bash
curl -X GET \
    -G "http://localhost/get_data_1" 
```

```javascript
const url = new URL(
    "http://localhost/get_data_1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET get_data_1`


<!-- END_0dbdd14a48b741bc7e92ea854bbce7fa -->

<!-- START_d9f20bee3066a41d7a1e627af3128a70 -->
## get_filter_data_1/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/get_filter_data_1/1" 
```

```javascript
const url = new URL(
    "http://localhost/get_filter_data_1/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET get_filter_data_1/{id}`


<!-- END_d9f20bee3066a41d7a1e627af3128a70 -->

<!-- START_fe3dd463f503a9be25ece353d85ffee9 -->
## screen_filter_chart_1/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/screen_filter_chart_1/1" 
```

```javascript
const url = new URL(
    "http://localhost/screen_filter_chart_1/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET screen_filter_chart_1/{id}`


<!-- END_fe3dd463f503a9be25ece353d85ffee9 -->

<!-- START_3743eca756f82eba08536d9208269d84 -->
## logoutOther
> Example request:

```bash
curl -X GET \
    -G "http://localhost/logoutOther" 
```

```javascript
const url = new URL(
    "http://localhost/logoutOther"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET logoutOther`


<!-- END_3743eca756f82eba08536d9208269d84 -->

<!-- START_96636526c095bdf857dc8e04f2538838 -->
## logOtherDevices
> Example request:

```bash
curl -X POST \
    "http://localhost/logOtherDevices" 
```

```javascript
const url = new URL(
    "http://localhost/logOtherDevices"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logOtherDevices`


<!-- END_96636526c095bdf857dc8e04f2538838 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Load homepage

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" 
```

```javascript
const url = new URL(
    "http://localhost/home"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_5a5d1d14e88c529d18800f0c604bee4c -->
## courier
> Example request:

```bash
curl -X GET \
    -G "http://localhost/courier" 
```

```javascript
const url = new URL(
    "http://localhost/courier"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET courier`


<!-- END_5a5d1d14e88c529d18800f0c604bee4c -->

<!-- START_fed00e37fd0a53ee0383b7b27cc0f8ee -->
## courier/{name}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/courier/1" 
```

```javascript
const url = new URL(
    "http://localhost/courier/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET courier/{name}`


<!-- END_fed00e37fd0a53ee0383b7b27cc0f8ee -->

<!-- START_57a8a4ba671355511e22780b1b63690e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/users" 
```

```javascript
const url = new URL(
    "http://localhost/users"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users`


<!-- END_57a8a4ba671355511e22780b1b63690e -->

<!-- START_7fe085c671e1b3d51e86136538b1d63f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/users/1" 
```

```javascript
const url = new URL(
    "http://localhost/users/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT users/{user}`

`PATCH users/{user}`


<!-- END_7fe085c671e1b3d51e86136538b1d63f -->

<!-- START_a948aef61c80bf96137d023464fde21f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/users/1" 
```

```javascript
const url = new URL(
    "http://localhost/users/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE users/{user}`


<!-- END_a948aef61c80bf96137d023464fde21f -->

<!-- START_3e294c23aaeb6a3ca69b8ce11849f5e9 -->
## roles
> Example request:

```bash
curl -X POST \
    "http://localhost/roles" 
```

```javascript
const url = new URL(
    "http://localhost/roles"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST roles`


<!-- END_3e294c23aaeb6a3ca69b8ce11849f5e9 -->

<!-- START_2711d634f18127bafef5f111a2f402d4 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/roles/1" 
```

```javascript
const url = new URL(
    "http://localhost/roles/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT roles/{role}`

`PATCH roles/{role}`


<!-- END_2711d634f18127bafef5f111a2f402d4 -->

<!-- START_990e30ddaebf1e4a496f367b7ceb8dd9 -->
## roles/{role}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/roles/1" 
```

```javascript
const url = new URL(
    "http://localhost/roles/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE roles/{role}`


<!-- END_990e30ddaebf1e4a496f367b7ceb8dd9 -->

<!-- START_ce8cbbda521edca0c70bc9204cb969b0 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/shipment" 
```

```javascript
const url = new URL(
    "http://localhost/shipment"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST shipment`


<!-- END_ce8cbbda521edca0c70bc9204cb969b0 -->

<!-- START_65b50f2fa15d5d29b178752550af3827 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/shipment/1" 
```

```javascript
const url = new URL(
    "http://localhost/shipment/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT shipment/{shipment}`

`PATCH shipment/{shipment}`


<!-- END_65b50f2fa15d5d29b178752550af3827 -->

<!-- START_6a9bece7a4b0fefdcaf975f24629f306 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/shipment/1" 
```

```javascript
const url = new URL(
    "http://localhost/shipment/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE shipment/{shipment}`


<!-- END_6a9bece7a4b0fefdcaf975f24629f306 -->

<!-- START_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/product" 
```

```javascript
const url = new URL(
    "http://localhost/product"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST product`


<!-- END_dfe6fdb3ab2b4c4c229bf21ba5b32643 -->

<!-- START_476695cb4ed1e5a2d79d11db4b0b2080 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/product/1" 
```

```javascript
const url = new URL(
    "http://localhost/product/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT product/{product}`

`PATCH product/{product}`


<!-- END_476695cb4ed1e5a2d79d11db4b0b2080 -->

<!-- START_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/product/1" 
```

```javascript
const url = new URL(
    "http://localhost/product/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE product/{product}`


<!-- END_2aeea7ca8dc8189a66bbdb881a5a9bb4 -->

<!-- START_31b23b8043d3f87c52082561b343f49e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/container" 
```

```javascript
const url = new URL(
    "http://localhost/container"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST container`


<!-- END_31b23b8043d3f87c52082561b343f49e -->

<!-- START_1c59fb72583e29b08c4df658dac5d938 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/container/1" 
```

```javascript
const url = new URL(
    "http://localhost/container/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT container/{container}`

`PATCH container/{container}`


<!-- END_1c59fb72583e29b08c4df658dac5d938 -->

<!-- START_abd0e2ea791e8064f51ce27a35f53ae9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/container/1" 
```

```javascript
const url = new URL(
    "http://localhost/container/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE container/{container}`


<!-- END_abd0e2ea791e8064f51ce27a35f53ae9 -->

<!-- START_30a32610ed0972b79928f04cbc8e14e6 -->
## branches
> Example request:

```bash
curl -X GET \
    -G "http://localhost/branches" 
```

```javascript
const url = new URL(
    "http://localhost/branches"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET branches`


<!-- END_30a32610ed0972b79928f04cbc8e14e6 -->

<!-- START_147832de056deec3334a97de4cc2ac12 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/branches" 
```

```javascript
const url = new URL(
    "http://localhost/branches"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST branches`


<!-- END_147832de056deec3334a97de4cc2ac12 -->

<!-- START_028ca07a8e867cbeb5031d2dd0c91712 -->
## branches/{branch}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/branches/1" 
```

```javascript
const url = new URL(
    "http://localhost/branches/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET branches/{branch}`


<!-- END_028ca07a8e867cbeb5031d2dd0c91712 -->

<!-- START_b948913ab4e8234efb4d533b2396e31c -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/branches/1" 
```

```javascript
const url = new URL(
    "http://localhost/branches/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT branches/{branch}`

`PATCH branches/{branch}`


<!-- END_b948913ab4e8234efb4d533b2396e31c -->

<!-- START_5d554441b115c6ae39d10e879ed08ae8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/branches/1" 
```

```javascript
const url = new URL(
    "http://localhost/branches/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE branches/{branch}`


<!-- END_5d554441b115c6ae39d10e879ed08ae8 -->

<!-- START_760b4e92595b16c77251ce042b991792 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/companies" 
```

```javascript
const url = new URL(
    "http://localhost/companies"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST companies`


<!-- END_760b4e92595b16c77251ce042b991792 -->

<!-- START_7e19f6460759d15e9ce50dadab429d94 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/companies/1" 
```

```javascript
const url = new URL(
    "http://localhost/companies/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE companies/{company}`


<!-- END_7e19f6460759d15e9ce50dadab429d94 -->

<!-- START_b31b5627acb7460122295a247dead3cd -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/email/1" 
```

```javascript
const url = new URL(
    "http://localhost/email/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE email/{email}`


<!-- END_b31b5627acb7460122295a247dead3cd -->

<!-- START_acf78bf9be2c246661e72e2ac248c8c7 -->
## view
> Example request:

```bash
curl -X GET \
    -G "http://localhost/view" 
```

```javascript
const url = new URL(
    "http://localhost/view"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET view`


<!-- END_acf78bf9be2c246661e72e2ac248c8c7 -->

<!-- START_fa0b0e896e8da187f79ea741feec06cd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/status" 
```

```javascript
const url = new URL(
    "http://localhost/status"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET status`


<!-- END_fa0b0e896e8da187f79ea741feec06cd -->

<!-- START_f8bd8c3c9f08a9e9199e6a3fe9fcfaf2 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/status" 
```

```javascript
const url = new URL(
    "http://localhost/status"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST status`


<!-- END_f8bd8c3c9f08a9e9199e6a3fe9fcfaf2 -->

<!-- START_9b6c867fe38e3826b147a2c09e3a2977 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/status/1" 
```

```javascript
const url = new URL(
    "http://localhost/status/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT status/{status}`

`PATCH status/{status}`


<!-- END_9b6c867fe38e3826b147a2c09e3a2977 -->

<!-- START_53fdc6ff436f992b298f9857210617cb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/status/1" 
```

```javascript
const url = new URL(
    "http://localhost/status/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE status/{status}`


<!-- END_53fdc6ff436f992b298f9857210617cb -->

<!-- START_1233a6eb4c0c8110690bdf95ad0ad3d4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/charges" 
```

```javascript
const url = new URL(
    "http://localhost/charges"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST charges`


<!-- END_1233a6eb4c0c8110690bdf95ad0ad3d4 -->

<!-- START_adfe39e1ed6916af0b56e516c6cf1311 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/charges/1" 
```

```javascript
const url = new URL(
    "http://localhost/charges/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT charges/{charge}`

`PATCH charges/{charge}`


<!-- END_adfe39e1ed6916af0b56e516c6cf1311 -->

<!-- START_b1201273211c4b9932e21844f1f6f482 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/charges/1" 
```

```javascript
const url = new URL(
    "http://localhost/charges/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE charges/{charge}`


<!-- END_b1201273211c4b9932e21844f1f6f482 -->

<!-- START_3106a0d875bc48044c7e43ef47cef0ac -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/towns" 
```

```javascript
const url = new URL(
    "http://localhost/towns"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST towns`


<!-- END_3106a0d875bc48044c7e43ef47cef0ac -->

<!-- START_87700c016a34d297fd697b3bfb126767 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/towns/1" 
```

```javascript
const url = new URL(
    "http://localhost/towns/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT towns/{town}`

`PATCH towns/{town}`


<!-- END_87700c016a34d297fd697b3bfb126767 -->

<!-- START_000490bb8bc44dc5a84b68e53e4b9b15 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/towns/1" 
```

```javascript
const url = new URL(
    "http://localhost/towns/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE towns/{town}`


<!-- END_000490bb8bc44dc5a84b68e53e4b9b15 -->

<!-- START_7866498804561f39b88f676ac73d31f6 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/country" 
```

```javascript
const url = new URL(
    "http://localhost/country"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST country`


<!-- END_7866498804561f39b88f676ac73d31f6 -->

<!-- START_641fd887d81bf4023cdfb3571d37ac2d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/country/1" 
```

```javascript
const url = new URL(
    "http://localhost/country/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT country/{country}`

`PATCH country/{country}`


<!-- END_641fd887d81bf4023cdfb3571d37ac2d -->

<!-- START_8452d881cdcc6abfe1cb7a736fa450d8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/country/1" 
```

```javascript
const url = new URL(
    "http://localhost/country/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE country/{country}`


<!-- END_8452d881cdcc6abfe1cb7a736fa450d8 -->

<!-- START_d2c7c2610b5e1668b98b0ddfb97880b2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/calls" 
```

```javascript
const url = new URL(
    "http://localhost/calls"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET calls`


<!-- END_d2c7c2610b5e1668b98b0ddfb97880b2 -->

<!-- START_0c9828988d22d9d5261b792a1594bad1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/delStatus" 
```

```javascript
const url = new URL(
    "http://localhost/delStatus"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET delStatus`


<!-- END_0c9828988d22d9d5261b792a1594bad1 -->

<!-- START_e205af8b362ea4aba4d387f298b67a25 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/delStatus" 
```

```javascript
const url = new URL(
    "http://localhost/delStatus"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST delStatus`


<!-- END_e205af8b362ea4aba4d387f298b67a25 -->

<!-- START_28c32e83314a5c2b6edb772a27291217 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/delStatus/1" 
```

```javascript
const url = new URL(
    "http://localhost/delStatus/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT delStatus/{delStatus}`

`PATCH delStatus/{delStatus}`


<!-- END_28c32e83314a5c2b6edb772a27291217 -->

<!-- START_22f1a335fcf4cc95f94987e61ec1f39e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/delStatus/1" 
```

```javascript
const url = new URL(
    "http://localhost/delStatus/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE delStatus/{delStatus}`


<!-- END_22f1a335fcf4cc95f94987e61ec1f39e -->

<!-- START_942d9ab834314b3b36a24456f71d4bbc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/clients" 
```

```javascript
const url = new URL(
    "http://localhost/clients"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET clients`


<!-- END_942d9ab834314b3b36a24456f71d4bbc -->

<!-- START_5b5075de0547ea16ec88a13f431ba8c0 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/clients" 
```

```javascript
const url = new URL(
    "http://localhost/clients"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST clients`


<!-- END_5b5075de0547ea16ec88a13f431ba8c0 -->

<!-- START_0163b7d54df31d512c16fc01d8d234ba -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/clients/1" 
```

```javascript
const url = new URL(
    "http://localhost/clients/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET clients/{client}`


<!-- END_0163b7d54df31d512c16fc01d8d234ba -->

<!-- START_f9561533de97700488e4efa1987acb50 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/clients/1" 
```

```javascript
const url = new URL(
    "http://localhost/clients/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT clients/{client}`

`PATCH clients/{client}`


<!-- END_f9561533de97700488e4efa1987acb50 -->

<!-- START_a25e9fc7ad9be0169e8a1877bb633bde -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/clients/1" 
```

```javascript
const url = new URL(
    "http://localhost/clients/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE clients/{client}`


<!-- END_a25e9fc7ad9be0169e8a1877bb633bde -->

<!-- START_38edf23b01946b641ef14e34e0d3019e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders" 
```

```javascript
const url = new URL(
    "http://localhost/riders"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET riders`


<!-- END_38edf23b01946b641ef14e34e0d3019e -->

<!-- START_e440aefc74da1bde3a6455e7933485b4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/riders" 
```

```javascript
const url = new URL(
    "http://localhost/riders"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST riders`


<!-- END_e440aefc74da1bde3a6455e7933485b4 -->

<!-- START_3e032bec7680b99bfaeffe1b144cfbd4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/riders/1" 
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET riders/{rider}`


<!-- END_3e032bec7680b99bfaeffe1b144cfbd4 -->

<!-- START_e0fc53065fac0ac59c6d96fedc466196 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/riders/1" 
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);


fetch(url, {
    method: "PUT",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT riders/{rider}`

`PATCH riders/{rider}`


<!-- END_e0fc53065fac0ac59c6d96fedc466196 -->

<!-- START_2c23372ee8c91320e9f64d0b4efea443 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/riders/1" 
```

```javascript
const url = new URL(
    "http://localhost/riders/1"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE riders/{rider}`


<!-- END_2c23372ee8c91320e9f64d0b4efea443 -->

<!-- START_1659187eef7b059e3991848df84b8075 -->
## updateStatus/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/updateStatus/1" 
```

```javascript
const url = new URL(
    "http://localhost/updateStatus/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST updateStatus/{id}`


<!-- END_1659187eef7b059e3991848df84b8075 -->

<!-- START_947cc60bd669e6f1e802668e981816fe -->
## getAdmin
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getAdmin" 
```

```javascript
const url = new URL(
    "http://localhost/getAdmin"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getAdmin`


<!-- END_947cc60bd669e6f1e802668e981816fe -->

<!-- START_8a09fa52778ca279becaf04d7ef222c3 -->
## import a file in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/csv/import" 
```

```javascript
const url = new URL(
    "http://localhost/csv/import"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST csv/import`


<!-- END_8a09fa52778ca279becaf04d7ef222c3 -->

<!-- START_eeb063ae4abd6ac5e438cccc051c7b13 -->
## getShipments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getShipments" 
```

```javascript
const url = new URL(
    "http://localhost/getShipments"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getShipments`


<!-- END_eeb063ae4abd6ac5e438cccc051c7b13 -->

<!-- START_a955719d7ea436955b43e9a8d78db250 -->
## csv/export
> Example request:

```bash
curl -X POST \
    "http://localhost/csv/export" 
```

```javascript
const url = new URL(
    "http://localhost/csv/export"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST csv/export`


<!-- END_a955719d7ea436955b43e9a8d78db250 -->

<!-- START_7c4f80a25bb2e1829777182bc489b65d -->
## UpdateShipment
> Example request:

```bash
curl -X PATCH \
    "http://localhost/UpdateShipment" 
```

```javascript
const url = new URL(
    "http://localhost/UpdateShipment"
);


fetch(url, {
    method: "PATCH",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH UpdateShipment`


<!-- END_7c4f80a25bb2e1829777182bc489b65d -->

<!-- START_2c63d9e9d38210d3098a5af650cb56d2 -->
## assignBranch
> Example request:

```bash
curl -X POST \
    "http://localhost/assignBranch" 
```

```javascript
const url = new URL(
    "http://localhost/assignBranch"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST assignBranch`


<!-- END_2c63d9e9d38210d3098a5af650cb56d2 -->

<!-- START_cc48b03fc783901b0c5e2c55bc79ff91 -->
## assignDriver
> Example request:

```bash
curl -X POST \
    "http://localhost/assignDriver" 
```

```javascript
const url = new URL(
    "http://localhost/assignDriver"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST assignDriver`


<!-- END_cc48b03fc783901b0c5e2c55bc79ff91 -->

<!-- START_d16081d1a48cedc6822d5cfaf0893bd9 -->
## assDriver/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/assDriver/1" 
```

```javascript
const url = new URL(
    "http://localhost/assDriver/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST assDriver/{id}`


<!-- END_d16081d1a48cedc6822d5cfaf0893bd9 -->

<!-- START_77c43064d21cc96a72b36047ff217379 -->
## betweenShipments
> Example request:

```bash
curl -X POST \
    "http://localhost/betweenShipments" 
```

```javascript
const url = new URL(
    "http://localhost/betweenShipments"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST betweenShipments`


<!-- END_77c43064d21cc96a72b36047ff217379 -->

<!-- START_9516053dfee750add4d63748f3e5a686 -->
## getShipSingle/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getShipSingle/1" 
```

```javascript
const url = new URL(
    "http://localhost/getShipSingle/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getShipSingle/{id}`


<!-- END_9516053dfee750add4d63748f3e5a686 -->

<!-- START_fa25d916b9e000cfc97a2bd5ded6ab4f -->
## getshipD/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getshipD/1" 
```

```javascript
const url = new URL(
    "http://localhost/getshipD/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getshipD/{id}`


<!-- END_fa25d916b9e000cfc97a2bd5ded6ab4f -->

<!-- START_032c6e09f6957079f3c610049ceccef8 -->
## updateCancelled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/updateCancelled" 
```

```javascript
const url = new URL(
    "http://localhost/updateCancelled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET updateCancelled`

`POST updateCancelled`

`PUT updateCancelled`

`PATCH updateCancelled`

`DELETE updateCancelled`

`OPTIONS updateCancelled`


<!-- END_032c6e09f6957079f3c610049ceccef8 -->

<!-- START_b9eb37e69bb4efafb1f0b2dab09dce9b -->
## getShipStatus/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getShipStatus/1" 
```

```javascript
const url = new URL(
    "http://localhost/getShipStatus/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getShipStatus/{id}`


<!-- END_b9eb37e69bb4efafb1f0b2dab09dce9b -->

<!-- START_24a08b005ce1b7a5418ea1400373227f -->
## filterShipment
> Example request:

```bash
curl -X POST \
    "http://localhost/filterShipment" 
```

```javascript
const url = new URL(
    "http://localhost/filterShipment"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filterShipment`


<!-- END_24a08b005ce1b7a5418ea1400373227f -->

<!-- START_11082ede7eac75528db52c49ac3cea05 -->
## filterCount
> Example request:

```bash
curl -X POST \
    "http://localhost/filterCount" 
```

```javascript
const url = new URL(
    "http://localhost/filterCount"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filterCount`


<!-- END_11082ede7eac75528db52c49ac3cea05 -->

<!-- START_cf7ad91d4d20c309fd24774aba348687 -->
## getDeriveredS
> Example request:

```bash
curl -X POST \
    "http://localhost/getDeriveredS" 
```

```javascript
const url = new URL(
    "http://localhost/getDeriveredS"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getDeriveredS`


<!-- END_cf7ad91d4d20c309fd24774aba348687 -->

<!-- START_a0907ff58cee2c5482ce7bf6f0115ad5 -->
## getOrdersS
> Example request:

```bash
curl -X POST \
    "http://localhost/getOrdersS" 
```

```javascript
const url = new URL(
    "http://localhost/getOrdersS"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getOrdersS`


<!-- END_a0907ff58cee2c5482ce7bf6f0115ad5 -->

<!-- START_571cd48b969ecde4260458b251432f26 -->
## getreturned
> Example request:

```bash
curl -X POST \
    "http://localhost/getreturned" 
```

```javascript
const url = new URL(
    "http://localhost/getreturned"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getreturned`


<!-- END_571cd48b969ecde4260458b251432f26 -->

<!-- START_779777a1ff8cbf7798d3e55c7ca3f1c3 -->
## getPendingS
> Example request:

```bash
curl -X POST \
    "http://localhost/getPendingS" 
```

```javascript
const url = new URL(
    "http://localhost/getPendingS"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getPendingS`


<!-- END_779777a1ff8cbf7798d3e55c7ca3f1c3 -->

<!-- START_de3fbfa89ba06b7ca05642f1a81d68a4 -->
## filterPayment
> Example request:

```bash
curl -X POST \
    "http://localhost/filterPayment" 
```

```javascript
const url = new URL(
    "http://localhost/filterPayment"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filterPayment`


<!-- END_de3fbfa89ba06b7ca05642f1a81d68a4 -->

<!-- START_7ee3b693f7d89bee0cc74522f49ed5ba -->
## glSearch/{search}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/glSearch/1" 
```

```javascript
const url = new URL(
    "http://localhost/glSearch/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET glSearch/{search}`


<!-- END_7ee3b693f7d89bee0cc74522f49ed5ba -->

<!-- START_1b3626b3c36bf00f1684afe19bb893db -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/AddShipments/1" 
```

```javascript
const url = new URL(
    "http://localhost/AddShipments/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST AddShipments/{id}`


<!-- END_1b3626b3c36bf00f1684afe19bb893db -->

<!-- START_3d6244ecb83d02bf8827ff06eaea8cdc -->
## conupdateStatus/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/conupdateStatus/1" 
```

```javascript
const url = new URL(
    "http://localhost/conupdateStatus/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST conupdateStatus/{id}`


<!-- END_3d6244ecb83d02bf8827ff06eaea8cdc -->

<!-- START_40ad094d7fd4f0c7c410e9928970d0c2 -->
## getShipmentArray/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getShipmentArray/1" 
```

```javascript
const url = new URL(
    "http://localhost/getShipmentArray/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getShipmentArray/{id}`


<!-- END_40ad094d7fd4f0c7c410e9928970d0c2 -->

<!-- START_eb82606ee247675e9cbbf95d7a7f73a0 -->
## assigndialog/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/assigndialog/1" 
```

```javascript
const url = new URL(
    "http://localhost/assigndialog/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST assigndialog/{id}`


<!-- END_eb82606ee247675e9cbbf95d7a7f73a0 -->

<!-- START_9d071242dbe9d21e14241308b78e9314 -->
## productAdd/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/productAdd/1" 
```

```javascript
const url = new URL(
    "http://localhost/productAdd/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST productAdd/{id}`


<!-- END_9d071242dbe9d21e14241308b78e9314 -->

<!-- START_b59b6f8189fe497807fe26b9ca298ff1 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X POST \
    "http://localhost/getProducts" 
```

```javascript
const url = new URL(
    "http://localhost/getProducts"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getProducts`


<!-- END_b59b6f8189fe497807fe26b9ca298ff1 -->

<!-- START_7d529aafbda5d1ac84e5808f96dac464 -->
## permisions/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/permisions/1" 
```

```javascript
const url = new URL(
    "http://localhost/permisions/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST permisions/{id}`


<!-- END_7d529aafbda5d1ac84e5808f96dac464 -->

<!-- START_b9a82d640adad6b71eadd614a0b7e237 -->
## getUsers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getUsers" 
```

```javascript
const url = new URL(
    "http://localhost/getUsers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getUsers`


<!-- END_b9a82d640adad6b71eadd614a0b7e237 -->

<!-- START_dd60f7cc5874f42212ecfb270069b4cf -->
## getDrivers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getDrivers" 
```

```javascript
const url = new URL(
    "http://localhost/getDrivers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getDrivers`


<!-- END_dd60f7cc5874f42212ecfb270069b4cf -->

<!-- START_d36598a9389d4dca2211d3c8a12f8062 -->
## getCustomer
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCustomer" 
```

```javascript
const url = new URL(
    "http://localhost/getCustomer"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCustomer`


<!-- END_d36598a9389d4dca2211d3c8a12f8062 -->

<!-- START_3fe1c41e6ecc2ad9e3c09fedfc8c8641 -->
## getLogedinUsers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getLogedinUsers" 
```

```javascript
const url = new URL(
    "http://localhost/getLogedinUsers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getLogedinUsers`


<!-- END_3fe1c41e6ecc2ad9e3c09fedfc8c8641 -->

<!-- START_f7dee957106d5c24b15d09456e3a4506 -->
## profile/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/profile/1" 
```

```javascript
const url = new URL(
    "http://localhost/profile/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST profile/{id}`


<!-- END_f7dee957106d5c24b15d09456e3a4506 -->

<!-- START_ba66d5d76e70d577628796245d883cdf -->
## getSorted
> Example request:

```bash
curl -X POST \
    "http://localhost/getSorted" 
```

```javascript
const url = new URL(
    "http://localhost/getSorted"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getSorted`


<!-- END_ba66d5d76e70d577628796245d883cdf -->

<!-- START_04914054399d3bbfcd15970175fb1d5d -->
## getUserPro/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getUserPro/1" 
```

```javascript
const url = new URL(
    "http://localhost/getUserPro/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getUserPro/{id}`


<!-- END_04914054399d3bbfcd15970175fb1d5d -->

<!-- START_4788d6d5dcea919ecfc9329a3206352c -->
## getUserPerm/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getUserPerm/1" 
```

```javascript
const url = new URL(
    "http://localhost/getUserPerm/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getUserPerm/{id}`


<!-- END_4788d6d5dcea919ecfc9329a3206352c -->

<!-- START_e4916137930217de906c444c33de5b89 -->
## password
> Example request:

```bash
curl -X POST \
    "http://localhost/password" 
```

```javascript
const url = new URL(
    "http://localhost/password"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password`


<!-- END_e4916137930217de906c444c33de5b89 -->

<!-- START_1d0f1ebdec60c48167b0b00b483c290c -->
## AuthUserUp/{id}
> Example request:

```bash
curl -X PATCH \
    "http://localhost/AuthUserUp/1" 
```

```javascript
const url = new URL(
    "http://localhost/AuthUserUp/1"
);


fetch(url, {
    method: "PATCH",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH AuthUserUp/{id}`


<!-- END_1d0f1ebdec60c48167b0b00b483c290c -->

<!-- START_d7cb83adaed4a8e66c2bf8dbe387df22 -->
## UserShip
> Example request:

```bash
curl -X POST \
    "http://localhost/UserShip" 
```

```javascript
const url = new URL(
    "http://localhost/UserShip"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST UserShip`


<!-- END_d7cb83adaed4a8e66c2bf8dbe387df22 -->

<!-- START_0cfd0480dd7c4b9ae1c236c1bfad99c8 -->
## deletedUsers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/deletedUsers" 
```

```javascript
const url = new URL(
    "http://localhost/deletedUsers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET deletedUsers`


<!-- END_0cfd0480dd7c4b9ae1c236c1bfad99c8 -->

<!-- START_a3d97464abd01a6084feb63c5b6c681e -->
## undeletedUser/{id}
> Example request:

```bash
curl -X PATCH \
    "http://localhost/undeletedUser/1" 
```

```javascript
const url = new URL(
    "http://localhost/undeletedUser/1"
);


fetch(url, {
    method: "PATCH",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH undeletedUser/{id}`


<!-- END_a3d97464abd01a6084feb63c5b6c681e -->

<!-- START_0172257d8f44a989b3ec7b50b3bfe7a2 -->
## getUsersRole
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getUsersRole" 
```

```javascript
const url = new URL(
    "http://localhost/getUsersRole"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getUsersRole`


<!-- END_0172257d8f44a989b3ec7b50b3bfe7a2 -->

<!-- START_034c5483c69f9befe822cde7978c2ccf -->
## getRoles
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRoles" 
```

```javascript
const url = new URL(
    "http://localhost/getRoles"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRoles`


<!-- END_034c5483c69f9befe822cde7978c2ccf -->

<!-- START_3ff0977dfd131354ca823d85946bae24 -->
## getPermissions
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getPermissions" 
```

```javascript
const url = new URL(
    "http://localhost/getPermissions"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getPermissions`


<!-- END_3ff0977dfd131354ca823d85946bae24 -->

<!-- START_279d5b3e031c8cfb17f4a4c0575d6708 -->
## getRolesPerm/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getRolesPerm/1" 
```

```javascript
const url = new URL(
    "http://localhost/getRolesPerm/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getRolesPerm/{id}`


<!-- END_279d5b3e031c8cfb17f4a4c0575d6708 -->

<!-- START_04ff3721f1803e427402ab6c20cd4afc -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/getBranch" 
```

```javascript
const url = new URL(
    "http://localhost/getBranch"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getBranch`


<!-- END_04ff3721f1803e427402ab6c20cd4afc -->

<!-- START_965efb4a08dd81c06ff50c917881b22d -->
## getShipBranch
> Example request:

```bash
curl -X POST \
    "http://localhost/getShipBranch" 
```

```javascript
const url = new URL(
    "http://localhost/getShipBranch"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getShipBranch`


<!-- END_965efb4a08dd81c06ff50c917881b22d -->

<!-- START_aad20cb6f02e4a9baaff5babe8727be9 -->
## getBranchShip/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getBranchShip/1" 
```

```javascript
const url = new URL(
    "http://localhost/getBranchShip/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getBranchShip/{id}`


<!-- END_aad20cb6f02e4a9baaff5babe8727be9 -->

<!-- START_615eb5576281c6d73d0910ebd52c06f3 -->
## getBranchEger
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getBranchEger" 
```

```javascript
const url = new URL(
    "http://localhost/getBranchEger"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getBranchEger`


<!-- END_615eb5576281c6d73d0910ebd52c06f3 -->

<!-- START_9bfc03272b7220c2cbab950b8a8c9d6f -->
## getBranchC
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getBranchC" 
```

```javascript
const url = new URL(
    "http://localhost/getBranchC"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getBranchC`


<!-- END_9bfc03272b7220c2cbab950b8a8c9d6f -->

<!-- START_f4e56d5ea697f01022b8f83d7d8fc479 -->
## country_branch/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/country_branch/1" 
```

```javascript
const url = new URL(
    "http://localhost/country_branch/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET country_branch/{id}`


<!-- END_f4e56d5ea697f01022b8f83d7d8fc479 -->

<!-- START_8b211fac13a1d502da6f4502f8b94e77 -->
## getCountry
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCountry" 
```

```javascript
const url = new URL(
    "http://localhost/getCountry"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCountry`

`POST getCountry`

`PUT getCountry`

`PATCH getCountry`

`DELETE getCountry`

`OPTIONS getCountry`


<!-- END_8b211fac13a1d502da6f4502f8b94e77 -->

<!-- START_4047c62ca1c1014ec19726bbe4661674 -->
## country_image/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/country_image/1" 
```

```javascript
const url = new URL(
    "http://localhost/country_image/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST country_image/{id}`


<!-- END_4047c62ca1c1014ec19726bbe4661674 -->

<!-- START_85056a5dea386dee8daeb35d114504e1 -->
## getCompanies
> Example request:

```bash
curl -X POST \
    "http://localhost/getCompanies" 
```

```javascript
const url = new URL(
    "http://localhost/getCompanies"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getCompanies`


<!-- END_85056a5dea386dee8daeb35d114504e1 -->

<!-- START_c062ff4c3a688f924f6417bddd84e2bc -->
## getCompanyAdmin
> Example request:

```bash
curl -X POST \
    "http://localhost/getCompanyAdmin" 
```

```javascript
const url = new URL(
    "http://localhost/getCompanyAdmin"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getCompanyAdmin`


<!-- END_c062ff4c3a688f924f6417bddd84e2bc -->

<!-- START_211aa403f16823deb78bed60da80c0bb -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/companupdate/1" 
```

```javascript
const url = new URL(
    "http://localhost/companupdate/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST companupdate/{id}`


<!-- END_211aa403f16823deb78bed60da80c0bb -->

<!-- START_b4d52580602c05711388b06126f6d45d -->
## logo/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/logo/1" 
```

```javascript
const url = new URL(
    "http://localhost/logo/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logo/{id}`


<!-- END_b4d52580602c05711388b06126f6d45d -->

<!-- START_a96b914c870205da25659e8a6544bb09 -->
## getLogo
> Example request:

```bash
curl -X POST \
    "http://localhost/getLogo" 
```

```javascript
const url = new URL(
    "http://localhost/getLogo"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getLogo`


<!-- END_a96b914c870205da25659e8a6544bb09 -->

<!-- START_96ca37359fed926a1d424f53364c9dbc -->
## getLogoOnly
> Example request:

```bash
curl -X POST \
    "http://localhost/getLogoOnly" 
```

```javascript
const url = new URL(
    "http://localhost/getLogoOnly"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getLogoOnly`


<!-- END_96ca37359fed926a1d424f53364c9dbc -->

<!-- START_655374c05261fd130c8d1ba5c699f5fd -->
## status_report
> Example request:

```bash
curl -X POST \
    "http://localhost/status_report" 
```

```javascript
const url = new URL(
    "http://localhost/status_report"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST status_report`


<!-- END_655374c05261fd130c8d1ba5c699f5fd -->

<!-- START_59cdce4df05d33924903839bf3534c5b -->
## branchesExpo
> Example request:

```bash
curl -X POST \
    "http://localhost/branchesExpo" 
```

```javascript
const url = new URL(
    "http://localhost/branchesExpo"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST branchesExpo`


<!-- END_59cdce4df05d33924903839bf3534c5b -->

<!-- START_51e03540b611ebbd44c5d397ac0ec8df -->
## userDateExpo
> Example request:

```bash
curl -X POST \
    "http://localhost/userDateExpo" 
```

```javascript
const url = new URL(
    "http://localhost/userDateExpo"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST userDateExpo`


<!-- END_51e03540b611ebbd44c5d397ac0ec8df -->

<!-- START_f24fae2d4779314ddeebdc3ba7a3ace0 -->
## DriverReport
> Example request:

```bash
curl -X POST \
    "http://localhost/DriverReport" 
```

```javascript
const url = new URL(
    "http://localhost/DriverReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST DriverReport`


<!-- END_f24fae2d4779314ddeebdc3ba7a3ace0 -->

<!-- START_c2e8c35cd888ba31ac70ea9fbae71237 -->
## DelivReport
> Example request:

```bash
curl -X POST \
    "http://localhost/DelivReport" 
```

```javascript
const url = new URL(
    "http://localhost/DelivReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST DelivReport`


<!-- END_c2e8c35cd888ba31ac70ea9fbae71237 -->

<!-- START_e578eed102f6644d75fa0222384cf167 -->
## ProdReport
> Example request:

```bash
curl -X POST \
    "http://localhost/ProdReport" 
```

```javascript
const url = new URL(
    "http://localhost/ProdReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST ProdReport`


<!-- END_e578eed102f6644d75fa0222384cf167 -->

<!-- START_d548740c40f9578df670cc84b672dbd4 -->
## paymentReport
> Example request:

```bash
curl -X POST \
    "http://localhost/paymentReport" 
```

```javascript
const url = new URL(
    "http://localhost/paymentReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST paymentReport`


<!-- END_d548740c40f9578df670cc84b672dbd4 -->

<!-- START_d22ad3d3929403b8c78857856bbb2b88 -->
## logsReport
> Example request:

```bash
curl -X POST \
    "http://localhost/logsReport" 
```

```javascript
const url = new URL(
    "http://localhost/logsReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logsReport`


<!-- END_d22ad3d3929403b8c78857856bbb2b88 -->

<!-- START_1d730dee666f536d7f49988e29531a0b -->
## countryReport
> Example request:

```bash
curl -X POST \
    "http://localhost/countryReport" 
```

```javascript
const url = new URL(
    "http://localhost/countryReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST countryReport`


<!-- END_1d730dee666f536d7f49988e29531a0b -->

<!-- START_7068c38068b738dc30ce0742c3aa8db0 -->
## delayedShipmentCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/delayedShipmentCount" 
```

```javascript
const url = new URL(
    "http://localhost/delayedShipmentCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET delayedShipmentCount`

`POST delayedShipmentCount`

`PUT delayedShipmentCount`

`PATCH delayedShipmentCount`

`DELETE delayedShipmentCount`

`OPTIONS delayedShipmentCount`


<!-- END_7068c38068b738dc30ce0742c3aa8db0 -->

<!-- START_b9202bddd825017fc928eb78c90c33f1 -->
## scheduledShipmentCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/scheduledShipmentCount" 
```

```javascript
const url = new URL(
    "http://localhost/scheduledShipmentCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET scheduledShipmentCount`

`POST scheduledShipmentCount`

`PUT scheduledShipmentCount`

`PATCH scheduledShipmentCount`

`DELETE scheduledShipmentCount`

`OPTIONS scheduledShipmentCount`


<!-- END_b9202bddd825017fc928eb78c90c33f1 -->

<!-- START_35e39fe7e1555856f31475397395ff44 -->
## getShipmentsCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getShipmentsCount" 
```

```javascript
const url = new URL(
    "http://localhost/getShipmentsCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getShipmentsCount`

`POST getShipmentsCount`

`PUT getShipmentsCount`

`PATCH getShipmentsCount`

`DELETE getShipmentsCount`

`OPTIONS getShipmentsCount`


<!-- END_35e39fe7e1555856f31475397395ff44 -->

<!-- START_85898438b827ee6a2ec8f2a12ca87f3c -->
## dispatchedShipmentCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dispatchedShipmentCount" 
```

```javascript
const url = new URL(
    "http://localhost/dispatchedShipmentCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dispatchedShipmentCount`

`POST dispatchedShipmentCount`

`PUT dispatchedShipmentCount`

`PATCH dispatchedShipmentCount`

`DELETE dispatchedShipmentCount`

`OPTIONS dispatchedShipmentCount`


<!-- END_85898438b827ee6a2ec8f2a12ca87f3c -->

<!-- START_53e3cd76b0df57a97faa10c4357a8e30 -->
## getCanceledCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCanceledCount" 
```

```javascript
const url = new URL(
    "http://localhost/getCanceledCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCanceledCount`

`POST getCanceledCount`

`PUT getCanceledCount`

`PATCH getCanceledCount`

`DELETE getCanceledCount`

`OPTIONS getCanceledCount`


<!-- END_53e3cd76b0df57a97faa10c4357a8e30 -->

<!-- START_b9104674a7067bef88ae5dac636f0938 -->
## deriveredShipmentCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/deriveredShipmentCount" 
```

```javascript
const url = new URL(
    "http://localhost/deriveredShipmentCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET deriveredShipmentCount`

`POST deriveredShipmentCount`

`PUT deriveredShipmentCount`

`PATCH deriveredShipmentCount`

`DELETE deriveredShipmentCount`

`OPTIONS deriveredShipmentCount`


<!-- END_b9104674a7067bef88ae5dac636f0938 -->

<!-- START_e8de72c2b1fb54e06de9529e14b8d539 -->
## getUsersCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getUsersCount" 
```

```javascript
const url = new URL(
    "http://localhost/getUsersCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getUsersCount`

`POST getUsersCount`

`PUT getUsersCount`

`PATCH getUsersCount`

`DELETE getUsersCount`

`OPTIONS getUsersCount`


<!-- END_e8de72c2b1fb54e06de9529e14b8d539 -->

<!-- START_a84566e07ec9358408598b16d81e202f -->
## getDashCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getDashCount" 
```

```javascript
const url = new URL(
    "http://localhost/getDashCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getDashCount`

`POST getDashCount`

`PUT getDashCount`

`PATCH getDashCount`

`DELETE getDashCount`

`OPTIONS getDashCount`


<!-- END_a84566e07ec9358408598b16d81e202f -->

<!-- START_930ebb05f3b99c03e023311581a7df83 -->
## sendmail
> Example request:

```bash
curl -X POST \
    "http://localhost/sendmail" 
```

```javascript
const url = new URL(
    "http://localhost/sendmail"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST sendmail`


<!-- END_930ebb05f3b99c03e023311581a7df83 -->

<!-- START_4800b1682b585d2cbb11a8012548f994 -->
## getsubscribers
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getsubscribers" 
```

```javascript
const url = new URL(
    "http://localhost/getsubscribers"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getsubscribers`


<!-- END_4800b1682b585d2cbb11a8012548f994 -->

<!-- START_7cd1c92845723362129d03191c93e958 -->
## subscribe
> Example request:

```bash
curl -X POST \
    "http://localhost/subscribe" 
```

```javascript
const url = new URL(
    "http://localhost/subscribe"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST subscribe`


<!-- END_7cd1c92845723362129d03191c93e958 -->

<!-- START_4bb5914e299996e3fa501bba8167f098 -->
## refresh/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/refresh/1" 
```

```javascript
const url = new URL(
    "http://localhost/refresh/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST refresh/{id}`


<!-- END_4bb5914e299996e3fa501bba8167f098 -->

<!-- START_9873f49c4747dde6f7180453dbe35398 -->
## getunsubscribed
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getunsubscribed" 
```

```javascript
const url = new URL(
    "http://localhost/getunsubscribed"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getunsubscribed`


<!-- END_9873f49c4747dde6f7180453dbe35398 -->

<!-- START_4327b7495232ad01a4f91ee9fcaeda3d -->
## Store files locally

> Example request:

```bash
curl -X POST \
    "http://localhost/attachments/store" 
```

```javascript
const url = new URL(
    "http://localhost/attachments/store"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST attachments/store`


<!-- END_4327b7495232ad01a4f91ee9fcaeda3d -->

<!-- START_6807bc299a235a4e3d0a7bdbd202aad7 -->
## Pull all the attachments for the logged in user

> Example request:

```bash
curl -X POST \
    "http://localhost/attachments" 
```

```javascript
const url = new URL(
    "http://localhost/attachments"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST attachments`


<!-- END_6807bc299a235a4e3d0a7bdbd202aad7 -->

<!-- START_51c571caa8590a666c461d2a906db1ca -->
## Delete an attachment

> Example request:

```bash
curl -X DELETE \
    "http://localhost/attachments" 
```

```javascript
const url = new URL(
    "http://localhost/attachments"
);


fetch(url, {
    method: "DELETE",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE attachments`


<!-- END_51c571caa8590a666c461d2a906db1ca -->

<!-- START_d11320760d15978582195b35d976f22e -->
## Retrieve a full list of categories

> Example request:

```bash
curl -X POST \
    "http://localhost/attachments/categories" 
```

```javascript
const url = new URL(
    "http://localhost/attachments/categories"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST attachments/categories`


<!-- END_d11320760d15978582195b35d976f22e -->

<!-- START_cb37a009c57f6e054e721aada4d9664b -->
## categories
> Example request:

```bash
curl -X POST \
    "http://localhost/categories" 
```

```javascript
const url = new URL(
    "http://localhost/categories"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST categories`


<!-- END_cb37a009c57f6e054e721aada4d9664b -->

<!-- START_f5988bf84ae7c5ecd9779ca97e4c98fc -->
## carbon
> Example request:

```bash
curl -X POST \
    "http://localhost/carbon" 
```

```javascript
const url = new URL(
    "http://localhost/carbon"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST carbon`


<!-- END_f5988bf84ae7c5ecd9779ca97e4c98fc -->

<!-- START_328d07d73cf5cbc372a61185b7fc6beb -->
## displayReport
> Example request:

```bash
curl -X POST \
    "http://localhost/displayReport" 
```

```javascript
const url = new URL(
    "http://localhost/displayReport"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST displayReport`


<!-- END_328d07d73cf5cbc372a61185b7fc6beb -->

<!-- START_202364f05c5a725dd2f374ad6bc443cf -->
## Notyshpments/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/Notyshpments/1" 
```

```javascript
const url = new URL(
    "http://localhost/Notyshpments/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST Notyshpments/{id}`


<!-- END_202364f05c5a725dd2f374ad6bc443cf -->

<!-- START_6ea6e1184a670ac524f02dbda107025b -->
## read
> Example request:

```bash
curl -X POST \
    "http://localhost/read" 
```

```javascript
const url = new URL(
    "http://localhost/read"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST read`


<!-- END_6ea6e1184a670ac524f02dbda107025b -->

<!-- START_6395a76b1d38aaa81fb2707e45842263 -->
## Chattynoty
> Example request:

```bash
curl -X GET \
    -G "http://localhost/Chattynoty" 
```

```javascript
const url = new URL(
    "http://localhost/Chattynoty"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET Chattynoty`


<!-- END_6395a76b1d38aaa81fb2707e45842263 -->

<!-- START_e4f3f8570b9b48dd1329d9b3eaed5bfc -->
## notifications
> Example request:

```bash
curl -X GET \
    -G "http://localhost/notifications" 
```

```javascript
const url = new URL(
    "http://localhost/notifications"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET notifications`


<!-- END_e4f3f8570b9b48dd1329d9b3eaed5bfc -->

<!-- START_568bd749946744d2753eaad6cfad5db6 -->
## Log the user out of the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/logout" 
```

```javascript
const url = new URL(
    "http://localhost/logout"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET logout`


<!-- END_568bd749946744d2753eaad6cfad5db6 -->

<!-- START_a296f8877e09cf90eb293b06b950f3c4 -->
## upload
> Example request:

```bash
curl -X GET \
    -G "http://localhost/upload" 
```

```javascript
const url = new URL(
    "http://localhost/upload"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET upload`


<!-- END_a296f8877e09cf90eb293b06b950f3c4 -->

<!-- START_6a107a131f853e92450ac742beba0e7f -->
## categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/categories" 
```

```javascript
const url = new URL(
    "http://localhost/categories"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET categories`


<!-- END_6a107a131f853e92450ac742beba0e7f -->

<!-- START_cc66b1c647d3805dfbb54745e3f2445e -->
## getDocs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getDocs" 
```

```javascript
const url = new URL(
    "http://localhost/getDocs"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getDocs`


<!-- END_cc66b1c647d3805dfbb54745e3f2445e -->

<!-- START_b328b24f3615ea76c10398d8432e2337 -->
## getClientsDocs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getClientsDocs" 
```

```javascript
const url = new URL(
    "http://localhost/getClientsDocs"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getClientsDocs`


<!-- END_b328b24f3615ea76c10398d8432e2337 -->

<!-- START_482d818332a13fc31b17ecdf48ea6da0 -->
## assign/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/assign/1" 
```

```javascript
const url = new URL(
    "http://localhost/assign/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST assign/{id}`


<!-- END_482d818332a13fc31b17ecdf48ea6da0 -->

<!-- START_3cabec0aba1834a0bd39367424b1e386 -->
## getDocsSort
> Example request:

```bash
curl -X POST \
    "http://localhost/getDocsSort" 
```

```javascript
const url = new URL(
    "http://localhost/getDocsSort"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getDocsSort`


<!-- END_3cabec0aba1834a0bd39367424b1e386 -->

<!-- START_962ea9b1b0f8b44448be9a24771770d3 -->
## getCharges
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCharges" 
```

```javascript
const url = new URL(
    "http://localhost/getCharges"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCharges`


<!-- END_962ea9b1b0f8b44448be9a24771770d3 -->

<!-- START_b69eb2ba0aaf2dbfd6c858c8c303af36 -->
## shipCharge/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/shipCharge/1" 
```

```javascript
const url = new URL(
    "http://localhost/shipCharge/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST shipCharge/{id}`


<!-- END_b69eb2ba0aaf2dbfd6c858c8c303af36 -->

<!-- START_0a3d369a0fe06ddd5bf3fe5eeff9ffa3 -->
## barcodeUpdate/{bar_code}
> Example request:

```bash
curl -X POST \
    "http://localhost/barcodeUpdate/1" 
```

```javascript
const url = new URL(
    "http://localhost/barcodeUpdate/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST barcodeUpdate/{bar_code}`


<!-- END_0a3d369a0fe06ddd5bf3fe5eeff9ffa3 -->

<!-- START_f311262e4abe59e547f400b0fb09d41d -->
## barcodeIn/{bar_code}
> Example request:

```bash
curl -X POST \
    "http://localhost/barcodeIn/1" 
```

```javascript
const url = new URL(
    "http://localhost/barcodeIn/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST barcodeIn/{bar_code}`


<!-- END_f311262e4abe59e547f400b0fb09d41d -->

<!-- START_dff4245eb13f179860d9ab6870ae12b8 -->
## statusUpdateIn
> Example request:

```bash
curl -X POST \
    "http://localhost/statusUpdateIn" 
```

```javascript
const url = new URL(
    "http://localhost/statusUpdateIn"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST statusUpdateIn`


<!-- END_dff4245eb13f179860d9ab6870ae12b8 -->

<!-- START_750f6f8baa69f48576fe778e8b8dd9c5 -->
## statusUpdate
> Example request:

```bash
curl -X POST \
    "http://localhost/statusUpdate" 
```

```javascript
const url = new URL(
    "http://localhost/statusUpdate"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST statusUpdate`


<!-- END_750f6f8baa69f48576fe778e8b8dd9c5 -->

<!-- START_2c1f99bda747a843373adeb948cc38eb -->
## filterR
> Example request:

```bash
curl -X POST \
    "http://localhost/filterR" 
```

```javascript
const url = new URL(
    "http://localhost/filterR"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filterR`


<!-- END_2c1f99bda747a843373adeb948cc38eb -->

<!-- START_971a0915032ccf30c1db958487b5e6de -->
## getDelScan
> Example request:

```bash
curl -X POST \
    "http://localhost/getDelScan" 
```

```javascript
const url = new URL(
    "http://localhost/getDelScan"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getDelScan`


<!-- END_971a0915032ccf30c1db958487b5e6de -->

<!-- START_6218acccecdeaf34c5679563dc8e3a92 -->
## getNotDelScan
> Example request:

```bash
curl -X POST \
    "http://localhost/getNotDelScan" 
```

```javascript
const url = new URL(
    "http://localhost/getNotDelScan"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getNotDelScan`


<!-- END_6218acccecdeaf34c5679563dc8e3a92 -->

<!-- START_37b4029796d10a5a90acd33ec70546cf -->
## filter_rider
> Example request:

```bash
curl -X POST \
    "http://localhost/filter_rider" 
```

```javascript
const url = new URL(
    "http://localhost/filter_rider"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filter_rider`


<!-- END_37b4029796d10a5a90acd33ec70546cf -->

<!-- START_8c71d2e52a0b85e1b93f75992b449cd7 -->
## rows
> Example request:

```bash
curl -X POST \
    "http://localhost/rows" 
```

```javascript
const url = new URL(
    "http://localhost/rows"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST rows`


<!-- END_8c71d2e52a0b85e1b93f75992b449cd7 -->

<!-- START_429d25b461887d3f2a2d121224c3a227 -->
## getRows
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRows" 
```

```javascript
const url = new URL(
    "http://localhost/getRows"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRows`


<!-- END_429d25b461887d3f2a2d121224c3a227 -->

<!-- START_23a1f5edddd164bde6e36a3d43c66c3c -->
## getAllRows
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getAllRows" 
```

```javascript
const url = new URL(
    "http://localhost/getAllRows"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getAllRows`


<!-- END_23a1f5edddd164bde6e36a3d43c66c3c -->

<!-- START_842bbd24ec3f9d18dc4020c496f2d528 -->
## notprinted/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/notprinted/1" 
```

```javascript
const url = new URL(
    "http://localhost/notprinted/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST notprinted/{id}`


<!-- END_842bbd24ec3f9d18dc4020c496f2d528 -->

<!-- START_5a59163d11ac83f0b71c54bda7d2a900 -->
## printed/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/printed/1" 
```

```javascript
const url = new URL(
    "http://localhost/printed/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST printed/{id}`


<!-- END_5a59163d11ac83f0b71c54bda7d2a900 -->

<!-- START_e02eef18544fb3594c62e9b6a73efca2 -->
## locationUpdate/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/locationUpdate/1" 
```

```javascript
const url = new URL(
    "http://localhost/locationUpdate/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST locationUpdate/{id}`


<!-- END_e02eef18544fb3594c62e9b6a73efca2 -->

<!-- START_fbe801c78d9674b3afd801dd0f64d15f -->
## getcoordinatesArray/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getcoordinatesArray/1" 
```

```javascript
const url = new URL(
    "http://localhost/getcoordinatesArray/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getcoordinatesArray/{id}`


<!-- END_fbe801c78d9674b3afd801dd0f64d15f -->

<!-- START_f1ed0bf93d68e58cbbdd446834d5161e -->
## paid/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/paid/1" 
```

```javascript
const url = new URL(
    "http://localhost/paid/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST paid/{id}`


<!-- END_f1ed0bf93d68e58cbbdd446834d5161e -->

<!-- START_f1dd15dcce52f3fd7d726e251cf5ee10 -->
## getTowns
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getTowns" 
```

```javascript
const url = new URL(
    "http://localhost/getTowns"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getTowns`


<!-- END_f1dd15dcce52f3fd7d726e251cf5ee10 -->

<!-- START_a00556ec56c12d01b430411227ead11c -->
## getTownCharge
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getTownCharge" 
```

```javascript
const url = new URL(
    "http://localhost/getTownCharge"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getTownCharge`


<!-- END_a00556ec56c12d01b430411227ead11c -->

<!-- START_d0d97566f8ba309afabbcf6ac4de3a7c -->
## DriverShip
> Example request:

```bash
curl -X GET \
    -G "http://localhost/DriverShip" 
```

```javascript
const url = new URL(
    "http://localhost/DriverShip"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET DriverShip`


<!-- END_d0d97566f8ba309afabbcf6ac4de3a7c -->

<!-- START_a44c49fdc80b8a2f21b17a659dc98334 -->
## customerShip
> Example request:

```bash
curl -X POST \
    "http://localhost/customerShip" 
```

```javascript
const url = new URL(
    "http://localhost/customerShip"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST customerShip`


<!-- END_a44c49fdc80b8a2f21b17a659dc98334 -->

<!-- START_7f47c23e008620c023627653b40c8839 -->
## getsearchRe
> Example request:

```bash
curl -X POST \
    "http://localhost/getsearchRe" 
```

```javascript
const url = new URL(
    "http://localhost/getsearchRe"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getsearchRe`


<!-- END_7f47c23e008620c023627653b40c8839 -->

<!-- START_4d190883e0b4243344cf492cb0b58fa9 -->
## customerCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/customerCount" 
```

```javascript
const url = new URL(
    "http://localhost/customerCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET customerCount`


<!-- END_4d190883e0b4243344cf492cb0b58fa9 -->

<!-- START_73ef10d38640c165b7b7ea64628f0a46 -->
## customerScheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/customerScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/customerScheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET customerScheduled`


<!-- END_73ef10d38640c165b7b7ea64628f0a46 -->

<!-- START_779f36337d1ca4b2921ce377a486c77a -->
## customerDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/customerDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/customerDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET customerDelivered`


<!-- END_779f36337d1ca4b2921ce377a486c77a -->

<!-- START_6bc2104c2e21fd1c89f8f29745951b05 -->
## customerCanceled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/customerCanceled" 
```

```javascript
const url = new URL(
    "http://localhost/customerCanceled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET customerCanceled`


<!-- END_6bc2104c2e21fd1c89f8f29745951b05 -->

<!-- START_0d723e7558358cf3c27bde1665cfec7b -->
## delayedCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/delayedCount" 
```

```javascript
const url = new URL(
    "http://localhost/delayedCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET delayedCount`


<!-- END_0d723e7558358cf3c27bde1665cfec7b -->

<!-- START_bf413ba399aea5964843a1673722d0cd -->
## driverCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/driverCount" 
```

```javascript
const url = new URL(
    "http://localhost/driverCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET driverCount`


<!-- END_bf413ba399aea5964843a1673722d0cd -->

<!-- START_d5b41c69e1841d8e78759280bb40e873 -->
## driverScheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/driverScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/driverScheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET driverScheduled`


<!-- END_d5b41c69e1841d8e78759280bb40e873 -->

<!-- START_526e226744d22df9d2aced60e8cf8eef -->
## driverDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/driverDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/driverDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET driverDelivered`


<!-- END_526e226744d22df9d2aced60e8cf8eef -->

<!-- START_38f95dbd05b16c15be86c41578fa79c6 -->
## driverCanceled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/driverCanceled" 
```

```javascript
const url = new URL(
    "http://localhost/driverCanceled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET driverCanceled`


<!-- END_38f95dbd05b16c15be86c41578fa79c6 -->

<!-- START_b65227eaf5fa3e86ba15d7426350f148 -->
## getClientShip
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getClientShip" 
```

```javascript
const url = new URL(
    "http://localhost/getClientShip"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getClientShip`


<!-- END_b65227eaf5fa3e86ba15d7426350f148 -->

<!-- START_7f7b8ff1a2e13d370cd60cb79f62d87b -->
## getClientScheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getClientScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/getClientScheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getClientScheduled`


<!-- END_7f7b8ff1a2e13d370cd60cb79f62d87b -->

<!-- START_4b9f709037e47498689e9e0327476159 -->
## getClientDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getClientDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/getClientDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getClientDelivered`


<!-- END_4b9f709037e47498689e9e0327476159 -->

<!-- START_5f414a00418f5a0ed6ccf0e42efe1560 -->
## getCliegetBranchEgerntCancled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCliegetBranchEgerntCancled" 
```

```javascript
const url = new URL(
    "http://localhost/getCliegetBranchEgerntCancled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCliegetBranchEgerntCancled`


<!-- END_5f414a00418f5a0ed6ccf0e42efe1560 -->

<!-- START_7ac61ad97569843a0b10c62db66f95d7 -->
## getRinderShip
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRinderShip" 
```

```javascript
const url = new URL(
    "http://localhost/getRinderShip"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRinderShip`


<!-- END_7ac61ad97569843a0b10c62db66f95d7 -->

<!-- START_69a5dbc44262905e2757b704b335672c -->
## getRinderScheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRinderScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/getRinderScheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRinderScheduled`


<!-- END_69a5dbc44262905e2757b704b335672c -->

<!-- START_2407e8b70638f30e252791ed9b13eb68 -->
## getRinderDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRinderDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/getRinderDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRinderDelivered`


<!-- END_2407e8b70638f30e252791ed9b13eb68 -->

<!-- START_997f8f07a43fb3b654bc19af451a14e9 -->
## getRinderCancled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getRinderCancled" 
```

```javascript
const url = new URL(
    "http://localhost/getRinderCancled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getRinderCancled`


<!-- END_997f8f07a43fb3b654bc19af451a14e9 -->

<!-- START_1df67ca9e19713cede1f258e4bea8bc1 -->
## getBranchShipments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getBranchShipments" 
```

```javascript
const url = new URL(
    "http://localhost/getBranchShipments"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getBranchShipments`

`POST getBranchShipments`

`PUT getBranchShipments`

`PATCH getBranchShipments`

`DELETE getBranchShipments`

`OPTIONS getBranchShipments`


<!-- END_1df67ca9e19713cede1f258e4bea8bc1 -->

<!-- START_902c3d3961565dc2a851e8ac0f9101ca -->
## getChartScheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/getChartScheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartScheduled`

`POST getChartScheduled`

`PUT getChartScheduled`

`PATCH getChartScheduled`

`DELETE getChartScheduled`

`OPTIONS getChartScheduled`


<!-- END_902c3d3961565dc2a851e8ac0f9101ca -->

<!-- START_9a2d134509ce43058bc7d051dd16cc86 -->
## getChartDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/getChartDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartDelivered`

`POST getChartDelivered`

`PUT getChartDelivered`

`PATCH getChartDelivered`

`DELETE getChartDelivered`

`OPTIONS getChartDelivered`


<!-- END_9a2d134509ce43058bc7d051dd16cc86 -->

<!-- START_a66b0be9a434e87cad0ef60a570461c2 -->
## getChartData
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartData" 
```

```javascript
const url = new URL(
    "http://localhost/getChartData"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartData`

`POST getChartData`

`PUT getChartData`

`PATCH getChartData`

`DELETE getChartData`

`OPTIONS getChartData`


<!-- END_a66b0be9a434e87cad0ef60a570461c2 -->

<!-- START_d6dde9bac073e8f141b8111e210b62d5 -->
## getChartCancled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartCancled" 
```

```javascript
const url = new URL(
    "http://localhost/getChartCancled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartCancled`

`POST getChartCancled`

`PUT getChartCancled`

`PATCH getChartCancled`

`DELETE getChartCancled`

`OPTIONS getChartCancled`


<!-- END_d6dde9bac073e8f141b8111e210b62d5 -->

<!-- START_c9df30bbc0b31e6f7a242ff1ed0dc595 -->
## getChartBranch
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartBranch" 
```

```javascript
const url = new URL(
    "http://localhost/getChartBranch"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartBranch`

`POST getChartBranch`

`PUT getChartBranch`

`PATCH getChartBranch`

`DELETE getChartBranch`

`OPTIONS getChartBranch`


<!-- END_c9df30bbc0b31e6f7a242ff1ed0dc595 -->

<!-- START_676c8a6110296e8f27ab827a88fb076e -->
## getCountCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCountCount" 
```

```javascript
const url = new URL(
    "http://localhost/getCountCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCountCount`

`POST getCountCount`

`PUT getCountCount`

`PATCH getCountCount`

`DELETE getCountCount`

`OPTIONS getCountCount`


<!-- END_676c8a6110296e8f27ab827a88fb076e -->

<!-- START_06bf658e25b3bc4de45970bf9f88a5c5 -->
## getBranchCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getBranchCount" 
```

```javascript
const url = new URL(
    "http://localhost/getBranchCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getBranchCount`

`POST getBranchCount`

`PUT getBranchCount`

`PATCH getBranchCount`

`DELETE getBranchCount`

`OPTIONS getBranchCount`


<!-- END_06bf658e25b3bc4de45970bf9f88a5c5 -->

<!-- START_3b30f7fa9d0cb5ca5b897dcd2891aa30 -->
## getChartCount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartCount" 
```

```javascript
const url = new URL(
    "http://localhost/getChartCount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartCount`

`POST getChartCount`

`PUT getChartCount`

`PATCH getChartCount`

`DELETE getChartCount`

`OPTIONS getChartCount`


<!-- END_3b30f7fa9d0cb5ca5b897dcd2891aa30 -->

<!-- START_99491e8096491f10d89c88c8dfd42121 -->
## getCountryhipments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getCountryhipments" 
```

```javascript
const url = new URL(
    "http://localhost/getCountryhipments"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getCountryhipments`

`POST getCountryhipments`

`PUT getCountryhipments`

`PATCH getCountryhipments`

`DELETE getCountryhipments`

`OPTIONS getCountryhipments`


<!-- END_99491e8096491f10d89c88c8dfd42121 -->

<!-- START_fe554c8091ae626a937871d6cb43da2d -->
## getChartCountry
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getChartCountry" 
```

```javascript
const url = new URL(
    "http://localhost/getChartCountry"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getChartCountry`

`POST getChartCountry`

`PUT getChartCountry`

`PATCH getChartCountry`

`DELETE getChartCountry`

`OPTIONS getChartCountry`


<!-- END_fe554c8091ae626a937871d6cb43da2d -->

<!-- START_566f344897a468cb388f756fc7314d84 -->
## countCountShipments
> Example request:

```bash
curl -X GET \
    -G "http://localhost/countCountShipments" 
```

```javascript
const url = new URL(
    "http://localhost/countCountShipments"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET countCountShipments`

`POST countCountShipments`

`PUT countCountShipments`

`PATCH countCountShipments`

`DELETE countCountShipments`

`OPTIONS countCountShipments`


<!-- END_566f344897a468cb388f756fc7314d84 -->

<!-- START_c77488eee5ede64076f2ae8a95bd97b6 -->
## countDelivered
> Example request:

```bash
curl -X GET \
    -G "http://localhost/countDelivered" 
```

```javascript
const url = new URL(
    "http://localhost/countDelivered"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET countDelivered`

`POST countDelivered`

`PUT countDelivered`

`PATCH countDelivered`

`DELETE countDelivered`

`OPTIONS countDelivered`


<!-- END_c77488eee5ede64076f2ae8a95bd97b6 -->

<!-- START_f7d549a6bea28d214c944ea5792706ba -->
## countPending
> Example request:

```bash
curl -X GET \
    -G "http://localhost/countPending" 
```

```javascript
const url = new URL(
    "http://localhost/countPending"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET countPending`

`POST countPending`

`PUT countPending`

`PATCH countPending`

`DELETE countPending`

`OPTIONS countPending`


<!-- END_f7d549a6bea28d214c944ea5792706ba -->

<!-- START_ec79400709680b5e7bdd02ae2f098bc2 -->
## countOrders
> Example request:

```bash
curl -X GET \
    -G "http://localhost/countOrders" 
```

```javascript
const url = new URL(
    "http://localhost/countOrders"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET countOrders`

`POST countOrders`

`PUT countOrders`

`PATCH countOrders`

`DELETE countOrders`

`OPTIONS countOrders`


<!-- END_ec79400709680b5e7bdd02ae2f098bc2 -->

<!-- START_0177fc4c79c044bb93feaffe8f4e59ce -->
## getStatuses
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getStatuses" 
```

```javascript
const url = new URL(
    "http://localhost/getStatuses"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getStatuses`


<!-- END_0177fc4c79c044bb93feaffe8f4e59ce -->

<!-- START_a88ce0630c62d51bc075b89585c64a52 -->
## getStat
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getStat" 
```

```javascript
const url = new URL(
    "http://localhost/getStat"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getStat`


<!-- END_a88ce0630c62d51bc075b89585c64a52 -->

<!-- START_96f8e5989b19a00f006e26769c93fd46 -->
## scheduled
> Example request:

```bash
curl -X GET \
    -G "http://localhost/scheduled" 
```

```javascript
const url = new URL(
    "http://localhost/scheduled"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET scheduled`


<!-- END_96f8e5989b19a00f006e26769c93fd46 -->

<!-- START_5c3a5ea2daf2c4533f09dd50355e2bf6 -->
## getScheduled
> Example request:

```bash
curl -X POST \
    "http://localhost/getScheduled" 
```

```javascript
const url = new URL(
    "http://localhost/getScheduled"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getScheduled`


<!-- END_5c3a5ea2daf2c4533f09dd50355e2bf6 -->

<!-- START_d18397f16c4b9da842ea4d62526e437f -->
## getStickers
> Example request:

```bash
curl -X POST \
    "http://localhost/getStickers" 
```

```javascript
const url = new URL(
    "http://localhost/getStickers"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getStickers`


<!-- END_d18397f16c4b9da842ea4d62526e437f -->

<!-- START_d630c260ce678ee9d2f20ad329cf65e6 -->
## getDeriveredA
> Example request:

```bash
curl -X GET \
    -G "http://localhost/getDeriveredA" 
```

```javascript
const url = new URL(
    "http://localhost/getDeriveredA"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET getDeriveredA`


<!-- END_d630c260ce678ee9d2f20ad329cf65e6 -->

<!-- START_193d48914f9fa9585853549fac421bf6 -->
## customerS
> Example request:

```bash
curl -X POST \
    "http://localhost/customerS" 
```

```javascript
const url = new URL(
    "http://localhost/customerS"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST customerS`


<!-- END_193d48914f9fa9585853549fac421bf6 -->

<!-- START_38cd9df64cc7309f845f521f4e5d46db -->
## getUserConvById/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/getUserConvById/1" 
```

```javascript
const url = new URL(
    "http://localhost/getUserConvById/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getUserConvById/{id}`


<!-- END_38cd9df64cc7309f845f521f4e5d46db -->

<!-- START_8400a64f57ac575dcf0fb9ecb805b301 -->
## saveUserChat/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/saveUserChat/1" 
```

```javascript
const url = new URL(
    "http://localhost/saveUserChat/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST saveUserChat/{id}`


<!-- END_8400a64f57ac575dcf0fb9ecb805b301 -->

<!-- START_d944c8ad4b16f23a69d6d8fddc775103 -->
## send_sms
> Example request:

```bash
curl -X POST \
    "http://localhost/send_sms" 
```

```javascript
const url = new URL(
    "http://localhost/send_sms"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST send_sms`


<!-- END_d944c8ad4b16f23a69d6d8fddc775103 -->

<!-- START_44c5a14f425333deeb6d314f292c221c -->
## send_sms
> Example request:

```bash
curl -X GET \
    -G "http://localhost/send_sms" 
```

```javascript
const url = new URL(
    "http://localhost/send_sms"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET send_sms`


<!-- END_44c5a14f425333deeb6d314f292c221c -->

<!-- START_887f92203dd3f8eeb7d4e04f95b5fd39 -->
## filterFin
> Example request:

```bash
curl -X POST \
    "http://localhost/filterFin" 
```

```javascript
const url = new URL(
    "http://localhost/filterFin"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST filterFin`


<!-- END_887f92203dd3f8eeb7d4e04f95b5fd39 -->

<!-- START_e044ca13ff3d927698bfb093fff8d291 -->
## payment/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/payment/1" 
```

```javascript
const url = new URL(
    "http://localhost/payment/1"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST payment/{id}`


<!-- END_e044ca13ff3d927698bfb093fff8d291 -->

<!-- START_ce559181a89d5c3779e7af14c47b6b62 -->
## Show chats

> Example request:

```bash
curl -X GET \
    -G "http://localhost/chat" 
```

```javascript
const url = new URL(
    "http://localhost/chat"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET chat`


<!-- END_ce559181a89d5c3779e7af14c47b6b62 -->

<!-- START_88c315e77a9a6c5336278847b528bd72 -->
## send
> Example request:

```bash
curl -X POST \
    "http://localhost/send" 
```

```javascript
const url = new URL(
    "http://localhost/send"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST send`


<!-- END_88c315e77a9a6c5336278847b528bd72 -->

<!-- START_fce80f0d16562a7e651dad9c143c9b52 -->
## saveToSession
> Example request:

```bash
curl -X POST \
    "http://localhost/saveToSession" 
```

```javascript
const url = new URL(
    "http://localhost/saveToSession"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST saveToSession`


<!-- END_fce80f0d16562a7e651dad9c143c9b52 -->

<!-- START_b8104a04986d60778e3a1c2a769d0ed3 -->
## deleteSession
> Example request:

```bash
curl -X POST \
    "http://localhost/deleteSession" 
```

```javascript
const url = new URL(
    "http://localhost/deleteSession"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST deleteSession`


<!-- END_b8104a04986d60778e3a1c2a769d0ed3 -->

<!-- START_af0a290b2b81f21cecbe680d7a44c523 -->
## getOldMessage
> Example request:

```bash
curl -X POST \
    "http://localhost/getOldMessage" 
```

```javascript
const url = new URL(
    "http://localhost/getOldMessage"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST getOldMessage`


<!-- END_af0a290b2b81f21cecbe680d7a44c523 -->

<!-- START_9f7eb37241e7a140da73bb089c49488c -->
## btwRefShipments
> Example request:

```bash
curl -X POST \
    "http://localhost/btwRefShipments" 
```

```javascript
const url = new URL(
    "http://localhost/btwRefShipments"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST btwRefShipments`


<!-- END_9f7eb37241e7a140da73bb089c49488c -->

<!-- START_3714771b43d17b3cb90bc4bb06d59c68 -->
## btwSTdate
> Example request:

```bash
curl -X POST \
    "http://localhost/btwSTdate" 
```

```javascript
const url = new URL(
    "http://localhost/btwSTdate"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST btwSTdate`


<!-- END_3714771b43d17b3cb90bc4bb06d59c68 -->

<!-- START_2bc03d5639d4069c15cad6e283841d67 -->
## UpdateFollowUp
> Example request:

```bash
curl -X PATCH \
    "http://localhost/UpdateFollowUp" 
```

```javascript
const url = new URL(
    "http://localhost/UpdateFollowUp"
);


fetch(url, {
    method: "PATCH",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH UpdateFollowUp`


<!-- END_2bc03d5639d4069c15cad6e283841d67 -->

<!-- START_a0ebcf0b48ae3f979b5c5cd4e7517b64 -->
## UpdateFollowSUp/{id}
> Example request:

```bash
curl -X PATCH \
    "http://localhost/UpdateFollowSUp/1" 
```

```javascript
const url = new URL(
    "http://localhost/UpdateFollowSUp/1"
);


fetch(url, {
    method: "PATCH",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH UpdateFollowSUp/{id}`


<!-- END_a0ebcf0b48ae3f979b5c5cd4e7517b64 -->

<!-- START_ee28c7bf2fb026d13ee92cb09d30568e -->
## schedulepct
> Example request:

```bash
curl -X GET \
    -G "http://localhost/schedulepct" 
```

```javascript
const url = new URL(
    "http://localhost/schedulepct"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET schedulepct`

`POST schedulepct`

`PUT schedulepct`

`PATCH schedulepct`

`DELETE schedulepct`

`OPTIONS schedulepct`


<!-- END_ee28c7bf2fb026d13ee92cb09d30568e -->

<!-- START_7ec4275995798d7e3185f5d285da23a0 -->
## allLogs
> Example request:

```bash
curl -X GET \
    -G "http://localhost/allLogs" 
```

```javascript
const url = new URL(
    "http://localhost/allLogs"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET allLogs`

`POST allLogs`

`PUT allLogs`

`PATCH allLogs`

`DELETE allLogs`

`OPTIONS allLogs`


<!-- END_7ec4275995798d7e3185f5d285da23a0 -->

<!-- START_5326cb76dc3d0dcd10ec402515a83254 -->
## Filterlogs
> Example request:

```bash
curl -X POST \
    "http://localhost/Filterlogs" 
```

```javascript
const url = new URL(
    "http://localhost/Filterlogs"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST Filterlogs`


<!-- END_5326cb76dc3d0dcd10ec402515a83254 -->

<!-- START_e03650028addf95c3f132013e2feefe0 -->
## callcount
> Example request:

```bash
curl -X GET \
    -G "http://localhost/callcount" 
```

```javascript
const url = new URL(
    "http://localhost/callcount"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET callcount`


<!-- END_e03650028addf95c3f132013e2feefe0 -->

<!-- START_e4a520056ffcc937dc79af408f942997 -->
## invoiceOrder
> Example request:

```bash
curl -X GET \
    -G "http://localhost/invoiceOrder" 
```

```javascript
const url = new URL(
    "http://localhost/invoiceOrder"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET invoiceOrder`

`POST invoiceOrder`

`PUT invoiceOrder`

`PATCH invoiceOrder`

`DELETE invoiceOrder`

`OPTIONS invoiceOrder`


<!-- END_e4a520056ffcc937dc79af408f942997 -->

<!-- START_489f0c489c0be7a5d328359efa94a3ea -->
## invoice/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/invoice/1" 
```

```javascript
const url = new URL(
    "http://localhost/invoice/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET invoice/{id}`

`POST invoice/{id}`

`PUT invoice/{id}`

`PATCH invoice/{id}`

`DELETE invoice/{id}`

`OPTIONS invoice/{id}`


<!-- END_489f0c489c0be7a5d328359efa94a3ea -->

<!-- START_792dbb5dfd8db302bbad16e36921d1b0 -->
## Fetch all messages

> Example request:

```bash
curl -X GET \
    -G "http://localhost/messages" 
```

```javascript
const url = new URL(
    "http://localhost/messages"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET messages`


<!-- END_792dbb5dfd8db302bbad16e36921d1b0 -->

<!-- START_4ef2095ce9b788538960708c0aec76eb -->
## Persist message to database

> Example request:

```bash
curl -X POST \
    "http://localhost/messages" 
```

```javascript
const url = new URL(
    "http://localhost/messages"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST messages`


<!-- END_4ef2095ce9b788538960708c0aec76eb -->

<!-- START_683e508f7a70d1dd376734e077ddc2d3 -->
## importShipments
> Example request:

```bash
curl -X POST \
    "http://localhost/importShipments" 
```

```javascript
const url = new URL(
    "http://localhost/importShipments"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST importShipments`


<!-- END_683e508f7a70d1dd376734e077ddc2d3 -->

<!-- START_e776015e96df2673e51e28bbe840483e -->
## search_order/{search}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/search_order/1" 
```

```javascript
const url = new URL(
    "http://localhost/search_order/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET search_order/{search}`


<!-- END_e776015e96df2673e51e28bbe840483e -->

<!-- START_4b3c731d0bc9e181a9b52f3798914278 -->
## export_dispatch
> Example request:

```bash
curl -X GET \
    -G "http://localhost/export_dispatch" 
```

```javascript
const url = new URL(
    "http://localhost/export_dispatch"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET export_dispatch`


<!-- END_4b3c731d0bc9e181a9b52f3798914278 -->

<!-- START_25d6a9d23b7f197642243bcc9dab72cc -->
## searchClient/{search}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/searchClient/1" 
```

```javascript
const url = new URL(
    "http://localhost/searchClient/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET searchClient/{search}`


<!-- END_25d6a9d23b7f197642243bcc9dab72cc -->

<!-- START_c7acb68abce5fe7f5d8ddb74635b4fe9 -->
## searchRider/{search}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/searchRider/1" 
```

```javascript
const url = new URL(
    "http://localhost/searchRider/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET searchRider/{search}`


<!-- END_c7acb68abce5fe7f5d8ddb74635b4fe9 -->

<!-- START_d3970ef7c389692d5fe3c5cc4601c052 -->
## google_sheets
> Example request:

```bash
curl -X POST \
    "http://localhost/google_sheets" 
```

```javascript
const url = new URL(
    "http://localhost/google_sheets"
);


fetch(url, {
    method: "POST",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST google_sheets`


<!-- END_d3970ef7c389692d5fe3c5cc4601c052 -->

<!-- START_16bf28568df45088f304484fe8e0d34e -->
## filterInvoice
> Example request:

```bash
curl -X GET \
    -G "http://localhost/filterInvoice" 
```

```javascript
const url = new URL(
    "http://localhost/filterInvoice"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET filterInvoice`

`POST filterInvoice`

`PUT filterInvoice`

`PATCH filterInvoice`

`DELETE filterInvoice`

`OPTIONS filterInvoice`


<!-- END_16bf28568df45088f304484fe8e0d34e -->

<!-- START_5e2c315cb60830ba8ad6bdf889f5f7dd -->
## failsafe
> Example request:

```bash
curl -X GET \
    -G "http://localhost/failsafe" 
```

```javascript
const url = new URL(
    "http://localhost/failsafe"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET failsafe`

`POST failsafe`

`PUT failsafe`

`PATCH failsafe`

`DELETE failsafe`

`OPTIONS failsafe`


<!-- END_5e2c315cb60830ba8ad6bdf889f5f7dd -->

<!-- START_9d34d8469a4925de104d7012baff8a80 -->
## verifyEmailFirst
> Example request:

```bash
curl -X GET \
    -G "http://localhost/verifyEmailFirst" 
```

```javascript
const url = new URL(
    "http://localhost/verifyEmailFirst"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET verifyEmailFirst`


<!-- END_9d34d8469a4925de104d7012baff8a80 -->

<!-- START_36fbe310579da1c6bddfa380c06e75f6 -->
## verify/{verifyToken}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/verify/1" 
```

```javascript
const url = new URL(
    "http://localhost/verify/1"
);


fetch(url, {
    method: "GET",
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
null
```

### HTTP Request
`GET verify/{verifyToken}`


<!-- END_36fbe310579da1c6bddfa380c06e75f6 -->


