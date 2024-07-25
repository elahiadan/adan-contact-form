create a folder name adan
then run command "composer init" and setup all the configration related to the package
then create a service provider "FormServiceProvider.php"
then create a folder src, this is main folder
then create a route file "web.php" in a src/route folder
then create a controller file "FormController.php" in a src/Http/Controllers folder
then create a model file "Form.php" in a src/Models folder
then create a view file "form.blade.php" in a src/views folder
then create any othor file in the same way


<!-- To test -->
add this script inside main composer.json
    "autoload-dev": {
        "psr-4": {
            "Adan\\Contact\\": "adan/src/"
        }
    },
run composer dump-autoload
then register service provide "FormServiceProvider.php" in config/app.php