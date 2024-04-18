The Test

Using your personal GitHub account, create a simple Docker based Laravel application. Make sure to commit frequently with descriptive notes.

// Set up using Sail 8.3  -> https://github.com/laravel/sail/blob/1.x/runtimes/8.3/Dockerfile 
Create an Ubuntu 22.04 docker container using Docker Compose, configured as a typical LAMP stack. 

For the repository, create a Main branch and a Develop branch where you see fit, merging into the Main branch as the final application to review.

Create this mini application as you would your own. While it would be easy to spend a significant amount of time making this perfect, we expect this to take around 2-4 hours. 

Business Requirements

Nylon needs a Laravel website that needs to capture the First, Last, Email, and Social Security Number of a person.

1. Create New Person Model and Schema:
- first_name - string
- last_name - string
- email - string
- SSN - encrypted string - include commented out code for it being hashed if it only ever needs to be compared with provided number.
- last_four - integers - useful for retrieval if there are many and we want to get a subset before decrypting. Also used in obfuscated display.
- active - bool

2. Create Controller and route for person.
- Post new person - public
    - BE validation for SSN & email
- Middleware auth for index/crud

3. Create Form for creating new person
    - HTML Validation for SSN  
    - HTML Validation for email

    The entry fields must be in a single line that spans the width of a web browser, but is capable of being viewed in a responsive manner on a phone. This data is stored in a database. All security requirements must be met (except requiring SSL).

2. Create Admin display
    - load index default first name, ordering
    - include 
    For Admin CRUD, provide a URL (credentials optional with username/pass). On the admin page, the list of people added should be sortable by each field. Each person can be enabled and disabled, with a validation prompt required prior to changing the status.


Development Requirements





This container will host a basic instance of Laravel
The database will run MySQL and be in a container, as well 
Make sure to include a dump of the schema that we can review
The container should run code locally (from the git repo) so you can edit it in real time


The README should include:

Installation instructions so that we can just build the containers and go to a URL
Any comments/suggestions that would make this simple application better if there was more time, challenges to overcome, etc.

END OF TEST REQUIREMENTS