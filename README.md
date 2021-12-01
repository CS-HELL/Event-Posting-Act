# ApesStronk
Module 7: Server-Side Web Scripting

Website Requirements ()

- Database table for: users, posts, polls, and events

- Login to main site
- Registration (optional)

- Post updates/posts
- Post polls
- Post events

- Members must be able to: 
  1. login and logout
  2. join an event - with event panel
  3. cancel participation - from event panel
  4. view event history (participated, cancelled, and unable to attend)

- Additional credits for: autosave, nodeJS with express in admin / member module





# DBMS

Database Tables

All are subject to change

Legend/s:
* - required

Accounts
- Account ID * (generated)
- Account Username *
- Bind First Name *
- Bind Middle Name
- Bind Last Name *
- Account Creation Date
- About (possibly short description about the player/person)
- Likes (possibly types of games/genres)

Posts General
- Post general ID * (generated)
- Post date
- Post tags (use to filter posts)

  Posts Regular
  - Post general ID * (generated)
  - Post regular ID * (generated)
  - Post regular main body * (default " ")

  Posts Polls
  - Post general ID * (generated)
  - Post poll ID * (generated)
  - Post poll choices *

  Posts Events
  - Post general ID * (generated)
  - Post event ID * (generated)
  - Post event description (default " ")
  - Post event location *



# Interface

Login Page
> Users should be able to login
> Users should be able to sign up
> Users should be able to open the “About Us” page
> Security & Verification should be monitored using the database 

Main Page - News Feeds
> Displays regular posts, polls, and events
> Can be filtered

Events
> Divided into 3 categories (scheduled, ongoing, completed, unable)
> Users can cancel (dropped)

User admin panel - Account Profile (With edit)
> Can edit own credentials
> Can customize events

General Requirements
> Users should be able to login logout
> Users should be able to post and edit their posts
> Nodejs admin module
