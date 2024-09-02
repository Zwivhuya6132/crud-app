# Simple PHP CRUD Application

This guide will walk you through the process of creating a basic CRUD (Create, Read, Update, Delete) application using PHP and MySQL. This application will manage a list of users, allowing you to add, view, update, and delete records in a database.

## Table of Contents

1. [Introduction](#introduction)
2. [Prerequisites](#prerequisites)
3. [Setting Up the Project](#setting-up-the-project)
4. [Setting Up the Database](#setting-up-the-database)
5. [Creating the PHP Files](#creating-the-php-files)
6. [Adding Basic Styling](#adding-basic-styling)
7. [Running the Application](#running-the-application)
8. [Uploading to GitHub](#uploading-to-github)

## Introduction

This project will teach you how to create a simple CRUD application that interacts with a MySQL database using PHP. You will learn how to set up a local development environment, create a database, write PHP scripts for each CRUD operation, and add basic styling for presentation.

## Prerequisites

Before starting, make sure you have the following installed on your computer:

- **XAMPP/WAMP/LAMP:** A local server environment to run PHP and MySQL. XAMPP is recommended for Windows users.
- **Git:** Version control software to manage your project and push it to GitHub.
- **A Code Editor:** A text editor like Visual Studio Code or Sublime Text to write your PHP scripts.

## Setting Up the Project

### Step 1: Create the Project Directory

1. Open the root directory of your local server (e.g., `htdocs` for XAMPP).
2. Create a new folder named `crud-app`. This folder will hold all your project files.

### Step 2: Initialize a Git Repository

1. Open a terminal or command prompt.
2. Navigate to the `crud-app` directory you just created.
3. Initialize a Git repository by running the command `git init`. This will create a `.git` folder to track your project changes.

## Setting Up the Database

### Step 3: Create a Database in MySQL

1. Open `phpMyAdmin` by navigating to `http://localhost/phpmyadmin/` in your web browser.
2. Create a new database called `crud_app`.
3. Within the `crud_app` database, create a table named `users` with the following columns:
   - `id`: An integer that auto-increments (serves as the primary key).
   - `name`: A varchar to store the user’s name.
   - `email`: A varchar to store the user’s email.
   - `created_at`: A timestamp that records when each record is created.

## Creating the PHP Files

### Step 4: Connect to the Database

1. In your project directory, create a PHP file that will handle database connections. This file will use PHP's PDO (PHP Data Objects) to connect to your MySQL database.

### Step 5: Create a Script to Read and Display Data

1. Create a PHP file to retrieve and display all records from the `users` table. This will be your main page where all users are listed.
2. Include links or buttons to add, edit, and delete records.

### Step 6: Create a Script to Add New Records

1. Create a PHP file with a form that allows users to input their name and email.
2. When the form is submitted, the data should be inserted into the `users` table in the database.

### Step 7: Create a Script to Update Existing Records

1. Create a PHP file that fetches a specific record based on the user’s ID and displays it in a form.
2. When the form is submitted, update the record in the database with the new data.

### Step 8: Create a Script to Delete Records

1. Create a PHP file that deletes a record from the `users` table based on the user’s ID.
2. You can add a confirmation prompt to ensure the user really wants to delete the record.

## Adding Basic Styling

### Step 9: Create a CSS File for Basic Styling

1. In your project directory, create a `style.css` file to add basic styling to your PHP pages.
2. Apply styles to elements like tables, forms, and buttons to make your application look more presentable.

## Running the Application

### Step 10: Access Your Application in a Browser

1. Start your local server (e.g., XAMPP).
2. Open your browser and navigate to `http://localhost/crud-app/index.php` to see your CRUD application in action.

## Uploading to GitHub

### Step 11: Push Your Project to GitHub

1. Create a new repository on GitHub.
2. In your terminal, add the GitHub repository as a remote origin using the command `git remote add origin <repository-url>`.
3. Push your project to GitHub by running `git push -u origin main`.

## Conclusion

You have successfully created a simple PHP CRUD application! This guide introduced you to the basics of connecting PHP with a MySQL database and performing CRUD operations. You can now expand on this foundation to build more complex applications.
