# Shorty - To help you shorten links! 🚀
<p align="center">
  <img src="./assets/img/inside-header-logo.png" height="150" width="auto" alt="Shorty Logo">
</p>

## Table of Contents

- [Introduction](#👋-introduction)
- [Features](#❄️-features)
- [Demo](#❄️-demo)
- [Tech Stack](#🔧-tech-stack)
- [Screenshots](#📷-screenshots)
- [Getting Started](#🚀-getting-started)
- [Contributors](#🤗-contributors)
- [Contribute](#🤝-contribute)
- [Code of Conduct](#📜-code-of-conduct)
- [License](#📄-license)

## 👋 Introduction 
To help you grow, scale, and dominate through the power of **link management**. Whether you're sharing one link or millions, **Shorty** lets you personalize, share, and track your content links, while capturing data with every click.

---

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
  <img src="https://img.shields.io/github/issues-pr-closed-raw/apoorvaron/Shortystyle=for-the-badge" alt="Closed Pull Requests">
</p>

---

## ❄️ Features

- Link Management
- Data Security
- Personalized Links
- Link Tracking

## ❄️ Demo

- Visit the **[Shorty Website](http://shrty.rf.gd/)** to see it in action.

---

## 🔧 Tech Stack

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Less](https://img.shields.io/badge/less-2B4C80?style=for-the-badge&logo=less&logoColor=white)
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

---

## 📷 Screenshots

<p align="center">
  <img src="./img/screenshot.gif" alt="Shorty Screenshots">
</p>

---

## 🚀 Getting Started

To get started with the **Shorty** application, follow these steps:

1. Fork the repository by clicking on the "Fork" button at the top right corner of the repository page. This will create a copy of the repository under your own GitHub account.

2. Clone the repository to your local machine. Open your terminal or command prompt, navigate to the directory where you want to clone the repository, and execute the following command:
   ```bash
   git clone https://github.com/your-username/repo-name.git
   ```
   Make sure to replace `your-username` with your GitHub username and `repo-name` with the name of the repository.

3. Move the `shorty` folder to your web server's directory:
   - **For MAMP (Mac):**
     ```
     /Applications/MAMP/htdocs/shorty/
     ```
   - **For XAMPP (Windows):**
     ```
     C:/xampp/htdocs/shorty/
     ```
   - **For LAMPP (Linux):**
     ```
     /opt/lampp/htdocs/shorty/
     ```

4. Set environment variables according to your environment:
   - Set the following snippet inside `/Applications/MAMP/htdocs/shorty/env.php` (for Mac & MAMP):
     ```php
     <?php
     $env_server = "localhost";
     $env_username = "root";
     $env_password = "root";
     $env_database = "shorty";
     $env_port = "8889";
     ?>
     ```

   - Set the following snippet inside `htdocs/shorty/env.php` (for Windows & XAMPP) or `/opt/lampp/htdocs/shorty/env.php` (for Linux & LAMPP):
     ```php
     <?php
     $env_server = "localhost:3306";
     $env_username = "root";
     $env_password = "";
     $env_database = "shorty";
     $env_port = "3306";
     ?>
     ```

5. Configure the `siteName.php` file:
   - Change the file content inside `shorty/htdocs/siteName.php`:
     - **For Mac & MAMP:**
       ```php
       <?php
       $siteName = "http://localhost:8888/shorty/";
       ?>
       ```
     - **For Windows & XAMPP or Linux & LAMPP:**
       ```php
       <?php
       $siteName = "http://localhost/shorty/";
       ?>
       ```

6. Start your web server:
   - Start Apache & MySQL Server in XAMPP Panel or MAMP Panel.
   - For LAMPP on Linux:
     1. Open your terminal.
     2. Start the server by executing the following command:
        ```bash
        sudo /opt/lampp/lampp start
        ```

7. Set up the database:
   - To set up the database, open `localhost:8888/phpmyadmin` (for Mac & MAMP), `localhost/phpmyadmin` (for Windows & XAMPP), or `localhost/phpmyadmin` (for Linux & LAMPP).
   - Create a new database named `shorty`.
   - Import the database from the `htdocs/shorty/shorty.sql` file.

8. Run in the browser:
   - Access `localhost:8888/shorty/` (for Mac), `localhost/shorty/` (for Windows), or `localhost/shorty/` (for Linux).

<br>

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

---

## 🤗 Contributors

Thanks to all the contributors who have helped in this project! Check out the [Contributors page](https://github.com/apoorvaron/Shorty/graphs/contributors) for more details.

<a href="https://github.com/apoorvaron/Shorty/graphs/contributors"><img src="https://contrib.rocks/image?repo=apoorvaron/Shorty"></a>

---

## 🤝 Contribute

We welcome contributions to our project! Before making a contribution, please check our [contribution guide](https://github.com/apoorvaron/Shorty/blob/main/CONTRIBUTING.md).

---

## 📜 Code of Conduct

To ensure an inclusive environment that respects all contributions, please read our [Code of Conduct](https://github.com/apoorvaron/Shorty/blob/main/CODE_OF_CONDUCT.md).

---

## 📄 License

This project is licensed under the [MIT License](https://github.com/apoorvaron/Shorty/blob/main/LICENSE).

<br>

Hosted on Infinity Free with Gmail: apoorv.shorty@gmail.com
<br><br>
<a href="#top">Back to top</a>