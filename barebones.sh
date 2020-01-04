#!/bin/bash
theme_name=barebones
curl https://wordpress.org/latest.zip -LO && unzip ./latest.zip && mv ./wordpress ./public && rm -rf ./latest.zip && cd ./public && rm -rf ./wp-content/plugins/akismet ./wp-content/plugins/hello.php ./wp-content/themes/twenty* && mv ../theme ./wp-content/themes/$theme_name