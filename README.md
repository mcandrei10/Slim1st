# Slim1st

==
Primul proiect cu Slim Framework - code files

==
Directorul de lucru este: C:\xampp\htdocs\authentication

==
Au fost instalate:
  1. XAMPP (https://www.apachefriends.org/ro/download.html)
  2. Composer (https://getcomposer.org/download/)
  3. Am rulat comanda: composer dump-autoload -o
  4. Slim (composer require slim/slim "^3.0")
  5. Twig (composer require slim/twig-view) - creaza Views
  6. De adaugat pasajul ref la psr-4 in composer.json 
  7. Am rulat comanda: composer dump-autoload -o
  8. Eloquent (composer require illuminate/database) - faciliteaza lucrul cu BD
  
==
Am parcurs lectiile video YouTube pina la: https://youtu.be/70IkLMkPyPs?list=PLfdtiltiRHWGc_yY90XRdq6mRww042aEC

==
.htaccess

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
  

