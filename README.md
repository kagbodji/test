# Task App
this is a simple task app built to learn/test Laravel/VueJS

03/07/2018: create a sample application from the excellent tutorials at
            https://medium.com/@shakyShane/laravel-docker-part-1-setup-for-development-e3daaefaf3c  
            http://felicianoprochera.com/simple-task-app-with-laravel-5-3-and-vuejs/
            https://medium.com/@connorleech/build-a-task-list-with-laravel-5-4-and-vue-2-9be0bba06801

**how to use:**
1. copy taskapp/.env.example to taskapp/.env
2. build and start the environment by executing `docker compose up`.  
First run will take a few minutes as it will pull teh container images from dockerhub 
3. execute `docker-compose exec app php artisan key:generate` to set the application key
4. execute `npm install` to install dependencies such as vuejs, gulp, and bootstrap
5. execute `docker-compose exec app php artisan migrate` to create db schema
6. navigate to `http://localhost:8090` in your browser. You should see the app
