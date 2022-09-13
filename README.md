## Installation contact package
- Hi Here I created packge for contact us page.
## For Installation

- For install this package you have to install this package using composer.

``` 
composer require nihir/contact
```

- After this you have to publish providers in ```\config\app.php``` File.
- Put this ```Nihir\Contact\ContactServiceProvider::class,``` in providers section.
- After this publish the vendor using ```php artisan vendor:publish``` .
- After this clear cache and routes

```
php artisan optimize:clear
php artisan route:cache
```
- For set recipient's email you have to set email in ```\config\contact.php``` in this code part like this.

```
<?php

return [
    'send_email_to' => "your@email.com"
];
```

- Here the put your recipient's email ID.
- Update your mail configuration in ```.env``` file.
- And Done.

## For customize the blade file

- You have to find the nihir/contact folder in ```vendor``` folder.
- In this folder there is ```src``` folder and ```view\contact.blade.php``` .
- This blade is using bootstrap.

## For customizing the email mark-down

- You have to find the nihir/contact folder in ```vendor``` folder.
- In this folder there is ```src``` folder and ```view\contact\email.blade.php``` .
- Enjoy code.
