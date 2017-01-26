# soNerd starter kit #

### Visit [sonerd.com](http://sonerd.com) - need to update link - for more info ###

### Quick Explanation ###
* A starting point for the next project using PHP
* [SCSS](http://sass-lang.com/guide) , [JQuery](https://jquery.com/) , [Bootstrap](http://getbootstrap.com/)
* MySQL DB connections
* Uses a configuration to define paths and configure some settings
* Header and Footer files in order to have same header and footer across separate pages

### Setup ###
* Updating the remote you will be pushing to
```bash
git clone ...
git remote rm origin
git remote add origin ...
```
* Cleaning up all Git commits
```bash
git checkout --orphan newBranch
git add -A  # Add all files and commit them
git commit
git branch -D master  # Deletes the master branch
git branch -m master  # Rename the current branch to master
git push -f origin master  # Force push master branch to origin
git gc # Clean up .git folder
```

### Changes that will need to be made ###
* Update all info in this file (readme.md)
* config.php - line 14 => change to your home path
* index.php - line 2 => change to path of your config.php file
* about.php - line 2 => change to path of your config.php file
* assets/templates/header.php - line 5, 6, 8, and 10 => Update to your info
* assets/templates/header.php - line 14, 18, and 19 => Update to http if no SSL certificate
