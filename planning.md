## Plan a project
In this phase we will gather information regarding project and will make a list of features, questions to client, required productivity toold for project, database design, etc.

## Features
So after reading specifications multiple times, I have concluded below things

1) Two user roles required `admin` & `editor`
2) There is a 1 To M relationship between Travel & Tour so Tour will be dependent on Travel.
3) Travel will have title, multiple images[can be seperate db table or json array field], number of days
4) Tour will have pricing, start & end date, title, description, booking

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
