# Star Wars Ontology Project

This project is part of the "Representasi Pengetahuan" course. The main objectives are to create an ontology for the Star Wars universe, load it into Ontotext GraphDB, and develop a web application using Laravel to perform simple searches on the ontology. The web application is connected to GraphDB and runs on Laragon.

## Project Overview

1. **Create Star Wars Ontology**: Develop an ontology for the Star Wars universe, including characters, planets, species, etc.
2. **Load Ontology into GraphDB**: Use Ontotext GraphDB to store and manage the ontology.
3. **Develop Laravel Web Application**: Build a web application with Laravel that connects to GraphDB and provides a simple search feature.
4. **Run the Application with Laragon**: Use Laragon to set up the local development environment and run the Laravel application.

## Prerequisites

- [Ontotext GraphDB](https://www.ontotext.com/products/graphdb/)
- [Laravel](https://laravel.com/)
- [Laragon](https://laragon.org/)
- Composer
- PHP

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/starwars-ontology.git
   cd starwars-ontology
# Set Up Ontotext GraphDB

1. **Download and install Ontotext GraphDB from Ontotext GraphDB.**
2. **Start GraphDB and create a new repository.**
3. **Import the Star Wars ontology file (`starwars.owl`) into the GraphDB repository.**

# Set Up Laravel Application

1. **Install Laravel via Composer:**

    ```bash
    composer create-project --prefer-dist laravel/laravel starwars-app
    cd starwars-app
    ```

2. **Copy the contents of the webapp directory from this repository to the `starwars-app` directory.**

3. **Configure the `.env` file with your database and GraphDB connection details:**

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=starwars_db
    DB_USERNAME=root
    DB_PASSWORD=

    GRAPHDB_ENDPOINT=http://localhost:7200/repositories/your-repository
    ```

# Set Up Laragon

1. **Download and install Laragon from Laragon.**

2. **Start Laragon and add your Laravel project:**

    ```bash
    Laragon > Menu > Quick app > Laravel > {select your Laravel project directory}
    ```

# Run the Application

1. **Migrate the database:**

    ```bash
    php artisan migrate
    ```

2. **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

3. **Open your browser and navigate to [http://localhost:8000](http://localhost:8000) to access the web application.**

# Usage

The Laravel web application provides a simple search interface to query the Star Wars ontology. Enter your search terms in the search box and view the results retrieved from GraphDB.

# Contributing

Contributions are welcome! Please feel free to submit a Pull Request.


