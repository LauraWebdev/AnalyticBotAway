# AnalyticBotAway
## a simple PHP class to catch those nasty crawler bots that spam your analytic reports

### What are crawler bots?
A referrer is a name that is passed along when a browser goes from one page to another page (through an HTTP header), and usually it is used to indicate where the user is coming from.
Now, this referrer can be changed for anything, and some people will set it to be a page they want to promote.
Then they will make repeated requests (probably with an automated script) with the intention of showing in the reports and logs of this WebSite, this is called Referrer Spam.

### Why are they doing that?
The most obvious reason is traffic; people are curious by nature, and they want to know what is going on their websites, so they go to the referral URL to check it.
These spammers hit thousands of Google Analytics accounts so you can imagine the amount of traffic they are getting with this method.
Sometimes to promote a page and sometimes they will redirect you to an online store where they will get a cut if someone buys anything.

### How does AnalyticBotAway help?
AnalyticBotAway checks the referrer on every page hit and compares it with a list of public known bots.
If the script found a bot It'll send them a "404 - page not found" notice and the bot might not try to visit you again.
The script afterwards blocks any content from your page to not get included to your analytics report.

### Installation
* Download the latest version and copy includes/class.analyticbotaway.php
* Include class.analyticbotaway.php in your PHP file

> include('includes/class.analyticbotaway.php');

* Insert AnalyticBotAway(); before your page

> $abw = new AnalyticBotAway;
    
* Done!

### Ghost Bots
Some Bot's are not visiting your page.
Those so called "Ghost Bots" directly interact with Google Analytics and never ever visit your page!
To catch those tricky bots you'll have to ban them in Google Analytics.
A great tutorial to do that can be found [here](http://thrivenetmarketing.com/analytics/how-to-block-ghost-referrer-spam-in-google-analytics/).