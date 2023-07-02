# Shorty - To help you shorten links! 🚀

<p align="center">
  <img src="./assets/img/inside-header-logo.png" height="80" width="80" alt="Shorty Logo">
</p>

## Table of Contents

- [Introduction](#👋-introduction)
- [Features](#❄️-features)
- [Demo](#❄️-demo)
- [Tech Stack](#🔧-tech-stack)
- [Screenshots](#📷-screenshots)
- [Contribute](#🤝-contribute)
- [Code of Conduct](#📜-code-of-conduct)
- [License](#📄-license)
- [Getting Started](#🚀-getting-started)
- [Contributors](#🤗-contributors)

## 👋 Introduction 
Shorty is an innovative link management tool that helps you grow, scale, and dominate your online presence. With Shorty, you can personalize, share, and track your content links while capturing valuable data with every click. 

<br/>

<p align="center">
  <img src="https://forthebadge.com/images/badges/built-with-love.svg" alt="Built with Love">
  <img src="https://forthebadge.com/images/badges/uses-brains.svg" alt="Uses Brains">
  <img src="https://forthebadge.com/images/badges/powered-by-responsibility.svg" alt="Powered by Responsibility">
</p>

<p align="center">
  <img src="https://img.shields.io/github/repo-size/apoorvaron/Shorty?style=for-the-badge" alt="Repository Size">
  <img src="https://img.shields.io/github/license/apoorvaron/Shorty?style=for-the-badge" alt="License">
  <img src="https://img.shields.io/github/issues-closed-raw/apoorvaron/Shorty?style=for-the-badge" alt="Closed Issues">
  <img src="https://img.shields.io/github/issues/apoorvaron/Shorty?style=for-the-badge" alt="Open Issues">
  <img src="https://img.shields.io/github/issues-closed/apoorvaron/Shorty?style=for-the-badge" alt="Closed Pull Requests">
  <img src="https://img.shields.io/github/stars/apoorvaron/Shorty?style=for-the-badge" alt="Stars">
  <img src="https://img.shields.io/github/forks/apoorvaron/Shorty?style=for-the-badge" alt="Forks">
  <img src="https://img.shields.io/github/issues-pr/apoorvaron/Shorty?style=for-the-badge" alt="Open Pull Requests">
  <img src="https://img.shields.io/github/last-commit/apoorvaron/Shorty?style=for-the-badge" alt="Last Commit">
  <img src="https://img.shields.io/github/contributors/apoorvaron/Shorty?style=for-the-badge" alt="Contributors">
  <img src="https://img.shields.io/github/issues-pr-closed-raw/apoorvaron/Shorty?style=for-the-badge" alt="Closed Pull Requests">
</p>

## ❄️ Features

- Link Management
- Data Security
- Personalized Links
- Link Tracking

## ❄️ Demo

- Visit the **[Shorty Website](http://shrty.rf.gd/)** to see it in action.

## 🔧 Tech Stack

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Less](https://img.shields.io/badge/less-2B4C80?style=for-the-badge&logo=less&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📷 Screenshots

<p align="center">
  <img src="./img/screenshot.gif" alt="Shorty Screenshots">
</p>

## 🤝 Contribute

We welcome contributions to our project! Before making a contribution, please check our [contribution guide](https://github.com/apoorvaron/Shorty/blob/main/CONTRIBUTING.md).

## 📜 Code of Conduct

To ensure an inclusive environment that respects all contributions, please read our [Code of Conduct](https://github.com/apoorvaron/Shorty/blob/main/CODE_OF_CONDUCT.md).
## 📄 License

This project is licensed under the [MIT License](https://github.com/apoorvaron/Shorty/blob/main/LICENSE).

## 🚀 Getting Started

- [Shorty Project Setup Tutorial](https://www.youtube.com/watch?v=L5HdDeYaKd0)
- PHP Installation: [Windows](https://www.youtube.com/watch?v=mVBe75aGBHQ) | [Mac](https://www.youtube.com/watch?v=mVBe75aGBHQ) (PHP version used: 8.1.9)
- XAMPP Installation: [Windows](https://www.youtube.com/watch?v=at19OmH2Bg4) | [Mac](https://www.youtube.com/watch?v=at19OmH2Bg4) (MySQL version used: 8.0.29)

**Step-by-Step Setup:**

1. Download the project ZIP file.
2. Unzip the file and rename the folder from "tiny-main" to "tiny".
3. Place the "tiny" folder inside:
   - `/Applications/MAMP/htdocs/` (for Mac)
   - `C:/xampp/htdocs/` (for Windows)
4. Update the database credentials in the `env.php` file located at `tiny/env.php`:
   - For Mac and MAMP:
     ```php
     <?php
       $env_server = "localhost";
       $env_username = "root";
       $env_password = "root";
       $env_database = "tiny";
       $env_port = "8889";
     ?>
     ```
   - For Windows and XAMPP:
     ```php
     <?php
       $env_server = "localhost:3306";
       $env_username = "root";
       $env_password = "";
       $env_database = "tiny";
       $env_port = "3306";
     ?>
     ```
5. Create a `.htaccess` file inside `tiny/htdocs/` and paste the following code:
   ```apacheconf
   RewriteEngine On
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteCond %{REQUEST_FILENAME}\.php -f
   RewriteRule ^(.*)$ $1.php [NC,L]

   RewriteEngine On
   RewriteCond $1 !^(index\.php)
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule ^(.*)$ index.php?/$1 [L]
   ```
6. Update the file content inside `tiny/htdocs/siteName.php` based on your environment:
   - For Mac and MAMP:
     ```php
     <?php
       $siteName = "http://localhost:8888/tiny/";
     ?>
     ```
   - For Windows and XAMPP:
     ```php
     <?php
       $siteName = "http://localhost/tiny/";
     ?>
     ```
7. Start Apache and MySQL Server in XAMPP Panel or MAMP Panel.
8. To set up the database, open:
   - `localhost:8888/phpmyadmin` (for Mac and MAMP)
   - `localhost/phpmyadmin` (for Windows and XAMPP)
9. Create a new database named "tiny".
10. Import the database from the `htdocs/tiny/tiny.sql` file.
11. Run the project in your browser:
   - `localhost:8888/tiny/` (for Mac)
   - `localhost/tiny/` (for Windows)

💡 **Note:**
- The `users` table must contain the following row:
  - uniqueNo = "shorty"
  - email = "shorty@gmail.com"
  - password = "62b5fe5724b08db455672377fb31e95b"
  - img = "../assets/user-img/1659983584admin-img.png"
- Shortened links from the home page (guest page) go into the admin account:
  - email: shorty@gmail.com
  - password: shorty@gmail.com
- While Hosing:
  - Change `env.php` credentials
  - Change `siteName.php`
  - Upload `files & dB`.

## 🤗 Contributors

Thanks to all the contributors who have helped in this project! Check out the [Contributors page](https://github.com/apoorvaron/Shorty/graphs/contributors) for more details.

<a href="https://github.com/apoorvaron/Shorty/graphs/contributors"><img src="https://contrib.rocks/image?repo=apoorvaron/Shorty"></a>

---

Hosted on Infinity Free with Gmail: apoorv.shorty@gmail.com
<br><br>
<a href="#top">Back to top</a>
