# Raspbmc Chromecast backgrounds

Chromecast backgrounds on Raspbmc that change automatically

1. Connect to the raspberry via ssh
3. Install php `apt-get php5-cli`
2. Go to user folder `cd /home/pi`
4. Download the .zip `wget https://github.com/lmeyer/raspbmc-chromecast-backgrounds/archive/master.zip --no-check-certificate`
5. Unpack it `unzip master.zip`
6. Rename the folder `mv raspbmc-chromecast-backgrounds-master/ raspbmc-chromecast-backgrounds`
7. Remove master.zip `rm master.zip`
8. Run the download script `php raspbmc-chromecast-backgrounds/download.php`
9.  Run the change script `php raspbmc-chromecast-backgrounds/change.php`
10. Edit crontab `crontab -e` and add the following lines
```
0 5 * * 1   php /home/pi/raspbmc-chromecast-backgrounds/download.php
0 */2 * * * php /home/pi/raspbmc-chromecast-backgrounds/change.php
```
11. Restart cron service `service cron restart`
12. Go to your raspbmc and change the theme background
    1. System > Settings > Appearance > Skin > Settings > Background Options
    2. Check Enable Custom Background
    3. Browse your file and chose `Home folder/raspbmc-chromecast-backgrounds/background.jpg`
13. Enjoy

Thanks to Deirdre Connolly for https://github.com/dconnolly/Chromecast-Backgrounds