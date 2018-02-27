[![uikit banner](http://emagtechlabs.github.io/emag-apps-ui-kit/presentation/css/images/eMAG_Apps_UI_KIT_facebook.png)](http://emagtechlabs.github.io/emag-apps-ui-kit/)
# eMAG Apps UI KIT

We've launched eMAG Apps UI KIT, a collection of visual elements and guidelines for admin applications.  
The purpose of this collection is to help you build amazing software easier and faster.  

## Summary
1. [Summary][summary_link]
2. [Overview][overview_link]
  1. [Based on Bootstrap 3.3.5][based_on_bootstrap_link]
  2. [Working with Grunt.js][working_with_gruntjs_link]
  3. [Working with eMAG Apps UI KIT's folder structure][working_with_uikit_folder_structure_link]
  4. [Precompiled files (dist)][precompiled_files_dist_link]
  5. [eMAG Apps UI KIT source code (data)][uikit_source_code_data_link]
3. [License][license_link]
4. [Getting started][getting_started_link]

## Overview
<sup>[[Back to summary][summary_link]]</sup>  
**A short description about what's it like to work with eMAG Apps UI KIT:**
### Based on Bootstrap 3.3.5.  
<sup>[[Back to summary][summary_link]]</sup>  
Our open source UI KIT is based on the Bootstrap architecture. If you're not familiarized with it, check-out their stuff from getbootstrap.com Aside from the elements provided by Bootstrap, it comes with its own set of unique components, styling and useful plugins that you can use in your project.  
**Features:**  
1. Keeping it light with an average page weight of 500Kb  
2. W3C Compliant  
3. WCAG 2.0 Compliant  
4. Average page-load time of 1s  
### Working with Grunt.js  
<sup>[[Back to summary][summary_link]]</sup>  
**Installing Grunt:**  
To install Grunt, you must first download and install [node.js][nodejs_download] (which includes npm). Believe it or not, npm stands for node packaged modules and is a way to manage development dependencies through node.js.  
Once you've installed node.js, open up the command line in the root directory.  
Install grunt-cli globally by running ``npm install -g grunt-cli``.  
Afterwards run ``npm install`` for npm to look at the **package.json** file and automatically install the necessary local dependencies listed there.  
When completed, you'll be able to run the various Grunt commands provided from the command line.  

**Available Grunt commands:**
```
grunt styles            - CSS distribution task
grunt scripts           - JS distribution task
grunt plugin_styles     - Generate plugin styles
grunt plugin_scripts    - Generate plugin scripts
grunt default           - Generate main styles and scripts
```

### Working with eMAG Apps UI KIT's folder structure:  
<sup>[[Back to summary][summary_link]]</sup>  
Once downloaded, unzip the compressed folder to find the three main folders:
```
uikit/  
|  
├── data/  
│   ├── scripts/  
|   |   ├── base/  
|   |   |   └── custom/  
|   |   └── lib/  
│   ├── styles/  
|   |   ├── base/  
|   |   |   └── custom/  
|   |   └── lib/  
|   └── plugins/  
|  
├── dist/  
│   ├── css/  
|   |   ├── flags/  
|   |   ├── fonts/  
|   |   ├── icons/  
|   |   ├── img/  
|   |   └── lib/  
│   ├── js/  
|   |   └── lib/  
|   └── plugins/  
|  
└── examples/  
    ├── modules/  
    └── glyphicons-halflings-regular.woff2  
```

### Precompiled files (dist)  
<sup>[[Back to summary][summary_link]]</sup>  
- css - Main style CSS files.
    - flags - Countries flags as SVG file on 1:1 and 4:3 ratio.
    - fonts - Fonts files used in eMAG Apps UI KIT.
    - icons - Icons used in eMAG Apps UI KIT (created by eMag and from other libraries).
    - img - Images used in demo pages.
    - lib - Styles required by libraries used in eMAG Apps UI KIT.
- js - Main JS script files.
    - lib - Libraries' JS files.
- plugins - Plugins used in eMAG Apps UI KIT (CSS and JS files).

### eMAG Apps UI KIT source code (data)  
<sup>[[Back to summary][summary_link]]</sup>  
- scripts - JS files.
    - base - Main JS files.
        - custom - Custom wrappers over certain plugins.
    - lib - Libraries' JS files.
- styles - LESS files.
    - base - Main style LESS files
        - custom - Custom wrappers' LESS files.
    - lib - Libraries' LESS files.
- plugins - Plugins used in eMAG Apps UI KIT (LESS and JS files).

## License  
<sup>[[Back to summary][summary_link]]</sup>  
eMAG Apps UI KIT is released under the [MIT license][uikit_license], this means:
- **You can**
    - **Comercial Use**  
        You may use the work commercially.
    - **Modify**  
        You may make changes to the work.
    - **Distribute**  
        You may distribute the compiled code and/or source.
    - **Sublicense**  
        You may incorporate the work into something that has a more restrictive license.
    - **Private Use**  
        You may use the work for private use.
- **You cannot**
    - **Hold Liable**  
        The work is provided "as is". You may not hold the author liable.
- **You must**
    - **Include Copyright**  
        You must include the copyright notice in all copies or substantial uses of the work.
    - **Include License**  
        You must include the license notice in all copies or substantial uses of the work.

The full eMAG Apps UI KIT license can be found in [project repository][uikit_license].

## Getting started
<sup>[[Back to summary][summary_link]]</sup>  
**There are a couple of ways to install eMAG Apps UI KIT:**  
The easiest way to install is to add the following css line in the head of your webpage:  
  ```HTML
<link rel="stylesheet" type="text/css" href="examplepath/to/main_style.min.css">
  ```
  And the following javascript files before the end ``</body>`` tag:
  ```HTML
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=\"../dist/js/lib/jquery-1.11.3.min.js\">"+"<"+"/script>")</script>
<script src="../dist/js/main_script.min.js"></script>
  ```  
You can [download the latest release][uikit_github] from GitHub.  
You can also clone clone the [Git repository][uikit_github] by running the following command:  
```
[sudo] git clone https://github.com/eMAGTechLabs/emag-apps-ui-kit.git
```

[uikit_github]: https://github.com/eMAGTechLabs/emag-apps-ui-kit
[uikit_license]: https://github.com/eMAGTechLabs/emag-apps-ui-kit/blob/master/LICENSE
[bootstrap_getstarted]: http://getbootstrap.com/getting-started/
[nodejs_download]: https://nodejs.org/en/

[summary_link]: #summary
[getting_started_link]: #getting-started
[overview_link]: #overview
[based_on_bootstrap_link]: #based-on-bootstrap-335
[working_with_gruntjs_link]: #working-with-gruntjs
[working_with_uikit_folder_structure_link]: #working-with-emag-apps-ui-kits-folder-structure
[precompiled_files_dist_link]: #precompiled-files-dist
[uikit_source_code_data_link]: #emag-apps-ui-kit-source-code-data
[license_link]: #license
