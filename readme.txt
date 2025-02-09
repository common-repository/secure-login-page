=== Secure Login Page ===
Tags: protection, security, hack, secure login, website security, admin security, captcha, security plugin, attack, login security, admin protection, virus, wordpress security, ban hacker, login alerts
Requires at least: 3.0
Tested up to: 5.5
Stable tag: 1.0
Contributors: SArt
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin prevents access to admin area without appropriate access key and adds a higher level of security to your website.

== Description ==

Everybody knows that it's easy to access administrators  area of WordPress website using standard 
login page. That makes hacker's life much easier and your website security weaker. Anyone who 
has got a brutforce software can easily access the administrators login page and run the bruteforce 
software. If your login and password are not secure enough your website might be accessed by the 
thief. When we were working on our plugin we tried to make attacks on your website impossible.

WP Admin Protection prevents access to administration area without appropriate access key. This 
plugin adds a higher level of security to your WordPress website. Even with the correct login 
and password the hacker will not get access to administrator area without special secret key.

> Example: http://www.your-website.com/wp-login.php?Your_Secret_Word 

Hacker needs to know this Your_Secret_Word (secret key) to login as administrator.

**Main features:**

* Easy to install, easy to use
* Captcha codes for your WP login page (to prevent a brutforce attack)
* White IP list (these user can login without extra security, e.g. you can set your own IP address)
* Black IP list (these users will never get access to your administrator area)
* Prevent password brute force attack with strong "secret key"
* Notifications by email about all not authorized actions
* Support by email, live chat and by phone

To protect whole website against viruses, malware any hacker activity visit http://www.siteguarding.com


== Installation ==

1. Upload `wp-admin-protection.php` and `recaptchalib.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to menu Users
4. Find your admin user and click edit
5. On administrator's detailed page, you will see `Security Access Options` and configure the access settings
6. If you need full version, please visit https://www.siteguarding.com/en/wordpress-admin-protection

> For any questions and support please visit https://www.siteguarding.com/en/wordpress-admin-protection


== Frequently Asked Questions ==

= Q: Why should I use WP Admin Protection plugin? =

A: Our plugin gives extra security for your WordPress website and prevent a brutforce attack to your administrator area.
Also everytime when you or someone got access to your administrator area, you will get a notigication by email. 

= Q: Will WP Admin Protection plugin slow my site down? =
A: No.

= Q: What to do if I have a problem or forgot my `secret key`?

A: Contact with us (https://www.siteguarding.com/en/contacts), provide FTP access to your website and we will recover/reset your `secret key`. 

= Q: What is the difference between Free and Paid =

A: The difference only in the limits.
E.g. in free version the maximum `secret key` is 4 symbols, full version doesnt have this limitation.   
Complete list of the limits you can see here https://www.siteguarding.com/en/wordpress-admin-protection



== Screenshots ==

1. Hacker needs to know this `secret key` to login as administrator.
2. Captcha code for login page (to prevent a brutforce attack)
3. Easy to configure in Settings section.

== Changelog ==

== Upgrade Notice ==
