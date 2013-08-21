<?php
class Tasks
{
    private $tasks_accountexecutives = array(
        'Check for broken links',
        'Check all pages in website for any noticeable errors',
        'Check website on mobile phone',
        'Check website on iPad (if one is available)',
        'Is there a clear visual hierarchy?',
        'Is the site’s navigation easy to understand?',
        'Is the site’s navigation consistent?',
        'Does the site use consistent and appropriate language?',
        'Check for mispelling, grammar and content errors',
        'Does the site have a sitemap page and contact page? Are they easy to find?',
        'Is there a link to the home page on every page in the site?',
        'Check all functionality ',
        'Check search functionality (including relevance of results)',
        'Does the site work well when printed?',
        'Ensure no test content on site',
        'Check all requirements and that all requirements are met'
    );

    private $tasks_projectmanagers = array(
        'Check for broken links',
        'Check all pages in website for any noticeable errors',
        'Check website on mobile phone',
        'Check website on iPad (if one is available)',
        'Is the project up to date on its documentation on the wiki?',
        'Are analytics setup? (GA, Inspectlet, other tracking tools + special click tracking)',
        'Is there a clear visual hierarchy?',
        'Is the site’s navigation easy to understand?',
        'Is the site’s navigation consistent?',
        'Does the site use consistent and appropriate language?',
        'Check for mispelling, grammar and content errors',
        'Does the site have a sitemap page and contact page? Are they easy to find?',
        'Is there a link to the home page on every page in the site?',
        'Are all form validation errors easily understood and informative?',
        'Check all functionality ',
        'Check search functionality (including relevance of results)',
        'Test all forms (e.g. contact us, blog comments), including anti-spam features, response emails/text, etc.',
        'Check all external links are valid',
        'Does the site work well when printed?',
        'Ensure no test content on site',
        'Check all requirements and that all requirements are met',
        'Test all provided logins, test sign up, transactions and testing credentials (e.g. fake credit cards)',
        'Review Google Analytics (e.g. integration, special click tracking)'
    );

    private $tasks_seniordeveloper = array(
        'Fix broken links - http://www.brokenlinkcheck.com/',
        'Spelling and grammar',
        'Browser Check (PC & Mac) Chrome, Firefox, Safari, IE7-10 - Browsershot or Virtual Machines',
        'Check website in iPhone &amp; Android Phone',
        'Check website in iPad',
        'Remove "www" subdomain - .htacces / IIS',
        'Does the site have a meaningful and helpful 404 error page that works from any depth in the site?',
        'Does the site use friendly URLs?',
        'Does the site have a favicon?',
        'Is the project up to date on its documentation on the wiki?',
        'Are all passwords logged in LastPass?',
        'Is master branch the production branch?',
        'Is the project in Git properly?',
        'Is there an up-to-date executable SQL file?',
        'Uptime monitoring',
        'Traffic analysis (Google Analytics, other tracking tools + special click tracking)',
        'Google Page Speed score of 90+ - https://developers.google.com/speed/pagespeed/',
        'Yahoo YSlow score of 85+ - http://developer.yahoo.com/yslow/',
        'Are JS/HTML/CSS and images optimized?',
        'Check correct database indexing',
        'HTML5 compatibility check',
        'Is there a clear visual hierarchy?',
        'Are heading levels easy to distinguish?',
        'Is the site’s navigation easy to understand?',
        'Is the site’s navigation consistent?',
        'Does the site use consistent and appropriate language?',
        'Does the site have a sitemap page and contact page? Are they easy to find?',
        'Is there a link to the home page on every page in the site?',
        'Are links underlined?',
        'Are visited links clearly defined?',
        'Are all forms validated with JavaScript and back-end technology?',
        'Are all form validation errors easily understood and informative?',
        'SenSEO score of 85+ - https://addons.mozilla.org/en-us/firefox/addon/senseo/',
        'robots.txt',
        'XML sitemap & submitted to Google and other search engines',
        'Page Titles are important; ensure they make sense and have relevant keywords in them.',
        'Create metadata descriptions for important pages.',
        'Check for canonical domain issues (e.g. variations in links to http://site.com http://www.site.com http://www.site.com/index.html should be reduced to a single consistent style)',   
        'Ensure content is marked-up semantically/correctly (h1, etc.)',
        'Check for target keyword usage in general content',
        'Check format (user/search engine friendliness) of URLs',
        'Configure Google Webmaster Console and Yahoo! Site Explorer ',
        'HTML validation - http://validator.w3.org/',
        'CSS validation - http://jigsaw.w3.org/css-validator/',
        'Run CSS Lint - http://csslint.net/',
        'Run JSLint/JSHint - http://www.jslint.com/ & http://www.jshint.com/',
        'Does the site use a correct Doctype?',
        'Does the site use a Character set?',
        'Does the site use any CSS hacks?',
        'Does the site use unnecessary classes or ids?',
        'Is the code well structured?',
        'Does the site have JavaScript errors?',
        'Degree of separation between content and presentation',
        'Does the site use CSS for all presentation aspects (fonts, colour, padding, borders etc)?',
        'Are all decorative images in the CSS, or do they appear in the (X)HTML?',
        'Are sprites being used?',
        'Is the code well documented?',
        'Check all functionality',
        'Check search functionality (including relevance of results)',
        'Test all forms (e.g. contact us, blog comments), including anti-spam features, response emails/text, etc.',
        'Check all external links are valid ',  
        'Are 301 redirects in place?',
        'Accessibility validation',
        'WAI-ARIA LandmarksAre “alt” attributes used for all descriptive images?',
        'Do any aspects of the layout break if font size is increased? (remember, users can control and override the CSS)',
        'Does the site use accessible forms?',
        'Is there delayed responsiveness for dropdown menus (for users with reduced motor skills)?',
        'Is the content accessible with CSS switched off or not supported?',
        'Is the content accessible with images switched off or not supported?',
        'Does the site work well when printed?',
        'Follow best practices (e.g. salting and hashing passwords)',
        'Cross-site scripting',
        'Cross-site request forgery',
        'Protect any sensitive pages (e.g. administration area)',
        'Set-up email/SMS monitoring/alerts (e.g. for errors, server warnings); consider internal and external monitoring services',
        'Transaction logging if necessary',
        'Is spam prevention in place (e.g. honeypot)',
        'Are all software (e.g. WordPress, CakePHP) and libraries (e.g. jQuery) up to date?',
        'Ensure no test content on site',
        'Check all ‘Hidden Copy’ (e.g. alt text, transcriptions, text in JavaScript functions)',
        'Check all requirements and that all requirements are met',
        'Add humans.txt',
        'Provide team with logins for all levels (Admin, user, etc) and any testing credientials (e.g. fake credit cards)'
    );

