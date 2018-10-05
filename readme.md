# Laravel-test
working with queues,commands

create a new project
composer create-project --prefer-dist laravel/laravel project_name

php artisan serve - start laravel development server


controller - Receive all user requests and send to the correct location

php artisan make:controller NameController - Create a controller

routes - path accessed in browser

views - Users screens

views in laravel - view.blade.php
blade - engine teamplating.

the views are in resources/views

return view('example') - return a view

returning view with params:
$name = 'JOÃO';
        return view('example')->with('name', $name);


 return view('post.index') - access index into folder post


Model - Represents the database tables
.env - settings file - Database, for example, is configured in this file.

php artisan make:model Models\\Post -m - Create model into folder's model. -M Creates model with migration.

using the  tinker:


$category = new Category();
$category->name('Computer');
$category->save();

was created a register in database.



php artisan tinker


migration - Files that controlls all alterations in database.
php artisan migrate:install - Create the migration repository.
php artisan migrate:status  - to see migrations status.
php artisan migrate:refresh -Reset and re-run all migrations


container - registred services
bind - make various instaces
Singleton - A single instance.
instance - make a  class instance

 
Provider - Register Services

php artisan make:provider NameServiceProvider - Create Service Provider

method boot - start the service
method register - register the service

providers are registred in config/app

commands - are used to generate various services	

php artisan make:command PostCommand - to create a new PostCommand

how to use command:

 $this->dispatch(
            new PostCommand($this->post,$data)
        ); - In controller, this command call the PostCommand


 public function handle()
    {
        $post = $this->post;
        $post->fill($this->data);
        $post->save();
    }

This method receive params that came from constructor and save.


Queues 

php artisan queue:table - create table to store the jobs.

jobs - Jobs are the tasks that queues run


php artisan make:job nameJob - Crate jobs

php artisan make:job nameJob - Create jobs

.env - define queue connection type to database to store the jobs in database - QUEUE_CONNECTION=database

the jobs are stored in database 
php artisan queue:work  - run the jobs.
php artisan queue:listen  - run the jobs and reboot all laravel process, cosmuning more memory
 







 








