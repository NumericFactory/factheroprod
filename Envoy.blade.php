* -A in SSH enables agent forwarding.
* -p 2122 is not needed if you use the default port of 22.
* Replace SSH_USER and example.com with your own values.
* Example run: $ envoy run deploy_demo
* --no-scripts because Laravel composer.json's post-install-cmd includes optimize, which is already done by php artisan dump-autoload
 
@servers(['local' => '127.0.0.1', 'prod' => '-A -p 2122 -l user example.com'])
@setup
    $now = new DateTime();
    $environment = isset($env) ? $env : "local";
@endsetup

@task('deploy', ['on' => ['local']])
	cd factheromarketlaravel
    git status
@endtask
