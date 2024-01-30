## Php developer medior próbafeladat
### A feladat
Egy kapcsolat oldalt létrehozni egy képzeletbeli weboldalra, amelyen egy egyszerű contact
form található. A formon a felhasználók kérdezni tudnak az oldaltól. A beérkező kérdéseket
egy adatbázisba kell menteni. A beküldött kérdéseket egy admin oldalon szeretnénk listázni,
ahová jelszóval és felhasználónévvel kell tudnunk belépni.

### Funkcionalitás
Az oldalnak csak egy contact formot kell tartalmaznia (kapcsolatfelvételi űrlapot). Az
űrlapon a következő mezőknek kell megjelenniük:

Mindhárom mező kötelezően kitöltendő legyen. A "Neved" és az "E-mail címed" mező egy
sornak megfelelő szöveget tartalmazzon, míg az "Üzenet szövege" mező egy bekezdésnyi
szövegnek adjon helyet. A "Küldés" gombra kattintva a következő három eset egyike
valósuljon meg:
Amennyiben minden mező helyesen van kitöltve: "Köszönjük szépen a kérdésedet.
Válaszunkkal hamarosan keresünk a megadott e-mail címen."
Amennyiben a három mező legalább egyike üresen van hagyva: "Hiba! Kérjük töltsd ki az
összes mezőt!"
Amennyiben rossz e-mail cím formátumot adott meg: "Hiba! Kérjük e-mail címet adjál meg!"
A beküldött kérdések egy adatbázisba kerüljenek mentésre. Az oldalnak kell tartalmaznia egy
admin szekciót, ahová felhasználónév és jelszó párossal tudunk belépni.
Az admin szekció tartalmaz egy lapozható listát, az összes beküldött üzenettel. Legyen egy
előre inicializált felhasználó „admin” felhasználónévvel és „password” jelszóval

### Letöltés:
```
git clone https://github.com/AndreasGeorgopulos/develery-test.git develery-test
cd develery-test
```


### Dockerizáció (opcionális):
Lehetőség van Docker konténerben futtatni az alkalmazást. A beállítások a docker-compose.yml file-ban és a docker mappában találhatók.
```
docker-compose up -d --build
docker exec -it develery-test-web sh
```

Az alkalmazás elérése: http://localhost:2800

Adminer: http://localhost:2801 (host: develery-test-db, username: develery_user, password: develery_pwd)


### Telepítés:
Futtasd az alábbi parancsokat.
```
composer install
npm install
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
npm run build
```


### Használat:
Kapcsolat oldal: /contact

Admin oldal: /admin (email: admin@test.com, jelszó: aA123456)

> A kapcsolat oldal React segítségével lett megvalósítva, a komponensek az assets mappában találhatók.
