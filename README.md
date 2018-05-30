# networkMonitor

A simplistic, PHP based Network Status monitoring display board designed to be simple to read and easy to use. the goal is to be very easy to deploy, needing minimal skill in order to set up and simplistic in its function as a simple status tool for monitoring multiple devices (such as servers, routers etc.) across a network, displaying if they are online or not. 

# Adding Hosts 
To add hosts to your monitor, For now you need to edit a JS file under [webroot]/assets/js/custom.js

change one of the lines that look like this 

$('#14').load('host.php?ip=#&name=#');


to look like this

$('#14').load('host.php?ip=1.2.3.4&name=DisplayNameOfHost');

To change the names of the columns, you will need to edit the HTML in index.php. 

A user friendly way of doing this is planned for a future release among some other awesome features and optimisations.

# RASBERRY PI 2 and 3 
Rasbian Release is based off a few combined projects over the top of the stock Rasbian Image.
TinyFM - https://github.com/prasathmani/tinyfilemanager
RaspAP - https://github.com/billz/raspap-webgui

This image of rasbian is pre-configured to launch Chromium in Kiosk mode for use as a display as well as monitoring your hosts

You can use tinyfilemanager.php to make changes to the required files from a browser if you wish, more detailed instructions are given on screen at first boot.

https://drive.google.com/open?id=1qo1vwQicm4jQ5EShtOhl1EtPSIqqcv4A - Image Build 1.2

Please note an 8GB or larger SD Card is required. - I recommend Etcher to flash this image to cards, it can read the image in it's provided gzip file state (No extracting needed!)
Download Etcher here - https://etcher.io/

Default passwords are in use, please change them if you plan to put this in to production, it is considered stable and production ready.

The Rasbian Image also contains some tweaks to /etc/fstab to move tmp and log directories to volatile storage, this is to help prolong SDCard life by reducing small writes. It has also been set up to launch chromium in kiosk mode on boot instead of the rasbian desktop to help free up RAM, please note that the experimental GL driver is also enabled and tweaks were made in chromium to help offload rendering to the videoCore. I have tested this to be working, but if you experience issues you can use raspi-config to disable the GL Driver and fall back to CPU rendering.

the default ssh password for user pi has been set to ChangeMe 
