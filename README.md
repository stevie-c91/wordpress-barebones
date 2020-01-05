# WordPress Barebones

This is a boilerplate for getting up and running with a new WordPress website quickly.

## Features

- Downloads the latest WordPress version
- Removes unused files
- A barebones theme with only commonly used files
- A nice gitignore file
- A local Vagrant environment
- Useful functions and some other tweaks

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