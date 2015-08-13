# ivao-metar
Custom IVAO Metar System

Original Work by Andrés Robinson

How the system works?
------------------------------------

The script is designed to allow IVAO Weather server to pull the latest METAR and TAF information of station not contained in NOAA system.

The script was originally developed by Andrés Robinson in 2014 to support Argentinas National Metheorological Service information.

Using a Cron to wget or GET the GetWX.php file, it will copy the information from GetMetar.php and GetTaf.php in 2 separated files, metar.txt and taf.txt. So every time you visit metat.php or taf.php the .txt file will be loaded. You can also add multiple sources to metar.php and taf.php.
