AnalyseCV

AnalyseCV is a web application that helps users analyze their CVs using AI. Users can upload their CV, provide a job description, and get an analysis of how well their CV matches the position, along with suggestions for improvement.

The project was built with Laravel and integrates an AI API to analyze CVs and job descriptions.

## Features

* User registration and authentication
* CV upload and management
* AI-powered CV analysis
* CV and job matching
* Suggestions for improving a CV
* User dashboard
* Premium subscription system
* Paddle payment integration
* Responsive design

## Technologies

* PHP
* Laravel
* Blade
* Tailwind CSS
* JavaScript
* MySQL
* Paddle
* AI API
* Git / GitHub

## How it works

A user creates an account and uploads their CV. They then provide the job description for the position they are interested in. The application sends the relevant information to the AI service and processes the response.

The analysis is then displayed in the user's dashboard, where they can see how their CV matches the position and what could be improved.

## Running the project locally

Clone the repository and install the dependencies:

git clone https://github.com/L-Maiss/analysecv.git
cd your-repository

composer install
npm install

Create the environment file:

cp .env.example .env
php artisan key:generate

Configure the database, AI API and Paddle credentials in the .env file.

Run the database migrations:

php artisan migrate

Build the frontend assets:

npm run build

Start the development server:

php artisan serve

The application should then be available at http://localhost:8000.

## Payments

Paddle is integrated for handling subscriptions and payments. The current version uses Paddle's sandbox environment, so real payments are not processed.

## Live website

https://analysecv.com

## About the project

I built AnalyseCV as a practical Laravel project to create a complete web application from the ground up.

While working on it, I gained experience with authentication, file uploads, databases, external APIs, AI integration, subscriptions and payment processing.
