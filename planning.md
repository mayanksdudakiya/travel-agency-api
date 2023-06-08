## Plan a project
In this phase we will gather information regarding project and will make a list of features, questions to client, required productivity toold for project, database design, etc.

**Table of Contents**

**1)** Features

**2)** Database Design

**3)** Questions to Client

**4)** How to start Laravel project?

## Features
So after reading specifications multiple times, I have concluded below things

1) Two user roles required `admin` & `editor`
2) There is a 1 To M relationship between Travel & Tour so Tour will be dependent on Travel.
3) Travel will have title, multiple images[can be seperate db table or json array field], number of days
4) Tour will have pricing, start & end date, title, description, booking
5) When Tour price return to frontend then we need to send it with price * 100
6) While creating Tour price shoudl be price / 100

#### Admin
Admin can do following things
- Create Users
- Create Travels
- Create Tours

#### Editor
Editor can do following things
- Update Travels

#### Without Auth
Without auth following things can be done
- Anyone can see **public** Travels listing
- Get a list of Tours via Travel's slug
- Travel listing have pagination
- Tour listing have pagination
- Tour can be filtered by `priceFrom`, `priceTo`, `dateFrom`, `dateTo`
- Tour price can be sorted by `asc` & `dec`

## Questions To Client
1) Do you have any specific requirement regarding API authorization like Passport (Auth2), Sanctum, etc?
2) Do you want to implement User update API endpoint?
3) Do you want to implement permissions for each roles in future? - if yes, then we can use spatie permission management package or can built our own solution
4) Do you want to add Update Tours API endpoint?
5) Do you want to add Delete Tours, Travels & User API endpoint?
6) Accomadation for tours
7) Payments?
8) If payment, then receipt sharing, PDF generation, etc?
9) Review posting?
10) Do you have any futuarastic idea that you are currently working on for current app? - This could be the most important question so that we can prepare architecture scalable

There are lots of questions that we can research and gather but its just for demo.

## Database design
**Travels**
- ID/UUIDs
- User Id
- Name
- Slug
- Description
- Number of days
- Number of nights
- Is Public
- Created At
- Updated At
- Created By
- Updated By

**Images Travel or images-for more futurastic way**
- ID / imageable_id
- Travel ID/UUID / imageable_type
- Image Path / imageable_path
- Created At
- Updated At
- Created By
- Updated By

**Tours**
- ID/UUIDs
- Travel ID/UUID [1 to many relationship]
- Name
- Description
- Price
- Start Date
- End Date
- Created At
- Updated At
- Created By
- Updated By

**Booking Tour**
- ID/UUID
- Tour ID [Many to Many relationship]
- Created At
- Created By

**Users**
- ID / UUID
- Firstname
- Lastname
- Password
- Email
- Email Verification At
- Created At
- Updated At
- Created By
- Updated By

**Roles**
- ID
- Role
- Created At
- Updated At
- Created By
- Updated By

**Role Users**
- ID
- Role
- User
- Created At
- Updated At
- Created By
- Updated By

## How To Setup Laravel Project?

**Coding Guidelines**
Before jumping into the development dev should be aware of coding guidelines. Dev should read below links at least once and try to follow it as much as possible

1) https://xqsit.github.io/laravel-coding-guidelines/
2) https://spatie.be/guidelines/laravel-php

**Productivity Tool**
1) Setup Laravel Pint or Use Laravel inbuilt PHP-CS-Fixer
2) Get familiar yourself with LaraStran
3) X-Debug - In this case its not required but its very useful to debug your code very fast
4) Laravel Debugbar - This will help to optimize db queries and other stuff
5) Use all latest tech stack, its good to use latest PHP
6) Use strict typing to avoid any bug
7) Use inbuilt Laravel PHPUnit test
8) Use Sanctum for the authorization
9) Strictly follow Laravel naming conventions
10) Use POSTMAN and its API doc facility
