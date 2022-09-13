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
- After this clear cache and routes:

```
php artisan optimize:clear
```

```
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

## Migration

- In this code I already added migration file name contacts.
- You have to migrate the database in your project using ```php artisan migrate``` command.
- This will be store in database, If you want to disabled this than go on  ```src``` folde and find the ```Http\Controllers\ContactController.php``` and in this file you have to find the create methos you just have to remove it and your function is looks like this.

```
    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        // Mail::to(env('MAIL_TO'))->send(new ContactMailable($request->message,$request->name));
        return redirect()->route('contact.index')->with('success','Mail sent successfully');
    }
```
- removable part:

```
   Contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message,
    ]);
```
