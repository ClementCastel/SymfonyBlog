# SymfonyBlog
A blog built with Symfony 4

### Usage

##### Create a User with admin role :


+ modify defaults values in /src/DataFixtures/UserFixtures.php
+ run 'php bin/console doctrine:fixtures:load --append' in terminal


##### Routes for Posts :
###### Public
+ index : */*
+ R : */post/{slug}-{id}*

###### Admin
+ C : */admin/post/new*
+ U : */admin/post/{id}/edit*
+ D : */admin/post/{id}*


### Journal
D1 ( 21/07 ) : Front end templates

D2 ( 23/07 ) : login / logout admin

D3 ( 26/07 ) : Posts CRUD