# networkMonitor

A simplistic, PHP based Network Status monitoring display board designed to be simple to read and easy to use. the goal is to be very easy to deploy, needing minimal skill in order to set up and simplistic in its function as a simple status tool for monitoring multiple devices (such as servers, routers etc.) across a network, displaying if they are online or not. 

# RASBERRY PI 2 and 3 
Rasbian Release is based off a few combined projects over the top of the stock Rasbian Image.
TinyFM - https://github.com/prasathmani/tinyfilemanager
RaspAP - https://github.com/billz/raspap-webgui

This image of rasbian is pre-configured to launch Chromium in Kiosk mode for use as a display as well as monitoring your hosts

You can use tinyfilemanager.php to make changes to the required files from a browser if you wish, more detailed instructions are given on screen at first boot.

https://drive.google.com/open?id=1YtP485ecLrdE1P1ANC2kB0UWgOAULPdh

Please note an 8GB or larger SD Card is required.

Default passwords are in use, please change them if you plan to put this in to production, it is considered stable and production ready.

The Rasbian Image also contains some tweaks to /etc/fstab to move tmp and log directories to volatile storage, this is to help prolong SDCard life by reducing small writes. It has also been set up to launch chromium in kiosk mode on boot instead of the rasbian desktop to help free up RAM, please note that the experimental GL driver is also enabled and tweaks were made in chromium to help offload rendering to the videoCore. I have tested this to be working, but if you experience issues you can use raspi-config to disable the GL Driver and fall back to CPU rendering.

the default ssh password for user pi has been set to ChangeMe 
