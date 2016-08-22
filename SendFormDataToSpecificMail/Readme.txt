Laravel Version
Tested wtih:
-Xampp
-Gmail
-Ymail
-Google Chrome 51.0.2704.84 

home page:localhost/{ laravelVersion/public path }/home

Note:
-Don't forget to add .env file + run composer install on downloaded project
-Don't forget to change sender email inside .env file 
[
  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.gmail.com
  MAIL_PORT=587
  MAIL_USERNAME=YOUR EMAIL
  MAIL_PASSWORD=YOUR PASSWORD
  MAIL_ENCRYPTION=tls
] 
-Don't forget to change receiver email inside formController to receiver visitor notification(you can change the receiver email at store method inside of formController.php file)

Form Controller Path
app->http->controllers->formController.php

HTML-PHP Version
Tested with:
-Xampp
-smtp4dev
-Google Chrome 51.0.2704.84 

Note:Don't forget to change receiver email to see the result on smtp4dev
