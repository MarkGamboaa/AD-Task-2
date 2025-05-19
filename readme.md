<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/MarkGamboaa">
  <!-- TODO: If you want to add logo or banner you can add it here -->
    <img src="./assets/img/php_logo.png" alt="Logo" width="130" height="100">
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">(PHP) Pinoy Hot Plates</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  A simple Filipino restaurant website made with PHP
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=zyx-0314/AD-CI4-Template-Project)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

PHP (Pinoy Hot Plates) is a simple PHP-based website designed to showcase classic Filipino meals throughout the day. It includes dedicated pages for Breakfast, Lunch, and Dinner, allowing users to browse delicious Pinoy dishes in an organized and visually appealing format.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Simple and intuitive navigation layout
- Organized file structure for better readability and scalability

### Technology

<!-- TODO: List of Technology Used -->

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code | Example |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal | Utility | Accoun.util.php |
   | Camel | Components and Pages | index.php or footer.component.php |
7. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
8. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
9. File Structure to follow below.

```
AD-Task-2
├─ assets
│  ├─ css
│  │  └─ style.css
│  ├─ img
│  │  └─ php_logo.png
│  └─ js
├─ components
│  └─templates
│     ├─ header.component.php
│     └─ footer.component.php
├─ handlers
│  └─ menu.handler.php
├─ pages
│  └─ menu
│     ├─ assets
│     │  ├─ css
│     │  ├─ img
│     │  │  ├─ adobo.jpg
│     │  │  ├─ bistek.jpg
│     │  │  ├─ bulalo.jpg
│     │  │  ├─ ginataang.jpg
│     │  │  ├─ halohalo.jpg
│     │  │  ├─ karekare.jpg
│     │  │  ├─ laing.jpg
│     │  │  ├─ lechon.jpg
│     │  │  ├─ liempo.jpg
│     │  │  ├─ pancit.jpg
│     │  │  ├─ sinigang.jpg
│     │  │  └─ tocino.jpg
│     │  └─ js
│     └─ index.php
├─ utils
│  └─ displayMenu.utils.php
├─ vendor
├─ .gitignore
├─ bootstrap.php
├─ composer.json
├─ composer.lock
├─ Dockerfile
├─ docker-compose.yml
├─ index.php
├─ README.md
├─ README.Docker.md
└─ router.php
```

> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

### References and Resources

| Title          | Purpose                                                                                  | Link                                                   |
| -------------- | ---------------------------------------------------------------------------------------- | ------------------------------------------------------ |
| W3Schools      | Used for basic HTML, CSS, and PHP syntax references and examples.                        | [w3schools.com](https://w3schools.com)                 |
| PHP Manual     | Official documentation for PHP functions, arrays, and control structures.                | [php.net](https://www.php.net)                         |
| MDN Web Docs   | Reference for HTML and CSS standards and browser compatibility.                          | [developer.mozilla.org](https://developer.mozilla.org) |
| CSS Tricks     | Helped with layout styling and CSS tips.                                                 | [css-tricks.com](https://css-tricks.com)               |
| Stack Overflow | Used for troubleshooting errors and finding PHP-based solutions shared by the community. | [stackoverflow.com](https://stackoverflow.com)         |
