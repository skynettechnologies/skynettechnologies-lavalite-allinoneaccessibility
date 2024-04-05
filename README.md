# All in One Accessibility: Lavalite Extension

[All in One Accessibility](https://www.skynettechnologies.com/all-in-one-accessibility) extension improves Lavalite website ADA compliance and browser experience for ADA, WCAG 2.1 & 2.2, Section 508, Australian DDA, European EAA EN 301 549, UK Equality Act (EA), Israeli Standard 5568, California Unruh, Ontario AODA, Canada ACA, German BITV, France RGAA, Brazilian Inclusion Law (LBI 13.146/2015), Spain UNE 139803:2012, JIS X 8341 (Japan), Italian Stanca Act and Switzerland DDA Standards.

It uses the accessibility interface which handles UI and design related adjustments. All in One Accessibility app enhances your Lavalite website accessibility to people with hearing or vision impairments, motor impaired, color blind, dyslexia, cognitive & learning impairments, seizure and epileptic, and ADHD problems.

## Features
#### Skip Links
- Skip to Menu
- Skip to Footer
- Skip to Navigation
- Open Accessibility Toolbar

#### Content Adjustments
- Content Scaling
- Readable Fonts
- Highlight Title
- Highlight Links
- Text Magnifier
- Adjust Font Sizing
- Adjust Line Height
- Adjust Letter Spacing
- Align Center
- Align Left
- Align Right

#### Color and Contrast Adjustments
- High Contrast

#### Orientation Adjustments
- Hide Images (Text Only)
- Miscellaneous
- Accessibility Statement
- Dynamic Application Color
- Choose Application Trigger Button Position
- Choose Application Position
- Multi Language

#### Supports 140 languages
- English
- Italian
- French
- German
- Russian
- Spanish
- Finnish
- Portuguese
- Arab
- Polish
- Hungarian
- Slovak
- Japanese
- Turkish
- Greek
- Latin
- Hebrew
- Bulgarian
- Catalan
- Chinese
- Czech
- Danish
- Dutch
- Hindi
- Indonesian
- Korean
- Malay
- Norwegian
- Romanian
- Slovenian
- Swedish
- Thai
- Ukrainian
- Vietnamese
- Bengali
- Lithuanian
- Sinhala
- Amharic
- Hmong
- Burmese
- Latvian
- Estonian
- Serbian
- Portuguese (Brazil)
- Chinese Traditional
- Croatian
- Georgian
- Hawaiian
- Welsh
- Cebuano
- Samoan
- Haitian Creole
- Faroese
- Montenegrin
- Australian
- Azeri
- Basque
- Canada
- Filipino
- Galician
- Norwegian
- Persian
- Punjabi
- Spanish (Mexico)
- United Kingdom


## Installation

Run the below command form the root folder of lavalite.

```
    composer require "skynetechnologies/lavalite-allinoneaccessibility"
```

## Migration and seeds

```
    php artisan migrate
```
## 
## Publishing

* Configuration
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="config"
```
* Language
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="lang"
```
* Views
```
    php artisan vendor:publish --provider="Skynettechnologies\Allinoneaccessibility\Providers\AllinoneaccessibilityServiceProvider" --tag="view"
```
## Enable the plugin

```
~ Add below script in your theme footer file
 <script id="aioa-adawidget" src="https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?aioa_reg_req=true&colorcode=&token=&position=bottom_right"></script>
```

## Screenshots

![App Screenshot](https://www.skynettechnologies.com/sites/default/files/screenshot3.png)

![App Screenshot](https://www.skynettechnologies.com/sites/default/files/screenshot1.png)

![App Screenshot](https://www.skynettechnologies.com/sites/default/files/screenshot2.png)

![App Screenshot](https://www.skynettechnologies.com/sites/default/files/screenshot4.png)

## Video

[![All in One Accessibility](https://img.youtube.com/vi/czwC0PKIqkc/0.jpg)](https://www.youtube.com/watch?v=czwC0PKIqkc)

## Acknowledgements

 - [Lavalite All in One Accessibility](https://www.skynettechnologies.com/lavalite-ada-compliant-widget)
 - [Lavalite All in One Accessibility Extension installation steps blog](https://www.skynettechnologies.com/blog/lavalite-web-accessibility-widget-installation)

## Documentation

[All in One Accessibility - User Guide](https://www.dropbox.com/s/de41n4xm9zjwxix/All-in-One-Accessibility-PRO-App-Usage-and-Functionality.pdf?dl=0)

## Support
For any kind of queries/support please Email us at [Skynet Technologies Support](mailto:hello@skynettechnologies.com)

