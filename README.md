# WordPress Barebones

This is a boilerplate for getting up and running with a new WordPress website quickly.

## Features

- Downloads the latest WordPress version
- Removes unused files
- A barebones theme with only commonly used files
- A nice gitignore file
- A local Vagrant environment
- Some other tweaks

## How to use

    # Clone the repo to your machine and change directory
    git clone https://github.com/stevie-c91/wordpress-barebones.git
    cd wordpress-barebones

    # Add your desired theme name to the barebones.sh file
    theme_name=your-theme-name

    # Run the barebones script
    ./barebones.sh

    # If using Vagrant, change 'config.vm.hostname' to your desired local URL. Add it to your hosts file with the IP in the Vagrantfile
    # Start the Virtual Machine
    vagrant up

If you have any issues, make sure you have cURL installed on your system for use on the command line. Windows users might need to use the WSL terminal.

Pull requests are welcome.