# Title: MVC/Twig

- Repository: `doctrine`
- Type of Challenge: `Learning challenge`
- Duration: `2 days`
- Deployment strategy : `NA`
- Team challenge : `solo`

## Project contributors:
- Jonas Rossou

## Learning objectives?
- Learn basic terminology of an ORM (Entities, relations, ...)
- Learn to create a basic crud with Doctrine
- Learn to make a REST API

## The Mission
We will create some entities, connect to a database, make a migration and doctrine that migration. Eventually we will make a crud of the app.

## What did I learn from this exercise
- Making entities in Symfony
- Adding a property entity to another entity
- Make a crud/REST api
- The mvc layer of Symfony
- Make my own twig-function
- Form builder and passing that data in Symfony
- Routing in Symfony (path, forward, redirecting etc)
- Nl2br filter
- Twig filters in general

### Must-have features
Step 1: Configure Doctrine
You can skip this step if you are using symfony

Create a new database based on the import.sql file.

Then install Doctrine using Composer and configure the database connection. You can find all the documentation for this on the doctrine website.

You can copy most boilerplate setup code from the documentation, be sure to include into createAnnotationMetadataConfiguration the location where all your entities with annotations are. The default is src.

Step 2: Create the Teacher entity
We already proved the Student entity, you will have to create a Teacher entity. You can choose which data to store for the Teacher, but at least it should contain a name, an e-mail and an address.

If you are using Symfony, you can use the maker bundle to generate the entity for you: run bin/console make:entity.

Separating Concerns using Embeddables
We also provided the Address entity but this is a special case: it is an embeddable, that you will use on both the Student and the Teacher entity.

Embeddables are classes which are not entities themselves, but are embedded in entities. You'll mostly want to use them to reduce duplication or separating concerns. Value objects such as date range or address are the primary use case for this feature.

Step 3
We will now write a REST api, while using the Doctrine entities to save the data.

A REST api is a simple convention that uses the different HTTP methods to provide CRUD functionality. When it displays information it most of the time does it in the JSON format.

We will provide the following pages:

- GET RestTeacher.php (overview page in JSON)

- GET RestTeacher.php?id=X (full details of entity in JSON)

- PUT RestTeacher.php (create new entity)

- POST RestTeacher.php?id=X (Update)

- DELETE RestTeacher.php?id=X (Delete)

- GET RestStudent.php (overview page in JSON)

- GET RestStudent.php?id=X (full details of entity in JSON)

- PUT RestStudent.php (create new entity)

- POST RestStudent.php?id=X (Update)

- DELETE RestStudent.php?id=X (Delete)

The student detail page should contain a reference to the teacher, the teacher detail page should contain an array of all his students.

If you delete a teacher you should also delete all his students. If your configure your cascading for the relation correctly in Doctrine this should happen automatically.

Testing your REST api
Because you cannot do a PUT or DELETE request with the browser, you will need some REST client to test all methods. PHPStorm comes with a REST client out of the box, you can find it at:

tools > http client > test restfull webservice

Alternatively, if you do not use PhpStorm you could use several free tools as a rest client, a really popular one is postman. You could also use several browser extensions in Chrome or Firefox.

### Nice to have features
Make a user entity with email, pw, id, roles etc. Try to make a registration and a login field. 


