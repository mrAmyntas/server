#!/bin/bash

cat ./etc/nginx/sites-available/frazzled | sed 's/autoindex on;/autoindex off;/g' > ./etc/nginx/sites-available/frazzled2
mv ./etc/nginx/sites-available/frazzled2 ./etc/nginx/sites-available/frazzled
service nginx restart