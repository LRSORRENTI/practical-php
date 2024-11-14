# Practical PHP

This course will cover all the fundamentals of PHP for beginners and for developers who already know PHP

This course will use

[MAMP for Windows][https://www.mamp.info/en/windows/]

MAMP is a free, local server environment that can be installed under macOS and Windows with just a few clicks. MAMP provides them with all the tools they need to run WordPress on their desktop PC for testing or development purposes, for example. You can even easily test your projects on mobile devices. It does not matter whether you prefer the web server Apache or Nginx in addition to MySQL as database server, or whether you want to work with PHP, Python, Perl or Ruby.

The setup for the course is to first start MAMP, the Apache Port defaults to 80 so in the URL address bar navigate to localhost:80

Then ensure in the Server dropdown in MAMP to select the folder where you'll have your php files:

C:\Users\user1\Desktop\practical-php

For EX

http://localhost/02_First-Page/name.php

This returns

```
<html>

<head>
    <title>My first PHP webpage</title>
</head>

<body style="margin: 0px; padding: 0px; background-color: slategray;">
    <?php print "Hello my name is Luke" ?>
</body>

</html>
```

"Hello my name is Luke" is visible in the browser
