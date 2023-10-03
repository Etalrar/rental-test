#test
 test


*** 
rename the file example.env to .env

# Installation Instructions:

1. Install docker and docker-compose (https://docs.docker.com/desktop/mac/install/), please note that only in case of Mac, both packages are included in the same installation.
    - Verify your successful installation by issuing the next commands:  
        `$ docker version`  
2.  this command to *build the images* for the containers:  
    `$ docker-compose build`

    > You will get a really long output. Don't worry, it would take between 5-10 minutes depending on your internet connection speed.
3. Run this command to start the containers:  
    `$ docker-compose up`  
 
4. you could see the project http://localhost:8000/ after the container laravel-app have finished the migration, before that you only see "502 Bad Gateway" just wait a moment.
*** 

# Basic Usage:

1. Start containers:  
    `$ docker-compose up -d`
2. Restart containers:  
    `$ docker-compose restart`
3. Stop containers:  
    `$ docker-compose stop`
