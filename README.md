# IT Consultis Test
This project is a WordPress theme for IT Consultis company website. It features a custom About Us page template with a profile slider near the footer section. The project uses Docker and WSL2 for local development and testing.
## Prerequisites
Before setting up this project, you will need to have Docker and WSL2 installed on your local machine.
## Installation
To set up WordPress local development with Docker, follow these steps:
* Clone the repo to your local machine.
* Navigate to the root directory of the repo, then to the `.docker` directory.
* Run the command `docker compose build`. This will take some time to complete.
* When finished, run the command `docker compose up -d`. This will also take some time to complete.
* After finishing compose, visit `localhost:8000` and you will see the WordPress setup screen.
* Follow the WordPress installation process to register a local admin user for logging in WordPress.
* Log in to WordPress admin dashboard using your username and password.
* You can visit `localhost:8080` to go to phpMyAdmin. The username and password are in the `.env` file inside the `.docker` directory. 

At this point, the WordPress local development with Docker setup should be successfully finished.

## Testing
To test the About Us page, follow these steps:
* Go to WordPress admin dashboard, look for the `Appearance` menu item on the left of the admin menu. Hover it and choose `Themes`.
* In the theme dashboard, you should see the theme name `it-consultis`. Activate the theme.
* Then, look for the `Settings` -> `Permalinks`, choose the `Post name` permalink structure then click `Save changes`. This step is crucial for testing the About Us page.
* Next, look for `Pages` -> `Add new`, when done, you will see the WordPress block editor. At the `Add title` input field for page title, you should put in `About Us` for the title. The `About Us` title is not mandatory though since the most vital part of this step is to make sure that the page has the correct URL in which the part behind `localhost:8000/` must be `about-us`.
* When done, click publish. You can now view the new About Us page at `localhost:8000/about-us/`.
* After viewing the page, you can see that the profile slider near the footer section is not working properly. This is where the ACF plugin comes into play. The ACF plugin is responsible for both registering a new custom post type called `profile` and text fields for displaying nessecary profile content of each profile slide.
* Because the ACF plugin is from 3rd party provider, it was ignored to make the repo contain only nesssecary files, in this case, only the WordPress core files and the `it-consultis` custom theme files will be tracked for changes.
* Now, go back to the admin dashboard and install ACF plugin via the plugin installer (Plugins -> Add New), on the search field, type `ACF`, the first option appears on the top left should be the one you're looking for (to make sure you download the right plugin, it is the plugin which currently has 2 million active installations). Download and activate it.
* The process of creating the custom post type `profile` and the custom text fields are a bit tedious so I've conveniently prepared the JSON file for importing. You can dowwload the ACF JSON file at [this repo](https://github.com/thongtr-dev/it-consultis-test-acf-json) then import it using the Export and Import tools of ACF.
* After finish importing the JSON file, you should see a new menu item on the left admin menu called `Profiles` with a pin icon. This is where you will manage profiles for displaying on the profile slider near the footer section on About Us page. It makes sense to manage the profiles dynamically via database rather than hard coding it to the page template file. The profile is a perfect example for custom post type.
* The process of creating profiles for testing the slider on the About Us page is also a tedious process, if you're not familiar with the WordPress block editor, please contact me for help or consult with someone from your team who knows WordPress well. If possible, please take a look at the `template-parts/slide-profile.php` to figure out what information is needed to put into each profile slide.
* After done creating the profiles, go back to `localhost:8000/about-us/`, you should now see the profile slider work as expected.

## To play around with the code:
* Switch to the development branch by running `git checkout development` in your terminal.
* Navigate to the root theme folder by running the command `cd wp-content/themes/it-consultis`.
* Run `npm install` to install dev dependencies.
* Run `npm run css:dev` to start tracking CSS changes with Tailwind classes, at the same time, run `npm run start` for compiling.
* For bundling production files, run `npm run css:build && npm run build`.
