The TAOTNPWAFT organization's Website repository.

This website is created with:

HTML5

CSS3

jQuery

JavaScript

PHP

Ajax

Served with IIS to our .org domain.

### Build
```sh
docker build -t website-taotnpwaft:v1 .
docker run -d -p 80:80 website-taotnpwaft:v1
```
In case you want to run the container on another port just change the port
in the -p flag on the second command.
