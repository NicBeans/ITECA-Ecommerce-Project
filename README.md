# Sebastian Kornel Art Website Manual

## Introduction

### Background
This manual aims to provide comprehensive guidance to users and developers interested in engaging with Sebastian Kornel Art. This platform serves as an ideal showcase for Sebastian Kornel's exquisite artworks, ensuring convenient accessibility. Moreover, users can leverage this website to gain deeper insights into the artist's creative journey.

### About this website
During the development of this website, an iterative approach was adopted to ensure customer satisfaction while granting developers the flexibility to creatively address any issues that arose. The project was constructed using PHP, without relying on external frameworks. To facilitate the development of multiple front-end interfaces and streamline future updates, the front-ends were designed as interchangeable "views," allowing for effortless swapping as needed.

- PHP was the primary language used during this project.
- Composer was used to handle most of the necessary dependencies that were used during development and deployment.
- The Symfony component played a vital role in setting up routing for the pages.
- MySQL databases were used for data persistence.
- HTML, CSS, and JavaScript were used to create intuitive front-end designs.
- Digital Ocean's infrastructure is being used to host the live environment, as well as the database and product images.

## Basics: Accessing your website and Admin

### Accessing the website
The website can be accessed at the following link:
[Sebastian Kornel Art](https://sebastiankornelart.com)

## Products: Adding, removing, and updating products

### Adding and Removing Products
Adding and removing products is a small process. Firstly, navigate to the Digital Ocean's control panel for your project, and then to that project's "space". Here you can choose an intuitive name for your product image and upload it to your "space". 

After that, simply navigate to where you installed the project, head over to the "Views" folder, wherein you will find the "gallery.php" view. Within that file, you will find all the product listings, simply replace the product you want replaced (if at all, the website supports just adding or removing listings as well in the same fashion. There does not need to be a set amount of listings) in a similar fashion as to what can be found there, and the listing will update as soon as you push that code to the Git repository. The Project will rebuild and redeploy automatically, so no additional input is needed to finalize the changes.

### Updating Products
Updating products happens in a similar fashion to adding or removing products does. Simply set up the project, navigate to the "gallery.php" file in the "Views" folder, and update your listings there.

## Changing menus
There is only one item on the website that could qualify as a menu, and this would be the navbar that is displayed on all screens at the top. To change this component, you would need to go edit the "navbar.php" file in the "src/Views/Partials/" directory in your project. As a reminder, this menu is usually used for page navigation, as such, editing it will likely lead you to needing to add/change routes on the website. Refer to the "Updating a page on your site" section for more information.

## Shipping Options
Shipping options are available on request on a case-by-case basis.

## The front page: adding and changing images
This will happen in a manner very similar to what is needed to change product listings. Simply head over to the "space" you created for this project on Digital Ocean's, upload your new image, head over to the "home.php" file in the "src/Views/" directory, and make the necessary adaptations to the code in that file. Examples of how images are displayed can be found in that file.

## Changing the logo


The logo is uploaded as an SVG file to the same Digital Ocean's "space" where the other images are hosted. This allows us to use the same method to change it. Simply head over to the "space" you created for this project on Digital Ocean's, upload your new image, head over to the "home.php" file in the "src/Views/" directory, and make the necessary adaptations to the code in that file. The logo image can be found in the "logo" class. Examples of how images are displayed can be found in that file.

## Orders
Orders are placed via direct communication with the artist. Thus, if you wish to order a product from the site, please contact him either directly via email or through the website.

## Updating a page on your site
Updating and adding pages are simplified since we are making use of views for all pages. This means you could simply design the component you want displayed in HTML, style it with CSS and JavaScript, save it as a view, and simply load that view onto whichever currently existing page is on the site, by adding it to the "PageController.php" file. Adding a new page is a little more strenuous, since routes need to be created. However, this is also not a confusing process, just a necessary one. To create a route for a new page, a new public function needs to be declared for it in the "PageController.php" file. This function will determine which views are loaded and in what order. A route needs to be defined for it in the "web.php" file, examples can be found in the file. The new page should then be added to the navbar, with the appropriate route being called when engaged.

## Collecting money from the store
Due to a variety of security and liability concerns, the artist has chosen to opt for a direct EFT system, where a client can contact him directly, initiate and finalize a sale, and then directly pay the money with an agreed-upon reference number. This removes most of the worries connected to handling finances online.

## Checking Web Traffic and Statistics
Since both the administrator and the developer have full access to the hosting platform (Digital Ocean's), metrics can simply be viewed on their dashboard. Simply sign into the account, navigate to the dashboard for the appropriate project, and view the metrics on the main dashboard.

## Appendix
For local development, a few prerequisite steps need to be taken.
- Install Composer
- Clone this repository
- Set up a MySQL server and configure an .env file in the project root directory

After doing so, clone this repository, and run the following commands:
```bash
Composer install
Composer run-script dev
```
After running this successful installation, you can run the following command to start up the development environment and connect to the server:
```bash
php -S localhost:8000 -t public
```
Your terminal should indicate where the hosted server is located.
