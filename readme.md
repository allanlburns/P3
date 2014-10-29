#README.md for Project 3

[Live URL](http://P3.allanlburns.com "Live URL")
[Github](http://github.com/allanlburns/P3 "Github")

###Creating Developer's Best Friend, a utitlity comprised of two applications: a lorem ipsum generator and a random user generator. These two apps aid in development by providing placeholder text and random user data for testing and development.

###I'd like to attend the live demo for my section.

###Challenges for this project: This project was nearly ready to turn in on Friday. The only problem with the project was that my user-gen view worked locally but not on my live server. Coincidentally, as I was trying to correct this on the due date, I began getting a Git error while trying to pull from my live server. I received an error saying that the repository or files were corrupt. I removed the p3 repository from the droplet and re-cloned from Github numerous times, and that would allow me to pull approximately five times before receiving the error again. In trying to fix both of these issues, I began changing subdomain configurations and messed up all my subdomains for a few days. 

A few days ago Susan realized a few other students were having the same Git error problem and has been working with us to get information about it, and in the mean time I straightened out my subdomain issues. Then I realized that the problem I was having with the user-gen view was being caused by the path on the require_once statment for the Faker package. Naturally, my original path had been for p3 in my localhost. Finally I realized that if I wanted it to work on my live server, I'd have to specify a path to do so. Now my project works on the live URL as well as locally.

Susan is still investigating the Git pull error on DigitalOcean. On the plus side, I have become proficient in the steps to deploy a laravel project to the live server because of having to do it so many times to sidestep the Git error.  

##Websites consulted:

*(https://github.com/samuelwilliams/LoremIpsum/tree/master) I found the Lorem Ipsum Generator via Packagist and installed it via Compuser using instructions found on the README.md on Github.

*(https://github.com/fzaninotto/Faker) I built the random user generator via fzaninotto's Faker package from Packagist and installed it via composer using instructions found on the README.md on Github.

Test by Susan 2

