Slim1st

==
Primul proiect cu Slim Framework - code files

==
Directorul de lucru este: C:\xampp\htdocs\authentication

==
Au fost instalate:
  1. XAMPP (https://www.apachefriends.org/ro/download.html)
  2. Composer (https://getcomposer.org/download/)
  3. Slim (composer require slim/slim "^3.0")
  4. Twig (composer require slim/twig-view) - creaza Views
  5. De adaugat pasajul ref la psr-4 in composer.json 
  6. Am rulat comanda: composer dump-autoload -o
  7. Eloquent (composer require illuminate/database) - faciliteaza lucrul cu BD
  8. Respect\Validation - pentru validarea cimpurilor input: composer require respect/validation
  9. Slim CSFR protection: composer require slim/csrf

==
.htaccess din directorul /public
(fara aceasta mentiune in fisierul .htaccess nu vor raspunde cereri catre pagini dincolo de root, de ex nu va raspunde /public/auth/signup)

  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule ^ index.php [QSA,L]
 
