# test
test repo

there will eventually be content in here...

03/07/2018: create a sample application from the excellent tutorial at
            https://medium.com/@shakyShane/laravel-docker-part-1-setup-for-development-e3daaefaf3c

**how to use:**
1. build and start the environment by executing `docker compose up`.  
First run will take a few minutes as it will pull teh container images from dockerhub 
2. execute: `docker-compose exec app php artisan key:generate` to set the application key
2. navigate to `http://localhost:8090` in your browser. You should see the app
