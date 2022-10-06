<p align="center">
  <a href="https://github.com/thiiagoms/xss-poc">
    <img src="assets/logo/battle.png" alt="Logo" width="80" height="80">
  </a>
     <h3 align="center">
        XSS Example Attack :sword:
     </h3>
</p>

Simple example of PHP vullnerable applicaton :face_with_thermometer:

- [Dependencies](#Dependencies)
- [Usage](#Usage)

### Dependencies
* PHP 7.4
* SQLite 3

### Usage

- Run server on `view.php` or just use `apache2` and access `view.php`: 
```bash
$ php -S localhost:8000 view.php
```

- With XSS Attack, uncomment line `28` on `view.php`
<p align="center">
    <img src="assets/screenshots/with-xss.png" alt="Logo" width="600" height="500">
</p>

- Without XSS Attack, uncomment line `29` on `view.php`
<p align="center">
    <img src="assets/screenshots/withou-xss.png" alt="Logo" width="1153" height=249">
</p>


If you want to contribute, you can also open issue or clone this repository to make a Pull Request, thank you so much!!!:purple_heart:
