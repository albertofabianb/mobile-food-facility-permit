## Author

Alberto Bohbouth
albertofabianb@gmail.com
cellphone: +54-911-5656-5320

## Mobile Food Facility Permit
A SIMPLE WEB APPLICATION

This project is intended to be very simple and functional.
It is built in Laravel 11.9 and Mysql.

The app has two views:

1. The list of the food trucks with five filters.
2. The detailed data of each food truck

If I had more time I would do:
- Exceptions handling (Try, Catch, Final)
- Data validation to prevent errors.
- Tokens for secure data access.
- Authentication, but due to this project is based in open data it won't be needed.
- Column sorting in the main grid.
- Comments in the code.
- A better front end design.
- Implementation of the repository pattern.
- I could also implement APIs
- I could write a better README file :-)

For this version of Laravel (11.9) the minimum version of PHP has to be 8.2.

For the setup, do the following:

- Import the csv field provided (https://github.com/peck/engineering-assessment) to a mysql database.
- Configure the DB connection in the '.env' file.
- Clone the repository.
- Run composer install (composer is needed).
(Migration is not needed)

End

