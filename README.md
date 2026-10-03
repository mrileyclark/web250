# Bike and Bird Challenge

## Student
Mary Clark

## Course
WEB 250

## Project Overview
The Bike and Bird Challenge demonstrates the use of PHP classes and object-oriented programming. The project uses classes, properties, constants, constructors, methods, and objects to organize and display data from CSV files.

## Bike Challenge
The Bike Challenge uses a Bicycle class to read bicycle information from a CSV file and create Bicycle objects. It demonstrates constructors, properties, getters and setters, constants, inheritance, and working with data from a CSV file.

## Bird Challenge
The Bird Challenge builds on the same object-oriented programming concepts using a Bird class. It reads bird information from a CSV file and creates Bird objects. It demonstrates properties, constants, constructors, getters and setters, unit conversions, conservation levels, size classification, sorting, and the __toString() method.

## Go Further Choices

1. Choice:
 What you added: __toString() as an extra feature.

2. Choice:
 What you added: sorting feature to a few table headers.

## Concept Check

### 1. Static Property vs Constant
ParseCSV::$delimiter is a static property because its value may need to be changed depending on the file being read. Bicycle::CATEGORIES is a constant because the allowed categories should stay the same.

### 2. Constructor `$args` Array
If someone reorders the CSV columns, the $args array still works because the constructor uses the column names as keys. If the constructor used ten positional parameters, reordering the columns could cause the wrong values to be assigned to the wrong properties.

### 3. Public vs Protected
A setter can control and format a value before storing it, such as converting inches to centimeters. Direct access to a public property would allow the value to be changed without those checks or conversions.

### 4. Private `reset()`
If outside page code could call reset(), it could accidentally erase the parser's header, data, and row count. The parser could then lose its results before the page finishes using them.

### 5. `self::CONSERVATION_OPTIONS`
self:: is used because CONSERVATION_OPTIONS is a class constant, not a property belonging to a specific object. $this-> is used for properties and methods that belong to the current object.

### 6. `money_format()` vs `number_format()`
Money format older PHP so used modern number_format. number_format helps make the text price from csv file look like currency and 
I can control where the $ goes.

## Git History
 
(base) maryclark@Marys-MacBook-Pro web250 % git log --oneline --graph --all --decorate
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
* 4dad26f Added updated comments to output messages
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
* 4dad26f Added updated comments to output messages
*   4f2d09a Completed the access challenge merge changes didnt save
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
* 4dad26f Added updated comments to output messages
*   4f2d09a Completed the access challenge merge changes didnt save
|\  
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
* 4dad26f Added updated comments to output messages
*   4f2d09a Completed the access challenge merge changes didnt save
|\  
| * b91e1c4 (asgn02-access-control) Completed the access challenge part 2
:...skipping...
* 073ac73 (HEAD -> main, origin/main, origin/asgn05-bird, origin/HEAD, asgn05-bird) asgn05-created added color to error message
* 9d8ce29 asgn05-created added color to error message for visibility
* 2261b0b asgn05-created added concept check and AI comments
* 2578deb asgn05-created why comments for required todos
* c647699 asgn05-bird build remove random summary functionality
* b803824 asgn05-bird build random sort feature
* 90c37c7 asgn05-bird build random bird for featured bird toString option
* 9bbdfee asgn05-bird build size and display name and go further toString
* 86f8db9 asgn05-bird build constants and constructor
* a5fde32 asgn05-bird build bird table
* 896d019 asgn05-bird build bird class properites and bird.php parse and delimiter
* f0c3395 asgn05-bird add starter files and inspect CSV
* 73bea17 (origin/asgn05-bike, asgn05-bike) updated read me AI log
* 4850c3e created instances from csv file
* d3154ba improvements added to the parse functionality
* 1b56ae3 connect ParseCSV to inventory page
*   3633260 Merge branch 'main' of https://github.com/mrileyclark/web250
|\  
| * 798e2d4 Add comment to .gitignore for clarity
* | 3c4d5bf Updated money_format to number_format
* | 9266ac5 Created autoload function
* | 64e0e5b Created Bicycle Class
* | 05ba11f Starting asgn05-bike
|/  
* 714d483 (asgn04-constructor) Adding autoload code
* 659a930 Adding constructor args updated code
* f1b4e3a Adding constructor args code
* 5e4c322 (asgn03-static) Starting asgn04-constructors
* 4ae54fd Complete index file challenge
* c8330ed Complete bird file challenge
* 410421f Starting asgn03 Static Methods
* 79bee8a Updated bug code
* 5aea4f5 Reomved age comment from describeAnimal function comment
* 4dad26f Added updated comments to output messages
*   4f2d09a Completed the access challenge merge changes didnt save
|\  
| * b91e1c4 (asgn02-access-control) Completed the access challenge part 2
* | cfc51b9 Merge branch 'asgn02-access-control'
:
## AI Log

- Asked how number_format could be used in td instead of money_format when using in <td>.
- Use to format price to currency correctly.

- Asked to comment the why's for Bicycle 1.4.
- The assignment was updated so we only needed to do this for the Bird Class. I wanted to understand this better so I practiced here first.

- Asked if I could still switch to bicycle branch out of sequence.   
- Used this to get onto this branch after coding a good bit of the bicycle code on the main branch.

- Asked why I was getting an error about accessing static property count as non static.   
- Used this to understand this error message and correct the problem. Need. to call it Bird::$count++

- Asked why ParseCSV error when trying to display row_count().   
- Used this to figure out that I created a new object $parser = new ParseCSV(...); so ParseCSV::count was not correctly used. $parser->row_count() - was what I needed to show row count

- Asked to check my table syntax on data_error check because table still displayed when error = true.   
- Verified I had a closing bracket misplaced and now the table will disappear when error = true;

- Asked to explain toString to better understand what it does and why it would be necessary.   
- Used to turn bird object in summary

- Asked to explain how ?sort=habitat works with $GET.   
- Used to help better understand why I have to sort this way. $sort changes depending on what the user clicks. It also help with security
- control, so its not just what is keyed in URL, but based on my approved list and those values are only selected.
- Link: tells PHP what the user wants to sort by.
- $_GET: receives that choice.
- $allowed_sorts: makes sure the choice is one you approve.
- $sort: remembers the approved choice.
- sort_birds(): compares birds using that choice.
- usort(): actually rearranges the birds.

- Asked to guide through setting up how to sort table headers after struggling with it for awhile.   
- Used this to build functionality to check values against approved list and sort function
