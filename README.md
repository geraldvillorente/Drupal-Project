Drupal-Project
==============

This is a demo drupal 7 project to get up and running quickly on drupal.

Getting Started
===============

* Clone X-Team [VDD](https://github.com/x-team/vdd) to your development folder on your machine. Follow the step to install vagrant and stop before doing your first 'vagrant up'.
* Make sure the config.json at the root of VDD has the following lines (drupal7 entry) :

~~~json
"sites": {
    "drupal7": {
      "account_name": "root",
      "account_pass": "root",
      "account_mail": "box@example.com",
      "site_name": "Drupal 7",
      "site_mail": "box@example.com"
    }
  },
~~~

* Go into the data folder : `cd data`
* Clone this project into the data folder : `git clone git@github.com:jonathanbardo/Drupal-Project.git drupal7`

You should now be able to access the following url : `http://vdd/drupal7/`
