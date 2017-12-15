#!/bin/sh
export DISPLAY=":0.0"
unclutter -display :0 -noevents -grab &
while true;
do
        if ps ax | grep -v grep | grep chromium-browser > /dev/null
        then
        sleep 1;
else
 	chromium-browser --disable-translate --disable-infobars  --disable-suggestions-service --disable-save-password-bubble --disable-infobars --disable-session-crashed-bubble --incognito --kiosk "http://127.0.0.1" &
 	sleep 5
 	xdotool search --sync --onlyvisible --class "chromium" key F11
fi
done
