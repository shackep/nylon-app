
# Example App

## Build instructions
Navigate to directory you want this to live in:

$ git clone git@github.com:shackep/nylon-app.git

Make sure your version of composer is up to date

$ cd nylon-app

Make your .env file by copying .env example,
$ cp .env.example .env 

Change the DB values to:

```
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=sail
    DB_PASSWORD=password
```

Run:
$ composer install


This app is set up using Laravel Sail.
You can run:
$ composer require laravel/sail --dev
$ ./vendor/bin/sail build
$ ./vendor/bin/sail up
$ ./vendor/bin/sail artisan key:genarate
$ ./vendor/bin/sail artisan migrate

$ ./vendor/bin/sail artisan db:seed <- seed some people

If you run into permissions issues you may need to adjust the permissions of the storage and bootstrap/cache directories:
Check permissions group using:
$ ls -alt

$ sudo chown -R $USER:www-data storage
$ sudo chown -R $USER:www-data bootstrap/cache

$ ./vendor/bin/sail npm install
$ ./vendor/bin/sail npm run dev


Once you have a working install, you can:
Create a profile via: http://localhost/register
View people entries here: http://localhost/dashboard/people
Add people here: http://localhost/add

## Notes:
I used sail as it was the correct Ubuntu 22.04 docker container, and was fairly straight forward. While I was able to spin up the application on a different computer, I am not sure if it will be as straight forward as a basic docker setup.

The logic around SSN was the main hurdle. I defaulted to using a one way hash and pulling off the last four for display and sorting. I also named the DB column to obfuscate what the column contains. If we needed to actually have the SSN stored in the db I would approach it any number of ways. Break it into several parts and salt and hash it, so one must have the application logic + db to reverse/decode SSN numbers. Perhaps have a seperate DB that is only accessed for ss retrieval, store salts on the main DB and a id to help us with the retrieval, but keep user name and email seperately.

The form itself I kept simple. I used a classless CSS library. I could make make it "mobile first" and add breakpoints for the different screen sizes to get consistent stacking behavior. I spent a bit of my time getting a handle on sail and breeze as I hadn't used those before.

I would add backend validation and error messages using laravel's Validate logic to make sure SSN's and emails are in a valid format. I would also add something the  'add' form to let the end user know that their submission was successful.

I would make it so clicking on the table column header would alternate between asc/desc sort order. Currently it only sorts in ascending order. 

