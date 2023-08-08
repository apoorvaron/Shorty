<h1 align = "center">  <img src = "./assets/img/inside-header-logo.webp" height = "30" width = "40">&nbspShorty - To help you shorten links! </h1>
<!-- <hr> -->
<div>
To help you grow, scale, and dominate through the power of <b>link management</b>. Whether you’re sharing one link or millions, <b>Shorty</b> lets you personalize, share, and track your content links, while capturing data with every click.</div>
 </div>
 <br>
<div align="center">
<!--   <img src="https://forthebadge.com/images/badges/built-with-love.svg" />
  <img src="https://forthebadge.com/images/badges/uses-brains.svg" />
  <img src="https://forthebadge.com/images/badges/powered-by-responsibility.svg" /> -->
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

## Maintainers

Contact any of the maintainers for any queries related to the project.

Project Admin:
[Apoorv Aron](https://www.linkedin.com/in/apoorv-aron-742882212/)
Mentor:
[Ayush Pandit](https://www.linkedin.com/in/ayushpanditmoto/)

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

## 🚀 Getting Started

- Shorty Project Setup Tutorial - https://www.youtube.com/watch?v=L5HdDeYaKd0
- PHP Installation (Mandatory for Windows and Mac) - https://www.youtube.com/watch?v=mVBe75aGBHQ (Version used -> 8.1.9)
- XAMPP Installation (Mandatory for Windows and Mac) - https://www.youtube.com/watch?v=at19OmH2Bg4
- LAMPP (Mandatory for Linux) - https://youtu.be/HJl2ILUfBoA
- MySQL version used -> ( 8.0.29 )

-------_---------_---------_---------_---------\*---------

To get started with the "Shorty" application, follow these steps:

1.  Fork the repository by clicking on the "Fork" button at the top right corner of the repository page. This will create a copy of the repository under your own GitHub account.

2.  Clone the repository to your local machine. Open your terminal or command prompt, navigate to the directory where you want to clone the repository, and execute the following command:

    ```bash
    git clone https://github.com/your-username/repo-name.git
    ```

    - Make sure to replace `your-username` with your GitHub username and `repo-name` with the name of the repository.

3.  Press Enter to execute the command. Git will clone the repository to your local machine.
4.  Move the "shorty" folder to your web server's directory.

    - _**For MAMP (Mac):**_ <br>

    ```bash
           /Applications/MAMP/htdocs/  folder  (FOR MAC)
    ```

    - _**For XAMPP (Windows):**_ <br>

    ```bash
           C:/xampp/htdocs/            folder  (FOR WINDOWS)
    ```

    - _**For LAMPP (Linux):**_ <br>

    ```bash
           /opt/lampp/htdocs/            folder  (FOR WINDOWS)
    ```

5.  Create a file `env.php` in below mentioned directory and add snippets according to your Xampp

    - Set the below snippet inside /Applications/MAMP/htdocs/shorty/env.php. file (FOR MAC & having MAMP)

             <?php
                 $env_server = "localhost";
                 $env_username = "root";
                 $env_password = "root";
                 $env_database = "shorty";
                 $env_port = "8889";

                 $env_domain = "http://localhost:8888/shorty/";
                 $env_chatbot = "fce7a56f7d5207cc6a7263e92dca26602e956eca572e1d8b807a3e2338fdd0dc/stage";
             ?>

    - Set the below snippet inside htdocs/shorty/env.php. file (FOR WINDOWS & XAMPP)

             <?php
                  $env_server = "localhost:3306";
                  $env_username = "root";
                  $env_password = "";
                  $env_database = "shorty";
                  $env_port = "3306";

                 $env_domain = "http://localhost/shorty/";
                 $env_chatbot = "fce7a56f7d5207cc6a7263e92dca26602e956eca572e1d8b807a3e2338fdd0dc/stage";
             ?>

    - Set the below snippet inside /opt/lampp/htdocs/shorty/env.php. file (FOR Linux & LAMPP)

             <?php
                  $env_server = "localhost:3306";
                  $env_username = "root";
                  $env_password = "";
                  $env_database = "shorty";
                  $env_port = "3306";

                 $env_domain = "http://localhost:8080/shorty/";
                 $env_chatbot = "fce7a56f7d5207cc6a7263e92dca26602e956eca572e1d8b807a3e2338fdd0dc/stage";
             ?>

6.  Start your web server.

- Start Apache & MySQL Server in XAMPP Panel or MAMP Panel
- For LAMPP on Linux:

  1.  Open your terminal.
  2.  Start the server by executing the following command:

          sudo /opt/lampp/lampp start

7. Set up the Database

- To Setup the database, open

          localhost:8888/phpmyadmin    (FOR MAC & MAMP)
          localhost/phpmyadmin         (FOR WINDOWS & XAMPP)
          localhost/phpmyadmin         (FOR Linux & LAMPP)

- Create New Database and name the Database as `shorty`
- Import the Database from the "htdocs/shorty/shorty.sql" directory.

           shorty.sql (db file)

8.  Run in the browser

          localhost:8888/shorty/     (FOR MAC)
          localhost/shorty/          (FOR WINDOWS)
          localhost/shorty/          (FOR Linux)

<br><br>
! IMPORTANT -> users table must contain one row

          1) uniqueNo = "shorty"
          2) email = "shorty@gmail.com"
          3) password = "62b5fe5724b08db455672377fb31e95b"
          4) img = "../assets/user-img/1659983584admin-img.png"

-> Home Page/Guest Page shorted links go into the admin account

          email    -> shorty@gmail.com
          password -> shorty@gmail.com

<!-- ## Contributors ✨

Thanks go to these wonderful people 💪

![Contributors](https://contrib.rocks/image?repo=apoorvaron/Shorty)

 -->


## 🤝 Contributors :

Thanks to all the contributors.

<a href="https://github.com/apoorvaron/Shorty/graphs/contributors"><img src="https://contrib.rocks/image?repo=apoorvaron/Shorty"></a>

</div>

<br><br>
<a href="#top">Back to top</a>
