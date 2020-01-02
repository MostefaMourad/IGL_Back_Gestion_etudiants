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


<!-- START_b454d9797c2be2437300ab06eb247eb5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/etudiants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiants"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "code": 200,
    "message": "",
    "data": [
        {
            "id": 2,
            "email": "ha_bouali@esi.dz",
            "password": "canari404",
            "nom": "mostefa",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 03:32:03",
            "updated_at": "2020-01-01 03:32:03"
        },
        {
            "id": 4,
            "email": "hm_bouali@esi.dz",
            "password": "canari404",
            "nom": "mostefa",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 03:33:36",
            "updated_at": "2020-01-01 03:33:36"
        },
        {
            "id": 6,
            "email": "hz_bouali@esi.dz",
            "password": "canari404",
            "nom": "lay lay",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 03:37:49",
            "updated_at": "2020-01-01 03:37:49"
        },
        {
            "id": 9,
            "email": "hhh_bouali@esi.dz",
            "password": "canari404",
            "nom": "lay lay",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 03:50:56",
            "updated_at": "2020-01-01 03:50:56"
        },
        {
            "id": 10,
            "email": "hgg_bouali@esi.dz",
            "password": "c",
            "nom": "lay lay",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 03:59:44",
            "updated_at": "2020-01-01 03:59:44"
        },
        {
            "id": 11,
            "email": "hgga_bouali@esi.dz",
            "password": "c",
            "nom": "lay lay",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 04:01:27",
            "updated_at": "2020-01-01 04:01:27"
        },
        {
            "id": 12,
            "email": "qqk_bouali@esi.dz",
            "password": "canari404",
            "nom": "lay lay",
            "prenom": "mourad",
            "niveau": "2cp",
            "section": null,
            "groupe": null,
            "specialite": null,
            "date_naissance": "2018-05-03",
            "adresse": "laylay",
            "indicateur_promo": "g",
            "created_at": "2020-01-01 04:06:50",
            "updated_at": "2020-01-01 04:06:50"
        }
    ]
}
```

### HTTP Request
`GET api/etudiants`


<!-- END_b454d9797c2be2437300ab06eb247eb5 -->

<!-- START_7ea98113d47c60f7348dc5f5849d8ca0 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/etudiants/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiants/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": false,
    "code": 204,
    "message": "Etudiant introuvable"
}
```

### HTTP Request
`GET api/etudiants/{id}`


<!-- END_7ea98113d47c60f7348dc5f5849d8ca0 -->

<!-- START_27598e4f4e82ca055283849ae02b95be -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/etudiants" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiants"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/etudiants`


<!-- END_27598e4f4e82ca055283849ae02b95be -->

<!-- START_a60ba6579fb8bcefda2b6eea16850364 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/etudiants/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiants/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH api/etudiants/{id}`


<!-- END_a60ba6579fb8bcefda2b6eea16850364 -->

<!-- START_572ba63f35fe76d2126a25d4aaf5c9e9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/etudiants/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/etudiants/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/etudiants/{id}`


<!-- END_572ba63f35fe76d2126a25d4aaf5c9e9 -->