    private $tasks_developers = array(
        'Fix broken links - http://www.brokenlinkcheck.com/',
        'Spelling and grammar',
        'Browser Check (PC & Mac) Chrome, Firefox, Safari, IE7-10 - Browsershot or Virtual Machines',
        'Check website in iPhone &amp; Android Phone',
        'Check website in iPad',
        'Remove "www" subdomain - .htacces / IIS',
        'Does the site have a meaningful and helpful 404 error page that works from any depth in the site?',
        'Does the site use friendly URLs?',
        'Does the site have a favicon?',
        'Is the project up to date on its documentation on the wiki?',
        'Are all passwords logged in LastPass?',
        'Are all preprocessor source files up to date?',
        'Is master branch the production branch?',
        'Is the project in Git properly?',
        'Is there an up-to-date executable SQL file?',
        'MobileOK score of 75+ - http://validator.w3.org/mobile/',
        'Use "viewport" meta-tag',
        'Use correct input types',
        'Uptime monitoring',
        'Traffic analysis (Google Analytics, other tracking tools + special click tracking)',
        'Google Page Speed score of 90+ - https://developers.google.com/speed/pagespeed/',
        'Yahoo YSlow score of 85+ - http://developer.yahoo.com/yslow/',
        'Optimize images - ImageOptim, Smaller, etc',
        'Check and implement caching where necessary - W3 Total Cache, Memcache, etc',
        'Minify/compress static (JavaScript/HTML/CSS) files - CodeKit, Smaller, etc ',
        'Optimise your CSS: use short image paths; make full-use ‘cascading’ nature of CSS, etc.',
        'Check correct database indexing',
        'Configure server-based logging/measurement tools (e.g. database/web server logging)',
        'HTML5 compatibility check',
        'Add search feature, if applicable',
        'Is there a clear visual hierarchy?',
        'Are heading levels easy to distinguish?',
        'Is the site’s navigation easy to understand?',
        'Is the site’s navigation consistent?',
        'Does the site use consistent and appropriate language?',
        'Does the site have a sitemap page and contact page? Are they easy to find?',
        'Is there a link to the home page on every page in the site?',
        'Are links underlined?',
        'Are visited links clearly defined?',
        'Are all forms validated with JavaScript and back-end technology?',
        'Are all form validation errors easily understood and informative?',
        'SenSEO score of 85+ - https://addons.mozilla.org/en-us/firefox/addon/senseo/',
        'robots.txt',
        'XML sitemap & submitted to Google and other search engines',
        'Page Titles are important; ensure they make sense and have relevant keywords in them. ',  
        'Create metadata descriptions for important pages.',
        'Check for canonical domain issues (e.g. variations in links to http://site.com http://www.site.com http://www.site.com/index.html should be reduced to a single consistent style)',
        'Ensure content is marked-up semantically/correctly (h1, etc.)',
        'Check for target keyword usage in general content',
        'Check format (user/search engine friendliness) of URLs',
        'Configure Google Webmaster Console and Yahoo! Site Explorer',
        'HTML validation - http://validator.w3.org/',
        'CSS validation - http://jigsaw.w3.org/css-validator/',
        'Run CSS Lint - http://csslint.net/',
        'Run JSLint/JSHint - http://www.jslint.com/ & http://www.jshint.com/',
        'Does the site use a correct Doctype?',
        'Does the site use a Character set?',
        'Does the site use any CSS hacks?',
        'Does the site use unnecessary classes or ids?',
        'Is the code well structured?',
        'Does the site have JavaScript errors?',
        'Degree of separation between content and presentation',
        'Does the site use CSS for all presentation aspects (fonts, colour, padding, borders etc)?',
        'Are all decorative images in the CSS, or do they appear in the (X)HTML?',
        'Are sprites being used?',
        'Is the code well documented?',
        'Check all functionality ',
        'Check search functionality (including relevance of results)',
        'Check on common variations of Screen Resolution ',
        'Test all forms (e.g. contact us, blog comments), including anti-spam features, response emails/text, etc.',
        'Check all external links are valid', 
        'Are 301 redirects in place?',
        'Accessibility validation',
        'WAI-ARIA LandmarksAre “alt” attributes used for all descriptive images?',
        'Do any aspects of the layout break if font size is increased? (remember, users can control and override the CSS)',
        'Does the site use accessible forms?',
        'Is there sufficient colour brightness/contrasts?',
        'Is colour alone used for critical information?',
        'Is there delayed responsiveness for dropdown menus (for users with reduced motor skills)?',
        'Are all links descriptive (for blind users)?',
        'Is the content accessible with CSS switched off or not supported?',
        'Is the content accessible with images switched off or not supported?',
        'Does the site work well when printed?',
        'Follow best practices (e.g. salting and hashing passwords)',
        'Cross-site scripting',
        'Cross-site request forgery',
        'Secure connection (SSL)',
        'Configure backup schedule, and test recovery from backup. ',  
        'Protect any sensitive pages (e.g. administration area)',  
        'Is ACL properly configured?',
        'Use robots.txt where necessary',
        'Security/Penetration test',
        'Turn-off error reporting',
        'Check disk space/capacity',
        'Set-up email/SMS monitoring/alerts (e.g. for errors, server warnings); consider internal and external monitoring services', 
        'Transaction logging if necessary',
        'Is spam prevention in place (e.g. honeypot)',
        'Are all software (e.g. WordPress, CakePHP) and libraries (e.g. jQuery) up to date?',
        'Open Graph protocol',
        'Twitter Cards',
        'Facebook Insights',
        'Social Marketing: Twitter, LinkedIn, Digg, Facebook, Stumbleupon, etc.',  
        'Submit to search engines',
        'Check for incorrect punctuation marks, particularly apostrophes, quotation marks and hyphens/dashes', 
        'Check headings for where you could potentially use ligatures',
        'Check for widow/orphan terms in important paragraphs',
        'Capitalisation (especially of main headings)',
        'Recurring/common phrases (e.g. ‘More about X’ links)',
        'Variations in words (e.g. Websites vs Web Sites, or UK vs US spelling)',
        'Treatment of bulleted lists (e.g. periods or commas at end of each item)',
        'Check for hard-coded links, images, etc to staging domain (i.e. ensure all links will change to ‘live’ URL/domain when site is launched)', 
        'Ensure no test content on site',
        'Check how important pages (e.g. content items) print',
        'Check all ‘Hidden Copy’ (e.g. alt text, transcriptions, text in JavaScript functions)',
        'Check all requirements and that all requirements are met',
        'Add humans.txt',
        'Provide team with logins for all levels (Admin, user, etc) and any testing credientials (e.g. fake credit cards)',
        'Add "Developed and Designed by Digital Thrive”'
    );

    public function get($what)
    {
        $group = 'tasks_' . $what;
        return $this->$group;
    }
}
?>