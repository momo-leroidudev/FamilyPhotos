<p align="center"><a href="https://symfony.com" target="_blank">
    <img src="https://symfony.com/logos/symfony_black_02.svg">
</a></p>

[Symfony][1] is a **PHP framework** for web and console applications and a set
of reusable **PHP components**. Symfony is used by thousands of web
applications and most of the [popular PHP projects][2].

## Technical Requirements
•	PHP 7.2.5 or higher <br>
•	Composer installed <br>

## Prerequisites
•	Basic PHP knowledge <br>
•	Low level HTML & CSS knowledge <br>
•	Object-Oriented Programming <br>

## 1. MVC Explained

In the first chapter of this course we have touched on MVC a little bit. In coding, MVC is a design pattern, or better to say a software architecture which stands for Model View Controller. When using MVC, you will structure your application by separating the domain, application, and business logic from the rest of the user interface. 

### **Model**
The model layer manages the fundamental behaviors and data of the application. It will interact with the requests, respond to instructions, and even notify observers in event-driven systems.

### **View**
The view is basically the user interface of your application. What you will be doing is pulling data from the database in the model based on a request from the Controller, and translate it into data that you can use inside the view.

### **Controller**
The Controller will take HTTP requests, so user input from the browser, gets the right data out of the database, validates the user input, and eventually sends a response back to the user.

In the model, you don’t want to use View or Controller code. The other way around as well. You don’t want to perform SQL queries inside your controller, let alone in your view.

All these components, are defined as the MVC design pattern. In my personal opinion, Symfony is huge because it’s using the Model View Controller design pattern. Well, I need to rephrase that, because Symfony contains MVC, but does not constrain it.

## 2. Installation

Symfony has four different ways on how you could create a project. In my personal opinion, using the Symfony installer or the Composer installer are the easiest ways. I’ll be showing how you can create a project through both of them on Mac, Linux and Windows.

### **Symfony installer** <br>
In order to use the Symfony installer, we got to make sure that we create a Binary. Therefore, we need to perform the following command depending on your OS:
```
Mac -  curl -sS https://get.symfony.com/cli/installer | bash
Linux - wget https://get.symfony.com/cli/installer -O - | bash
Windows – Download the setup.exe right here -> https://get.symfony.com/cli/setup.exe
```

As the URL implies, this will pull in Symfony’s CLI installer, which will allow you to install a Symfony project through the CLI. When you perform the command, you'll see that it will ask you to configure Symfony on your local system. I prefer to add a path to my configuration file, so let's copy the line that looks like this:
```
export PATH=”$HOME/.symfony/bin:$PATH”
```

## 3. Git clone 
```
git clone https://github.com/momo-leroidudev/FamilyPhotos.git
```

## 4. Installation depencies

```
composer install
```

## 5.Open project in the browser
Symfony’s CLI comes with a web server that is very easy to use. In order to use it, you need to run the following command inside the project directory:
```
symfony server:start 
```

This will return back a message which says that your web server is indeed listening, and it can be accessed through your localhost. 

```ruby 
EXAMPLE
[OK] Web server listening
	The web server is using PHP FPM 8.0.6
	http://127.0.0.1:8000
```

127.0.0.1 is the standard ipv4 address for projects that run on localhost and :8000 is the first available port.
