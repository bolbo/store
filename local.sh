#!/bin/sh
 app/console cache:clear --env=prod

 app/console cache:clear

 composer dump-autoload --optimize