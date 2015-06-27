Bolbo Store



-- ------------------



-- ------------------
Unit tests: atoum framework (http://docs.atoum.org)
Add files .atoum.php and .bootstrap.php in project root
Create ~/tests/coverage folder

1. Launch all tests in a folder:
bin/atoum -d path/to/directory/
-> bin/atoum -d src/Bolbo/Component


2. Launch a test for a specific file :
bin/atoum -f path/to/file/file.php


Atoum code coverage in Phpstorm
http://www.jdecool.fr/blog/2014/08/19/visualiser-le-code-coverage-des-tests-atoum-dans-phpstorm.html

-----

# Generate Pomm Model class 
./app/console pomm:generate:schema-all -d src -a 'Bolbo\Component\Model' database
