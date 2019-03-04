# WebPiCamera
PHP Web based Pi Camera controller photo &amp; video

## Functions
* Web access
* Make Photo & Video and view it automaticly

## Instalation
1. Install apache2 and php
```
$ sudo apt-get install apache2 php
```
2. Start pcmanfm using sudo to get access to /var/www/html directory
```
$ sudo pcmanfm
```
3. Go to /var/www/html using pcmanfm
4. Upload PHP files to /var/www/html
5. To make it work every time you restart your raspberry pi you need to type in to terminal:
```
$ sudo chmod 777 /dev/vchiq
```
6. Add apache2 to access writing files
```
$ sudo chown -R www-data /var/www/html
```
6. Open your browser and open site:
```
http://localhost/
```
