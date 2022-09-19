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

```php
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

```php
public function send(Request $request){
    Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
    return redirect()->route('contact.index')->with('success','Mail sent successfully');
}
```
- removable part:

```php
Contact::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'message'=>$request->message,
]);
```
## Updating

- Here I update the some code for customizing like you can replace your social links.
- Where you can find this or how can you edit this?
- ```config\contact.php``` in this path you can find this code where you have to replace your code.

```php
return [
    'send_email_to' => "nihirzala@gmail.com",   //replace with your recipient mail address
    'instagram'=>"http://www.instagram.com",    // replace with your instagram profile url
    'twitter'=>"http://www.twitter.com",        // replace with your twitter profile url
    'facebook'=>"http://www.facebook.com",      // replace with your facebook profile url
    'linkedin'=>"http://www.linkedin.com",      // replace with your linkedin profile url
    'mail'=>"nihirzala@gmail.com",              // replace with your mail 
];
```


