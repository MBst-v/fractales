# Focus project

## начало
- закинуть в папку на локальном сервере
- поменять в файле `gulpfile.js` - на тот урл, на котором запускается проект на сервере
```
const servrevUrl = 'http://focus'
```
- перейти из корнейвой папки в development 
```
cd .\development\
```
- запустить 
```
gulp dev
```
- возможно придется удалить папку `node_modules` и переустановить используя `npm i` находясь в папке development

## разработка
- все `.php` файлы изменяются напрямую
- gulp отслеживает изменения в `.php` файлах, которые лежат либо в корне проекта, либо в папке `templates` для перезапуска браузера
- работа с остальными файлами происходит в папке `development`
- переносятся все файлы из папки `scss`, не затрагивая вложенные папки
- из корнейвой папки `js/` и папки `js/vendor/` переносятся файлы в папку `assets/js`. Не переносятся файлы начинающиеся с `_*.js` - лучше их складывать в папку `js/modules/` для удобства и подключать в нужные файлы с помощью `//=require _filename.js`
- из папки `img` переносятся все файлы\папки с попыткой преобразовать файлы в `.webp`

## структура
- в файле `includes/header-init.php` подключение глобальных настроек, которые буду доступны для использования в шаблонах и на страницах. В нем же определяется массив `$page`, в который можно вносить общую информацию для всех страниц
- в файле `config/pages.php` определяются настройки для страниц.
  - необходимо указать название страницы изходя из её шаблона 
  ```
  // index.php
  $_pages = [
    'index' => []
  ]
  ```
  - далее все будет доступно на странице из массива `$page`
- в файле `config/config.php` так же можно определять дополнительные переменные, которые будут доступные на всех страницах\шаблонах

## js/vendor
- swiper api https://swiperjs.com/swiper-api#methods-and-properties