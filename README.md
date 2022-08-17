# How to make this for yourself 📖

- Must install PHP version (FOR WINDOWS) & (FOR MAC) Both
- Tutorial - https://www.youtube.com/watch?v=mVBe75aGBHQ
- PHP version used -> (PHP 8.1.9)


- Must install xampp (FOR WINDOWS) & MAMP (FOR MAC) 
- Tutorial - https://www.youtube.com/watch?v=at19OmH2Bg4
- MySQL version used -> 8.0.29

-------*---------*----------

Step -1   Download zip file 

Step -2   unzip it 

Step -3   Put tiny folder inside 

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Change in /Applications/MAMP/htdocs/tiny/env.php. file (FOR MAC & having MAMP)
          
            <?php
                $env_server = "localhost";
                $env_username = "root";
                $env_password = "root";
                $env_database = "tiny";
                $env_port = "8889";
            ?>

Step -4   Change in htdocs/tiny/env.php. file (FOR WINDOWS & XAMPP)
          

            <?php
                 $env_server = "localhost:3306";
                 $env_username = "root";
                 $env_password = "";
                 $env_database = "tiny";
                 $env_port = "3306";
            ?>

Step -4   create ".htaccess" file inside htdocs/tiny/ and Paste below code snnipet.(FOR MAC & having MAMP)

                ErrorDocument 404 http://localhost:8888/tiny/404.php

                RewriteEngine On
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteCond %{REQUEST_FILENAME}\.php -f
                RewriteRule ^(.*)$ $1.php [NC,L]


                RewriteEngine On

                RewriteCond $1 !^(index\.php)
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteRule ^(.*)$ index.php?/$1 [L]
                
                
Step -4   create ".htaccess" file inside htdocs/tiny/ and Paste below code snnipet.(FOR WINDOWS)

                ErrorDocument 404 http://localhost/tiny/404.php

                RewriteEngine On
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteCond %{REQUEST_FILENAME}\.php -f
                RewriteRule ^(.*)$ $1.php [NC,L]


                RewriteEngine On

                RewriteCond $1 !^(index\.php)
                RewriteCond %{REQUEST_FILENAME} !-f
                RewriteCond %{REQUEST_FILENAME} !-d
                RewriteRule ^(.*)$ index.php?/$1 [L]
                
   
Step -4   create ".gitignore" file inside htdocs/tiny/ and Paste below code snnipet.(FOR BOTH TYPE OF SYSTEM)  

                .cpanel.yml
                *config.php
                upload/*
                env.php
                .DS_Store
                forms/responsesfile/*
                .htaccess
                users/env


                # react
                /build
                node_modules
                package-lock.json
                .eslintcache
                *.lock
                .env
                admin/.DS_Store
                assets/.DS_Store
                .vscode/
                debug.log
                /package.json
                mail-testing
                admin/adminPanel/faqadmin/certificate/download
                admin/adminPanel/faqadmin/images
                verify
                upload
                # composer
                vendor
                
Step -5   Change the file content inside tiny/htdocs/siteName.php

          1) FOR MAC & MAMP
                <?php
                    $siteName = "http://localhost:8888/tiny/";
                ?>
                
          2) FOR Windows
                <?php
                    $siteName = "http://localhost/tiny/";
                ?>
                
Step -5   Start Apache & MySQL server in XAMPP Panel or MAMP Panel

Step -5   To Setup the database, open 

          localhost:8888/phpmyadmin/   (FOR MAC & MAMP)
          localhost/phpmyadmin/   (FOR WINDOWS & XAMPP)

Step -6   Create New Database 

Step -7   Database name  "tiny"

Step -8   Import Database from "htdocs/tiny/tiny.sql" directory in database name "tiny". 

            1) tiny.sql (db file)

Step -9   Run in browser 

          localhost:8888/gForm/     (FOR MAC)
          localhost/gForm/          (FOR WINDOWS)


