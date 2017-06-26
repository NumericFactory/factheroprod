* -A in SSH enables agent forwarding.
* -p 2122 is not needed if you use the default port of 22.
* Replace SSH_USER and example.com with your own values.
* Example run: $ envoy run deploy_demo
* --no-scripts because Laravel composer.json's post-install-cmd includes optimize, which is already done * by php artisan dump-autoload
 
@servers(['localhost' => '127.0.0.1', 'web'=>'olhj_fred@olhj.ftp.infomaniak.com'])

{{-- @setup
$__container->servers([
    'a' => '127.0.0.1',
    'b' => '',
    'c' => '',
]);
@endsetup 
--}}

{{--
@story('deploy')
    git
    composer
@endstory

@task('git')
    git pull origin master
@endtask

@task('composer')
    composer install
@endtask
--}}

@task('deploy', ['on' => 'web'])
	cd web 
	cd factheromarketlaravel
	git remote -v
@endtask
