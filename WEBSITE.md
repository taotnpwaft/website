# This is the description of the functionality and contents of TAOT website

This is an IIS Deployed website

Pre-Login

* Possibly a splash screen or modal pop up, welcoming '[user]'. Check for returning user.
* 2FA?

* User Registration
  (form)
File: register.php / register.html
  USA: Name, Address, Address 2, County, City/Town, State, ZIP+4, Country [US, USA, United States] Phone, email, website, social links&icons

  Place for user to list / input their skill sets: i.e [Web] [IT] [Hobbyist] [Cloud] [Azure] [Kubernetes] [DevOps]

  Elsewhere:  Name, Address, Address 2, County, City/Town, State, Post Code, Country, Phone, email, website, social links&icons,

  Confirm Password
  "Already have an account, Log in [here]"

## Login

File: login.php / login.html / login.js
Login is a modal/popper

Verification of email, password and username
Forgot password // password reset request

[Invalid username/password popup // red warning message]
{Login Successful prompt/popup?}
[RememberMe]
"Not Logged in? Create an account"
"Already have an account? [Login Link]"
Repeat Password for verification?
"By creating an account you agree to our "TOS" [Link]"

## User Profile

New user creates profile:

* Displays information from database including location information

* Uploads for photo and/or avatar [selection]

* Social Media Links

Returning user:

Can search profiles
Add Friends
Edit Profile

## Home/Landing Page (index.html)

* Left SideNav that pushes landing page content to right when menu X is opened and returns when closed

* Social Media Icons:
   Facebook, Reddit, Discord, ProBoards, Twitter, Instagram, YouTube [fontawesome]

* FontAwesome / Material Icons:
  [BellNotification] [Gears] [User] [Users]

User gets notified of new messages to read in 'Bell' icon

Search bar: Mostly used for searching site for content

This page has only basic information about group

User should easily be able to locate contact information, login, register

Add Copyright and Terms and Conditions and Policy pages.

Add 404 page

Switcher to turn on/off Light / Dark Mode

`Logged in` gives privileges to user:
Users set as an admin will be able to:
Users set as a moderator will be able to:
[] Add other users/members as 'friends' // Friend Request
[] Create and/or edit blog post

## About (about.html)

* Group History

  * Initial members on YouTube live stream chat and Facebook Groups
  * Group was created on: March 7th, 2020

  * Created Discord in M2020

* Who, what, when, where, etc
  Why do we exist? What do we do? Who we are? Where are we found?

## Blog (blog.html)

* Uses Bootsrap 'card', `container', etc.

* Blog form with photo?

* Blog Title

* Blog Subject

* Name / UserID of creator

* avatar/sm. pic of creator

* clicking on Avatar / Pic sends user to creator profile

* Social Media sharing icons [fontawesome] // ability to share posts on other platforms

* Time and Date blog post was made

* Blog commenting [textarea]

* Shows # of comments

* TextArea

* Allow admin or user login to create, update, delete a blog post or comment if Authenticated

* Like, Dislike and Reporting of post

* Enable 'followability` of `blog poster` & Show # of Follows

* User permission can only allow own post editing.

[Codebase/Tech]:
 HTML5, CSS3, PHP7-8, Ajax, JQuery 3.6.0, MySQL Database, Javascript ES6/ES7

## Chat (chat.html)

* This chat to be used outside of any other chat services and for new members to quickly contact staff/admin/team
* Timestamps
* Message Read flag
* Users online frame

[Codebase/Tech]:
 HTML5, CSS3, PHP7-8, Ajax, JQuery 3.6.0, MySQL Database, Javascript ES6/ES7

## Contact (contact.html)

* Contact form with fieldset:

[Name] [Address] [Address2] [City/Town] [Phone] [Email] [Country] [Postcode]
[Website] [TextArea] [Subject]

* Bootstrap & FontAwesome

Verification/Validiation of fields (PHP, Javascript, JQuery, Ajax)

## Admin (admin.html)

Issue [Ban] & [Warning]
[ResetPassword]
[ResetUserID]

## Settings (settings.html)

These are settings specific to user space.  Admin privileges may have a little more.

[Privacy] [Display] [Language] [ActivityLog] [PreferencesForFeed]

## Footer

Style: Fixed/Sticky
[SocialIcons] [Newsletter:Register:] [UsefulLinks]
[Register] [Copyright] [Terms] [Privacy]

## Associated Databases

* User associated database(s) / Members (stores contact info and passwords??)
* Blog db

## Other

 Section Place to post group rules/ettiquite/
 RSS Feeds?

## SEO

Google Ads
Google ReCaptcha
Doubleclick.net
150 character description of each page in meta description
SEO keywords in meta keywords for each page
OpenGraph and Twitter meta
