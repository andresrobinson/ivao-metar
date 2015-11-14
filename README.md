# ivao-metar
Custom IVAO Metar System

Original Work by Andrés Robinson

How the system works?
------------------------------------

The script is designed to allow IVAO Weather server to pull the latest METAR and TAF information of station not contained in NOAA system.

The script was originally developed by Andrés Robinson in 2014 to support Argentina National Metheorological Service (SMN) information. In 2015 the Brazilian IVAO Division started providing their own data from REDMET. 

Using a Cron to wget or GET the get.php file, it will copy the information from get/metar.php and get/taf.php in 2 separated files, get/metar.txt and get/taf.txt. So every time you visit metat.php or taf.php the .txt file will be loaded. You can also add multiple sources to get/metar.php and get/taf.php. To run consults you need to visit index.php

DEMO: https://weather.ivao.com.ar/
