Snippets
========

Usefull snippets we use in daily life.

Contents
-----------------

### Laravel ###

##### Autoversion #####
Autoversion adds a timestamp to the name of a file in your html. 
This timestamp will be removed with htaccess. We do this because
by this way we can cache our css files while still having always the last version of the file.

How to use:
- Add or edit all the files from the Autoversion folder to your project
- Example: <link rel="stylesheet" href="{{ Autoversion::version('/css/styles.css') }} " />


Licence
-----------------
You can use it all for free. Do what you want with it.

