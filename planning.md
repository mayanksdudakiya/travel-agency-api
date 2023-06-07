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
1) 
