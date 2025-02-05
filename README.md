Application Architecture - MVC

Models - App/Models
    User.php
Controllers - App/Http/Controllers
    RegistrationController.php
    LoginController.php
    APIController.php

Views - resources/views
    auth views -(Login, registration and dashboard pages)
    layouts - all other pages extend the layouts for centralized control

Database
    is managed by migration for creation and altering of tables.

Logging
    Logs are can be found in storage/logs/laravel.log

API 
    --tests done on postman under url http://localhost:8000/api/user/4
    --API not authenticated.
Routes
    --found in the routes folder and these decide how resources are accessed

middleware eg. auth
    -- allow access only to resources when certain conditions are fulfilled

Validations
    -- done both on front and in the back

urls
    --/login
    --/register
    --user/1 (for api where 1 is the user ID)
