First attempt at using docker and used it connect to my mamp database and connect PHPMYADMIN as well

please leave comments on how it can be improved as this is after a weekend of learning

Thank you

copy ini file

E:\path-to-docker>docker cp docker-test:/usr/local/etc/php ./php_ini :edit the path, this is not need as the php.ini file is already in the php_ini directory just for reference this is how i added it first by copying it

if you get any mysql errors in windows desk top i ran

docker-php-ext-install mysqli run in the php terminal in docker desktop in the terminal

Run: docker-compose up --build