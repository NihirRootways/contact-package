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

<hr style="border-width:1000px;">
