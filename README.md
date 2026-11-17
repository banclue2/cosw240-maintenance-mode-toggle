# Maintenance Mode Toggle

This project is a plugin that blocks users who are not logged in from viewing the front end view of the website and see a "Coming Soon" message instead.

**Type:** Plugin
**Author:** Rosana May
**Course:** COSW 240

## Overview

This plugin blocks users who are not logged in from viewing the front end view of the website and see a "Coming Soon" message instead.

## Features

- Redirects
- Logged in conditional
- Different pages

## How It Will Work

### For the User

Users will find this in the plugins store. They can turn the plugin off and on which affects what logged-out users will see on the website. If it is on, logged-out users will see a "Coming Soon" message.

### Behind the Scenes

I plan to do some research and build this out slowly. I am expecting to use template_redirect, is_user_logged_in(), wp_die(), etc.

## Planned File Structure

```
cosw240-maintenance-mode-toggle/
├── README.md
├── cosw240-maintenance-mode-toggle
└── ...
```

## Project Milestones

- [ ] Write the project plan in README.md
- [ ] Create "Coming Soon" message
- [ ] Set up redirect for logged-out users
- [ ] Finish project and turn it into a plugin

## Questions and Challenges

I am unsure about how to code the redirecting users part and targetting it towards logged-out users. I will surely need to research this.

## Resources

- [UsersInsight](https://usersinsights.com/wordpress-redirect-if-not-logged-in/)

## Current Status
Registration milestone complete.
The final project feature is not implemented yet.

## Installation
1. Upload the project ZIP through Plugins > Add New > Upload Plugin.
2. Install and activate the plugin.

## Current File Structure
.gitignore: Keeps local clutter and secrets out of the project respository.
cosw240-maintenance-mode-toggle.php: Provides basic information about the plugin.

## Testing
- WordPress version tested: 1.0.0
- Plugin activates without errors: True
- Known issues: None

## Next Milestone
Add in redirects.