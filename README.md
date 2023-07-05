# php-assignment

## Futtási útmutató

A program futtatásához szükséges egy docker, minden további fájl megtalálható hozzá a git-en.

Ezután lehet futtatni a `install.bat` vagy az `install.sh` fájlokat.

Amennyiben nem a fájlokat futtatnánk az elábbi parancsokat kell megadni egy konzolterminálban:

```bat
cp .env.example .env
docker-compose build
docker-compose up -d
docker-compose exec php composer install
docker-compose exec php php artisan key:generate --show
```

## Program URI-k

### Felhasználók

- `GET /users` : Az összes felhasználó lekérdezése.
- `GET /users/{user}` : Egy adott felhasználó részletes lekérdezése.
- `POST /users` : Új felhasználó létrehozása.
- `PUT /users/{user}` : Egy adott felhasználó frissítése.
- `DELETE /users/{user}` : Egy adott felhasználó törlése.

**Paraméterek**

- `{user}` : Egy felhasználó típusú objektum.

### Csomagok

- `GET /parcels` : Az összes csomag lekérdezése.
- `GET /parcels/{parcel_number}` : Egy adott csomag részletes lekérdezése.
- `POST /parcels` : Új csomag létrehozása.
- `PUT /parcels/{parcel_number}` : Egy adott csomag frissítése.
- `DELETE /parcels/{parcel_number}` : Egy adott csomag törlése.

**Paraméterek**

- `{parcel_number}` : Egy csomag típusú objektum.