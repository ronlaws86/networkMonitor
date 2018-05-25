#!/bin/bash

while true; do 

chromium-browser --noerrdialogs --disable-session-crashed-bubble --disable-infobars --disable-restore-session-state --kiosk --incognito $(cat ~/url.txt)

sleep 1; 

done
