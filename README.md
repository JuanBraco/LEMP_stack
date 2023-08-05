# LEMP_stack_config
LEMP project 

The goal of this project was to create a worpress website with presistent storage and nginx inside docker containers inside a virtual machiene.
The used OS for the VM was Debian 11.
The catch was that wordpress, nginx and mariadb had to be launched in seperate docker containers which share a network in a way so that the wordpress website is only accessible with https/port 443.
This had to be archieved by using a docker-compose.yml in a way so that when make is called in the root of the directory, all needed services are configured and started in a error-free way.

##Hardware/Software reccomendations
I used VirtualBox 6.1.32 to create a VM on a linux distribution and UTM on my MAC M1.
The VM was running on Debian 11 64-bit
I created a vdi hard disk with 16 GB
