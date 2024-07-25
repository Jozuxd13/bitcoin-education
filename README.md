# bitcoin-education
Simple Project to show my skills with Wordpress

## Prerequisites

- Docker installed on your system
- Docker Compose installed

## Setup Instructions

### Clone the Repository

   Clone the repository:

   git clone https://github.com/Jozuxd13/bitcoin-education.git
   cd bitcoin-education

   WordPress Configuration
   This project is configured to use WordPress version 6.6, as specified in the docker-compose.yml file.

### Build and Start the Containers

    docker-compose up -d
    
    This command will download the necessary Docker images, build the containers, and run them in the background.

### Initial WordPress Setup
    
    Open your browser and navigate to http://localhost:8000.
    
    Follow the WordPress setup wizard to complete the installation. You will need to provide details such as the site name, username, and administrator password.

### Access the WordPress Site
    
    Once the installation is complete, you can access the WordPress site at http://localhost:8000.

## Stop the Containers
    
    To stop the running containers, use the following command:

    docker-compose down

## Technical Details
    
    The docker-compose.yml file includes the configuration for the following services:

        WordPress: Version 6.6.
        MySQL: Database for WordPress, version 5.7.