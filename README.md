# Car Detailing Service Website

This is a car detailing service appointment system built with Laravel. It allows users to schedule appointments for car services and provides an admin panel to manage the appointments and services.

## Features

- Appointment Scheduling: Users can select a car detailing service, provide their details, and choose a suitable date and time for the appointment.
- Admin Panel: 
    1. An admin panel is able to manage the services - change their details.
    2. The admin can mark appointments as pending, done, or canceled, providing visual feedback for each status.
    3. Search by licence plates for easier customer look-up.

## Installation

1. Clone the repository:

```
git clone https://github.com/Benorno/bussiness-landing-page.git
```
2. Install the dependencies:
```
cd bussiness-landing-page

composer install

npm install && npm run dev
```
3. Create a copy of the ```.env.example``` file and rename it to ```.env```. Update the necessary configuration values such as the database settings.

4. Generate the application key:
```
php artisan migrate --seed
```
5. Run the database migrations and seed the database with sample data:
```
php artisan migrate
```
6. Start the development server:
```
php artisan serve
```
7. Visit ```http://localhost``` in your web browser to access the application.

## Usage
- Access the admin panel by visiting ```http://localhost/admin/services``` and make a service or more.



## Demo

https://reflectionsautodetailing.000webhostapp.com/


## 🛠 Tech Used
HTML, CSS, Bootstarp CSS, PHP, Laravel


## Feedback

If you have any feedback, please reach out to me at benas.asmontas@icloud.com

