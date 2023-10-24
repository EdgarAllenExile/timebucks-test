# PHP Test Project 1
## Introduction
This is a small test project that I completed with the intention of improving my PHP abilities.

This project is a one page application with with no login/signup. If you have any questions please do not hesitate to send me an email.

## Tech Stack
Backend: CakePHP 5.0
Frontend: Jquery Datatables & Bootstrap
Database: MySQL

## Features
1. A cron/command that calls an API and save the results in database table (Api returns over 5000 records, it may be unviewable in browser).

2. Data is encrypted when storing it into the database table. Encryption is done with standard CakePHP5 plugins. Private key included in the code repo.

3. Web page that loads the data from the table, decrypts it, and displays on the page using Jquery DataTables.

4. Sorting only enabled for the ECPC column. Done to improve Datatables knowledge, no impact on overall functionality of site.

5. Added a "Search" box that searches by "name" and use AutoSuggest to fill from the "name" col from the loaded data.
