# WHAT TO DO
by <a href="https://www.pbuw.ch">Philipp Brügger</a>
WTD is a simple knowledge base, based on <a href="http://php.net" target="_blank">PHP</a> and <a href="https://materializecss.com" target="_blank">Materialize</a>.

You can use it, to add stuff that you need to remember, like when your out of office for a week and need to add a auto-reply to you're mail and inform your co-workers.
## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Features](#features)
- [Contributing](#contributing)
- [Support](#support)



## Requirements:
- PHP-Server
- MySQL-Database## Installation

### Download
- Download the code from <a href="https://github.com/pbuw/what-to-do/releases">releases</a>

### Setup

- unzip the files and load them to your server.
- replace:
```php
        /**
         * DONT COMMIT!
         */
        /**
         * DONT COMMIT!
         */
```
with (don't forget to replace it with your credentials):
```php
        /**
* DONT COMMIT!
*/
$connection = mysqli_connect("*host*", "*user*", "*password*!", "database");
$connection->set_charset("utf8");
    die("Connection failed: " . $connection->connect_error);
}
return $connection;
/**
* DONT COMMIT!
*/
```
- create Database with the name `wtd` and `UTF-8`
- open the console of your MySQL-Server
- paste the code of the `createscript` which you will find in the path `framework/database/skripts/create/` copy and past all creation scripts into you're console and run them one by one. Start at the lowest version.

## Contributing

Feel free to crate a pull request if you have some good ideas to make it better

---

## Support

There is no support offered for this "product". But feel free to contact <a href="mailto:info@lbo.ch">me</a>.

---
## Credits
- <a href="http://php.net" target="_blank">PHP</a> 
- <a href="https://materializecss.com" target="_blank">Materialize</a>.
- <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a>.
- <a href="https://www.lbo.ch" target="_blank">LBO | Philipp Brügger</a>
---

Copyright 2019 © <a href="https://www.pbuw.ch" target="_blank">pbuw | Philipp Brügger</a>.