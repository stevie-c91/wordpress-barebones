# WordPress Barebones

This is a boilerplate for getting up and running with a new WordPress website quickly.

View article [here](https://stevencotterill.com/articles/wordpress-barebones-starter-script-and-theme)

## Features

- Downloads the latest version of WordPress
- Extracts the official ZIP file to a public folder and removes the ZIP
- Removes the [Akismet](https://en-gb.wordpress.org/plugins/akismet) plugin
- Removes the [Hello Dolly](https://en-gb.wordpress.org/plugins/hello-dolly) plugin
- Removes all the default WordPress 'twenty' themes
- Installs a barebones theme which contains only the commonly used files. It also includes a number of useful functions that I add to all projects. Most of the theme files are empty, allowing for a quick starting point
- Sets up a local Vagrant environment with the [Scotchbox Pro](https://box.scotch.io/pro) box
- Performs cleanup, including deleting the script itself

Some useful functions include:

- Defining constants for parent and child themes. These allows much shorter calls in the theme
- Disables the WordPress admin file-editor for added security
- Removes the WordPress version from the source code, including all scripts and styles
- Show a generic login error for added security
- Disables comments throughout the site, including removing menu items

## How to use

    # Clone the repo to your machine and change directory
    git clone https://github.com/stevie-c91/wordpress-barebones.git && cd wordpress-barebones

    # Add your desired theme name to the barebones.sh file
    theme_name=your-theme-name

    # Run the barebones script
    ./barebones.sh

    # Downloading the latest version of WordPress...
    # WordPress downloaded! Extracting files...
    # Removed unused files and folders
    # Successfully installed WordPress and Barebones theme!

You should then edit the theme 'style.css' with your new theme name.

Remember to activate the theme when have it running by logging into WordPress and going to Appearance > Themes, then go to Settings > Permalinks to generate a fresh .htaccess file.

## Vagrant

If you are using Vagrant for local development, change 'config.vm.hostname' to your desired name.

Add to your hosts file with the IP in the Vagrantfile (192.168.33.10) and the local development URL you want to use, then:

    # Start the Virtual Machine. This will take a while downloading for the first time only
    vagrant up

When WordPress setup asks you for Database credentials, these are:

- DB name: scotchbox
- DB username: root
- DB password: root

---

If you have any issues, make sure you have cURL installed on your system for use on the command line. Windows users might need to use the WSL terminal.

Pull requests are welcome.