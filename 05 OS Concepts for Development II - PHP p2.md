# **OVERVIEW OF SOFTWARE & HARDWARE TECHNOLOGY II** : WEB APPLICATION

[TOC]

#### :golf: Learning Objective

​		At the end of this lesson you should be able to:

- [ ] Use GET and POST HTTP methods

- [ ] Use HTTP cookies and sessions

- [ ] Develop web application that uses HTML, CSS, and PHP programming language

  

#### :school_satchel: Student Starter Pack

  - T​eam
  - :alarm_clock: Pomodoro technique: 20 minutes focus work - 5 minutes break (checking number of likes and shares in SocMed are not included) - Repeat (this will increase productivity)
  - Another productivity tip: Play video in 1.25 - 1.5x speed
  - :milk_glass: Hydrate.



#### :rocket: PHP

Use this repo for the following activities: https://github.com/PSU-BSCS3-CC6/legendary-garbanzo.git 

##### :triangular_flag_on_post: Get and Post Method

In the following activities the webpages are predesigned, your team will write a PHP code to complete the requirements of every website.

###### :space_invader: Practice 5-00

​	:warning: You don't have to edit the index.php

After watching the **Get and Post** write PHP code for this problem. In folder named **web2** you can find the **index.php** and **fav.php** files. The objective of this activity is for you to get and display the values from forms. The requirements for this activity are the following:

1. When the user click the "Submit This Form" button

   - Test if the user input his / her name

     - if yes test if the color of the wine and dish are not null, if both of them are not null display "You really enjoy <dish> - especially with a nice <color> wine"
     - if no display appropriate message

     

###### :space_invader: Practice 5-01

In folder named **web3** you can find the **index.php and calc.php** files. The objective of this activity is for you to learn how to manipulate the submitted values.

​	:warning: You don't have to edit the index.php, provide the missing code according the in-line comment provided in the calc.php file

1. When the user click the "Calculate" button
   - Test if the inputted values are numbers. Use the PHP is_numeric() function to ensure that two numbers have indeed been entered.
     - If yes test if an arithmetical operation has been selected, a switch statement determines the type of operation and performs the result.
     - If no a request to retry will be prompted



##### :triangular_flag_on_post: Cookies

You can use cookies to prevent direct access to pages of a website without logging in first to that website. The log-in process creates the cookie, then PHP scripts on all other pages confirm the existence of that cookie before displaying their content.

###### :space_invader: Practice 5-02

In folder named **web4** you can find **index.php, loggedin.php and anotherpage.php** files. The objective of this activity is for you to learn the following:

- create HTTP cookie
- test if the cookie exist

In this activity the log-in page creates a cookie called "auth" with a value of "ok" when the user submits the form with both "username" and "password" input fields completed. The browser is redireced to a second page (loggedin.php) that seeks the cookie. If that page does not find the cookie, the browser is redirected to the log-in page. Another page (anotherpage.php) in this example makes the same check, and has the same response.

##### :triangular_flag_on_post: Sessions

HTTP is a "stateless" protocol, hence each web page request is unique and treat as independent transaction.

A session is a way to store information (in variables) to be used across multiple pages. Unlike a cookie, the information is not stored on the users computer. - [w3schools.com](https://www.w3schools.com/php/php_sessions.asp)

**How does it work? How does it know it's me?**

Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.

Session variables stored user information and it will be available until you close the browser.

###### :space_invader: Practice 5-03

After watching the **Sessions Tutorials** answer the following:

:question:What function do we use to start a session?

:question:Where are these session variables stored? 



###### :space_invader: Practice 5-04

In folder named web5 you can find index.php file. The objective of this activity is for you to learn how to manage and use session variables.

Write a php code in **index.php** that display the number of visits in this page. As the user reload the page the count of visit is increasing. If the count of visits reach 5 display a message "Thank you for visiting the page a lot." and when the count reaches 10 the browser is redirected to a second page (congratulations.php).

Check the video **sample-output** in the folder for your reference.

##### :space_invader: Practice 5-06

During this pandemic, we usually encounter logbooks in malls, stores, schools, almost every where. Under Republic Act 11469, Bayanihan to Heal as One Act requires us to provide truthful information. The **logApp** is a sample application that logs the individual's personal information and the date and time he/she visits the place. To protect an individual's personal information (RA 10173, Data Privacy Act of 2012), only users with an admin account can view the list of individuals who visited the premises.

Clone the logApp boilerplate:  https://github.com/PSU-BSCS3-CC6/logApp-scaling-octo.git

Your task is to: 

- prepare database for logApp
  - provide database name
  - create tables: person, account
  - identify fields for two tables
- write a PHP code for the following requirements:
  - login
    - If user credentials does not exist in user account prompt appropriate message
  - display the list of logs
  - register or log the individual's personal information
- HTML
  - footer.php - replace the link, direct it to your github account



​      



