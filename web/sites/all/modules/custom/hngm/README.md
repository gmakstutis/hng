#HNGM Module

This module uses the Google Books API to retrieve information about a book and store this data in the fields of a Drupal content type. The following data is retrieved from the API

- Title of book
- Description of book
- Thumbnail of cover (if available)
- Number of pages
- Author(s)
- Publisher
- Date of publication

## Module Dependencies

The following modules must be installed in Drupal, to allow this module to function:

- Token (https://www.drupal.org/project/token)
- Auto Entity Label (https://www.drupal.org/project/auto_entitylabel)
- Entity (https://www.drupal.org/project/entity)

## Module Recommendations

The following modules are recommended to be installed to assist with integrating the output of the HNGM Module:

- Views (https://www.drupal.org/project/views)
- Features (https://www.drupal.org/project/features)
- Display Suite (https://www.drupal.org/project/ds)
- Chaos Tools (https://www.drupal.org/project/ctools)

## _Reading List Item_ Content-Type

To make use of HNGM you must have a Drupal content-type setup, with the following fields:

- Name: Book Title [machine name: field_book_title]
    - Type: Text
    - Number of Values: 1

- Name: Description [machine name: field_description]
    - Type: Long Text
    - Number of Values: 1

- Name: ISBN [machine name: field_isbn]
    - Type: Text
    - Number of Values: 1

- Name: Image URL [machine name: field_image_url]
    - Type: Text
    - Number of Values: 1

- Name: Pages [machine name: field_pages]
    - Type: Text
    - Number of Values: 1

- Name: Publisher [machine name: field_publisher]
    - Type: Text
    - Number of Values: 1

- Name: Published [machine name: field_published]
    - Type: Text
    - Number of Values: 1

- Name: Authors [machine name: field_authors]
    - Type: Text
    - Number of Values: _Unlimited_
    
The content-type **MUST** be setup to have the title automatically generated, by referring to the Book Title field. This requires the setup of the Auto Entity Label module (see above), and the use of the relevant _token_ (see Token Module above).

## Google API Key

To be able to make queries against the Google Books API the module requires a valid API Key from Google. This can be created by visiting the Google API Console (https://console.cloud.google.com/). There is a need to have a valid Google Account, but it is free to register. To find our more about how to setup an API Key, visit: https://developers.google.com/books/docs/v1/using#APIKey.

Once you have a valid API Key and have setup the necessary credentials, you must ensure that you set your API Key to have IP Address _Key Restrictions_. This will ensure that only your web application is able to query using your API Key and improve security. The HNGM Module will not work correctly if your API Key is not setup correctly.

## Predefined Feature

The content-type has been predefined as a Feature (see the Features modules, https://www.drupal.org/project/features) and can be installed via the Features module. This will create the necessary content-type and associated fields. It will also install a simple View to allow you to see how listings can be generated through views. The Feature can be found in the folder _Feature_ within this module folder.

To use this Feature, decompress the file () and move the resulting directory to your /sites/all/modules/custom folder. Then, you may install, through the Drupal Admin interface, as any other module.

## Template

We have setup a simple template override for the content-type. This provides a basic layout (using the Bootstrap grid) to display node content. This template file needs to placed in your relevant Theme folder. The template can be found in the _Template_ folder in this module folder. There is also a CSS file (styles.css), the contents of which can be copied into your main CSS file, to provide basic styling for the template.