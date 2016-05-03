# Chromecast backgrounds for Kodi

Chromecast backgrounds that change automatically on Raspberry Pi Kodi

1. Connect to the raspberry via ssh
3. Install php `apt-get php5-cli`
2. Go to user folder `cd /home/pi`
4. Download the .zip `wget https://github.com/lmeyer/kodi-chromecast-backgrounds/archive/master.zip --no-check-certificate`
5. Unpack it `unzip master.zip`
6. Rename the folder `mv kodi-chromecast-backgrounds-master/ kodi-chromecast-backgrounds`
7. Remove master.zip `rm master.zip`
8. Run the download script `php kodi-chromecast-backgrounds/download.php`
9.  Run the change script `php kodi-chromecast-backgrounds/change.php`
10. Edit crontab `crontab -e` and add the following lines
```
0 5 * * 1   php /home/pi/kodi-chromecast-backgrounds/download.php
0 */2 * * * php /home/pi/kodi-chromecast-backgrounds/change.php
```
11. Restart cron service `service cron restart`
12. Go to kodi configuration and change the theme background
    1. System > Settings > Appearance > Skin > Settings > Background Options
    2. Check Enable Custom Background
    3. Browse your file and chose `Home folder/kodi-chromecast-backgrounds/background.jpg`
13. Enjoy

Thanks to Deirdre Connolly for https://github.com/dconnolly/Chromecast-Backgrounds
