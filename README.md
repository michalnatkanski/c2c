# Mad Hatters Project

![Project Preview](link_to_preview_image)

Mad Hatters is a project based on the Figma design available at: [Figma Design](https://www.figma.com/file/gYMJZNuvr33EM6qWcqehTr/Zadanie-Rekrutacyjne---c2c?node-id=0%3A1&mode=dev).

## General Information

The project is built upon the "Twenty Twenty-One" WordPress theme.

### Custom Patterns

Custom patterns are located in:

-   PHP files: `inc/patterns/`
-   Styles: `assets/sass/08-patterns/`

Custom patterns included:

1. Main Banner
2. Info Boxes
3. Newsletter Form
4. Quote
5. Text with Image

### Plugins

The project uses the following WordPress plugins:

-   Gutenberg
-   Contact Form 7
-   SVG Support
-   Dynamic Posts - Custom Block

## Installation

To use this project, follow these steps:

1. Clone the repository with the main project content: `git clone https://github.com/michalnatkanski/c2c.git`
2. Check out the "main" branch which contains the entire WordPress project, including the `wp-content` directory.
3. To run the project with Docker, check out the "config-docker-files" branch. It contains the Docker configuration files, the `wp-config.php` file, and a necessary database for reproducing the project.
4. Activate neccesarry Plugins and the "Twenty Twenty-One" theme and customize the content and settings as needed.

## Usage

Customize the project to match your specific needs and use it as a foundation for your website development.

## Credits

-   Figma Design: [Figma Design](https://www.figma.com/file/gYMJZNuvr33EM6qWcqehTr/Zadanie-Rekrutacyjne---c2c?node-id=0%3A1&mode=dev)

## Custom Block - Dynamic Posts Configuration

The custom block "Dynamic Posts" is initially configured to display the title of the post, the featured image, and an excerpt by default. You have the flexibility to further customize the block to include additional content or fields as needed using the plugin's editor.

To configure the number of posts or customize the block further, please edit the plugin as needed to suit your specific requirements.

Additionally, you can define the number of displayed posts in the Inspector Controls within the editor.
