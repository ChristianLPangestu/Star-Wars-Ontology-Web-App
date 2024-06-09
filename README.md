README
Ontology Star Wars Project
This project is part of the "Representasi Pengetahuan" course. The main objective is to create an ontology for the Star Wars universe, load it into Ontotext GraphDB, and develop a web application using Laravel to perform simple searches on the ontology. The web application is connected to the GraphDB and runs on Laragon.

Project Overview
Create Star Wars Ontology: Develop an ontology for the Star Wars universe, including characters, planets, species, etc.
Load Ontology into GraphDB: Use Ontotext GraphDB to store and manage the ontology.
Develop Laravel Web Application: Build a web application with Laravel that connects to GraphDB and provides a simple search feature.
Run the Application with Laragon: Use Laragon to set up the local development environment and run the Laravel application.
Prerequisites
Ontotext GraphDB
Laravel
Laragon
Composer
PHP
Installation
Clone the Repository

bash
Copy code
git clone https://github.com/yourusername/starwars-ontology.git
cd starwars-ontology
Set Up Ontotext GraphDB

Download and install Ontotext GraphDB from Ontotext GraphDB.
Start GraphDB and create a new repository.
Import the Star Wars ontology file (starwars.owl) into the GraphDB repository.
Set Up Laravel Application

Install Laravel via Composer:

bash
Copy code
composer create-project --prefer-dist laravel/laravel starwars-app
cd starwars-app
Copy the contents of the webapp directory from this repository to the starwars-app directory.

Configure the .env file with your database and GraphDB connection details:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=starwars_db
DB_USERNAME=root
DB_PASSWORD=

GRAPHDB_ENDPOINT=http://localhost:7200/repositories/your-repository
Set Up Laragon

Download and install Laragon from Laragon.

Start Laragon and add your Laravel project:

bash
Copy code
Laragon > Menu > Quick app > Laravel > {select your Laravel project directory}
Run the Application

Migrate the database:

bash
Copy code
php artisan migrate
Start the Laravel development server:

bash
Copy code
php artisan serve
Open your browser and navigate to http://localhost:8000 to access the web application.

Usage
The Laravel web application provides a simple search interface to query the Star Wars ontology. Enter your search terms in the search box and view the results retrieved from the GraphDB.

Contributing
Contributions are welcome! Please feel free to submit a Pull Request.

License
This project is licensed under the MIT License - see the LICENSE file for details.
