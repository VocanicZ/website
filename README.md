### Made by Coldfire - https://coldfiredzn.com
# Modified By Nathaniel Song
### Cobalt Theme for NamelessMC - Docs

# Installation:
- Note: Make sure you have NamelessMC version v2! NamelessMC v1 will NOT work!
- Unzip the file and upload the contents of the "upload" file straight into your main NamelessMC installation directory (where the folders core, custom, modules, uploads, cache are)
- Head over to StaffCP -> Templates, click the "Install" button
- Enable the "Cobalt" template by clicking the "Activate" button, and make it default by clicking the "Make Default" button
- You're done! Configure the template at StaffCP -> Layout -> Templates -> Cobalt (settings button)

Important note: if you have immediate issues with most pages not loading, follow the directions below:
Replace core/classes/Core/Util.php with this: https://paste.rkslot.nl/uqacohaqip

This is a NamelessMC issue and will be fixed in the 2.0.0 release.

# Support Discord: 
https://coldfiredzn.com/discord
Note: if you do join, please check the #faq channel before asking questions as it will probably have the answers you need! :D

# FAQ:

How do I enable the portal page?
Answer:
1. Go to StaffCP -> Configuration -> General Settings
2. Set "home page type" to "portal"

When I go to the Cobalt StaffCP page I get an error. How do I fix this?
Answer:
1. Check if there is the folder "template_settings" in custom/templates/Cobalt and that there is a file named "settings.tpl" inside it. If not, re-upload that file from the Cobalt zip file
2. Make sure you are using the default StaffCP template

The easy updater isn't working. How do I fix this?
Answer:
1. Change both "upload_max_filesize" and "post_max_size" to 1000M in php.ini (contact your host about how to edit this file) and then restart your server
2. Make sure you have the php-zip extension installed on your webserver

I am getting an error when I try to change settings. How do I fix this?
Check if there is the file "cobalt-settings.json" in the root directory of namelessmc (where the folders custom, modules, core are). If there isn't one there, create it (and leave it empty). Also ensure it has the file permission 777.

The login and register popups aren't working, how do I fix this?
1. Make sure the hostname value in core/config.php matches your site url
2. If you are using the www. prefix make sure the force www option is enabled in staffcp -> configuration -> general settings

If those do not work, this is likely due to a webserver misconfiguration. Follow these steps:
1. If you use Cloudflare, make sure you are using "Full (strict)" TLS mode, not "Flexible"
2. If you are using a reverse proxy, ensure the X-Forwarded-Port header is set properly.

For more help, please join the NamelessMC Discord, and mention that a port is being added at the end of your site's URLs and is causing issues. This thread in the NamelessMC Discord server will also help: https://discord.com/channels/246705793066467328/991344260781703248

How do I add the store button seen on the Cobalt demo site to my navbar?
Settings to enable the store button are in Cobalt settings -> header -> navbar
If these don't work, try the following things:
1. If you are using the Tebex, Craftingstore, or store module, make sure the store link in cobalt settings is /store/
2. Make sure you are using one of the above modules, or if your store is on an external page, make sure you create a redirect link to it in StaffCP -> custom pages
