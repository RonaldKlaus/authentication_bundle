Steps to create a login-form with symfony2
==========================================

1) Setup Symfony
----------------
- install apache (via XAMMP)
- download framework
- create folder in XAMMP/htdocs
- copy framework in this folder
- create bundle with
    $ php app/console generate:bundle bundleName

2) Create Database
------------------
- create database for users-table
- create users-table (email, password, lastname, firstname etc.)
- create role for database with password

3) Setup parameters.yml
-----------------------
- add database_name
- add user_name
- add user_password

4) Generate mapping and entities
--------------------------------
- mow the application needs some mapping between the bundle and the database
- we are using doctrine (maybe install with composer? Shouldn't be necessary)
1. create mapping:
    $ php app/console doctrine:mapping:import bundleName
2. create entities (create the models of the tables in the database)
    $ php app/console doctrine:generate:entities bundleName

5) Add login-action to controller
---------------------------------
- add Request-Class with use-command
- initialize EntityManager 
- initialize Repository (to search in the DB)
- add user-validation via DB check

6) Add login-form in special login.html.twig
--------------------------------------------

7) 