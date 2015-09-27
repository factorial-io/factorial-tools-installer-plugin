# factorial-tools-installer-plugin
Composer plugin to install factorial tools into correct folder. 

##Usage
Set the type to `factorial-tools` inside your `composer.json`and the installer will copy the project into the _tools-folder.


## Example
```
{
    "name": "factorial-io/drupal-docker",
    "description": "a dockerfile and helper-scripts to run a drupal installation in a docker container",
    "type": "factorial-tools",
    "license": "MIT",
    "require": {
        "factorial-io/factorial-tools-installer-plugin": "1.*"
    }
}
```

