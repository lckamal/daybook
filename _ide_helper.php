<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
<<<<<<< HEAD
exit('Only to be used as an helper for your IDE');

class App extends Illuminate\Support\Facades\App{
=======
namespace {
	die('Only to be used as an helper for your IDE');
}

namespace  {
 class App extends Illuminate\Support\Facades\App{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new Illuminate application instance.
	 *
	 * @param \Illuminate\Http\Request  $request
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($request = null){
		 Illuminate\Foundation\Application::__construct($request);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request = null){
		 \Illuminate\Foundation\Application::__construct($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the application request for the console environment.
	 *
	 * @return void
	 * @static 
	 */
	 public static function setRequestForConsoleEnvironment(){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
=======
		 \Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Redirect the request if it has a trailing slash.
	 *
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|null
	 * @static 
	 */
	 public static function redirectIfTrailingSlash(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::redirectIfTrailingSlash();
=======
		return \Illuminate\Foundation\Application::redirectIfTrailingSlash();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Bind the installation paths to the application.
	 *
	 * @param array  $paths
	 * @return void
	 * @static 
	 */
	 public static function bindInstallPaths($paths){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::bindInstallPaths($paths);
=======
		 \Illuminate\Foundation\Application::bindInstallPaths($paths);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the application bootstrap file.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getBootstrapFile(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::getBootstrapFile();
=======
		return \Illuminate\Foundation\Application::getBootstrapFile();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Start the exception handling for the request.
	 *
	 * @return void
	 * @static 
	 */
	 public static function startExceptionHandling(){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::startExceptionHandling();
=======
		 \Illuminate\Foundation\Application::startExceptionHandling();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current application environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function environment(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::environment();
=======
		return \Illuminate\Foundation\Application::environment();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Detect the application's current environment.
	 *
	 * @param array|string  $environments
	 * @return string
	 * @static 
	 */
	 public static function detectEnvironment($environments){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::detectEnvironment($environments);
=======
		return \Illuminate\Foundation\Application::detectEnvironment($environments);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if we are running in the console.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningInConsole(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::runningInConsole();
=======
		return \Illuminate\Foundation\Application::runningInConsole();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if we are running unit tests.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function runningUnitTests(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::runningUnitTests();
=======
		return \Illuminate\Foundation\Application::runningUnitTests();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a service provider with the application.
	 *
	 * @param \Illuminate\Support\ServiceProvider|string  $provider
	 * @param array  $options
	 * @return void
	 * @static 
	 */
	 public static function register($provider, $options = array()){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::register($provider, $options);
=======
		 \Illuminate\Foundation\Application::register($provider, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function loadDeferredProviders(){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::loadDeferredProviders();
=======
		 \Illuminate\Foundation\Application::loadDeferredProviders();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Resolve the given type from the container.
	 * 
	 * (Overriding Container::make)
	 *
	 * @param string  $abstract
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function make($abstract, $parameters = array()){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::make($abstract, $parameters);
=======
		return \Illuminate\Foundation\Application::make($abstract, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "before" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::before($callback);
=======
		 \Illuminate\Foundation\Application::before($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an "after" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::after($callback);
=======
		 \Illuminate\Foundation\Application::after($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "close" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::close($callback);
=======
		 \Illuminate\Foundation\Application::close($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "finish" application filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::finish($callback);
=======
		 \Illuminate\Foundation\Application::finish($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "shutdown" callback.
	 *
	 * @param callable  $callback
	 * @return void
	 * @static 
	 */
	 public static function shutdown($callback = null){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::shutdown($callback);
=======
		 \Illuminate\Foundation\Application::shutdown($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Handles the given request and delivers the response.
	 *
	 * @return void
	 * @static 
	 */
	 public static function run(){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::run();
=======
		 \Illuminate\Foundation\Application::run();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Handle the given request and get the response.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::dispatch($request);
=======
		return \Illuminate\Foundation\Application::dispatch($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Handle the given request and get the response.
	 * 
	 * Provides compatibility with BrowserKit functional testing.
	 *
	 * @implements HttpKernelInterface::handle
	 * @param \Illuminate\Http\Request  $request
	 * @param int   $type
	 * @param bool  $catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function handle($request, $type = 1, $catch = true){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::handle($request, $type, $catch);
=======
		return \Illuminate\Foundation\Application::handle($request, $type, $catch);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 * @static 
	 */
	 public static function boot(){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::boot();
=======
		 \Illuminate\Foundation\Application::boot();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a new boot listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booting($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::booting($callback);
=======
		 \Illuminate\Foundation\Application::booting($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a new "booted" listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function booted($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::booted($callback);
=======
		 \Illuminate\Foundation\Application::booted($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Prepare the request by injecting any services.
	 *
	 * @param \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function prepareRequest($request){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::prepareRequest($request);
=======
		return \Illuminate\Foundation\Application::prepareRequest($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepareResponse($value){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::prepareResponse($value);
=======
		return \Illuminate\Foundation\Application::prepareResponse($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isDownForMaintenance(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::isDownForMaintenance();
=======
		return \Illuminate\Foundation\Application::isDownForMaintenance();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a maintenance mode event listener.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function down($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::down($callback);
=======
		 \Illuminate\Foundation\Application::down($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Throw an HttpException with the given data.
	 *
	 * @param int     $code
	 * @param string  $message
	 * @param array   $headers
	 * @return void
	 * @static 
	 */
	 public static function abort($code, $message = '', $headers = array()){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::abort($code, $message, $headers);
=======
		 \Illuminate\Foundation\Application::abort($code, $message, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a 404 error handler.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function missing($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::missing($callback);
=======
		 \Illuminate\Foundation\Application::missing($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an application error handler.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function error($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::error($callback);
=======
		 \Illuminate\Foundation\Application::error($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an error handler at the bottom of the stack.
	 *
	 * @param \Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function pushError($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::pushError($callback);
=======
		 \Illuminate\Foundation\Application::pushError($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an error handler for fatal errors.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function fatal($callback){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::fatal($callback);
=======
		 \Illuminate\Foundation\Application::fatal($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the configuration loader instance.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getConfigLoader(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::getConfigLoader();
=======
		return \Illuminate\Foundation\Application::getConfigLoader();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the service provider repository instance.
	 *
	 * @return \Illuminate\Foundation\ProviderRepository
	 * @static 
	 */
	 public static function getProviderRepository(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::getProviderRepository();
=======
		return \Illuminate\Foundation\Application::getProviderRepository();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current application locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::setLocale($locale);
=======
		 \Illuminate\Foundation\Application::setLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the service providers that have been loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getLoadedProviders(){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::getLoadedProviders();
=======
		return \Illuminate\Foundation\Application::getLoadedProviders();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the application's deferred services.
	 *
	 * @param array  $services
	 * @return void
	 * @static 
	 */
	 public static function setDeferredServices($services){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::setDeferredServices($services);
	 }

	/**
	 * Get or set the request class for the application.
	 *
	 * @param string  $class
	 * @return string
	 * @static 
	 */
	 public static function requestClass($class = null){
		return Illuminate\Foundation\Application::requestClass($class);
	 }

	/**
	 * Call a method on the default request class.
	 *
	 * @param string  $method
	 * @param array  $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function onRequest($method, $parameters = array()){
		return Illuminate\Foundation\Application::onRequest($method, $parameters);
=======
		 \Illuminate\Foundation\Application::setDeferredServices($services);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically access application services.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function __get($key){
<<<<<<< HEAD
		return Illuminate\Foundation\Application::__get($key);
=======
		return \Illuminate\Foundation\Application::__get($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically set application services.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function __set($key, $value){
<<<<<<< HEAD
		 Illuminate\Foundation\Application::__set($key, $value);
=======
		 \Illuminate\Foundation\Application::__set($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @param string  $abstract
	 * @return bool
	 * @static 
	 */
	 public static function bound($abstract){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::bound($abstract);
=======
		return \Illuminate\Container\Container::bound($abstract);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a binding with the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return void
	 * @static 
	 */
	 public static function bind($abstract, $concrete = null, $shared = false){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
=======
		 \Illuminate\Container\Container::bind($abstract, $concrete, $shared);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @param bool                 $shared
	 * @return bool
	 * @static 
	 */
	 public static function bindIf($abstract, $concrete = null, $shared = false){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
=======
		return \Illuminate\Container\Container::bindIf($abstract, $concrete, $shared);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a shared binding in the container.
	 *
	 * @param string               $abstract
	 * @param Closure|string|null  $concrete
	 * @return void
	 * @static 
	 */
	 public static function singleton($abstract, $concrete = null){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::singleton($abstract, $concrete);
=======
		 \Illuminate\Container\Container::singleton($abstract, $concrete);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Wrap a Closure such that it is shared.
	 *
	 * @param Closure  $closure
	 * @return Closure
	 * @static 
	 */
	 public static function share($closure){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::share($closure);
=======
		return \Illuminate\Container\Container::share($closure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @param string   $abstract
	 * @param Closure  $closure
	 * @return void
	 * @static 
	 */
	 public static function extend($abstract, $closure){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::extend($abstract, $closure);
=======
		 \Illuminate\Container\Container::extend($abstract, $closure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @param string  $abstract
	 * @param mixed   $instance
	 * @return void
	 * @static 
	 */
	 public static function instance($abstract, $instance){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::instance($abstract, $instance);
=======
		 \Illuminate\Container\Container::instance($abstract, $instance);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Alias a type to a shorter name.
	 *
	 * @param string  $abstract
	 * @param string  $alias
	 * @return void
	 * @static 
	 */
	 public static function alias($abstract, $alias){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::alias($abstract, $alias);
=======
		 \Illuminate\Container\Container::alias($abstract, $alias);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Instantiate a concrete instance of the given type.
	 *
	 * @param string  $concrete
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function build($concrete, $parameters = array()){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::build($concrete, $parameters);
=======
		return \Illuminate\Container\Container::build($concrete, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a new resolving callback.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function resolving($callback){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::resolving($callback);
=======
		 \Illuminate\Container\Container::resolving($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the container's bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getBindings(){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::getBindings();
=======
		return \Illuminate\Container\Container::getBindings();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a given offset exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::offsetExists($key);
=======
		return \Illuminate\Container\Container::offsetExists($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the value at a given offset.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		return Illuminate\Foundation\Application::offsetGet($key);
=======
		return \Illuminate\Container\Container::offsetGet($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the value at a given offset.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetSet($key, $value);
=======
		 \Illuminate\Container\Container::offsetSet($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Unset the value at a given offset.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
<<<<<<< HEAD
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetUnset($key);
	 }

}

class Artisan extends Illuminate\Support\Facades\Artisan{
=======
		 \Illuminate\Container\Container::offsetUnset($key);
	 }

 }
}

namespace  {
 class Artisan extends Illuminate\Support\Facades\Artisan{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Start a new Console application.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @return \Illuminate\Console\Application
	 * @static 
	 */
	 public static function start($app){
<<<<<<< HEAD
		return Illuminate\Console\Application::start($app);
=======
		return \Illuminate\Console\Application::start($app);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a command to the console.
	 *
	 * @param \Symfony\Component\Console\Command\Command  $command
	 * @return \Symfony\Component\Console\Command\Command
	 * @static 
	 */
	 public static function add($command){
<<<<<<< HEAD
		return Illuminate\Console\Application::add($command);
=======
		return \Illuminate\Console\Application::add($command);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a command, resolving through the application.
	 *
	 * @param string  $command
	 * @return void
	 * @static 
	 */
	 public static function resolve($command){
<<<<<<< HEAD
		 Illuminate\Console\Application::resolve($command);
=======
		 \Illuminate\Console\Application::resolve($command);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Resolve an array of commands through the application.
	 *
	 * @param array|dynamic  $commands
	 * @return void
	 * @static 
	 */
	 public static function resolveCommands($commands){
<<<<<<< HEAD
		 Illuminate\Console\Application::resolveCommands($commands);
=======
		 \Illuminate\Console\Application::resolveCommands($commands);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Render the given exception.
	 *
	 * @param Exception  $e
	 * @param \Symfony\Component\Console\Output\OutputInterface  $output
	 * @return void
	 * @static 
	 */
	 public static function renderException($e, $output){
<<<<<<< HEAD
		 Illuminate\Console\Application::renderException($e, $output);
=======
		 \Illuminate\Console\Application::renderException($e, $output);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the exception handler instance.
	 *
	 * @param \Illuminate\Exception\Handler  $handler
	 * @return void
	 * @static 
	 */
	 public static function setExceptionHandler($handler){
<<<<<<< HEAD
		 Illuminate\Console\Application::setExceptionHandler($handler);
=======
		 \Illuminate\Console\Application::setExceptionHandler($handler);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Laravel application instance.
	 *
	 * @param \Illuminate\Foundation\Application  $laravel
	 * @return void
	 * @static 
	 */
	 public static function setLaravel($laravel){
<<<<<<< HEAD
		 Illuminate\Console\Application::setLaravel($laravel);
=======
		 \Illuminate\Console\Application::setLaravel($laravel);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Constructor.
	 *
	 * @param string $name    The name of the application
	 * @param string $version The version of the application
	 * @api 
	 * @static 
	 */
	 public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::__construct($name, $version);
=======
		 \Symfony\Component\Console\Application::__construct($name, $version);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($dispatcher){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDispatcher($dispatcher);
=======
		 \Symfony\Component\Console\Application::setDispatcher($dispatcher);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @throws \Exception When doRun returns Exception
	 * @api 
	 * @static 
	 */
	 public static function run($input = null, $output = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::run($input, $output);
=======
		return \Symfony\Component\Console\Application::run($input, $output);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Runs the current application.
	 *
	 * @param InputInterface  $input  An Input instance
	 * @param OutputInterface $output An Output instance
	 * @return integer 0 if everything went fine, or an error code
	 * @static 
	 */
	 public static function doRun($input, $output){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::doRun($input, $output);
=======
		return \Symfony\Component\Console\Application::doRun($input, $output);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set a helper set to be used with the command.
	 *
	 * @param HelperSet $helperSet The helper set
	 * @api 
	 * @static 
	 */
	 public static function setHelperSet($helperSet){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setHelperSet($helperSet);
=======
		 \Symfony\Component\Console\Application::setHelperSet($helperSet);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the helper set associated with the command.
	 *
	 * @return HelperSet The HelperSet instance associated with this command
	 * @api 
	 * @static 
	 */
	 public static function getHelperSet(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getHelperSet();
=======
		return \Symfony\Component\Console\Application::getHelperSet();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set an input definition set to be used with this application
	 *
	 * @param InputDefinition $definition The input definition
	 * @api 
	 * @static 
	 */
	 public static function setDefinition($definition){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDefinition($definition);
=======
		 \Symfony\Component\Console\Application::setDefinition($definition);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the InputDefinition related to this Application.
	 *
	 * @return InputDefinition The InputDefinition instance
	 * @static 
	 */
	 public static function getDefinition(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getDefinition();
=======
		return \Symfony\Component\Console\Application::getDefinition();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the help message.
	 *
	 * @return string A help message.
	 * @static 
	 */
	 public static function getHelp(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getHelp();
=======
		return \Symfony\Component\Console\Application::getHelp();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets whether to catch exceptions or not during commands execution.
	 *
	 * @param Boolean $boolean Whether to catch exceptions or not during commands execution
	 * @api 
	 * @static 
	 */
	 public static function setCatchExceptions($boolean){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setCatchExceptions($boolean);
=======
		 \Symfony\Component\Console\Application::setCatchExceptions($boolean);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets whether to automatically exit after a command execution or not.
	 *
	 * @param Boolean $boolean Whether to automatically exit after a command execution or not
	 * @api 
	 * @static 
	 */
	 public static function setAutoExit($boolean){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setAutoExit($boolean);
=======
		 \Symfony\Component\Console\Application::setAutoExit($boolean);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the name of the application.
	 *
	 * @return string The application name
	 * @api 
	 * @static 
	 */
	 public static function getName(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getName();
=======
		return \Symfony\Component\Console\Application::getName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the application name.
	 *
	 * @param string $name The application name
	 * @api 
	 * @static 
	 */
	 public static function setName($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setName($name);
=======
		 \Symfony\Component\Console\Application::setName($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the application version.
	 *
	 * @return string The application version
	 * @api 
	 * @static 
	 */
	 public static function getVersion(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getVersion();
=======
		return \Symfony\Component\Console\Application::getVersion();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the application version.
	 *
	 * @param string $version The application version
	 * @api 
	 * @static 
	 */
	 public static function setVersion($version){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setVersion($version);
=======
		 \Symfony\Component\Console\Application::setVersion($version);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the long version of the application.
	 *
	 * @return string The long application version
	 * @api 
	 * @static 
	 */
	 public static function getLongVersion(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getLongVersion();
=======
		return \Symfony\Component\Console\Application::getLongVersion();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Registers a new command.
	 *
	 * @param string $name The command name
	 * @return Command The newly created command
	 * @api 
	 * @static 
	 */
	 public static function register($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::register($name);
=======
		return \Symfony\Component\Console\Application::register($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Adds an array of command objects.
	 *
	 * @param Command[] $commands An array of commands
	 * @api 
	 * @static 
	 */
	 public static function addCommands($commands){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::addCommands($commands);
=======
		 \Symfony\Component\Console\Application::addCommands($commands);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns a registered command by name or alias.
	 *
	 * @param string $name The command name or alias
	 * @return Command A Command object
	 * @throws \InvalidArgumentException When command name given does not exist
	 * @api 
	 * @static 
	 */
	 public static function get($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::get($name);
=======
		return \Symfony\Component\Console\Application::get($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns true if the command exists, false otherwise.
	 *
	 * @param string $name The command name or alias
	 * @return Boolean true if the command exists, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function has($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::has($name);
=======
		return \Symfony\Component\Console\Application::has($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an array of all unique namespaces used by currently registered commands.
	 * 
	 * It does not returns the global namespace which always exists.
	 *
	 * @return array An array of namespaces
	 * @static 
	 */
	 public static function getNamespaces(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getNamespaces();
=======
		return \Symfony\Component\Console\Application::getNamespaces();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Finds a registered namespace by a name or an abbreviation.
	 *
	 * @param string $namespace A namespace or abbreviation to search for
	 * @return string A registered namespace
	 * @throws \InvalidArgumentException When namespace is incorrect or ambiguous
	 * @static 
	 */
	 public static function findNamespace($namespace){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::findNamespace($namespace);
=======
		return \Symfony\Component\Console\Application::findNamespace($namespace);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Finds a command by name or alias.
	 * 
	 * Contrary to get, this command tries to find the best
	 * match if you give it an abbreviation of a name or alias.
	 *
	 * @param string $name A command name or a command alias
	 * @return Command A Command instance
	 * @throws \InvalidArgumentException When command name is incorrect or ambiguous
	 * @api 
	 * @static 
	 */
	 public static function find($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::find($name);
=======
		return \Symfony\Component\Console\Application::find($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the commands (registered in the given namespace if provided).
	 * 
	 * The array keys are the full names and the values the command instances.
	 *
	 * @param string $namespace A namespace name
	 * @return Command[] An array of Command instances
	 * @api 
	 * @static 
	 */
	 public static function all($namespace = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::all($namespace);
=======
		return \Symfony\Component\Console\Application::all($namespace);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an array of possible abbreviations given a set of names.
	 *
	 * @param array $names An array of names
	 * @return array An array of abbreviations
	 * @static 
	 */
	 public static function getAbbreviations($names){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getAbbreviations($names);
=======
		return \Symfony\Component\Console\Application::getAbbreviations($names);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns a text representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param boolean $raw       Whether to return raw command list
	 * @return string A string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asText($namespace = null, $raw = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::asText($namespace, $raw);
=======
		return \Symfony\Component\Console\Application::asText($namespace, $raw);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an XML representation of the Application.
	 *
	 * @param string  $namespace An optional namespace name
	 * @param Boolean $asDom     Whether to return a DOM or an XML string
	 * @return string|\DOMDocument An XML string representing the Application
	 * @deprecated Deprecated since version 2.3, to be removed in 3.0.
	 * @static 
	 */
	 public static function asXml($namespace = null, $asDom = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::asXml($namespace, $asDom);
=======
		return \Symfony\Component\Console\Application::asXml($namespace, $asDom);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Tries to figure out the terminal dimensions based on the current environment
	 *
	 * @return array Array containing width and height
	 * @static 
	 */
	 public static function getTerminalDimensions(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::getTerminalDimensions();
=======
		return \Symfony\Component\Console\Application::getTerminalDimensions();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the namespace part of the command name.
	 * 
	 * This method is not part of public API and should not be used directly.
	 *
	 * @param string $name  The full name of the command
	 * @param string $limit The maximum number of parts of the namespace
	 * @return string The namespace of the command
	 * @static 
	 */
	 public static function extractNamespace($name, $limit = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\Console\Application
		return Illuminate\Console\Application::extractNamespace($name, $limit);
	 }

}

class Auth extends Illuminate\Support\Facades\Auth{
=======
		return \Symfony\Component\Console\Application::extractNamespace($name, $limit);
	 }

 }
}

namespace  {
 class Auth extends Illuminate\Support\Facades\Auth{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create an instance of the Eloquent driver.
	 *
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function createEloquentDriver(){
<<<<<<< HEAD
		return Illuminate\Auth\AuthManager::createEloquentDriver();
=======
		return \Illuminate\Auth\AuthManager::createEloquentDriver();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::__construct($app);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		 \Illuminate\Support\Manager::__construct($app);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::driver($driver);
=======
		return \Illuminate\Support\Manager::driver($driver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::extend($driver, $callback);
=======
		 \Illuminate\Support\Manager::extend($driver, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::getDrivers();
=======
		return \Illuminate\Support\Manager::getDrivers();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Auth\AuthManager::__call($method, $parameters);
=======
		return \Illuminate\Support\Manager::__call($method, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current user is authenticated.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function check(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::check();
=======
		return \Illuminate\Auth\Guard::check();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current user is a guest.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function guest(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::guest();
=======
		return \Illuminate\Auth\Guard::guest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the currently authenticated user.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function user(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::user();
=======
		return \Illuminate\Auth\Guard::user();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Log a user into the application without sessions or cookies.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function once($credentials = array()){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::once($credentials);
=======
		return \Illuminate\Auth\Guard::once($credentials);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Validate a user's credentials.
	 *
	 * @param array  $credentials
	 * @return bool
	 * @static 
	 */
	 public static function validate($credentials = array()){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::validate($credentials);
=======
		return \Illuminate\Auth\Guard::validate($credentials);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Attempt to authenticate using HTTP Basic Auth.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function basic($field = 'email', $request = null){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::basic($field, $request);
=======
		return \Illuminate\Auth\Guard::basic($field, $request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Perform a stateless HTTP Basic login attempt.
	 *
	 * @param string  $field
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response|null
	 * @static 
	 */
	 public static function onceBasic($field = 'email', $request = null){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::onceBasic($field, $request);
=======
		return \Illuminate\Auth\Guard::onceBasic($field, $request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Attempt to authenticate a user using the given credentials.
	 *
	 * @param array  $credentials
	 * @param bool   $remember
	 * @param bool   $login
	 * @return bool
	 * @static 
	 */
	 public static function attempt($credentials = array(), $remember = false, $login = true){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
=======
		return \Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an authentication attempt event listener.
	 *
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function attempting($callback){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::attempting($callback);
=======
		 \Illuminate\Auth\Guard::attempting($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Log a user into the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @param bool  $remember
	 * @return void
	 * @static 
	 */
	 public static function login($user, $remember = false){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::login($user, $remember);
=======
		 \Illuminate\Auth\Guard::login($user, $remember);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Log the given user ID into the application.
	 *
	 * @param mixed  $id
	 * @param bool   $remember
	 * @return \Illuminate\Auth\UserInterface
	 * @static 
	 */
	 public static function loginUsingId($id, $remember = false){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::loginUsingId($id, $remember);
	 }

	/**
	 * Log the given user ID into the application without sessions or cookies.
	 *
	 * @param mixed  $id
	 * @return bool
	 * @static 
	 */
	 public static function onceUsingId($id){
		return Illuminate\Auth\Guard::onceUsingId($id);
=======
		return \Illuminate\Auth\Guard::loginUsingId($id, $remember);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Log the user out of the application.
	 *
	 * @return void
	 * @static 
	 */
	 public static function logout(){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::logout();
=======
		 \Illuminate\Auth\Guard::logout();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the cookies queued by the guard.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getQueuedCookies(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getQueuedCookies();
=======
		return \Illuminate\Auth\Guard::getQueuedCookies();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the cookie creator instance used by the guard.
	 *
	 * @return \Illuminate\Cookie\CookieJar
	 * @static 
	 */
	 public static function getCookieJar(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getCookieJar();
=======
		return \Illuminate\Auth\Guard::getCookieJar();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the cookie creator instance used by the guard.
	 *
	 * @param \Illuminate\Cookie\CookieJar  $cookie
	 * @return void
	 * @static 
	 */
	 public static function setCookieJar($cookie){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::setCookieJar($cookie);
=======
		 \Illuminate\Auth\Guard::setCookieJar($cookie);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getDispatcher();
=======
		return \Illuminate\Auth\Guard::getDispatcher();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function setDispatcher($events){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::setDispatcher($events);
=======
		 \Illuminate\Auth\Guard::setDispatcher($events);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the session store used by the guard.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSession(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getSession();
=======
		return \Illuminate\Auth\Guard::getSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the user provider used by the guard.
	 *
	 * @return \Illuminate\Auth\UserProviderInterface
	 * @static 
	 */
	 public static function getProvider(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getProvider();
=======
		return \Illuminate\Auth\Guard::getProvider();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the user provider used by the guard.
	 *
	 * @param \Illuminate\Auth\UserProviderInterface  $provider
	 * @return void
	 * @static 
	 */
	 public static function setProvider($provider){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::setProvider($provider);
=======
		 \Illuminate\Auth\Guard::setProvider($provider);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Return the currently cached user of the application.
	 *
	 * @return \Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function getUser(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getUser();
=======
		return \Illuminate\Auth\Guard::getUser();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current user of the application.
	 *
	 * @param \Illuminate\Auth\UserInterface  $user
	 * @return void
	 * @static 
	 */
	 public static function setUser($user){
<<<<<<< HEAD
		 Illuminate\Auth\Guard::setUser($user);
=======
		 \Illuminate\Auth\Guard::setUser($user);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getRequest();
=======
		return \Illuminate\Auth\Guard::getRequest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request
	 * @return \Illuminate\Auth\Guard
	 * @static 
	 */
	 public static function setRequest($request){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::setRequest($request);
=======
		return \Illuminate\Auth\Guard::setRequest($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a unique identifier for the auth session value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getName(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getName();
=======
		return \Illuminate\Auth\Guard::getName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the name of the cookie used to store the "recaller".
	 *
	 * @return string
	 * @static 
	 */
	 public static function getRecallerName(){
<<<<<<< HEAD
		return Illuminate\Auth\Guard::getRecallerName();
	 }

}

class Blade extends Illuminate\Support\Facades\Blade{
=======
		return \Illuminate\Auth\Guard::getRecallerName();
	 }

 }
}

namespace  {
 class Blade extends Illuminate\Support\Facades\Blade{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Compile the view at the given path.
	 *
	 * @param string  $path
	 * @return void
	 * @static 
	 */
	 public static function compile($path){
<<<<<<< HEAD
		 Illuminate\View\Compilers\BladeCompiler::compile($path);
=======
		 \Illuminate\View\Compilers\BladeCompiler::compile($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Compile the given Blade template contents.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function compileString($value){
<<<<<<< HEAD
		return Illuminate\View\Compilers\BladeCompiler::compileString($value);
=======
		return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom Blade compiler.
	 *
	 * @param Closure  $compiler
	 * @return void
	 * @static 
	 */
	 public static function extend($compiler){
<<<<<<< HEAD
		 Illuminate\View\Compilers\BladeCompiler::extend($compiler);
=======
		 \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createMatcher($function){
<<<<<<< HEAD
		return Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
=======
		return \Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the regular expression for a generic Blade function.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createOpenMatcher($function){
<<<<<<< HEAD
		return Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
=======
		return \Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a plain Blade matcher.
	 *
	 * @param string  $function
	 * @return string
	 * @static 
	 */
	 public static function createPlainMatcher($function){
<<<<<<< HEAD
		return Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
=======
		return \Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @param bool    $escaped
	 * @return void
	 * @static 
	 */
	 public static function setContentTags($openTag, $closeTag, $escaped = false){
<<<<<<< HEAD
		 Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
=======
		 \Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the escaped content tags used for the compiler.
	 *
	 * @param string  $openTag
	 * @param string  $closeTag
	 * @return void
	 * @static 
	 */
	 public static function setEscapedContentTags($openTag, $closeTag){
<<<<<<< HEAD
		 Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
=======
		 \Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new compiler instance.
	 *
	 * @param \Illuminate\Filesystem\Filesystem  $files
	 * @param string  $cachePath
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($files, $cachePath){
		//Method inherited from Illuminate\View\Compilers\Compiler
		 Illuminate\View\Compilers\BladeCompiler::__construct($files, $cachePath);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($files, $cachePath){
		 \Illuminate\View\Compilers\Compiler::__construct($files, $cachePath);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the path to the compiled version of a view.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getCompiledPath($path){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Compilers\Compiler
		return Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
=======
		return \Illuminate\View\Compilers\Compiler::getCompiledPath($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the view at the given path is expired.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isExpired($path){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Compilers\Compiler
		return Illuminate\View\Compilers\BladeCompiler::isExpired($path);
	 }

}

class Cache extends Illuminate\Support\Facades\Cache{
=======
		return \Illuminate\View\Compilers\Compiler::isExpired($path);
	 }

 }
}

namespace  {
 class Cache extends Illuminate\Support\Facades\Cache{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Get the cache "prefix" value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPrefix(){
<<<<<<< HEAD
		return Illuminate\Cache\CacheManager::getPrefix();
=======
		return \Illuminate\Cache\CacheManager::getPrefix();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::__construct($app);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		 \Illuminate\Support\Manager::__construct($app);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a driver instance.
	 *
	 * @param string  $driver
	 * @return mixed
	 * @static 
	 */
	 public static function driver($driver = null){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::driver($driver);
=======
		return \Illuminate\Support\Manager::driver($driver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string   $driver
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function extend($driver, $callback){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::extend($driver, $callback);
=======
		 \Illuminate\Support\Manager::extend($driver, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array
	 * @static 
	 */
	 public static function getDrivers(){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::getDrivers();
=======
		return \Illuminate\Support\Manager::getDrivers();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically call the default driver instance.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\Manager
		return Illuminate\Cache\CacheManager::__call($method, $parameters);
	 }

	/**
	 * Determine if an item exists in the cache.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return Illuminate\Cache\Repository::has($key);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
		return Illuminate\Cache\Repository::get($key, $default);
=======
		return \Illuminate\Support\Manager::__call($method, $parameters);
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function get($key){
		return \Illuminate\Cache\StoreInterface::get($key);
	 }

	/**
	 * Store an item in the cache for a given number of minutes.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param int     $minutes
	 * @return void
	 * @static 
	 */
	 public static function put($key, $value, $minutes){
		 \Illuminate\Cache\StoreInterface::put($key, $value, $minutes);
	 }

	/**
	 * Increment the value of an item in the cache.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function increment($key, $value = 1){
		 \Illuminate\Cache\StoreInterface::increment($key, $value);
	 }

	/**
	 * Decrement the value of an item in the cache.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function decrement($key, $value = 1){
		 \Illuminate\Cache\StoreInterface::decrement($key, $value);
	 }

	/**
	 * Store an item in the cache indefinitely.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function forever($key, $value){
		 \Illuminate\Cache\StoreInterface::forever($key, $value);
	 }

	/**
	 * Remove an item from the cache.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function forget($key){
		 \Illuminate\Cache\StoreInterface::forget($key);
	 }

	/**
	 * Remove all items from the cache.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
		 \Illuminate\Cache\StoreInterface::flush();
	 }

	/**
	 * Determine if an item exists in the cache.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
		return \Illuminate\Cache\Repository::has($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Store an item in the cache if the key does not exist.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param int     $minutes
	 * @return void
	 * @static 
	 */
	 public static function add($key, $value, $minutes){
<<<<<<< HEAD
		 Illuminate\Cache\Repository::add($key, $value, $minutes);
=======
		 \Illuminate\Cache\Repository::add($key, $value, $minutes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get an item from the cache, or store the default value.
	 *
	 * @param string   $key
	 * @param int      $minutes
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function remember($key, $minutes, $callback){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::remember($key, $minutes, $callback);
=======
		return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function sear($key, $callback){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::sear($key, $callback);
=======
		return \Illuminate\Cache\Repository::sear($key, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string   $key
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function rememberForever($key, $callback){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::rememberForever($key, $callback);
=======
		return \Illuminate\Cache\Repository::rememberForever($key, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the default cache time.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getDefaultCacheTime(){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::getDefaultCacheTime();
=======
		return \Illuminate\Cache\Repository::getDefaultCacheTime();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the default cache time in minutes.
	 *
	 * @param int   $minutes
	 * @return void
	 * @static 
	 */
	 public static function setDefaultCacheTime($minutes){
<<<<<<< HEAD
		 Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
=======
		 \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the cache store implementation.
	 *
	 * @return \Illuminate\Cache\StoreInterface
	 * @static 
	 */
	 public static function getStore(){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::getStore();
=======
		return \Illuminate\Cache\Repository::getStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a cached value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::offsetExists($key);
=======
		return \Illuminate\Cache\Repository::offsetExists($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string  $key
	 * @return mixed
	 * @static 
	 */
	 public static function offsetGet($key){
<<<<<<< HEAD
		return Illuminate\Cache\Repository::offsetGet($key);
=======
		return \Illuminate\Cache\Repository::offsetGet($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Store an item in the cache for the default time.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
<<<<<<< HEAD
		 Illuminate\Cache\Repository::offsetSet($key, $value);
=======
		 \Illuminate\Cache\Repository::offsetSet($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Remove an item from the cache.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
<<<<<<< HEAD
		 Illuminate\Cache\Repository::offsetUnset($key);
	 }

}

class ClassLoader extends Illuminate\Support\ClassLoader{
}

class Config extends Illuminate\Support\Facades\Config{
=======
		 \Illuminate\Cache\Repository::offsetUnset($key);
	 }

 }
}

namespace  {
 class ClassLoader extends Illuminate\Support\ClassLoader{
 }
}

namespace  {
 class Config extends Illuminate\Support\Facades\Config{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new configuration repository.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @param string  $environment
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($loader, $environment){
		 Illuminate\Config\Repository::__construct($loader, $environment);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($loader, $environment){
		 \Illuminate\Config\Repository::__construct($loader, $environment);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
<<<<<<< HEAD
		return Illuminate\Config\Repository::has($key);
=======
		return \Illuminate\Config\Repository::has($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a configuration group exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasGroup($key){
<<<<<<< HEAD
		return Illuminate\Config\Repository::hasGroup($key);
=======
		return \Illuminate\Config\Repository::hasGroup($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the specified configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
<<<<<<< HEAD
		return Illuminate\Config\Repository::get($key, $default);
=======
		return \Illuminate\Config\Repository::get($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set a given configuration value.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function set($key, $value){
<<<<<<< HEAD
		 Illuminate\Config\Repository::set($key, $value);
=======
		 \Illuminate\Config\Repository::set($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a package for cascading configuration.
	 *
	 * @param string  $package
	 * @param string  $hint
	 * @param string  $namespace
	 * @return void
	 * @static 
	 */
	 public static function package($package, $hint, $namespace = null){
<<<<<<< HEAD
		 Illuminate\Config\Repository::package($package, $hint, $namespace);
=======
		 \Illuminate\Config\Repository::package($package, $hint, $namespace);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an after load callback for a given namespace.
	 *
	 * @param string   $namespace
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function afterLoading($namespace, $callback){
<<<<<<< HEAD
		 Illuminate\Config\Repository::afterLoading($namespace, $callback);
=======
		 \Illuminate\Config\Repository::afterLoading($namespace, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
<<<<<<< HEAD
		 Illuminate\Config\Repository::addNamespace($namespace, $hint);
=======
		 \Illuminate\Config\Repository::addNamespace($namespace, $hint);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns all registered namespaces with the config
	 * loader.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNamespaces(){
<<<<<<< HEAD
		return Illuminate\Config\Repository::getNamespaces();
=======
		return \Illuminate\Config\Repository::getNamespaces();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the loader implementation.
	 *
	 * @return \Illuminate\Config\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
<<<<<<< HEAD
		return Illuminate\Config\Repository::getLoader();
=======
		return \Illuminate\Config\Repository::getLoader();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the loader implementation.
	 *
	 * @param \Illuminate\Config\LoaderInterface  $loader
	 * @return void
	 * @static 
	 */
	 public static function setLoader($loader){
<<<<<<< HEAD
		 Illuminate\Config\Repository::setLoader($loader);
=======
		 \Illuminate\Config\Repository::setLoader($loader);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current configuration environment.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getEnvironment(){
<<<<<<< HEAD
		return Illuminate\Config\Repository::getEnvironment();
=======
		return \Illuminate\Config\Repository::getEnvironment();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the after load callback array.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getAfterLoadCallbacks(){
<<<<<<< HEAD
		return Illuminate\Config\Repository::getAfterLoadCallbacks();
=======
		return \Illuminate\Config\Repository::getAfterLoadCallbacks();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the configuration items.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getItems(){
<<<<<<< HEAD
		return Illuminate\Config\Repository::getItems();
=======
		return \Illuminate\Config\Repository::getItems();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($key){
<<<<<<< HEAD
		return Illuminate\Config\Repository::offsetExists($key);
=======
		return \Illuminate\Config\Repository::offsetExists($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a configuration option.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function offsetGet($key){
<<<<<<< HEAD
		return Illuminate\Config\Repository::offsetGet($key);
=======
		return \Illuminate\Config\Repository::offsetGet($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set a configuration option.
	 *
	 * @param string  $key
	 * @param string  $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($key, $value){
<<<<<<< HEAD
		 Illuminate\Config\Repository::offsetSet($key, $value);
=======
		 \Illuminate\Config\Repository::offsetSet($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Unset a configuration option.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($key){
<<<<<<< HEAD
		 Illuminate\Config\Repository::offsetUnset($key);
=======
		 \Illuminate\Config\Repository::offsetUnset($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		return Illuminate\Config\Repository::parseKey($key);
=======
		return \Illuminate\Support\NamespacedItemResolver::parseKey($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Config\Repository::setParsedKey($key, $parsed);
	 }

}

class Controller extends Illuminate\Routing\Controllers\Controller{
}

class Cookie extends Illuminate\Support\Facades\Cookie{
=======
		 \Illuminate\Support\NamespacedItemResolver::setParsedKey($key, $parsed);
	 }

 }
}

namespace  {
 class Controller extends Illuminate\Routing\Controllers\Controller{
 }
}

namespace  {
 class Cookie extends Illuminate\Support\Facades\Cookie{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new cookie manager instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\Encryption\Encrypter  $encrypter
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($request, $encrypter){
		 Illuminate\Cookie\CookieJar::__construct($request, $encrypter);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request, $encrypter){
		 \Illuminate\Cookie\CookieJar::__construct($request, $encrypter);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a cookie exists and is not null.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::has($key);
=======
		return \Illuminate\Cookie\CookieJar::has($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the value of the given cookie.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::get($key, $default);
=======
		return \Illuminate\Cookie\CookieJar::get($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new cookie instance.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param int     $minutes
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
=======
		return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a cookie that lasts "forever" (five years).
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param string  $path
	 * @param string  $domain
	 * @param bool    $secure
	 * @param bool    $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
=======
		return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Expire the given cookie.
	 *
	 * @param string  $name
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 * @static 
	 */
	 public static function forget($name){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::forget($name);
=======
		return \Illuminate\Cookie\CookieJar::forget($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the default path and domain for the jar.
	 *
	 * @param string  $path
	 * @param string  $domain
	 * @return void
	 * @static 
	 */
	 public static function setDefaultPathAndDomain($path, $domain){
<<<<<<< HEAD
		 Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
=======
		 \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::getRequest();
=======
		return \Illuminate\Cookie\CookieJar::getRequest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the encrypter instance.
	 *
	 * @return \Illuminate\Encryption\Encrypter
	 * @static 
	 */
	 public static function getEncrypter(){
<<<<<<< HEAD
		return Illuminate\Cookie\CookieJar::getEncrypter();
	 }

}

class Crypt extends Illuminate\Support\Facades\Crypt{
=======
		return \Illuminate\Cookie\CookieJar::getEncrypter();
	 }

 }
}

namespace  {
 class Crypt extends Illuminate\Support\Facades\Crypt{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new encrypter instance.
	 *
	 * @param string  $key
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($key){
		 Illuminate\Encryption\Encrypter::__construct($key);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($key){
		 \Illuminate\Encryption\Encrypter::__construct($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Encrypt the given value.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function encrypt($value){
<<<<<<< HEAD
		return Illuminate\Encryption\Encrypter::encrypt($value);
=======
		return \Illuminate\Encryption\Encrypter::encrypt($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Decrypt the given value.
	 *
	 * @param string  $payload
	 * @return string
	 * @static 
	 */
	 public static function decrypt($payload){
<<<<<<< HEAD
		return Illuminate\Encryption\Encrypter::decrypt($payload);
=======
		return \Illuminate\Encryption\Encrypter::decrypt($payload);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the encryption key.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function setKey($key){
<<<<<<< HEAD
		 Illuminate\Encryption\Encrypter::setKey($key);
=======
		 \Illuminate\Encryption\Encrypter::setKey($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the encryption cipher.
	 *
	 * @param string  $cipher
	 * @return void
	 * @static 
	 */
	 public static function setCipher($cipher){
<<<<<<< HEAD
		 Illuminate\Encryption\Encrypter::setCipher($cipher);
=======
		 \Illuminate\Encryption\Encrypter::setCipher($cipher);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the encryption mode.
	 *
	 * @param string  $mode
	 * @return void
	 * @static 
	 */
	 public static function setMode($mode){
<<<<<<< HEAD
		 Illuminate\Encryption\Encrypter::setMode($mode);
	 }

}

class DB extends Illuminate\Support\Facades\DB{
=======
		 \Illuminate\Encryption\Encrypter::setMode($mode);
	 }

 }
}

namespace  {
 class DB extends Illuminate\Support\Facades\DB{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new database manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
	 * @param \Illuminate\Database\Connectors\ConnectionFactory  $factory
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($app, $factory){
		 Illuminate\Database\DatabaseManager::__construct($app, $factory);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app, $factory){
		 \Illuminate\Database\DatabaseManager::__construct($app, $factory);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a database connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function connection($name = null){
<<<<<<< HEAD
		return Illuminate\Database\DatabaseManager::connection($name);
=======
		return \Illuminate\Database\DatabaseManager::connection($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Reconnect to the given database.
	 *
	 * @param string  $name
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function reconnect($name = null){
<<<<<<< HEAD
		return Illuminate\Database\DatabaseManager::reconnect($name);
=======
		return \Illuminate\Database\DatabaseManager::reconnect($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the default connection name.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDefaultConnection(){
<<<<<<< HEAD
		return Illuminate\Database\DatabaseManager::getDefaultConnection();
=======
		return \Illuminate\Database\DatabaseManager::getDefaultConnection();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the default connection name.
	 *
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function setDefaultConnection($name){
<<<<<<< HEAD
		 Illuminate\Database\DatabaseManager::setDefaultConnection($name);
=======
		 \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an extension connection resolver.
	 *
	 * @param string    $name
	 * @param callable  $resolver
	 * @return void
	 * @static 
	 */
	 public static function extend($name, $resolver){
<<<<<<< HEAD
		 Illuminate\Database\DatabaseManager::extend($name, $resolver);
=======
		 \Illuminate\Database\DatabaseManager::extend($name, $resolver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically pass methods to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Database\DatabaseManager::__call($method, $parameters);
	 }

}

class Eloquent extends Illuminate\Database\Eloquent\Model{
	/**
	 * Execute the query and get the first result.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static|null
	 * @static 
	 */
	 public static function first($columns = array()){
		return Illuminate\Database\Eloquent\Builder::first($columns);
	 }

	/**
	 * Execute the query and get the first result or throw an exception.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|static
	 * @static 
	 */
	 public static function firstOrFail($columns = array()){
		return Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
	 }

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 * @static 
	 */
	 public static function get($columns = array()){
		return Illuminate\Database\Eloquent\Builder::get($columns);
	 }

	/**
	 * Pluck a single column from the database.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
	 public static function pluck($column){
		return Illuminate\Database\Eloquent\Builder::pluck($column);
	 }

	/**
	 * Get an array with the values of a given column.
	 *
	 * @param string  $column
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function lists($column, $key = null){
		return Illuminate\Database\Eloquent\Builder::lists($column, $key);
	 }

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @param int    $perPage
	 * @param array  $columns
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function paginate($perPage = null, $columns = array()){
		return Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
	 }

	/**
	 * Increment a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function increment($column, $amount = 1, $extra = array()){
		return Illuminate\Database\Eloquent\Builder::increment($column, $amount, $extra);
	 }

	/**
	 * Decrement a column's value by a given amount.
	 *
	 * @param string  $column
	 * @param int     $amount
	 * @param array   $extra
	 * @return int
	 * @static 
	 */
	 public static function decrement($column, $amount = 1, $extra = array()){
		return Illuminate\Database\Eloquent\Builder::decrement($column, $amount, $extra);
	 }

	/**
	 * Get the hydrated models without eager loading.
	 *
	 * @param array  $columns
	 * @return array|static[]
	 * @static 
	 */
	 public static function getModels($columns = array()){
		return Illuminate\Database\Eloquent\Builder::getModels($columns);
	 }

	/**
	 * Eager load the relationships for the models.
	 *
	 * @param array  $models
	 * @return array
	 * @static 
	 */
	 public static function eagerLoadRelations($models){
		return Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
	 }

	/**
	 * Add a relationship count condition to the query.
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @param string  $boolean
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and'){
		return Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean);
	 }

	/**
	 * Add a relationship count condition to the query with an "or".
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @return \Illuminate\Database\Eloquent\Builder|static
	 * @static 
	 */
	 public static function orHas($relation, $operator = '>=', $count = 1){
		return Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
	 }

	/**
	 * Get the underlying query builder instance.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function getQuery(){
		return Illuminate\Database\Eloquent\Builder::getQuery();
	 }

	/**
	 * Set the underlying query builder instance.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return void
	 * @static 
	 */
	 public static function setQuery($query){
		 Illuminate\Database\Eloquent\Builder::setQuery($query);
	 }

	/**
	 * Get the relationships being eagerly loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getEagerLoads(){
		return Illuminate\Database\Eloquent\Builder::getEagerLoads();
	 }

	/**
	 * Set the relationships being eagerly loaded.
	 *
	 * @param array  $eagerLoad
	 * @return void
	 * @static 
	 */
	 public static function setEagerLoads($eagerLoad){
		 Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
	 }

	/**
	 * Get the model instance being queried.
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static 
	 */
	 public static function getModel(){
		return Illuminate\Database\Eloquent\Builder::getModel();
	 }

	/**
	 * Set a model instance for the model being queried.
	 *
	 * @param \Illuminate\Database\Eloquent\Model  $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public static function setModel($model){
		return Illuminate\Database\Eloquent\Builder::setModel($model);
	 }

	/**
	 * Set the columns to be selected.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function select($columns = array()){
		return Illuminate\Database\Query\Builder::select($columns);
	 }

	/**
	 * Add a new select column to the query.
	 *
	 * @param mixed  $column
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function addSelect($column){
		return Illuminate\Database\Query\Builder::addSelect($column);
	 }

	/**
	 * Force the query to only return distinct results.
	 *
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function distinct(){
		return Illuminate\Database\Query\Builder::distinct();
	 }

	/**
	 * Set the table which the query is targeting.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function from($table){
		return Illuminate\Database\Query\Builder::from($table);
	 }

	/**
	 * Add a join clause to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @param string  $type
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function join($table, $first, $operator = null, $second = null, $type = 'inner'){
		return Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type);
	 }

	/**
	 * Add a left join to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function leftJoin($table, $first, $operator = null, $second = null){
		return Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::where($column, $operator, $value, $boolean);
	 }

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhere($column, $operator = null, $value = null){
		return Illuminate\Database\Query\Builder::orWhere($column, $operator, $value);
	 }

	/**
	 * Add a raw where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereRaw($sql, $bindings = array()){
		return Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
	 }

	/**
	 * Add a where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereBetween($column, $values, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean);
	 }

	/**
	 * Add an or where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereBetween($column, $values){
		return Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
	 }

	/**
	 * Add a nested where statement to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNested($callback, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
	 }

	/**
	 * Add an exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereExists($callback, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
	 }

	/**
	 * Add an or exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereExists($callback, $not = false){
		return Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotExists($callback, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param \Closure  $callback
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotExists($callback){
		return Illuminate\Database\Query\Builder::orWhereNotExists($callback);
	 }

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereIn($column, $values, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereIn($column, $values){
		return Illuminate\Database\Query\Builder::orWhereIn($column, $values);
=======
		return \Illuminate\Database\DatabaseManager::__call($method, $parameters);
	 }

	/**
	 * Set the query grammar to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultQueryGrammar(){
		 \Illuminate\Database\Connection::useDefaultQueryGrammar();
	 }

	/**
	 * Set the schema grammar to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultSchemaGrammar(){
		 \Illuminate\Database\Connection::useDefaultSchemaGrammar();
	 }

	/**
	 * Set the query post processor to the default implementation.
	 *
	 * @return void
	 * @static 
	 */
	 public static function useDefaultPostProcessor(){
		 \Illuminate\Database\Connection::useDefaultPostProcessor();
	 }

	/**
	 * Get a schema builder instance for the connection.
	 *
	 * @return \Illuminate\Database\Schema\Builder
	 * @static 
	 */
	 public static function getSchemaBuilder(){
		return \Illuminate\Database\Connection::getSchemaBuilder();
	 }

	/**
	 * Begin a fluent query against a database table.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function table($table){
		return \Illuminate\Database\Connection::table($table);
	 }

	/**
	 * Get a new raw query expression.
	 *
	 * @param mixed  $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static 
	 */
	 public static function raw($value){
		return \Illuminate\Database\Connection::raw($value);
	 }

	/**
	 * Run a select statement and return a single result.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return mixed
	 * @static 
	 */
	 public static function selectOne($query, $bindings = array()){
		return \Illuminate\Database\Connection::selectOne($query, $bindings);
	 }

	/**
	 * Run a select statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return array
	 * @static 
	 */
	 public static function select($query, $bindings = array()){
		return \Illuminate\Database\Connection::select($query, $bindings);
	 }

	/**
	 * Run an insert statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return bool
	 * @static 
	 */
	 public static function insert($query, $bindings = array()){
		return \Illuminate\Database\Connection::insert($query, $bindings);
	 }

	/**
	 * Run an update statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function update($query, $bindings = array()){
		return \Illuminate\Database\Connection::update($query, $bindings);
	 }

	/**
	 * Run a delete statement against the database.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function delete($query, $bindings = array()){
		return \Illuminate\Database\Connection::delete($query, $bindings);
	 }

	/**
	 * Execute an SQL statement and return the boolean result.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return bool
	 * @static 
	 */
	 public static function statement($query, $bindings = array()){
		return \Illuminate\Database\Connection::statement($query, $bindings);
	 }

	/**
	 * Run an SQL statement and get the number of rows affected.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @return int
	 * @static 
	 */
	 public static function affectingStatement($query, $bindings = array()){
		return \Illuminate\Database\Connection::affectingStatement($query, $bindings);
	 }

	/**
	 * Run a raw, unprepared query against the PDO connection.
	 *
	 * @param string  $query
	 * @return bool
	 * @static 
	 */
	 public static function unprepared($query){
		return \Illuminate\Database\Connection::unprepared($query);
	 }

	/**
	 * Prepare the query bindings for execution.
	 *
	 * @param array  $bindings
	 * @return array
	 * @static 
	 */
	 public static function prepareBindings($bindings){
		return \Illuminate\Database\Connection::prepareBindings($bindings);
	 }

	/**
	 * Execute a Closure within a transaction.
	 *
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function transaction($callback){
		return \Illuminate\Database\Connection::transaction($callback);
	 }

	/**
	 * Execute the given callback in "dry run" mode.
	 *
	 * @param Closure  $callback
	 * @return array
	 * @static 
	 */
	 public static function pretend($callback){
		return \Illuminate\Database\Connection::pretend($callback);
	 }

	/**
	 * Log a query in the connection's query log.
	 *
	 * @param string  $query
	 * @param array   $bindings
	 * @param $time
	 * @return void
	 * @static 
	 */
	 public static function logQuery($query, $bindings, $time = null){
		 \Illuminate\Database\Connection::logQuery($query, $bindings, $time);
	 }

	/**
	 * Register a database query listener with the connection.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function listen($callback){
		 \Illuminate\Database\Connection::listen($callback);
	 }

	/**
	 * Get a Doctrine Schema Column instance.
	 *
	 * @param string  $table
	 * @param string  $column
	 * @return \Doctrine\DBAL\Schema\Column
	 * @static 
	 */
	 public static function getDoctrineColumn($table, $column){
		return \Illuminate\Database\Connection::getDoctrineColumn($table, $column);
	 }

	/**
	 * Get the Doctrine DBAL schema manager for the connection.
	 *
	 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
	 * @static 
	 */
	 public static function getDoctrineSchemaManager(){
		return \Illuminate\Database\Connection::getDoctrineSchemaManager();
	 }

	/**
	 * Get the Doctrine DBAL database connection instance.
	 *
	 * @return \Doctrine\DBAL\Connection
	 * @static 
	 */
	 public static function getDoctrineConnection(){
		return \Illuminate\Database\Connection::getDoctrineConnection();
	 }

	/**
	 * Get the currently used PDO connection.
	 *
	 * @return PDO
	 * @static 
	 */
	 public static function getPdo(){
		return \Illuminate\Database\Connection::getPdo();
	 }

	/**
	 * Get the database connection name.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getName(){
		return \Illuminate\Database\Connection::getName();
	 }

	/**
	 * Get the PDO driver name.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDriverName(){
		return \Illuminate\Database\Connection::getDriverName();
	 }

	/**
	 * Get the query grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static 
	 */
	 public static function getQueryGrammar(){
		return \Illuminate\Database\Connection::getQueryGrammar();
	 }

	/**
	 * Set the query grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Grammars\Grammar
	 * @return void
	 * @static 
	 */
	 public static function setQueryGrammar($grammar){
		 \Illuminate\Database\Connection::setQueryGrammar($grammar);
	 }

	/**
	 * Get the schema grammar used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Grammars\Grammar
	 * @static 
	 */
	 public static function getSchemaGrammar(){
		return \Illuminate\Database\Connection::getSchemaGrammar();
	 }

	/**
	 * Set the schema grammar used by the connection.
	 *
	 * @param \Illuminate\Database\Schema\Grammars\Grammar
	 * @return void
	 * @static 
	 */
	 public static function setSchemaGrammar($grammar){
		 \Illuminate\Database\Connection::setSchemaGrammar($grammar);
	 }

	/**
	 * Get the query post processor used by the connection.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static 
	 */
	 public static function getPostProcessor(){
		return \Illuminate\Database\Connection::getPostProcessor();
	 }

	/**
	 * Set the query post processor used by the connection.
	 *
	 * @param \Illuminate\Database\Query\Processors\Processor
	 * @return void
	 * @static 
	 */
	 public static function setPostProcessor($processor){
		 \Illuminate\Database\Connection::setPostProcessor($processor);
	 }

	/**
	 * Get the event dispatcher used by the connection.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getEventDispatcher(){
		return \Illuminate\Database\Connection::getEventDispatcher();
	 }

	/**
	 * Set the event dispatcher instance on the connection.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setEventDispatcher($events){
		 \Illuminate\Database\Connection::setEventDispatcher($events);
	 }

	/**
	 * Get the paginator environment instance.
	 *
	 * @return \Illuminate\Pagination\Environment
	 * @static 
	 */
	 public static function getPaginator(){
		return \Illuminate\Database\Connection::getPaginator();
	 }

	/**
	 * Set the pagination environment instance.
	 *
	 * @param \Illuminate\Pagination\Environment|\Closure  $paginator
	 * @return void
	 * @static 
	 */
	 public static function setPaginator($paginator){
		 \Illuminate\Database\Connection::setPaginator($paginator);
	 }

	/**
	 * Get the cache manager instance.
	 *
	 * @return \Illuminate\Cache\CacheManager
	 * @static 
	 */
	 public static function getCacheManager(){
		return \Illuminate\Database\Connection::getCacheManager();
	 }

	/**
	 * Set the cache manager instance on the connection.
	 *
	 * @param \Illuminate\Cache\CacheManager|\Closure  $cache
	 * @return void
	 * @static 
	 */
	 public static function setCacheManager($cache){
		 \Illuminate\Database\Connection::setCacheManager($cache);
	 }

	/**
	 * Determine if the connection in a "dry run".
	 *
	 * @return bool
	 * @static 
	 */
	 public static function pretending(){
		return \Illuminate\Database\Connection::pretending();
	 }

	/**
	 * Get the default fetch mode for the connection.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getFetchMode(){
		return \Illuminate\Database\Connection::getFetchMode();
	 }

	/**
	 * Set the default fetch mode for the connection.
	 *
	 * @param int  $fetchMode
	 * @return int
	 * @static 
	 */
	 public static function setFetchMode($fetchMode){
		return \Illuminate\Database\Connection::setFetchMode($fetchMode);
	 }

	/**
	 * Get the connection query log.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getQueryLog(){
		return \Illuminate\Database\Connection::getQueryLog();
	 }

	/**
	 * Clear the query log.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flushQueryLog(){
		 \Illuminate\Database\Connection::flushQueryLog();
	 }

	/**
	 * Enable the query log on the connection.
	 *
	 * @return void
	 * @static 
	 */
	 public static function enableQueryLog(){
		 \Illuminate\Database\Connection::enableQueryLog();
	 }

	/**
	 * Disable the query log on the connection.
	 *
	 * @return void
	 * @static 
	 */
	 public static function disableQueryLog(){
		 \Illuminate\Database\Connection::disableQueryLog();
	 }

	/**
	 * Get the name of the connected database.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getDatabaseName(){
		return \Illuminate\Database\Connection::getDatabaseName();
	 }

	/**
	 * Set the name of the connected database.
	 *
	 * @param string  $database
	 * @return string
	 * @static 
	 */
	 public static function setDatabaseName($database){
		return \Illuminate\Database\Connection::setDatabaseName($database);
	 }

	/**
	 * Get the table prefix for the connection.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getTablePrefix(){
		return \Illuminate\Database\Connection::getTablePrefix();
	 }

	/**
	 * Set the table prefix in use by the connection.
	 *
	 * @param string  $prefix
	 * @return void
	 * @static 
	 */
	 public static function setTablePrefix($prefix){
		 \Illuminate\Database\Connection::setTablePrefix($prefix);
	 }

	/**
	 * Set the table prefix and return the grammar.
	 *
	 * @param \Illuminate\Database\Grammar  $grammar
	 * @return \Illuminate\Database\Grammar
	 * @static 
	 */
	 public static function withTablePrefix($grammar){
		return \Illuminate\Database\Connection::withTablePrefix($grammar);
	 }

 }
}

namespace  {
 class Eloquent extends Illuminate\Database\Eloquent\Model{
	/**
	 * Execute the query and get the first result.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|null|static 
	 * @static 
	 */
	 public function first($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::first($columns);
	 }

	/**
	 * Execute the query and get the first result or throw an exception.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static 
	 */
	 public function firstOrFail($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
	 }

	/**
	 * Execute the query as a "select" statement.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Eloquent\Collection|\Eloquent[]|static[] 
	 * @static 
	 */
	 public function get($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::get($columns);
	 }

	/**
	 * Pluck a single column from the database.
	 *
	 * @param string  $column
	 * @return mixed|static 
	 * @static 
	 */
	 public function pluck($column){
		return \Illuminate\Database\Eloquent\Builder::pluck($column);
	 }

	/**
	 * Get an array with the values of a given column.
	 *
	 * @param string  $column
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public function lists($column, $key = null){
		return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
	 }

	/**
	 * Get a paginator for the "select" statement.
	 *
	 * @param int    $perPage
	 * @param array  $columns
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public function paginate($perPage = null, $columns = array()){
		return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
	 }

	/**
	 * Get the hydrated models without eager loading.
	 *
	 * @param array  $columns
	 * @return array
	 * @static 
	 */
	 public function getModels($columns = array()){
		return \Illuminate\Database\Eloquent\Builder::getModels($columns);
	 }

	/**
	 * Eager load the relationships for the models.
	 *
	 * @param array  $models
	 * @return array
	 * @static 
	 */
	 public function eagerLoadRelations($models){
		return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
	 }

	/**
	 * Add a relationship count condition to the query.
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @param string  $boolean
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public function has($relation, $operator = '>=', $count = 1, $boolean = 'and'){
		return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean);
	 }

	/**
	 * Add a relationship count condition to the query with an "or".
	 *
	 * @param string  $relation
	 * @param string  $operator
	 * @param int     $count
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public function orHas($relation, $operator = '>=', $count = 1){
		return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
	 }

	/**
	 * Get the underlying query builder instance.
	 *
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function getQuery(){
		return \Illuminate\Database\Eloquent\Builder::getQuery();
	 }

	/**
	 * Set the underlying query builder instance.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
	 * @return void
	 * @static 
	 */
	 public function setQuery($query){
		 \Illuminate\Database\Eloquent\Builder::setQuery($query);
	 }

	/**
	 * Get the relationships being eagerly loaded.
	 *
	 * @return array
	 * @static 
	 */
	 public function getEagerLoads(){
		return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
	 }

	/**
	 * Set the relationships being eagerly loaded.
	 *
	 * @param array  $eagerLoad
	 * @return void
	 * @static 
	 */
	 public function setEagerLoads($eagerLoad){
		 \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
	 }

	/**
	 * Get the model instance being queried.
	 *
	 * @return \Illuminate\Database\Eloquent\Model
	 * @static 
	 */
	 public function getModel(){
		return \Illuminate\Database\Eloquent\Builder::getModel();
	 }

	/**
	 * Set a model instance for the model being queried.
	 *
	 * @param \Illuminate\Database\Eloquent\Model  $model
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @static 
	 */
	 public function setModel($model){
		return \Illuminate\Database\Eloquent\Builder::setModel($model);
	 }

	/**
	 * Set the columns to be selected.
	 *
	 * @param array  $columns
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function select($columns = array()){
		return \Illuminate\Database\Query\Builder::select($columns);
	 }

	/**
	 * Add a new select column to the query.
	 *
	 * @param mixed  $column
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function addSelect($column){
		return \Illuminate\Database\Query\Builder::addSelect($column);
	 }

	/**
	 * Force the query to only return distinct results.
	 *
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function distinct(){
		return \Illuminate\Database\Query\Builder::distinct();
	 }

	/**
	 * Set the table which the query is targeting.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function from($table){
		return \Illuminate\Database\Query\Builder::from($table);
	 }

	/**
	 * Add a join clause to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @param string  $type
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function join($table, $first, $operator = null, $second = null, $type = 'inner'){
		return \Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type);
	 }

	/**
	 * Add a left join to the query.
	 *
	 * @param string  $table
	 * @param string  $first
	 * @param string  $operator
	 * @param string  $second
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function leftJoin($table, $first, $operator = null, $second = null){
		return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function where($column, $operator = null, $value = null, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::where($column, $operator, $value, $boolean);
	 }

	/**
	 * Add an "or where" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param mixed   $value
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhere($column, $operator = null, $value = null){
		return \Illuminate\Database\Query\Builder::orWhere($column, $operator, $value);
	 }

	/**
	 * Add a raw where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * Add a raw or where clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereRaw($sql, $bindings = array()){
		return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
	 }

	/**
	 * Add a where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @param string  $boolean
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereBetween($column, $values, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean);
	 }

	/**
	 * Add an or where between statement to the query.
	 *
	 * @param string  $column
	 * @param array   $values
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereBetween($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
	 }

	/**
	 * Add a nested where statement to the query.
	 *
	 * @param Closure  $callback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereNested($callback, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
	 }

	/**
	 * Add an exists clause to the query.
	 *
	 * @param Closure  $callback
	 * @param string   $boolean
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereExists($callback, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
	 }

	/**
	 * Add an or exists clause to the query.
	 *
	 * @param Closure  $callback
	 * @param bool     $not
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereExists($callback, $not = false){
		return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param Closure  $calback
	 * @param string   $boolean
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereNotExists($callback, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
	 }

	/**
	 * Add a where not exists clause to the query.
	 *
	 * @param Closure  $calback
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereNotExists($callback){
		return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
	 }

	/**
	 * Add a "where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
	 * @param bool    $not
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereIn($column, $values, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * Add an "or where in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereIn($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a "where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
	 * @param string  $boolean
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotIn($column, $values, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereNotIn($column, $values, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add an "or where not in" clause to the query.
	 *
	 * @param string  $column
	 * @param mixed   $values
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotIn($column, $values){
		return Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereNotIn($column, $values){
		return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a "where null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
	 * @param bool    $not
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNull($column, $boolean = 'and', $not = false){
		return Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereNull($column, $boolean = 'and', $not = false){
		return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add an "or where null" clause to the query.
	 *
	 * @param string  $column
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNull($column){
		return Illuminate\Database\Query\Builder::orWhereNull($column);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereNull($column){
		return \Illuminate\Database\Query\Builder::orWhereNull($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a "where not null" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $boolean
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function whereNotNull($column, $boolean = 'and'){
		return Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function whereNotNull($column, $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add an "or where not null" clause to the query.
	 *
	 * @param string  $column
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orWhereNotNull($column){
		return Illuminate\Database\Query\Builder::orWhereNotNull($column);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orWhereNotNull($column){
		return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Handles dynamic "where" clauses to the query.
	 *
	 * @param string  $method
	 * @param string  $parameters
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function dynamicWhere($method, $parameters){
		return Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function dynamicWhere($method, $parameters){
		return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a "group by" clause to the query.
	 *
	 * @param dynamic  $columns
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function groupBy(){
		return Illuminate\Database\Query\Builder::groupBy();
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function groupBy(){
		return \Illuminate\Database\Query\Builder::groupBy();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a "having" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $operator
	 * @param string  $value
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function having($column, $operator = null, $value = null){
		return Illuminate\Database\Query\Builder::having($column, $operator, $value);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function having($column, $operator = null, $value = null){
		return \Illuminate\Database\Query\Builder::having($column, $operator, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a raw having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
	 * @param string  $boolean
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		return Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a raw or having clause to the query.
	 *
	 * @param string  $sql
	 * @param array   $bindings
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orHavingRaw($sql, $bindings = array()){
		return Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orHavingRaw($sql, $bindings = array()){
		return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add an "order by" clause to the query.
	 *
	 * @param string  $column
	 * @param string  $direction
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function orderBy($column, $direction = 'asc'){
		return Illuminate\Database\Query\Builder::orderBy($column, $direction);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function orderBy($column, $direction = 'asc'){
		return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the "offset" value of the query.
	 *
	 * @param int  $value
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function offset($value){
		return Illuminate\Database\Query\Builder::offset($value);
	 }

	/**
	 * Alias to set the "offset" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function skip($value){
		return Illuminate\Database\Query\Builder::skip($value);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function skip($value){
		return \Illuminate\Database\Query\Builder::skip($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the "limit" value of the query.
	 *
	 * @param int  $value
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function limit($value){
		return Illuminate\Database\Query\Builder::limit($value);
	 }

	/**
	 * Alias to set the "limit" value of the query.
	 *
	 * @param int  $value
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function take($value){
		return Illuminate\Database\Query\Builder::take($value);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function take($value){
		return \Illuminate\Database\Query\Builder::take($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the limit and offset for a given page.
	 *
	 * @param int  $page
	 * @param int  $perPage
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function forPage($page, $perPage = 15){
		return Illuminate\Database\Query\Builder::forPage($page, $perPage);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function forPage($page, $perPage = 15){
		return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a union statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
	 * @param bool $all
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function union($query, $all = false){
		return Illuminate\Database\Query\Builder::union($query, $all);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function union($query, $all = false){
		return \Illuminate\Database\Query\Builder::union($query, $all);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a union all statement to the query.
	 *
	 * @param \Illuminate\Database\Query\Builder|\Closure  $query
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function unionAll($query){
		return Illuminate\Database\Query\Builder::unionAll($query);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function unionAll($query){
		return \Illuminate\Database\Query\Builder::unionAll($query);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the SQL representation of the query.
	 *
	 * @return string
	 * @static 
	 */
<<<<<<< HEAD
	 public static function toSql(){
		return Illuminate\Database\Query\Builder::toSql();
=======
	 public function toSql(){
		return \Illuminate\Database\Query\Builder::toSql();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Indicate that the query results should be cached.
	 *
	 * @param int  $minutes
	 * @param string  $key
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder|static
	 * @static 
	 */
	 public static function remember($minutes, $key = null){
		return Illuminate\Database\Query\Builder::remember($minutes, $key);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function remember($minutes, $key = null){
		return \Illuminate\Database\Query\Builder::remember($minutes, $key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Execute the query as a fresh "select" statement.
	 *
	 * @param array  $columns
<<<<<<< HEAD
	 * @return array|static[]
	 * @static 
	 */
	 public static function getFresh($columns = array()){
		return Illuminate\Database\Query\Builder::getFresh($columns);
=======
	 * @return array
	 * @static 
	 */
	 public function getFresh($columns = array()){
		return \Illuminate\Database\Query\Builder::getFresh($columns);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Execute the query as a cached "select" statement.
	 *
	 * @param array  $columns
	 * @return array
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getCached($columns = array()){
		return Illuminate\Database\Query\Builder::getCached($columns);
=======
	 public function getCached($columns = array()){
		return \Illuminate\Database\Query\Builder::getCached($columns);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a unique cache key for the complete query.
	 *
	 * @return string
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getCacheKey(){
		return Illuminate\Database\Query\Builder::getCacheKey();
=======
	 public function getCacheKey(){
		return \Illuminate\Database\Query\Builder::getCacheKey();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate the unique cache key for the query.
	 *
	 * @return string
	 * @static 
	 */
<<<<<<< HEAD
	 public static function generateCacheKey(){
		return Illuminate\Database\Query\Builder::generateCacheKey();
=======
	 public function generateCacheKey(){
		return \Illuminate\Database\Query\Builder::generateCacheKey();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Concatenate values of a given column as a string.
	 *
	 * @param string  $column
	 * @param string  $glue
	 * @return string
	 * @static 
	 */
<<<<<<< HEAD
	 public static function implode($column, $glue = null){
		return Illuminate\Database\Query\Builder::implode($column, $glue);
=======
	 public function implode($column, $glue = null){
		return \Illuminate\Database\Query\Builder::implode($column, $glue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Build a paginator instance from a raw result array.
	 *
	 * @param \Illuminate\Pagination\Environment  $paginator
	 * @param array  $results
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
<<<<<<< HEAD
	 public static function buildRawPaginator($paginator, $results, $perPage){
		return Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
=======
	 public function buildRawPaginator($paginator, $results, $perPage){
		return \Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the count of the total records for pagination.
	 *
	 * @return int
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getPaginationCount(){
		return Illuminate\Database\Query\Builder::getPaginationCount();
=======
	 public function getPaginationCount(){
		return \Illuminate\Database\Query\Builder::getPaginationCount();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if any rows exist for the current query.
	 *
	 * @return bool
	 * @static 
	 */
<<<<<<< HEAD
	 public static function exists(){
		return Illuminate\Database\Query\Builder::exists();
=======
	 public function exists(){
		return \Illuminate\Database\Query\Builder::exists();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the "count" result of the query.
	 *
	 * @param string  $column
	 * @return int
	 * @static 
	 */
<<<<<<< HEAD
	 public static function count($column = '*'){
		return Illuminate\Database\Query\Builder::count($column);
=======
	 public function count($column = '*'){
		return \Illuminate\Database\Query\Builder::count($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the minimum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
<<<<<<< HEAD
	 public static function min($column){
		return Illuminate\Database\Query\Builder::min($column);
=======
	 public function min($column){
		return \Illuminate\Database\Query\Builder::min($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the maximum value of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
<<<<<<< HEAD
	 public static function max($column){
		return Illuminate\Database\Query\Builder::max($column);
=======
	 public function max($column){
		return \Illuminate\Database\Query\Builder::max($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the sum of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
<<<<<<< HEAD
	 public static function sum($column){
		return Illuminate\Database\Query\Builder::sum($column);
=======
	 public function sum($column){
		return \Illuminate\Database\Query\Builder::sum($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the average of the values of a given column.
	 *
	 * @param string  $column
	 * @return mixed
	 * @static 
	 */
<<<<<<< HEAD
	 public static function avg($column){
		return Illuminate\Database\Query\Builder::avg($column);
=======
	 public function avg($column){
		return \Illuminate\Database\Query\Builder::avg($column);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Execute an aggregate function on the database.
	 *
	 * @param string  $function
	 * @param array   $columns
	 * @return mixed
	 * @static 
	 */
<<<<<<< HEAD
	 public static function aggregate($function, $columns = array()){
		return Illuminate\Database\Query\Builder::aggregate($function, $columns);
=======
	 public function aggregate($function, $columns = array()){
		return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Insert a new record into the database.
	 *
	 * @param array  $values
	 * @return bool
	 * @static 
	 */
<<<<<<< HEAD
	 public static function insert($values){
		return Illuminate\Database\Query\Builder::insert($values);
=======
	 public function insert($values){
		return \Illuminate\Database\Query\Builder::insert($values);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Insert a new record and get the value of the primary key.
	 *
	 * @param array   $values
	 * @param string  $sequence
	 * @return int
	 * @static 
	 */
<<<<<<< HEAD
	 public static function insertGetId($values, $sequence = null){
		return Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
=======
	 public function insertGetId($values, $sequence = null){
		return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Run a truncate statement on the table.
	 *
	 * @return void
	 * @static 
	 */
<<<<<<< HEAD
	 public static function truncate(){
		 Illuminate\Database\Query\Builder::truncate();
=======
	 public function truncate(){
		 \Illuminate\Database\Query\Builder::truncate();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Merge an array of where clauses and bindings.
	 *
	 * @param array  $wheres
	 * @param array  $bindings
	 * @return void
	 * @static 
	 */
<<<<<<< HEAD
	 public static function mergeWheres($wheres, $bindings){
		 Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
=======
	 public function mergeWheres($wheres, $bindings){
		 \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
	 }

	/**
	 * Get a copy of the where clauses and bindings in an array.
	 *
	 * @return array
	 * @static 
	 */
	 public function getAndResetWheres(){
		return \Illuminate\Database\Query\Builder::getAndResetWheres();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a raw database expression.
	 *
	 * @param mixed  $value
	 * @return \Illuminate\Database\Query\Expression
	 * @static 
	 */
<<<<<<< HEAD
	 public static function raw($value){
		return Illuminate\Database\Query\Builder::raw($value);
=======
	 public function raw($value){
		return \Illuminate\Database\Query\Builder::raw($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current query value bindings.
	 *
	 * @return array
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getBindings(){
		return Illuminate\Database\Query\Builder::getBindings();
=======
	 public function getBindings(){
		return \Illuminate\Database\Query\Builder::getBindings();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the bindings on the query builder.
	 *
	 * @param array  $bindings
	 * @return void
	 * @static 
	 */
<<<<<<< HEAD
	 public static function setBindings($bindings){
		 Illuminate\Database\Query\Builder::setBindings($bindings);
=======
	 public function setBindings($bindings){
		 \Illuminate\Database\Query\Builder::setBindings($bindings);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Merge an array of bindings into our bindings.
	 *
	 * @param \Illuminate\Database\Query\Builder  $query
<<<<<<< HEAD
	 * @return \Illuminate\Database\Query\Builder
	 * @static 
	 */
	 public static function mergeBindings($query){
		return Illuminate\Database\Query\Builder::mergeBindings($query);
=======
	 * @return \Illuminate\Database\Query\Builder|static 
	 * @static 
	 */
	 public function mergeBindings($query){
		return \Illuminate\Database\Query\Builder::mergeBindings($query);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the database query processor instance.
	 *
	 * @return \Illuminate\Database\Query\Processors\Processor
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getProcessor(){
		return Illuminate\Database\Query\Builder::getProcessor();
=======
	 public function getProcessor(){
		return \Illuminate\Database\Query\Builder::getProcessor();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the query grammar instance.
	 *
	 * @return \Illuminate\Database\Grammar
	 * @static 
	 */
<<<<<<< HEAD
	 public static function getGrammar(){
		return Illuminate\Database\Query\Builder::getGrammar();
	 }

}

class Event extends Illuminate\Support\Facades\Event{
=======
	 public function getGrammar(){
		return \Illuminate\Database\Query\Builder::getGrammar();
	 }

 }
}

namespace  {
 class Event extends Illuminate\Support\Facades\Event{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new event dispatcher instance.
	 *
	 * @param \Illuminate\Container\Container  $container
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($container = null){
		 Illuminate\Events\Dispatcher::__construct($container);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($container = null){
		 \Illuminate\Events\Dispatcher::__construct($container);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param string  $event
	 * @param mixed   $listener
	 * @param int     $priority
	 * @return void
	 * @static 
	 */
	 public static function listen($event, $listener, $priority = 0){
<<<<<<< HEAD
		 Illuminate\Events\Dispatcher::listen($event, $listener, $priority);
=======
		 \Illuminate\Events\Dispatcher::listen($event, $listener, $priority);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a given event has listeners.
	 *
	 * @param string  $eventName
	 * @return bool
	 * @static 
	 */
	 public static function hasListeners($eventName){
<<<<<<< HEAD
		return Illuminate\Events\Dispatcher::hasListeners($eventName);
=======
		return \Illuminate\Events\Dispatcher::hasListeners($eventName);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a queued event and payload.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return void
	 * @static 
	 */
	 public static function queue($event, $payload = array()){
<<<<<<< HEAD
		 Illuminate\Events\Dispatcher::queue($event, $payload);
=======
		 \Illuminate\Events\Dispatcher::queue($event, $payload);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an event subscriber with the dispatcher.
	 *
	 * @param string  $subscriber
	 * @return void
	 * @static 
	 */
	 public static function subscribe($subscriber){
<<<<<<< HEAD
		 Illuminate\Events\Dispatcher::subscribe($subscriber);
=======
		 \Illuminate\Events\Dispatcher::subscribe($subscriber);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Fire an event until the first non-null response is returned.
	 *
	 * @param string  $event
	 * @param array   $payload
	 * @return mixed
	 * @static 
	 */
	 public static function until($event, $payload = array()){
<<<<<<< HEAD
		return Illuminate\Events\Dispatcher::until($event, $payload);
=======
		return \Illuminate\Events\Dispatcher::until($event, $payload);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flush a set of queued events.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function flush($event){
<<<<<<< HEAD
		 Illuminate\Events\Dispatcher::flush($event);
=======
		 \Illuminate\Events\Dispatcher::flush($event);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Fire an event and call the listeners.
	 *
	 * @param string  $event
	 * @param mixed   $payload
<<<<<<< HEAD
	 * @param bool    $halt
	 * @return array|null
	 * @static 
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		return Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
=======
	 * @param boolean $halt
	 * @return void
	 * @static 
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		 \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the listeners for a given event name.
	 *
	 * @param string  $eventName
	 * @return array
	 * @static 
	 */
	 public static function getListeners($eventName){
<<<<<<< HEAD
		return Illuminate\Events\Dispatcher::getListeners($eventName);
=======
		return \Illuminate\Events\Dispatcher::getListeners($eventName);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an event listener with the dispatcher.
	 *
	 * @param mixed   $listener
<<<<<<< HEAD
	 * @return mixed
	 * @static 
	 */
	 public static function makeListener($listener){
		return Illuminate\Events\Dispatcher::makeListener($listener);
=======
	 * @return void
	 * @static 
	 */
	 public static function makeListener($listener){
		 \Illuminate\Events\Dispatcher::makeListener($listener);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a class based listener using the IoC container.
	 *
	 * @param mixed    $listener
	 * @return Closure
	 * @static 
	 */
	 public static function createClassListener($listener){
<<<<<<< HEAD
		return Illuminate\Events\Dispatcher::createClassListener($listener);
=======
		return \Illuminate\Events\Dispatcher::createClassListener($listener);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Remove a set of listeners from the dispatcher.
	 *
	 * @param string  $event
	 * @return void
	 * @static 
	 */
	 public static function forget($event){
<<<<<<< HEAD
		 Illuminate\Events\Dispatcher::forget($event);
	 }

}

class File extends Illuminate\Support\Facades\File{
=======
		 \Illuminate\Events\Dispatcher::forget($event);
	 }

 }
}

namespace  {
 class File extends Illuminate\Support\Facades\File{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Determine if a file exists.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function exists($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::exists($path);
=======
		return \Illuminate\Filesystem\Filesystem::exists($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the contents of a file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function get($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::get($path);
=======
		return \Illuminate\Filesystem\Filesystem::get($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the contents of a remote file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function getRemote($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::getRemote($path);
=======
		return \Illuminate\Filesystem\Filesystem::getRemote($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the returned value of a file.
	 *
	 * @param string  $path
	 * @return mixed
	 * @static 
	 */
	 public static function getRequire($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::getRequire($path);
=======
		return \Illuminate\Filesystem\Filesystem::getRequire($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Require the given file once.
	 *
	 * @param string  $file
	 * @return void
	 * @static 
	 */
	 public static function requireOnce($file){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::requireOnce($file);
=======
		 \Illuminate\Filesystem\Filesystem::requireOnce($file);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Write the contents of a file.
	 *
	 * @param string  $path
	 * @param string  $contents
	 * @return int
	 * @static 
	 */
	 public static function put($path, $contents){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::put($path, $contents);
=======
		return \Illuminate\Filesystem\Filesystem::put($path, $contents);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Append to a file.
	 *
	 * @param string  $path
	 * @param string  $data
	 * @return int
	 * @static 
	 */
	 public static function append($path, $data){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::append($path, $data);
=======
		return \Illuminate\Filesystem\Filesystem::append($path, $data);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Delete the file at a given path.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function delete($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::delete($path);
=======
		return \Illuminate\Filesystem\Filesystem::delete($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Move a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return void
	 * @static 
	 */
	 public static function move($path, $target){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::move($path, $target);
=======
		 \Illuminate\Filesystem\Filesystem::move($path, $target);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Copy a file to a new location.
	 *
	 * @param string  $path
	 * @param string  $target
	 * @return void
	 * @static 
	 */
	 public static function copy($path, $target){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::copy($path, $target);
=======
		 \Illuminate\Filesystem\Filesystem::copy($path, $target);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Extract the file extension from a file path.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function extension($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::extension($path);
=======
		return \Illuminate\Filesystem\Filesystem::extension($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the file type of a given file.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function type($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::type($path);
=======
		return \Illuminate\Filesystem\Filesystem::type($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the file size of a given file.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function size($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::size($path);
=======
		return \Illuminate\Filesystem\Filesystem::size($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the file's last modification time.
	 *
	 * @param string  $path
	 * @return int
	 * @static 
	 */
	 public static function lastModified($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::lastModified($path);
=======
		return \Illuminate\Filesystem\Filesystem::lastModified($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given path is a directory.
	 *
	 * @param string  $directory
	 * @return bool
	 * @static 
	 */
	 public static function isDirectory($directory){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::isDirectory($directory);
=======
		return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given path is writable.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isWritable($path){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::isWritable($path);
=======
		return \Illuminate\Filesystem\Filesystem::isWritable($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given path is a file.
	 *
	 * @param string  $file
	 * @return bool
	 * @static 
	 */
	 public static function isFile($file){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::isFile($file);
=======
		return \Illuminate\Filesystem\Filesystem::isFile($file);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Find path names matching a given pattern.
	 *
	 * @param string  $pattern
	 * @param int     $flags
	 * @return array
	 * @static 
	 */
	 public static function glob($pattern, $flags = 0){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
=======
		return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get an array of all files in a directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function files($directory){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::files($directory);
=======
		return \Illuminate\Filesystem\Filesystem::files($directory);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the files from the given directory (recursive).
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function allFiles($directory){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::allFiles($directory);
=======
		return \Illuminate\Filesystem\Filesystem::allFiles($directory);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the directories within a given directory.
	 *
	 * @param string  $directory
	 * @return array
	 * @static 
	 */
	 public static function directories($directory){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::directories($directory);
=======
		return \Illuminate\Filesystem\Filesystem::directories($directory);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a directory.
	 *
	 * @param string  $path
	 * @param int     $mode
	 * @param bool    $recursive
	 * @return bool
	 * @static 
	 */
	 public static function makeDirectory($path, $mode = 511, $recursive = false){
<<<<<<< HEAD
		return Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive);
=======
		return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Copy a directory from one location to another.
	 *
	 * @param string  $directory
	 * @param string  $destination
	 * @param int     $options
	 * @return void
	 * @static 
	 */
	 public static function copyDirectory($directory, $destination, $options = null){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
=======
		 \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Recursively delete a directory.
	 * 
	 * The directory itself may be optionally preserved.
	 *
	 * @param string  $directory
	 * @param bool    $preserve
	 * @return void
	 * @static 
	 */
	 public static function deleteDirectory($directory, $preserve = false){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
=======
		 \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Empty the specified directory of all files and folders.
	 *
	 * @param string  $directory
	 * @return void
	 * @static 
	 */
	 public static function cleanDirectory($directory){
<<<<<<< HEAD
		 Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
	 }

}

class Form extends Illuminate\Support\Facades\Form{
=======
		 \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
	 }

 }
}

namespace  {
 class Form extends Illuminate\Support\Facades\Form{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new form builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
	 * @param \Illuminate\Html\HtmlBuilder  $html
	 * @param string  $csrfToken
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($html, $url, $csrfToken){
		 Illuminate\Html\FormBuilder::__construct($html, $url, $csrfToken);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($html, $url, $csrfToken){
		 \Illuminate\Html\FormBuilder::__construct($html, $url, $csrfToken);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Open up a new HTML form.
	 *
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function open($options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::open($options);
=======
		return \Illuminate\Html\FormBuilder::open($options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new model based form builder.
	 *
	 * @param mixed  $model
	 * @param array  $options
	 * @return string
	 * @static 
	 */
	 public static function model($model, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::model($model, $options);
=======
		return \Illuminate\Html\FormBuilder::model($model, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Close the current form.
	 *
	 * @return string
	 * @static 
	 */
	 public static function close(){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::close();
=======
		return \Illuminate\Html\FormBuilder::close();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a hidden field with the current CSRF token.
	 *
	 * @return string
	 * @static 
	 */
	 public static function token(){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::token();
=======
		return \Illuminate\Html\FormBuilder::token();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a form label element.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function label($name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::label($name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::label($name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a form input field.
	 *
	 * @param string  $type
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function input($type, $name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::input($type, $name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::input($type, $name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a text input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function text($name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::text($name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::text($name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a password input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function password($name, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::password($name, $options);
=======
		return \Illuminate\Html\FormBuilder::password($name, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a hidden input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function hidden($name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::hidden($name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::hidden($name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create an e-mail input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function email($name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::email($name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::email($name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a file input field.
	 *
	 * @param string  $name
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function file($name, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::file($name, $options);
=======
		return \Illuminate\Html\FormBuilder::file($name, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a textarea input field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function textarea($name, $value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::textarea($name, $value, $options);
=======
		return \Illuminate\Html\FormBuilder::textarea($name, $value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a select box field.
	 *
	 * @param string  $name
	 * @param array   $list
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function select($name, $list = array(), $selected = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::select($name, $list, $selected, $options);
	 }

	/**
	 * Create a select range field.
	 *
	 * @param string  $name
	 * @param string  $begin
	 * @param string  $end
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
		return Illuminate\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
	 }

	/**
	 * Create a select year field.
	 *
	 * @param string  $name
	 * @param string  $begin
	 * @param string  $end
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectYear(){
		return Illuminate\Html\FormBuilder::selectYear();
	 }

	/**
	 * Create a select month field.
	 *
	 * @param string  $name
	 * @param string  $selected
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function selectMonth($name, $selected = null, $options = array()){
		return Illuminate\Html\FormBuilder::selectMonth($name, $selected, $options);
=======
		return \Illuminate\Html\FormBuilder::select($name, $list, $selected, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a checkbox input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function checkbox($name, $value = 1, $checked = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::checkbox($name, $value, $checked, $options);
=======
		return \Illuminate\Html\FormBuilder::checkbox($name, $value, $checked, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a radio button input field.
	 *
	 * @param string  $name
	 * @param mixed   $value
	 * @param bool    $checked
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function radio($name, $value = null, $checked = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::radio($name, $value, $checked, $options);
=======
		return \Illuminate\Html\FormBuilder::radio($name, $value, $checked, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a HTML reset input element.
	 *
	 * @param string  $value
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function reset($value, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::reset($value, $attributes);
=======
		return \Illuminate\Html\FormBuilder::reset($value, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a HTML image input element.
	 *
	 * @param string  $url
	 * @param string  $name
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $name = null, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::image($url, $name, $attributes);
=======
		return \Illuminate\Html\FormBuilder::image($url, $name, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a submit button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function submit($value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::submit($value, $options);
=======
		return \Illuminate\Html\FormBuilder::submit($value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a button element.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function button($value = null, $options = array()){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::button($value, $options);
=======
		return \Illuminate\Html\FormBuilder::button($value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom form macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
<<<<<<< HEAD
		 Illuminate\Html\FormBuilder::macro($name, $macro);
=======
		 \Illuminate\Html\FormBuilder::macro($name, $macro);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the value that should be assigned to the field.
	 *
	 * @param string  $name
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getValueAttribute($name, $value = null){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::getValueAttribute($name, $value);
	 }

	/**
	 * Get a value from the session's old input.
	 *
	 * @param string  $name
	 * @return string
	 * @static 
	 */
	 public static function old($name){
		return Illuminate\Html\FormBuilder::old($name);
	 }

	/**
	 * Determine if the old input is empty.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function oldInputIsEmpty(){
		return Illuminate\Html\FormBuilder::oldInputIsEmpty();
=======
		return \Illuminate\Html\FormBuilder::getValueAttribute($name, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the session store implementation.
	 *
	 * @return \Illuminate\Session\Store  $session
	 * @static 
	 */
	 public static function getSessionStore(){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::getSessionStore();
=======
		return \Illuminate\Html\FormBuilder::getSessionStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return \Illuminate\Html\FormBuilder
	 * @static 
	 */
	 public static function setSessionStore($session){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::setSessionStore($session);
=======
		return \Illuminate\Html\FormBuilder::setSessionStore($session);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically handle calls to the form builder.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Html\FormBuilder::__call($method, $parameters);
	 }

}

class Hash extends Illuminate\Support\Facades\Hash{
=======
		return \Illuminate\Html\FormBuilder::__call($method, $parameters);
	 }

 }
}

namespace  {
 class Hash extends Illuminate\Support\Facades\Hash{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Hash the given value.
	 *
	 * @param string  $value
	 * @param array   $options
	 * @return string
	 * @static 
	 */
	 public static function make($value, $options = array()){
<<<<<<< HEAD
		return Illuminate\Hashing\BcryptHasher::make($value, $options);
=======
		return \Illuminate\Hashing\BcryptHasher::make($value, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param string  $value
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function check($value, $hashedValue, $options = array()){
<<<<<<< HEAD
		return Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
=======
		return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Check if the given hash has been hashed using the given options.
	 *
	 * @param string  $hashedValue
	 * @param array   $options
	 * @return bool
	 * @static 
	 */
	 public static function needsRehash($hashedValue, $options = array()){
<<<<<<< HEAD
		return Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	 }

}

class Html extends Illuminate\Support\Facades\HTML{
=======
		return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	 }

 }
}

namespace  {
 class Html extends Illuminate\Support\Facades\HTML{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new HTML builder instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $url
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($url = null){
		 Illuminate\Html\HtmlBuilder::__construct($url);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($url = null){
		 \Illuminate\Html\HtmlBuilder::__construct($url);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom HTML macro.
	 *
	 * @param string    $name
	 * @param callable  $macro
	 * @return void
	 * @static 
	 */
	 public static function macro($name, $macro){
<<<<<<< HEAD
		 Illuminate\Html\HtmlBuilder::macro($name, $macro);
=======
		 \Illuminate\Html\HtmlBuilder::macro($name, $macro);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Convert an HTML string to entities.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function entities($value){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::entities($value);
=======
		return \Illuminate\Html\HtmlBuilder::entities($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Convert entities to HTML characters.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function decode($value){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::decode($value);
=======
		return \Illuminate\Html\HtmlBuilder::decode($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a link to a JavaScript file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function script($url, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::script($url, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::script($url, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a link to a CSS file.
	 *
	 * @param string  $url
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function style($url, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::style($url, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::style($url, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate an HTML image element.
	 *
	 * @param string  $url
	 * @param string  $alt
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function image($url, $alt = null, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function link($url, $title = null, $attributes = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
=======
		return \Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTTPS HTML link.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function secureLink($url, $title = null, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
=======
		return \Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTTPS HTML link to an asset.
	 *
	 * @param string  $url
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkSecureAsset($url, $title = null, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTML link to a named route.
	 *
	 * @param string  $name
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTML link to a controller action.
	 *
	 * @param string  $action
	 * @param string  $title
	 * @param array   $parameters
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a HTML link to an email address.
	 *
	 * @param string  $email
	 * @param string  $title
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function mailto($email, $title = null, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
	 *
	 * @param string  $email
	 * @return string
	 * @static 
	 */
	 public static function email($email){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::email($email);
=======
		return \Illuminate\Html\HtmlBuilder::email($email);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate an ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ol($list, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::ol($list, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::ol($list, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate an un-ordered list of items.
	 *
	 * @param array   $list
	 * @param array   $attributes
	 * @return string
	 * @static 
	 */
	 public static function ul($list, $attributes = array()){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::ul($list, $attributes);
=======
		return \Illuminate\Html\HtmlBuilder::ul($list, $attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Build an HTML attribute string from an array.
	 *
	 * @param array  $attributes
	 * @return string
	 * @static 
	 */
	 public static function attributes($attributes){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::attributes($attributes);
=======
		return \Illuminate\Html\HtmlBuilder::attributes($attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Obfuscate a string to prevent spam-bots from sniffing it.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function obfuscate($value){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::obfuscate($value);
=======
		return \Illuminate\Html\HtmlBuilder::obfuscate($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically handle calls to the html class.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Html\HtmlBuilder::__call($method, $parameters);
	 }

}

class Input extends Illuminate\Support\Facades\Input{
=======
		return \Illuminate\Html\HtmlBuilder::__call($method, $parameters);
	 }

 }
}

namespace  {
 class Input extends Illuminate\Support\Facades\Input{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
<<<<<<< HEAD
		return Illuminate\Http\Request::instance();
=======
		return \Illuminate\Http\Request::instance();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
<<<<<<< HEAD
		return Illuminate\Http\Request::root();
=======
		return \Illuminate\Http\Request::root();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
<<<<<<< HEAD
		return Illuminate\Http\Request::url();
=======
		return \Illuminate\Http\Request::url();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
<<<<<<< HEAD
		return Illuminate\Http\Request::fullUrl();
=======
		return \Illuminate\Http\Request::fullUrl();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
<<<<<<< HEAD
		return Illuminate\Http\Request::path();
=======
		return \Illuminate\Http\Request::path();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::segment($index, $default);
=======
		return \Illuminate\Http\Request::segment($index, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
<<<<<<< HEAD
		return Illuminate\Http\Request::segments();
=======
		return \Illuminate\Http\Request::segments();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
<<<<<<< HEAD
		return Illuminate\Http\Request::is($pattern);
=======
		return \Illuminate\Http\Request::is($pattern);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
<<<<<<< HEAD
		return Illuminate\Http\Request::ajax();
=======
		return \Illuminate\Http\Request::ajax();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
<<<<<<< HEAD
		return Illuminate\Http\Request::secure();
=======
		return \Illuminate\Http\Request::secure();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
<<<<<<< HEAD
		return Illuminate\Http\Request::has($key);
=======
		return \Illuminate\Http\Request::has($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
<<<<<<< HEAD
		return Illuminate\Http\Request::all();
=======
		return \Illuminate\Http\Request::all();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::input($key, $default);
=======
		return \Illuminate\Http\Request::input($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
<<<<<<< HEAD
		return Illuminate\Http\Request::only($keys);
=======
		return \Illuminate\Http\Request::only($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
<<<<<<< HEAD
		return Illuminate\Http\Request::except($keys);
=======
		return \Illuminate\Http\Request::except($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::query($key, $default);
=======
		return \Illuminate\Http\Request::query($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::cookie($key, $default);
=======
		return \Illuminate\Http\Request::cookie($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 * @static 
	 */
	 public static function file($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::file($key, $default);
=======
		return \Illuminate\Http\Request::file($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
<<<<<<< HEAD
		return Illuminate\Http\Request::hasFile($key);
=======
		return \Illuminate\Http\Request::hasFile($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::header($key, $default);
=======
		return \Illuminate\Http\Request::header($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::server($key, $default);
=======
		return \Illuminate\Http\Request::server($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::old($key, $default);
=======
		return \Illuminate\Http\Request::old($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
<<<<<<< HEAD
		 Illuminate\Http\Request::flash($filter, $keys);
=======
		 \Illuminate\Http\Request::flash($filter, $keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
<<<<<<< HEAD
		 Illuminate\Http\Request::flashOnly($keys);
=======
		 \Illuminate\Http\Request::flashOnly($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
<<<<<<< HEAD
		 Illuminate\Http\Request::flashExcept($keys);
=======
		 \Illuminate\Http\Request::flashExcept($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
<<<<<<< HEAD
		 Illuminate\Http\Request::flush();
=======
		 \Illuminate\Http\Request::flush();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
<<<<<<< HEAD
		 Illuminate\Http\Request::merge($input);
=======
		 \Illuminate\Http\Request::merge($input);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
<<<<<<< HEAD
		 Illuminate\Http\Request::replace($input);
=======
		 \Illuminate\Http\Request::replace($input);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::json($key, $default);
=======
		return \Illuminate\Http\Request::json($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
<<<<<<< HEAD
		return Illuminate\Http\Request::isJson();
=======
		return \Illuminate\Http\Request::isJson();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
<<<<<<< HEAD
		return Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * Get the data format expected in the response.
	 *
	 * @return string
	 * @static 
	 */
	 public static function format($default = 'html'){
		return Illuminate\Http\Request::format($default);
=======
		return \Illuminate\Http\Request::wantsJson();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
<<<<<<< HEAD
		return Illuminate\Http\Request::getSessionStore();
=======
		return \Illuminate\Http\Request::getSessionStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
<<<<<<< HEAD
		 Illuminate\Http\Request::setSessionStore($session);
=======
		 \Illuminate\Http\Request::setSessionStore($session);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
<<<<<<< HEAD
		return Illuminate\Http\Request::hasSessionStore();
=======
		return \Illuminate\Http\Request::hasSessionStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
=======
		 \Symfony\Component\HttpFoundation\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
=======
		 \Symfony\Component\HttpFoundation\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::createFromGlobals();
=======
		return \Symfony\Component\HttpFoundation\Request::createFromGlobals();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
=======
		return \Symfony\Component\HttpFoundation\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
=======
		return \Symfony\Component\HttpFoundation\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::__toString();
=======
		return \Symfony\Component\HttpFoundation\Request::__toString();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
<<<<<<< HEAD
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedProxies();
	 }

	/**
	 * Sets a list of trusted host patterns.
	 * 
	 * You should only list the hosts you manage using regexs.
	 *
	 * @param array $hostPatterns A list of trusted host patterns
	 * @static 
	 */
	 public static function setTrustedHosts($hostPatterns){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * Gets the list of trusted host patterns.
	 *
	 * @return array An array of trusted host patterns.
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHosts();
=======
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
		 \Symfony\Component\HttpFoundation\Request::overrideGlobals();
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		 \Symfony\Component\HttpFoundation\Request::setTrustedProxies($proxies);
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
		return \Symfony\Component\HttpFoundation\Request::getTrustedProxies();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
=======
		 \Symfony\Component\HttpFoundation\Request::setTrustedHeaderName($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @param string $key The header key
	 * @return string The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHeaderName($key);
=======
		return \Symfony\Component\HttpFoundation\Request::getTrustedHeaderName($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Normalizes a query string.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @param string $qs Query string
	 * @return string A normalized query string for the Request
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::normalizeQueryString($qs);
=======
		return \Symfony\Component\HttpFoundation\Request::normalizeQueryString($qs);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
=======
		 \Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpMethodParameterOverride();
=======
		return \Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::get($key, $default, $deep);
=======
		return \Symfony\Component\HttpFoundation\Request::get($key, $default, $deep);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSession();
=======
		return \Symfony\Component\HttpFoundation\Request::getSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasPreviousSession();
=======
		return \Symfony\Component\HttpFoundation\Request::hasPreviousSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasSession();
=======
		return \Symfony\Component\HttpFoundation\Request::hasSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
=======
		 \Symfony\Component\HttpFoundation\Request::setSession($session);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIps();
=======
		return \Symfony\Component\HttpFoundation\Request::getClientIps();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the client IP address.
	 * 
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @return string The client IP address
	 * @see getClientIps()
	 * @see http://en.wikipedia.org/wiki/X-Forwarded-For
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIp();
=======
		return \Symfony\Component\HttpFoundation\Request::getClientIp();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScriptName();
=======
		return \Symfony\Component\HttpFoundation\Request::getScriptName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * 
	 * The path info always starts with a /.
	 * 
	 * Suppose this request is instantiated from /mysite on localhost:
	 * 
	 *  * http://localhost/mysite              returns an empty string
	 *  * http://localhost/mysite/about        returns '/about'
	 *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 *  * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPathInfo();
=======
		return \Symfony\Component\HttpFoundation\Request::getPathInfo();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * 
	 * Suppose that an index.php file instantiates this request object:
	 * 
	 *  * http://localhost/index.php         returns an empty string
	 *  * http://localhost/index.php/page    returns an empty string
	 *  * http://localhost/web/index.php     returns '/web'
	 *  * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBasePath();
=======
		return \Symfony\Component\HttpFoundation\Request::getBasePath();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBaseUrl();
=======
		return \Symfony\Component\HttpFoundation\Request::getBaseUrl();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScheme();
=======
		return \Symfony\Component\HttpFoundation\Request::getScheme();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the port on which the request is made.
	 * 
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Port" header must contain the client port.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPort();
=======
		return \Symfony\Component\HttpFoundation\Request::getPort();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUser();
=======
		return \Symfony\Component\HttpFoundation\Request::getUser();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPassword();
=======
		return \Symfony\Component\HttpFoundation\Request::getPassword();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUserInfo();
=======
		return \Symfony\Component\HttpFoundation\Request::getUserInfo();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getHttpHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestUri();
=======
		return \Symfony\Component\HttpFoundation\Request::getRequestUri();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * 
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @return string The scheme and HTTP host
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSchemeAndHttpHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUri();
=======
		return \Symfony\Component\HttpFoundation\Request::getUri();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUriForPath($path);
=======
		return \Symfony\Component\HttpFoundation\Request::getUriForPath($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getQueryString();
=======
		return \Symfony\Component\HttpFoundation\Request::getQueryString();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isSecure();
=======
		return \Symfony\Component\HttpFoundation\Request::isSecure();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
=======
		 \Symfony\Component\HttpFoundation\Request::setMethod($method);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request "intended" method.
	 * 
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * 
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * 
	 * The method is always an uppercased string.
	 *
	 * @return string The request method
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMethod();
=======
		return \Symfony\Component\HttpFoundation\Request::getMethod();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRealMethod();
=======
		return \Symfony\Component\HttpFoundation\Request::getRealMethod();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMimeType($format);
=======
		return \Symfony\Component\HttpFoundation\Request::getMimeType($format);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getFormat($mimeType);
=======
		return \Symfony\Component\HttpFoundation\Request::getFormat($mimeType);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
=======
		 \Symfony\Component\HttpFoundation\Request::setFormat($format, $mimeTypes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request format.
	 * 
	 * Here is the process to determine the format:
	 * 
	 *  * format defined by the user (with setRequestFormat())
	 *  * _format request parameter
	 *  * $default
	 *
	 * @param string $default The default format
	 * @return string The request format
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestFormat($default);
=======
		return \Symfony\Component\HttpFoundation\Request::getRequestFormat($default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
=======
		 \Symfony\Component\HttpFoundation\Request::setRequestFormat($format);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContentType();
=======
		return \Symfony\Component\HttpFoundation\Request::getContentType();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
=======
		 \Symfony\Component\HttpFoundation\Request::setDefaultLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
=======
		 \Symfony\Component\HttpFoundation\Request::setLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLocale();
=======
		return \Symfony\Component\HttpFoundation\Request::getLocale();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethod($method);
=======
		return \Symfony\Component\HttpFoundation\Request::isMethod($method);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethodSafe();
=======
		return \Symfony\Component\HttpFoundation\Request::isMethodSafe();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContent($asResource);
=======
		return \Symfony\Component\HttpFoundation\Request::getContent($asResource);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getETags();
=======
		return \Symfony\Component\HttpFoundation\Request::getETags();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isNoCache();
=======
		return \Symfony\Component\HttpFoundation\Request::isNoCache();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPreferredLanguage($locales);
=======
		return \Symfony\Component\HttpFoundation\Request::getPreferredLanguage($locales);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLanguages();
=======
		return \Symfony\Component\HttpFoundation\Request::getLanguages();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getCharsets();
=======
		return \Symfony\Component\HttpFoundation\Request::getCharsets();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getAcceptableContentTypes();
=======
		return \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Lang extends Illuminate\Support\Facades\Lang{
=======
		return \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest();
	 }

 }
}

namespace  {
 class Lang extends Illuminate\Support\Facades\Lang{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new translator instance.
	 *
	 * @param \Illuminate\Translation\LoaderInterface  $loader
	 * @param string  $locale
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($loader, $locale){
		 Illuminate\Translation\Translator::__construct($loader, $locale);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($loader, $locale){
		 \Illuminate\Translation\Translator::__construct($loader, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a translation exists.
	 *
	 * @param string  $key
	 * @param string  $locale
	 * @return bool
	 * @static 
	 */
	 public static function has($key, $locale = null){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::has($key, $locale);
=======
		return \Illuminate\Translation\Translator::has($key, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the translation for the given key.
	 *
	 * @param string  $key
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function get($key, $replace = array(), $locale = null){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::get($key, $replace, $locale);
=======
		return \Illuminate\Translation\Translator::get($key, $replace, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $key
	 * @param int     $number
	 * @param array   $replace
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function choice($key, $number, $replace = array(), $locale = null){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
=======
		return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the translation for a given key.
	 *
	 * @param string  $id
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
=======
		return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string  $id
	 * @param int     $number
	 * @param array   $parameters
	 * @param string  $domain
	 * @param string  $locale
	 * @return string
	 * @static 
	 */
	 public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
=======
		return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Load the specified language group.
	 *
	 * @param string  $namespace
	 * @param string  $group
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function load($namespace, $group, $locale){
<<<<<<< HEAD
		 Illuminate\Translation\Translator::load($namespace, $group, $locale);
=======
		 \Illuminate\Translation\Translator::load($namespace, $group, $locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string  $hint
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
<<<<<<< HEAD
		 Illuminate\Translation\Translator::addNamespace($namespace, $hint);
=======
		 \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string  $key
	 * @return array
	 * @static 
	 */
	 public static function parseKey($key){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::parseKey($key);
=======
		return \Illuminate\Translation\Translator::parseKey($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the message selector instance.
	 *
	 * @return \Symfony\Component\Translation\MessageSelector
	 * @static 
	 */
	 public static function getSelector(){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::getSelector();
=======
		return \Illuminate\Translation\Translator::getSelector();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the message selector instance.
	 *
	 * @param \Symfony\Component\Translation\MessageSelector  $selector
	 * @return void
	 * @static 
	 */
	 public static function setSelector($selector){
<<<<<<< HEAD
		 Illuminate\Translation\Translator::setSelector($selector);
=======
		 \Illuminate\Translation\Translator::setSelector($selector);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the language line loader implementation.
	 *
	 * @return \Illuminate\Translation\LoaderInterface
	 * @static 
	 */
	 public static function getLoader(){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::getLoader();
=======
		return \Illuminate\Translation\Translator::getLoader();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function locale(){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::locale();
=======
		return \Illuminate\Translation\Translator::locale();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the default locale being used.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
<<<<<<< HEAD
		return Illuminate\Translation\Translator::getLocale();
=======
		return \Illuminate\Translation\Translator::getLocale();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the default locale.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
<<<<<<< HEAD
		 Illuminate\Translation\Translator::setLocale($locale);
=======
		 \Illuminate\Translation\Translator::setLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string  $key
	 * @param array   $parsed
	 * @return void
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
<<<<<<< HEAD
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Translation\Translator::setParsedKey($key, $parsed);
	 }

}

class Log extends Illuminate\Support\Facades\Log{
=======
		 \Illuminate\Support\NamespacedItemResolver::setParsedKey($key, $parsed);
	 }

 }
}

namespace  {
 class Log extends Illuminate\Support\Facades\Log{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new log writer instance.
	 *
	 * @param \Monolog\Logger  $monolog
	 * @param \Illuminate\Events\Dispatcher  $dispatcher
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($monolog, $dispatcher = null){
		 Illuminate\Log\Writer::__construct($monolog, $dispatcher);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($monolog, $dispatcher = null){
		 \Illuminate\Log\Writer::__construct($monolog, $dispatcher);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a file log handler.
	 *
	 * @param string  $path
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useFiles($path, $level = 'debug'){
<<<<<<< HEAD
		 Illuminate\Log\Writer::useFiles($path, $level);
=======
		 \Illuminate\Log\Writer::useFiles($path, $level);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a daily file log handler.
	 *
	 * @param string  $path
	 * @param int     $days
	 * @param string  $level
	 * @return void
	 * @static 
	 */
	 public static function useDailyFiles($path, $days = 0, $level = 'debug'){
<<<<<<< HEAD
		 Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
=======
		 \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the underlying Monolog instance.
	 *
	 * @return \Monolog\Logger
	 * @static 
	 */
	 public static function getMonolog(){
<<<<<<< HEAD
		return Illuminate\Log\Writer::getMonolog();
=======
		return \Illuminate\Log\Writer::getMonolog();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a new callback handler for when
	 * a log event is triggered.
	 *
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function listen($callback){
<<<<<<< HEAD
		 Illuminate\Log\Writer::listen($callback);
=======
		 \Illuminate\Log\Writer::listen($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getEventDispatcher(){
<<<<<<< HEAD
		return Illuminate\Log\Writer::getEventDispatcher();
=======
		return \Illuminate\Log\Writer::getEventDispatcher();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setEventDispatcher($dispatcher){
<<<<<<< HEAD
		 Illuminate\Log\Writer::setEventDispatcher($dispatcher);
=======
		 \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically handle error additions.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Log\Writer::__call($method, $parameters);
	 }

	/**
	 * Adds a log record at the DEBUG level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function debug($message, $context = array()){
		return Monolog\Logger::addDebug($message, $context);
	 }

	/**
	 * Adds a log record at the INFO level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function info($message, $context = array()){
		return Monolog\Logger::addInfo($message, $context);
	 }

	/**
	 * Adds a log record at the NOTICE level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function notice($message, $context = array()){
		return Monolog\Logger::addNotice($message, $context);
	 }

	/**
	 * Adds a log record at the WARNING level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function warning($message, $context = array()){
		return Monolog\Logger::addWarning($message, $context);
	 }

	/**
	 * Adds a log record at the ERROR level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function error($message, $context = array()){
		return Monolog\Logger::addError($message, $context);
	 }

	/**
	 * Adds a log record at the CRITICAL level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function critical($message, $context = array()){
		return Monolog\Logger::addCritical($message, $context);
	 }

	/**
	 * Adds a log record at the ALERT level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function alert($message, $context = array()){
		return Monolog\Logger::addAlert($message, $context);
	 }

	/**
	 * Adds a log record at the EMERGENCY level.
	 *
	 * @param string  $message The log message
	 * @param array   $context The log context
	 * @return Boolean Whether the record has been processed
	 * @static 
	 */
	 public static function emergency($message, $context = array()){
		return Monolog\Logger::addEmergency($message, $context);
	 }

}

class Mail extends Illuminate\Support\Facades\Mail{
=======
		return \Illuminate\Log\Writer::__call($method, $parameters);
	 }

 }
}

namespace  {
 class Mail extends Illuminate\Support\Facades\Mail{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new Mailer instance.
	 *
	 * @param \Illuminate\View\Environment  $views
	 * @param Swift_Mailer  $swift
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($views, $swift){
		 Illuminate\Mail\Mailer::__construct($views, $swift);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($views, $swift){
		 \Illuminate\Mail\Mailer::__construct($views, $swift);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the global from address and name.
	 *
	 * @param string  $address
	 * @param string  $name
	 * @return void
	 * @static 
	 */
	 public static function alwaysFrom($address, $name = null){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::alwaysFrom($address, $name);
=======
		 \Illuminate\Mail\Mailer::alwaysFrom($address, $name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Send a new message when only a plain part.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param mixed  $callback
	 * @return void
	 * @static 
	 */
	 public static function plain($view, $data, $callback){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::plain($view, $data, $callback);
=======
		 \Illuminate\Mail\Mailer::plain($view, $data, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Send a new message using a view.
	 *
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function send($view, $data, $callback){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::send($view, $data, $callback);
=======
		 \Illuminate\Mail\Mailer::send($view, $data, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function queue($view, $data, $callback, $queue = null){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
=======
		 \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @param string|array  $view
	 * @param array   $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function queueOn($queue, $view, $data, $callback){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
=======
		 \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @param string  $queue
	 * @return void
	 * @static 
	 */
	 public static function later($delay, $view, $data, $callback, $queue = null){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
=======
		 \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @param string  $queue
	 * @param int  $delay
	 * @param string|array  $view
	 * @param array  $data
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function laterOn($queue, $delay, $view, $data, $callback){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
=======
		 \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param \Illuminate\Queue\Jobs\Job  $job
	 * @param array  $data
	 * @return void
	 * @static 
	 */
	 public static function handleQueuedMessage($job, $data){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
=======
		 \Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Tell the mailer to not really send messages.
	 *
	 * @param bool  $value
	 * @return void
	 * @static 
	 */
	 public static function pretend($value = true){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::pretend($value);
=======
		 \Illuminate\Mail\Mailer::pretend($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the view environment instance.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewEnvironment(){
<<<<<<< HEAD
		return Illuminate\Mail\Mailer::getViewEnvironment();
=======
		return \Illuminate\Mail\Mailer::getViewEnvironment();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @return Swift_Mailer
	 * @static 
	 */
	 public static function getSwiftMailer(){
<<<<<<< HEAD
		return Illuminate\Mail\Mailer::getSwiftMailer();
=======
		return \Illuminate\Mail\Mailer::getSwiftMailer();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @param Swift_Mailer  $swift
	 * @return void
	 * @static 
	 */
	 public static function setSwiftMailer($swift){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::setSwiftMailer($swift);
=======
		 \Illuminate\Mail\Mailer::setSwiftMailer($swift);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the log writer instance.
	 *
	 * @param \Illuminate\Log\Writer  $logger
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setLogger($logger){
<<<<<<< HEAD
		return Illuminate\Mail\Mailer::setLogger($logger);
=======
		return \Illuminate\Mail\Mailer::setLogger($logger);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the queue manager instance.
	 *
	 * @param \Illuminate\Queue\QueueManager  $queue
	 * @return \Illuminate\Mail\Mailer
	 * @static 
	 */
	 public static function setQueue($queue){
<<<<<<< HEAD
		return Illuminate\Mail\Mailer::setQueue($queue);
=======
		return \Illuminate\Mail\Mailer::setQueue($queue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
<<<<<<< HEAD
		 Illuminate\Mail\Mailer::setContainer($container);
	 }

}

class Paginator extends Illuminate\Support\Facades\Paginator{
=======
		 \Illuminate\Mail\Mailer::setContainer($container);
	 }

 }
}

namespace  {
 class Paginator extends Illuminate\Support\Facades\Paginator{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new pagination environment.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @param \Illuminate\View\Environment  $view
	 * @param \Symfony\Component\Translation\TranslatorInterface  $trans
	 * @param string  $pageName
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		 Illuminate\Pagination\Environment::__construct($request, $view, $trans, $pageName);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		 \Illuminate\Pagination\Environment::__construct($request, $view, $trans, $pageName);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a new paginator instance.
	 *
	 * @param array  $items
	 * @param int    $total
	 * @param int    $perPage
	 * @return \Illuminate\Pagination\Paginator
	 * @static 
	 */
	 public static function make($items, $total, $perPage){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::make($items, $total, $perPage);
=======
		return \Illuminate\Pagination\Environment::make($items, $total, $perPage);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the pagination view.
	 *
	 * @param \Illuminate\Pagination\Paginator  $paginator
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function getPaginationView($paginator){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getPaginationView($paginator);
=======
		return \Illuminate\Pagination\Environment::getPaginationView($paginator);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the number of the current page.
	 *
	 * @return int
	 * @static 
	 */
	 public static function getCurrentPage(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getCurrentPage();
=======
		return \Illuminate\Pagination\Environment::getCurrentPage();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the number of the current page.
	 *
	 * @param int  $number
	 * @return void
	 * @static 
	 */
	 public static function setCurrentPage($number){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setCurrentPage($number);
=======
		 \Illuminate\Pagination\Environment::setCurrentPage($number);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the root URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getCurrentUrl(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getCurrentUrl();
=======
		return \Illuminate\Pagination\Environment::getCurrentUrl();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the base URL in use by the paginator.
	 *
	 * @param string  $baseUrl
	 * @return void
	 * @static 
	 */
	 public static function setBaseUrl($baseUrl){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setBaseUrl($baseUrl);
=======
		 \Illuminate\Pagination\Environment::setBaseUrl($baseUrl);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the input page parameter name used by the paginator.
	 *
	 * @param string  $pageName
	 * @return void
	 * @static 
	 */
	 public static function setPageName($pageName){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setPageName($pageName);
=======
		 \Illuminate\Pagination\Environment::setPageName($pageName);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the input page parameter name used by the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getPageName(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getPageName();
=======
		return \Illuminate\Pagination\Environment::getPageName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the name of the pagination view.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getViewName(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getViewName();
=======
		return \Illuminate\Pagination\Environment::getViewName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the name of the pagination view.
	 *
	 * @param string  $viewName
	 * @return void
	 * @static 
	 */
	 public static function setViewName($viewName){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setViewName($viewName);
=======
		 \Illuminate\Pagination\Environment::setViewName($viewName);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the locale of the paginator.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getLocale();
=======
		return \Illuminate\Pagination\Environment::getLocale();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the locale of the paginator.
	 *
	 * @param string  $locale
	 * @return void
	 * @static 
	 */
	 public static function setLocale($locale){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setLocale($locale);
=======
		 \Illuminate\Pagination\Environment::setLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the active request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getRequest();
=======
		return \Illuminate\Pagination\Environment::getRequest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the active request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setRequest($request);
=======
		 \Illuminate\Pagination\Environment::setRequest($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current view driver.
	 *
	 * @return \Illuminate\View\Environment
	 * @static 
	 */
	 public static function getViewDriver(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getViewDriver();
=======
		return \Illuminate\Pagination\Environment::getViewDriver();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current view driver.
	 *
	 * @param \Illuminate\View\Environment  $view
	 * @return void
	 * @static 
	 */
	 public static function setViewDriver($view){
<<<<<<< HEAD
		 Illuminate\Pagination\Environment::setViewDriver($view);
=======
		 \Illuminate\Pagination\Environment::setViewDriver($view);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the translator instance.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
<<<<<<< HEAD
		return Illuminate\Pagination\Environment::getTranslator();
	 }

}

class Queue extends Illuminate\Support\Facades\Queue{
=======
		return \Illuminate\Pagination\Environment::getTranslator();
	 }

 }
}

namespace  {
 class Password extends Illuminate\Support\Facades\Password{
	/**
	 * Create a new password broker instance.
	 *
	 * @param \Illuminate\Auth\Reminders\ReminderRepositoryInterface  $reminders
	 * @param \Illuminate\Auth\UserProviderInterface  $users
	 * @param \Illuminate\Routing\Redirector  $redirect
	 * @param \Illuminate\Mail\Mailer  $mailer
	 * @param string  $reminderView
	 * @return self 
	 * @static 
	 */
	 public static function __construct($reminders, $users, $redirect, $mailer, $reminderView){
		 \Illuminate\Auth\Reminders\PasswordBroker::__construct($reminders, $users, $redirect, $mailer, $reminderView);
	 }

	/**
	 * Send a password reminder to a user.
	 *
	 * @param array    $credentials
	 * @param Closure  $callback
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function remind($credentials, $callback = null){
		return \Illuminate\Auth\Reminders\PasswordBroker::remind($credentials, $callback);
	 }

	/**
	 * Send the password reminder e-mail.
	 *
	 * @param \Illuminate\Auth\Reminders\RemindableInterface  $user
	 * @param string   $token
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function sendReminder($user, $token, $callback = null){
		 \Illuminate\Auth\Reminders\PasswordBroker::sendReminder($user, $token, $callback);
	 }

	/**
	 * Reset the password for the given token.
	 *
	 * @param array    $credentials
	 * @param Closure  $callback
	 * @return mixed
	 * @static 
	 */
	 public static function reset($credentials, $callback){
		return \Illuminate\Auth\Reminders\PasswordBroker::reset($credentials, $callback);
	 }

	/**
	 * Get the user for the given credentials.
	 *
	 * @param array  $credentials
	 * @return \Illuminate\Auth\Reminders\RemindableInterface
	 * @static 
	 */
	 public static function getUser($credentials){
		return \Illuminate\Auth\Reminders\PasswordBroker::getUser($credentials);
	 }

 }
}

namespace  {
 class Queue extends Illuminate\Support\Facades\Queue{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new queue manager instance.
	 *
	 * @param \Illuminate\Foundation\Application  $app
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		 Illuminate\Queue\QueueManager::__construct($app);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		 \Illuminate\Queue\QueueManager::__construct($app);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Resolve a queue connection instance.
	 *
	 * @param string  $name
	 * @return \Illuminate\Queue\QueueInterface
	 * @static 
	 */
	 public static function connection($name = null){
<<<<<<< HEAD
		return Illuminate\Queue\QueueManager::connection($name);
=======
		return \Illuminate\Queue\QueueManager::connection($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string   $driver
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addConnector($driver, $resolver){
<<<<<<< HEAD
		 Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
=======
		 \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically pass calls to the default connection.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Queue\QueueManager::__call($method, $parameters);
=======
		return \Illuminate\Queue\QueueManager::__call($method, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string  $job
	 * @param mixed   $data
	 * @param string  $queue
<<<<<<< HEAD
	 * @return mixed
	 * @static 
	 */
	 public static function push($job, $data = '', $queue = null){
		return Illuminate\Queue\SyncQueue::push($job, $data, $queue);
=======
	 * @return void
	 * @static 
	 */
	 public static function push($job, $data = '', $queue = null){
		 \Illuminate\Queue\QueueInterface::push($job, $data, $queue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param int     $delay
	 * @param string  $job
	 * @param mixed   $data
	 * @param string  $queue
<<<<<<< HEAD
	 * @return mixed
	 * @static 
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		return Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
=======
	 * @return void
	 * @static 
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		 \Illuminate\Queue\QueueInterface::later($delay, $job, $data, $queue);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string  $queue
<<<<<<< HEAD
	 * @return \Illuminate\Queue\Jobs\Job|null
	 * @static 
	 */
	 public static function pop($queue = null){
		return Illuminate\Queue\SyncQueue::pop($queue);
	 }

	/**
	 * Marshal a push queue request and fire the job.
	 *
	 * @return Illuminate\Http\Response
	 * @static 
	 */
	 public static function marshal(){
		//Method inherited from Illuminate\Queue\Queue
		return Illuminate\Queue\SyncQueue::marshal();
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::setContainer($container);
	 }

}

class Redirect extends Illuminate\Support\Facades\Redirect{
=======
	 * @return \Illuminate\Queue\Jobs\Job|nul
	 * @static 
	 */
	 public static function pop($queue = null){
		return \Illuminate\Queue\QueueInterface::pop($queue);
	 }

 }
}

namespace  {
 class Redirect extends Illuminate\Support\Facades\Redirect{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new Redirector instance.
	 *
	 * @param \Illuminate\Routing\UrlGenerator  $generator
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($generator){
		 Illuminate\Routing\Redirector::__construct($generator);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($generator){
		 \Illuminate\Routing\Redirector::__construct($generator);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the "home" route.
	 *
	 * @param int  $status
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function home($status = 302){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::home($status);
=======
		return \Illuminate\Routing\Redirector::home($status);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the previous location.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function back($status = 302, $headers = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::back($status, $headers);
=======
		return \Illuminate\Routing\Redirector::back($status, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the current URI.
	 *
	 * @param int    $status
	 * @param array  $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function refresh($status = 302, $headers = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::refresh($status, $headers);
=======
		return \Illuminate\Routing\Redirector::refresh($status, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function guest($path, $status = 302, $headers = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
=======
		return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @param string  $default
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function intended($default, $status = 302, $headers = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
=======
		return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @param bool    $secure
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function to($path, $status = 302, $headers = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
=======
		return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to the given HTTPS path.
	 *
	 * @param string  $path
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function secure($path, $status = 302, $headers = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::secure($path, $status, $headers);
=======
		return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @param string  $route
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function route($route, $parameters = array(), $status = 302, $headers = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
=======
		return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @param string  $action
	 * @param array   $parameters
	 * @param int     $status
	 * @param array   $headers
	 * @return \Illuminate\Http\RedirectResponse
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $status = 302, $headers = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
=======
		return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL generator instance.
	 *
	 * @return \Illuminate\Routing\UrlGenerator
	 * @static 
	 */
	 public static function getUrlGenerator(){
<<<<<<< HEAD
		return Illuminate\Routing\Redirector::getUrlGenerator();
=======
		return \Illuminate\Routing\Redirector::getUrlGenerator();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the active session store.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSession($session){
<<<<<<< HEAD
		 Illuminate\Routing\Redirector::setSession($session);
	 }

}

class Redis extends Illuminate\Support\Facades\Redis{
=======
		 \Illuminate\Routing\Redirector::setSession($session);
	 }

 }
}

namespace  {
 class Redis extends Illuminate\Support\Facades\Redis{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new Redis connection instance.
	 *
	 * @param array  $servers
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($servers = array()){
		 Illuminate\Redis\Database::__construct($servers);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($servers = array()){
		 \Illuminate\Redis\Database::__construct($servers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a specific Redis connection instance.
	 *
	 * @param string  $name
	 * @return \Predis\Connection\SingleConnectionInterface
	 * @static 
	 */
	 public static function connection($name = 'default'){
<<<<<<< HEAD
		return Illuminate\Redis\Database::connection($name);
=======
		return \Illuminate\Redis\Database::connection($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Run a command against the Redis database.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function command($method, $parameters = array()){
<<<<<<< HEAD
		return Illuminate\Redis\Database::command($method, $parameters);
=======
		return \Illuminate\Redis\Database::command($method, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Dynamically make a Redis command.
	 *
	 * @param string  $method
	 * @param array   $parameters
	 * @return mixed
	 * @static 
	 */
	 public static function __call($method, $parameters){
<<<<<<< HEAD
		return Illuminate\Redis\Database::__call($method, $parameters);
	 }

}

class Request extends Illuminate\Support\Facades\Request{
=======
		return \Illuminate\Redis\Database::__call($method, $parameters);
	 }

 }
}

namespace  {
 class Request extends Illuminate\Support\Facades\Request{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Return the Request instance.
	 *
	 * @return \Illuminate\Http\Request
	 * @static 
	 */
	 public static function instance(){
<<<<<<< HEAD
		return Illuminate\Http\Request::instance();
=======
		return \Illuminate\Http\Request::instance();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the root URL for the application.
	 *
	 * @return string
	 * @static 
	 */
	 public static function root(){
<<<<<<< HEAD
		return Illuminate\Http\Request::root();
=======
		return \Illuminate\Http\Request::root();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL (no query string) for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function url(){
<<<<<<< HEAD
		return Illuminate\Http\Request::url();
=======
		return \Illuminate\Http\Request::url();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the full URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function fullUrl(){
<<<<<<< HEAD
		return Illuminate\Http\Request::fullUrl();
=======
		return \Illuminate\Http\Request::fullUrl();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current path info for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function path(){
<<<<<<< HEAD
		return Illuminate\Http\Request::path();
=======
		return \Illuminate\Http\Request::path();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a segment from the URI (1 based index).
	 *
	 * @param string  $index
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function segment($index, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::segment($index, $default);
=======
		return \Illuminate\Http\Request::segment($index, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the segments for the request path.
	 *
	 * @return array
	 * @static 
	 */
	 public static function segments(){
<<<<<<< HEAD
		return Illuminate\Http\Request::segments();
=======
		return \Illuminate\Http\Request::segments();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current request URI matches a pattern.
	 *
	 * @param string  $pattern
	 * @return bool
	 * @static 
	 */
	 public static function is($pattern){
<<<<<<< HEAD
		return Illuminate\Http\Request::is($pattern);
=======
		return \Illuminate\Http\Request::is($pattern);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is the result of an AJAX call.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function ajax(){
<<<<<<< HEAD
		return Illuminate\Http\Request::ajax();
=======
		return \Illuminate\Http\Request::ajax();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is over HTTPS.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function secure(){
<<<<<<< HEAD
		return Illuminate\Http\Request::secure();
=======
		return \Illuminate\Http\Request::secure();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request contains a given input item.
	 *
	 * @param string|array  $key
	 * @return bool
	 * @static 
	 */
	 public static function has($key){
<<<<<<< HEAD
		return Illuminate\Http\Request::has($key);
=======
		return \Illuminate\Http\Request::has($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the input and files for the request.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
<<<<<<< HEAD
		return Illuminate\Http\Request::all();
=======
		return \Illuminate\Http\Request::all();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve an input item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function input($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::input($key, $default);
=======
		return \Illuminate\Http\Request::input($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a subset of the items from the input data.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function only($keys){
<<<<<<< HEAD
		return Illuminate\Http\Request::only($keys);
=======
		return \Illuminate\Http\Request::only($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the input except for a specified array of items.
	 *
	 * @param array  $keys
	 * @return array
	 * @static 
	 */
	 public static function except($keys){
<<<<<<< HEAD
		return Illuminate\Http\Request::except($keys);
=======
		return \Illuminate\Http\Request::except($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a query string item from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function query($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::query($key, $default);
=======
		return \Illuminate\Http\Request::query($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a cookie from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::cookie($key, $default);
=======
		return \Illuminate\Http\Request::cookie($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a file from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return \Symfony\Component\HttpFoundation\File\UploadedFile
	 * @static 
	 */
	 public static function file($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::file($key, $default);
=======
		return \Illuminate\Http\Request::file($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the uploaded data contains a file.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasFile($key){
<<<<<<< HEAD
		return Illuminate\Http\Request::hasFile($key);
=======
		return \Illuminate\Http\Request::hasFile($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a header from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function header($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::header($key, $default);
=======
		return \Illuminate\Http\Request::header($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve a server variable from the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return string
	 * @static 
	 */
	 public static function server($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::server($key, $default);
=======
		return \Illuminate\Http\Request::server($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve an old input item.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function old($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::old($key, $default);
=======
		return \Illuminate\Http\Request::old($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash the input for the current request to the session.
	 *
	 * @param string $filter
	 * @param array  $keys
	 * @return void
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
<<<<<<< HEAD
		 Illuminate\Http\Request::flash($filter, $keys);
=======
		 \Illuminate\Http\Request::flash($filter, $keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashOnly($keys){
<<<<<<< HEAD
		 Illuminate\Http\Request::flashOnly($keys);
=======
		 \Illuminate\Http\Request::flashOnly($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash only some of the input to the session.
	 *
	 * @param dynamic  string
	 * @return void
	 * @static 
	 */
	 public static function flashExcept($keys){
<<<<<<< HEAD
		 Illuminate\Http\Request::flashExcept($keys);
=======
		 \Illuminate\Http\Request::flashExcept($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flush all of the old input from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
<<<<<<< HEAD
		 Illuminate\Http\Request::flush();
=======
		 \Illuminate\Http\Request::flush();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Merge new input into the current request's input array.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function merge($input){
<<<<<<< HEAD
		 Illuminate\Http\Request::merge($input);
=======
		 \Illuminate\Http\Request::merge($input);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Replace the input for the current request.
	 *
	 * @param array  $input
	 * @return void
	 * @static 
	 */
	 public static function replace($input){
<<<<<<< HEAD
		 Illuminate\Http\Request::replace($input);
=======
		 \Illuminate\Http\Request::replace($input);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the JSON payload for the request.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function json($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Http\Request::json($key, $default);
=======
		return \Illuminate\Http\Request::json($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the request is sending JSON.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function isJson(){
<<<<<<< HEAD
		return Illuminate\Http\Request::isJson();
=======
		return \Illuminate\Http\Request::isJson();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current request is asking for JSON in return.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function wantsJson(){
<<<<<<< HEAD
		return Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * Get the data format expected in the response.
	 *
	 * @return string
	 * @static 
	 */
	 public static function format($default = 'html'){
		return Illuminate\Http\Request::format($default);
=======
		return \Illuminate\Http\Request::wantsJson();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Illuminate session store implementation.
	 *
	 * @return \Illuminate\Session\Store
	 * @static 
	 */
	 public static function getSessionStore(){
<<<<<<< HEAD
		return Illuminate\Http\Request::getSessionStore();
=======
		return \Illuminate\Http\Request::getSessionStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Illuminate session store implementation.
	 *
	 * @param \Illuminate\Session\Store  $session
	 * @return void
	 * @static 
	 */
	 public static function setSessionStore($session){
<<<<<<< HEAD
		 Illuminate\Http\Request::setSessionStore($session);
=======
		 \Illuminate\Http\Request::setSessionStore($session);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the session store has been set.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function hasSessionStore(){
<<<<<<< HEAD
		return Illuminate\Http\Request::hasSessionStore();
=======
		return \Illuminate\Http\Request::hasSessionStore();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Constructor.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
=======
		 \Symfony\Component\HttpFoundation\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the parameters for this request.
	 * 
	 * This method also re-initializes all properties.
	 *
	 * @param array  $query      The GET parameters
	 * @param array  $request    The POST parameters
	 * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array  $cookies    The COOKIE parameters
	 * @param array  $files      The FILES parameters
	 * @param array  $server     The SERVER parameters
	 * @param string $content    The raw body data
	 * @api 
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
=======
		 \Symfony\Component\HttpFoundation\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Creates a new request with values from PHP's super globals.
	 *
	 * @return Request A new request
	 * @api 
	 * @static 
	 */
	 public static function createFromGlobals(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::createFromGlobals();
=======
		return \Symfony\Component\HttpFoundation\Request::createFromGlobals();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Creates a Request based on a given URI and configuration.
	 * 
	 * The information contained in the URI always take precedence
	 * over the other information (server and parameters).
	 *
	 * @param string $uri        The URI
	 * @param string $method     The HTTP method
	 * @param array  $parameters The query (GET) or request (POST) parameters
	 * @param array  $cookies    The request cookies ($_COOKIE)
	 * @param array  $files      The request files ($_FILES)
	 * @param array  $server     The server parameters ($_SERVER)
	 * @param string $content    The raw body data
	 * @return Request A Request instance
	 * @api 
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
=======
		return \Symfony\Component\HttpFoundation\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Clones a request and overrides some of its parameters.
	 *
	 * @param array $query      The GET parameters
	 * @param array $request    The POST parameters
	 * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
	 * @param array $cookies    The COOKIE parameters
	 * @param array $files      The FILES parameters
	 * @param array $server     The SERVER parameters
	 * @return Request The duplicated request
	 * @api 
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
=======
		return \Symfony\Component\HttpFoundation\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the request as a string.
	 *
	 * @return string The request
	 * @static 
	 */
	 public static function __toString(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::__toString();
=======
		return \Symfony\Component\HttpFoundation\Request::__toString();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Overrides the PHP global variables according to this request instance.
	 * 
	 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
	 * $_FILES is never override, see rfc1867
	 *
	 * @api 
	 * @static 
	 */
	 public static function overrideGlobals(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
=======
		 \Symfony\Component\HttpFoundation\Request::overrideGlobals();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets a list of trusted proxies.
	 * 
	 * You should only list the reverse proxies that you manage directly.
	 *
	 * @param array $proxies A list of trusted proxies
	 * @api 
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
=======
		 \Symfony\Component\HttpFoundation\Request::setTrustedProxies($proxies);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the list of trusted proxies.
	 *
	 * @return array An array of trusted proxies.
	 * @static 
	 */
	 public static function getTrustedProxies(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedProxies();
	 }

	/**
	 * Sets a list of trusted host patterns.
	 * 
	 * You should only list the hosts you manage using regexs.
	 *
	 * @param array $hostPatterns A list of trusted host patterns
	 * @static 
	 */
	 public static function setTrustedHosts($hostPatterns){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * Gets the list of trusted host patterns.
	 *
	 * @return array An array of trusted host patterns.
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHosts();
=======
		return \Symfony\Component\HttpFoundation\Request::getTrustedProxies();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the name for trusted headers.
	 * 
	 * The following header keys are supported:
	 * 
	 *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
	 *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
	 *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
	 *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
	 * 
	 * Setting an empty value allows to disable the trusted header for the given key.
	 *
	 * @param string $key   The header key
	 * @param string $value The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
=======
		 \Symfony\Component\HttpFoundation\Request::setTrustedHeaderName($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the trusted proxy header name.
	 *
	 * @param string $key The header key
	 * @return string The header name
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getTrustedHeaderName($key);
=======
		return \Symfony\Component\HttpFoundation\Request::getTrustedHeaderName($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Normalizes a query string.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized,
	 * have consistent escaping and unneeded delimiters are removed.
	 *
	 * @param string $qs Query string
	 * @return string A normalized query string for the Request
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::normalizeQueryString($qs);
=======
		return \Symfony\Component\HttpFoundation\Request::normalizeQueryString($qs);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Enables support for the _method request parameter to determine the intended HTTP method.
	 * 
	 * Be warned that enabling this feature might lead to CSRF issues in your code.
	 * Check that you are using CSRF tokens when required.
	 * 
	 * The HTTP method can only be overridden when the real HTTP method is POST.
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
=======
		 \Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether support for the _method request parameter is enabled.
	 *
	 * @return Boolean True when the _method request parameter is enabled, false otherwise
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpMethodParameterOverride();
=======
		return \Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a "parameter" value.
	 * 
	 * This method is mainly useful for libraries that want to provide some flexibility.
	 * 
	 * Order of precedence: GET, PATH, POST
	 * 
	 * Avoid using this method in controllers:
	 * 
	 *  * slow
	 *  * prefer to get from a "named" source
	 * 
	 * It is better to explicitly get request parameters from the appropriate
	 * public property instead (query, attributes, request).
	 *
	 * @param string  $key     the key
	 * @param mixed   $default the default value
	 * @param Boolean $deep    is parameter deep in multidimensional array
	 * @return mixed
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::get($key, $default, $deep);
=======
		return \Symfony\Component\HttpFoundation\Request::get($key, $default, $deep);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the Session.
	 *
	 * @return SessionInterface|null The session
	 * @api 
	 * @static 
	 */
	 public static function getSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSession();
=======
		return \Symfony\Component\HttpFoundation\Request::getSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Whether the request contains a Session which was started in one of the
	 * previous requests.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function hasPreviousSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasPreviousSession();
=======
		return \Symfony\Component\HttpFoundation\Request::hasPreviousSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Whether the request contains a Session object.
	 * 
	 * This method does not give any information about the state of the session object,
	 * like whether the session is started or not. It is just a way to check if this Request
	 * is associated with a Session instance.
	 *
	 * @return Boolean true when the Request contains a Session object, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function hasSession(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::hasSession();
=======
		return \Symfony\Component\HttpFoundation\Request::hasSession();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the Session.
	 *
	 * @param SessionInterface $session The Session
	 * @api 
	 * @static 
	 */
	 public static function setSession($session){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
=======
		 \Symfony\Component\HttpFoundation\Request::setSession($session);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the client IP addresses.
	 * 
	 * The most trusted IP address is first, and the less trusted one last.
	 * The "real" client IP address is the last one, but this is also the
	 * less trusted one.
	 * 
	 * Use this method carefully; you should use getClientIp() instead.
	 *
	 * @return array The client IP addresses
	 * @see getClientIp()
	 * @static 
	 */
	 public static function getClientIps(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIps();
=======
		return \Symfony\Component\HttpFoundation\Request::getClientIps();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the client IP address.
	 * 
	 * This method can read the client IP address from the "X-Forwarded-For" header
	 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
	 * header value is a comma+space separated list of IP addresses, the left-most
	 * being the original client, and each successive proxy that passed the request
	 * adding the IP address where it received the request from.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-For",
	 * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-ip" key.
	 *
	 * @return string The client IP address
	 * @see getClientIps()
	 * @see http://en.wikipedia.org/wiki/X-Forwarded-For
	 * @api 
	 * @static 
	 */
	 public static function getClientIp(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getClientIp();
=======
		return \Symfony\Component\HttpFoundation\Request::getClientIp();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns current script name.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScriptName(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScriptName();
=======
		return \Symfony\Component\HttpFoundation\Request::getScriptName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the path being requested relative to the executed script.
	 * 
	 * The path info always starts with a /.
	 * 
	 * Suppose this request is instantiated from /mysite on localhost:
	 * 
	 *  * http://localhost/mysite              returns an empty string
	 *  * http://localhost/mysite/about        returns '/about'
	 *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
	 *  * http://localhost/mysite/about?var=1  returns '/about'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getPathInfo(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPathInfo();
=======
		return \Symfony\Component\HttpFoundation\Request::getPathInfo();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the root path from which this request is executed.
	 * 
	 * Suppose that an index.php file instantiates this request object:
	 * 
	 *  * http://localhost/index.php         returns an empty string
	 *  * http://localhost/index.php/page    returns an empty string
	 *  * http://localhost/web/index.php     returns '/web'
	 *  * http://localhost/we%20b/index.php  returns '/we%20b'
	 *
	 * @return string The raw path (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBasePath(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBasePath();
=======
		return \Symfony\Component\HttpFoundation\Request::getBasePath();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the root url from which this request is executed.
	 * 
	 * The base URL never ends with a /.
	 * 
	 * This is similar to getBasePath(), except that it also includes the
	 * script filename (e.g. index.php) if one exists.
	 *
	 * @return string The raw url (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getBaseUrl(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getBaseUrl();
=======
		return \Symfony\Component\HttpFoundation\Request::getBaseUrl();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request's scheme.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getScheme(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getScheme();
=======
		return \Symfony\Component\HttpFoundation\Request::getScheme();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the port on which the request is made.
	 * 
	 * This method can read the client port from the "X-Forwarded-Port" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Port" header must contain the client port.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Port",
	 * configure it via "setTrustedHeaderName()" with the "client-port" key.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getPort(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPort();
=======
		return \Symfony\Component\HttpFoundation\Request::getPort();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the user.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getUser(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUser();
=======
		return \Symfony\Component\HttpFoundation\Request::getUser();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the password.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function getPassword(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPassword();
=======
		return \Symfony\Component\HttpFoundation\Request::getPassword();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the user info.
	 *
	 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
	 * @static 
	 */
	 public static function getUserInfo(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUserInfo();
=======
		return \Symfony\Component\HttpFoundation\Request::getUserInfo();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the HTTP host being requested.
	 * 
	 * The port name will be appended to the host if it's non-standard.
	 *
	 * @return string
	 * @api 
	 * @static 
	 */
	 public static function getHttpHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHttpHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getHttpHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the requested URI.
	 *
	 * @return string The raw URI (i.e. not urldecoded)
	 * @api 
	 * @static 
	 */
	 public static function getRequestUri(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestUri();
=======
		return \Symfony\Component\HttpFoundation\Request::getRequestUri();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the scheme and HTTP host.
	 * 
	 * If the URL was called with basic authentication, the user
	 * and the password are not added to the generated string.
	 *
	 * @return string The scheme and HTTP host
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getSchemeAndHttpHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates a normalized URI for the Request.
	 *
	 * @return string A normalized URI for the Request
	 * @see getQueryString()
	 * @api 
	 * @static 
	 */
	 public static function getUri(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUri();
=======
		return \Symfony\Component\HttpFoundation\Request::getUri();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates a normalized URI for the given path.
	 *
	 * @param string $path A path to use instead of the current one
	 * @return string The normalized URI for the path
	 * @api 
	 * @static 
	 */
	 public static function getUriForPath($path){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getUriForPath($path);
=======
		return \Symfony\Component\HttpFoundation\Request::getUriForPath($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generates the normalized query string for the Request.
	 * 
	 * It builds a normalized query string, where keys/value pairs are alphabetized
	 * and have consistent escaping.
	 *
	 * @return string|null A normalized query string for the Request
	 * @api 
	 * @static 
	 */
	 public static function getQueryString(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getQueryString();
=======
		return \Symfony\Component\HttpFoundation\Request::getQueryString();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether the request is secure or not.
	 * 
	 * This method can read the client port from the "X-Forwarded-Proto" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
	 * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
	 * the "client-proto" key.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isSecure(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isSecure();
=======
		return \Symfony\Component\HttpFoundation\Request::isSecure();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the host name.
	 * 
	 * This method can read the client port from the "X-Forwarded-Host" header
	 * when trusted proxies were set via "setTrustedProxies()".
	 * 
	 * The "X-Forwarded-Host" header must contain the client host name.
	 * 
	 * If your reverse proxy uses a different header name than "X-Forwarded-Host",
	 * configure it via "setTrustedHeaderName()" with the "client-host" key.
	 *
	 * @return string
	 * @throws \UnexpectedValueException when the host name is invalid
	 * @api 
	 * @static 
	 */
	 public static function getHost(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getHost();
=======
		return \Symfony\Component\HttpFoundation\Request::getHost();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the request method.
	 *
	 * @param string $method
	 * @api 
	 * @static 
	 */
	 public static function setMethod($method){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
=======
		 \Symfony\Component\HttpFoundation\Request::setMethod($method);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request "intended" method.
	 * 
	 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
	 * then it is used to determine the "real" intended HTTP method.
	 * 
	 * The _method request parameter can also be used to determine the HTTP method,
	 * but only if enableHttpMethodParameterOverride() has been called.
	 * 
	 * The method is always an uppercased string.
	 *
	 * @return string The request method
	 * @api 
	 * @see getRealMethod
	 * @static 
	 */
	 public static function getMethod(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMethod();
=======
		return \Symfony\Component\HttpFoundation\Request::getMethod();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the "real" request method.
	 *
	 * @return string The request method
	 * @see getMethod
	 * @static 
	 */
	 public static function getRealMethod(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRealMethod();
=======
		return \Symfony\Component\HttpFoundation\Request::getRealMethod();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the mime type associated with the format.
	 *
	 * @param string $format The format
	 * @return string The associated mime type (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getMimeType($format){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getMimeType($format);
=======
		return \Symfony\Component\HttpFoundation\Request::getMimeType($format);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the format associated with the mime type.
	 *
	 * @param string $mimeType The associated mime type
	 * @return string|null The format (null if not found)
	 * @api 
	 * @static 
	 */
	 public static function getFormat($mimeType){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getFormat($mimeType);
=======
		return \Symfony\Component\HttpFoundation\Request::getFormat($mimeType);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Associates a format with mime types.
	 *
	 * @param string       $format    The format
	 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
	 * @api 
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
=======
		 \Symfony\Component\HttpFoundation\Request::setFormat($format, $mimeTypes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the request format.
	 * 
	 * Here is the process to determine the format:
	 * 
	 *  * format defined by the user (with setRequestFormat())
	 *  * _format request parameter
	 *  * $default
	 *
	 * @param string $default The default format
	 * @return string The request format
	 * @api 
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getRequestFormat($default);
=======
		return \Symfony\Component\HttpFoundation\Request::getRequestFormat($default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the request format.
	 *
	 * @param string $format The request format.
	 * @api 
	 * @static 
	 */
	 public static function setRequestFormat($format){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
=======
		 \Symfony\Component\HttpFoundation\Request::setRequestFormat($format);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the format associated with the request.
	 *
	 * @return string|null The format (null if no content type is present)
	 * @api 
	 * @static 
	 */
	 public static function getContentType(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContentType();
=======
		return \Symfony\Component\HttpFoundation\Request::getContentType();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the default locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
=======
		 \Symfony\Component\HttpFoundation\Request::setDefaultLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the locale.
	 *
	 * @param string $locale
	 * @api 
	 * @static 
	 */
	 public static function setLocale($locale){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
=======
		 \Symfony\Component\HttpFoundation\Request::setLocale($locale);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the locale.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getLocale(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLocale();
=======
		return \Symfony\Component\HttpFoundation\Request::getLocale();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if the request method is of specified type.
	 *
	 * @param string $method Uppercase request method (GET, POST etc).
	 * @return Boolean
	 * @static 
	 */
	 public static function isMethod($method){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethod($method);
=======
		return \Symfony\Component\HttpFoundation\Request::isMethod($method);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks whether the method is safe or not.
	 *
	 * @return Boolean
	 * @api 
	 * @static 
	 */
	 public static function isMethodSafe(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isMethodSafe();
=======
		return \Symfony\Component\HttpFoundation\Request::isMethodSafe();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the request body content.
	 *
	 * @param Boolean $asResource If true, a resource will be returned
	 * @return string|resource The request body content or a resource to read the body stream.
	 * @throws \LogicException
	 * @static 
	 */
	 public static function getContent($asResource = false){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getContent($asResource);
=======
		return \Symfony\Component\HttpFoundation\Request::getContent($asResource);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the Etags.
	 *
	 * @return array The entity tags
	 * @static 
	 */
	 public static function getETags(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getETags();
=======
		return \Symfony\Component\HttpFoundation\Request::getETags();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * 
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isNoCache(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isNoCache();
=======
		return \Symfony\Component\HttpFoundation\Request::isNoCache();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the preferred language.
	 *
	 * @param array $locales An array of ordered available locales
	 * @return string|null The preferred locale
	 * @api 
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getPreferredLanguage($locales);
=======
		return \Symfony\Component\HttpFoundation\Request::getPreferredLanguage($locales);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of languages acceptable by the client browser.
	 *
	 * @return array Languages ordered in the user browser preferences
	 * @api 
	 * @static 
	 */
	 public static function getLanguages(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getLanguages();
=======
		return \Symfony\Component\HttpFoundation\Request::getLanguages();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of charsets acceptable by the client browser.
	 *
	 * @return array List of charsets in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getCharsets(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getCharsets();
=======
		return \Symfony\Component\HttpFoundation\Request::getCharsets();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a list of content types acceptable by the client browser
	 *
	 * @return array List of content types in preferable order
	 * @api 
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::getAcceptableContentTypes();
=======
		return \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns true if the request is a XMLHttpRequest.
	 * 
	 * It works if your JavaScript library set an X-Requested-With HTTP header.
	 * It is known to work with common JavaScript frameworks:
	 *
	 * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
	 * @return Boolean true if the request is an XMLHttpRequest, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Request
		return Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Response extends Illuminate\Support\Facades\Response{
}

class Route extends Illuminate\Support\Facades\Route{
=======
		return \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest();
	 }

 }
}

namespace  {
 class Response extends Illuminate\Support\Facades\Response{
 }
}

namespace  {
 class Route extends Illuminate\Support\Facades\Route{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new router instance.
	 *
	 * @param \Illuminate\Container\Container  $container
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($container = null){
		 Illuminate\Routing\Router::__construct($container);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($container = null){
		 \Illuminate\Routing\Router::__construct($container);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function get($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::get($pattern, $action);
=======
		return \Illuminate\Routing\Router::get($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function post($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::post($pattern, $action);
=======
		return \Illuminate\Routing\Router::post($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function put($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::put($pattern, $action);
=======
		return \Illuminate\Routing\Router::put($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function patch($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::patch($pattern, $action);
=======
		return \Illuminate\Routing\Router::patch($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function delete($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::delete($pattern, $action);
=======
		return \Illuminate\Routing\Router::delete($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function options($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::options($pattern, $action);
=======
		return \Illuminate\Routing\Router::options($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $method
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function match($method, $pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::match($method, $pattern, $action);
=======
		return \Illuminate\Routing\Router::match($method, $pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new route to the collection.
	 *
	 * @param string  $pattern
	 * @param mixed   $action
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function any($pattern, $action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::any($pattern, $action);
=======
		return \Illuminate\Routing\Router::any($pattern, $action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an array of controllers with wildcard routing.
	 *
	 * @param array  $controllers
	 * @return void
	 * @static 
	 */
	 public static function controllers($controllers){
<<<<<<< HEAD
		 Illuminate\Routing\Router::controllers($controllers);
=======
		 \Illuminate\Routing\Router::controllers($controllers);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Route a controller to a URI with wildcard routing.
	 *
	 * @param string  $uri
	 * @param string  $controller
	 * @param array   $names
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function controller($uri, $controller, $names = array()){
<<<<<<< HEAD
		return Illuminate\Routing\Router::controller($uri, $controller, $names);
=======
		return \Illuminate\Routing\Router::controller($uri, $controller, $names);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Route a resource to a controller.
	 *
	 * @param string  $resource
	 * @param string  $controller
	 * @param array   $options
	 * @return void
	 * @static 
	 */
	 public static function resource($resource, $controller, $options = array()){
<<<<<<< HEAD
		 Illuminate\Routing\Router::resource($resource, $controller, $options);
=======
		 \Illuminate\Routing\Router::resource($resource, $controller, $options);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the base resource URI for a given resource.
	 *
	 * @param string  $resource
	 * @return string
	 * @static 
	 */
	 public static function getResourceUri($resource){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getResourceUri($resource);
=======
		return \Illuminate\Routing\Router::getResourceUri($resource);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Format a resource wildcard parameter.
	 *
	 * @param string  $value
	 * @return string
	 * @static 
	 */
	 public static function getResourceWildcard($value){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getResourceWildcard($value);
=======
		return \Illuminate\Routing\Router::getResourceWildcard($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a route group with shared attributes.
	 *
	 * @param array    $attributes
	 * @param Closure  $callback
	 * @return void
	 * @static 
	 */
	 public static function group($attributes, $callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::group($attributes, $callback);
=======
		 \Illuminate\Routing\Router::group($attributes, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the response for a given request.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function dispatch($request){
<<<<<<< HEAD
		return Illuminate\Routing\Router::dispatch($request);
=======
		return \Illuminate\Routing\Router::dispatch($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "before" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function before($callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::before($callback);
=======
		 \Illuminate\Routing\Router::before($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an "after" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function after($callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::after($callback);
=======
		 \Illuminate\Routing\Router::after($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "close" routing filter.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function close($callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::close($callback);
=======
		 \Illuminate\Routing\Router::close($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a "finish" routing filters.
	 *
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function finish($callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::finish($callback);
=======
		 \Illuminate\Routing\Router::finish($callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a new filter with the application.
	 *
	 * @param string   $name
	 * @param Closure|string  $callback
	 * @return void
	 * @static 
	 */
	 public static function filter($name, $callback){
<<<<<<< HEAD
		 Illuminate\Routing\Router::filter($name, $callback);
=======
		 \Illuminate\Routing\Router::filter($name, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a registered filter callback.
	 *
	 * @param string   $name
	 * @return Closure
	 * @static 
	 */
	 public static function getFilter($name){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getFilter($name);
=======
		return \Illuminate\Routing\Router::getFilter($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Tie a registered filter to a URI pattern.
	 *
	 * @param string  $pattern
	 * @param string|array  $names
	 * @param array|null  $methods
	 * @return void
	 * @static 
	 */
	 public static function when($pattern, $names, $methods = null){
<<<<<<< HEAD
		 Illuminate\Routing\Router::when($pattern, $names, $methods);
=======
		 \Illuminate\Routing\Router::when($pattern, $names, $methods);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Find the patterned filters matching a request.
	 *
<<<<<<< HEAD
	 * @param string  $method
	 * @param string  $path
	 * @return array
	 * @static 
	 */
	 public static function findPatternFilters($method, $path){
		return Illuminate\Routing\Router::findPatternFilters($method, $path);
=======
	 * @param \Illuminate\Http\Request  $request
	 * @return array
	 * @static 
	 */
	 public static function findPatternFilters($request){
		return \Illuminate\Routing\Router::findPatternFilters($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Call the finish" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callFinishFilter($request, $response){
<<<<<<< HEAD
		return Illuminate\Routing\Router::callFinishFilter($request, $response);
=======
		return \Illuminate\Routing\Router::callFinishFilter($request, $response);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Call the "close" global filter.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request   $request
	 * @param \Symfony\Component\HttpFoundation\Response  $response
	 * @return mixed
	 * @static 
	 */
	 public static function callCloseFilter($request, $response){
<<<<<<< HEAD
		return Illuminate\Routing\Router::callCloseFilter($request, $response);
=======
		return \Illuminate\Routing\Router::callCloseFilter($request, $response);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set a global where pattern on all routes
	 *
	 * @param string  $key
	 * @param string  $pattern
	 * @return void
	 * @static 
	 */
	 public static function pattern($key, $pattern){
<<<<<<< HEAD
		 Illuminate\Routing\Router::pattern($key, $pattern);
=======
		 \Illuminate\Routing\Router::pattern($key, $pattern);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a model binder for a wildcard.
	 *
	 * @param string  $key
	 * @param string  $class
	 * @return void
	 * @static 
	 */
	 public static function model($key, $class, $callback = null){
<<<<<<< HEAD
		 Illuminate\Routing\Router::model($key, $class, $callback);
=======
		 \Illuminate\Routing\Router::model($key, $class, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom parameter binder.
	 *
	 * @param string  $key
	 * @param mixed   $binder
	 * @static 
	 */
	 public static function bind($key, $binder){
<<<<<<< HEAD
		 Illuminate\Routing\Router::bind($key, $binder);
=======
		 \Illuminate\Routing\Router::bind($key, $binder);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a given key has a registered binder.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasBinder($key){
<<<<<<< HEAD
		return Illuminate\Routing\Router::hasBinder($key);
=======
		return \Illuminate\Routing\Router::hasBinder($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Call a binder for a given wildcard.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @param \Illuminate\Routing\Route  $route
	 * @return mixed
	 * @static 
	 */
	 public static function performBinding($key, $value, $route){
<<<<<<< HEAD
		return Illuminate\Routing\Router::performBinding($key, $value, $route);
=======
		return \Illuminate\Routing\Router::performBinding($key, $value, $route);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Prepare the given value as a Response object.
	 *
	 * @param mixed  $value
	 * @param \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @static 
	 */
	 public static function prepare($value, $request){
<<<<<<< HEAD
		return Illuminate\Routing\Router::prepare($value, $request);
=======
		return \Illuminate\Routing\Router::prepare($value, $request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current route name.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteName(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::currentRouteName();
=======
		return \Illuminate\Routing\Router::currentRouteName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current route has a given name.
	 *
	 * @param string  $name
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteNamed($name){
<<<<<<< HEAD
		return Illuminate\Routing\Router::currentRouteNamed($name);
=======
		return \Illuminate\Routing\Router::currentRouteNamed($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current route action.
	 *
	 * @return string|null
	 * @static 
	 */
	 public static function currentRouteAction(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::currentRouteAction();
=======
		return \Illuminate\Routing\Router::currentRouteAction();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the current route uses a given controller action.
	 *
	 * @param string  $action
	 * @return bool
	 * @static 
	 */
	 public static function currentRouteUses($action){
<<<<<<< HEAD
		return Illuminate\Routing\Router::currentRouteUses($action);
=======
		return \Illuminate\Routing\Router::currentRouteUses($action);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if route filters are enabled.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function filtersEnabled(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::filtersEnabled();
=======
		return \Illuminate\Routing\Router::filtersEnabled();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Enable the running of filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function enableFilters(){
<<<<<<< HEAD
		 Illuminate\Routing\Router::enableFilters();
=======
		 \Illuminate\Routing\Router::enableFilters();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Disable the running of all filters.
	 *
	 * @return void
	 * @static 
	 */
	 public static function disableFilters(){
<<<<<<< HEAD
		 Illuminate\Routing\Router::disableFilters();
=======
		 \Illuminate\Routing\Router::disableFilters();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Retrieve the entire route collection.
	 *
	 * @return \Symfony\Component\Routing\RouteCollection
	 * @static 
	 */
	 public static function getRoutes(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getRoutes();
=======
		return \Illuminate\Routing\Router::getRoutes();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current request being dispatched.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getRequest();
=======
		return \Illuminate\Routing\Router::getRequest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current route being executed.
	 *
	 * @return \Illuminate\Routing\Route
	 * @static 
	 */
	 public static function getCurrentRoute(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getCurrentRoute();
=======
		return \Illuminate\Routing\Router::getCurrentRoute();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current route on the router.
	 *
	 * @param \Illuminate\Routing\Route  $route
	 * @return void
	 * @static 
	 */
	 public static function setCurrentRoute($route){
<<<<<<< HEAD
		 Illuminate\Routing\Router::setCurrentRoute($route);
=======
		 \Illuminate\Routing\Router::setCurrentRoute($route);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getFilters(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getFilters();
=======
		return \Illuminate\Routing\Router::getFilters();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the global filters defined on the router.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getGlobalFilters(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getGlobalFilters();
=======
		return \Illuminate\Routing\Router::getGlobalFilters();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the controller inspector instance.
	 *
	 * @return \Illuminate\Routing\Controllers\Inspector
	 * @static 
	 */
	 public static function getInspector(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getInspector();
=======
		return \Illuminate\Routing\Router::getInspector();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the controller inspector instance.
	 *
	 * @param \Illuminate\Routing\Controllers\Inspector  $inspector
	 * @return void
	 * @static 
	 */
	 public static function setInspector($inspector){
<<<<<<< HEAD
		 Illuminate\Routing\Router::setInspector($inspector);
=======
		 \Illuminate\Routing\Router::setInspector($inspector);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the container used by the router.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
<<<<<<< HEAD
		return Illuminate\Routing\Router::getContainer();
=======
		return \Illuminate\Routing\Router::getContainer();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the container instance on the router.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
<<<<<<< HEAD
		 Illuminate\Routing\Router::setContainer($container);
	 }

}

class Seeder extends Illuminate\Database\Seeder{
}

class Session extends Illuminate\Support\Facades\Session{
=======
		 \Illuminate\Routing\Router::setContainer($container);
	 }

 }
}

namespace  {
 class Schema extends Illuminate\Support\Facades\Schema{
	/**
	 * Determine if the given table exists.
	 *
	 * @param string  $table
	 * @return bool
	 * @static 
	 */
	 public static function hasTable($table){
		return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
	 }

	/**
	 * Create a new database Schema manager.
	 *
	 * @param \Illuminate\Database\Connection  $connection
	 * @return self 
	 * @static 
	 */
	 public static function __construct($connection){
		 \Illuminate\Database\Schema\Builder::__construct($connection);
	 }

	/**
	 * Determine if the given table has a given column.
	 *
	 * @param string  $table
	 * @param string  $column
	 * @return bool
	 * @static 
	 */
	 public static function hasColumn($table, $column){
		return \Illuminate\Database\Schema\Builder::hasColumn($table, $column);
	 }

	/**
	 * Modify a table on the schema.
	 *
	 * @param string   $table
	 * @param Closure  $callback
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function table($table, $callback){
		return \Illuminate\Database\Schema\Builder::table($table, $callback);
	 }

	/**
	 * Create a new table on the schema.
	 *
	 * @param string   $table
	 * @param Closure  $callback
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function create($table, $callback){
		return \Illuminate\Database\Schema\Builder::create($table, $callback);
	 }

	/**
	 * Drop a table from the schema.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function drop($table){
		return \Illuminate\Database\Schema\Builder::drop($table);
	 }

	/**
	 * Drop a table from the schema if it exists.
	 *
	 * @param string  $table
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function dropIfExists($table){
		return \Illuminate\Database\Schema\Builder::dropIfExists($table);
	 }

	/**
	 * Rename a table on the schema.
	 *
	 * @param string  $from
	 * @param string  $to
	 * @return \Illuminate\Database\Schema\Blueprint
	 * @static 
	 */
	 public static function rename($from, $to){
		return \Illuminate\Database\Schema\Builder::rename($from, $to);
	 }

	/**
	 * Get the database connection instance.
	 *
	 * @return \Illuminate\Database\Connection
	 * @static 
	 */
	 public static function getConnection(){
		return \Illuminate\Database\Schema\Builder::getConnection();
	 }

	/**
	 * Set the database connection instance.
	 *
	 * @param \Illuminate\Database\Connection
	 * @return \Illuminate\Database\Schema\Builder
	 * @static 
	 */
	 public static function setConnection($connection){
		return \Illuminate\Database\Schema\Builder::setConnection($connection);
	 }

 }
}

namespace  {
 class Seeder extends Illuminate\Database\Seeder{
 }
}

namespace  {
 class Session extends Illuminate\Support\Facades\Session{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Starts the session storage.
	 *
	 * @return Boolean True if session started.
	 * @throws \RuntimeException If session fails to start.
	 * @api 
	 * @static 
	 */
	 public static function start(){
<<<<<<< HEAD
		return Illuminate\Session\Store::start();
=======
		return \Illuminate\Session\Store::start();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Force the session to be saved and closed.
	 * 
	 * This method is generally not required for real sessions as
	 * the session will be automatically saved at the end of
	 * code execution.
	 *
	 * @static 
	 */
	 public static function save(){
<<<<<<< HEAD
		 Illuminate\Session\Store::save();
=======
		 \Illuminate\Session\Store::save();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if an attribute is defined.
	 *
	 * @param string $name The attribute name
	 * @return Boolean true if the attribute is defined, false otherwise
	 * @api 
	 * @static 
	 */
	 public static function has($name){
<<<<<<< HEAD
		return Illuminate\Session\Store::has($name);
=======
		return \Illuminate\Session\Store::has($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an attribute.
	 *
	 * @param string $name    The attribute name
	 * @param mixed  $default The default value if not found.
	 * @return mixed
	 * @api 
	 * @static 
	 */
	 public static function get($name, $default = null){
<<<<<<< HEAD
		return Illuminate\Session\Store::get($name, $default);
=======
		return \Illuminate\Session\Store::get($name, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the session contains old input.
	 *
	 * @param string  $key
	 * @return bool
	 * @static 
	 */
	 public static function hasOldInput($key = null){
<<<<<<< HEAD
		return Illuminate\Session\Store::hasOldInput($key);
=======
		return \Illuminate\Session\Store::hasOldInput($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the requested item from the flashed input array.
	 *
	 * @param string  $key
	 * @param mixed   $default
	 * @return mixed
	 * @static 
	 */
	 public static function getOldInput($key = null, $default = null){
<<<<<<< HEAD
		return Illuminate\Session\Store::getOldInput($key, $default);
=======
		return \Illuminate\Session\Store::getOldInput($key, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function getToken(){
<<<<<<< HEAD
		return Illuminate\Session\Store::getToken();
=======
		return \Illuminate\Session\Store::getToken();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the CSRF token value.
	 *
	 * @return string
	 * @static 
	 */
	 public static function token(){
<<<<<<< HEAD
		return Illuminate\Session\Store::token();
=======
		return \Illuminate\Session\Store::token();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Put a key / value pair in the session.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function put($key, $value){
<<<<<<< HEAD
		 Illuminate\Session\Store::put($key, $value);
=======
		 \Illuminate\Session\Store::put($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Push a value onto a session array.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function push($key, $value){
<<<<<<< HEAD
		 Illuminate\Session\Store::push($key, $value);
=======
		 \Illuminate\Session\Store::push($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function flash($key, $value){
<<<<<<< HEAD
		 Illuminate\Session\Store::flash($key, $value);
=======
		 \Illuminate\Session\Store::flash($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flash an input array to the session.
	 *
	 * @param array  $value
	 * @return void
	 * @static 
	 */
	 public static function flashInput($value){
<<<<<<< HEAD
		 Illuminate\Session\Store::flashInput($value);
=======
		 \Illuminate\Session\Store::flashInput($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Reflash all of the session flash data.
	 *
	 * @return void
	 * @static 
	 */
	 public static function reflash(){
<<<<<<< HEAD
		 Illuminate\Session\Store::reflash();
=======
		 \Illuminate\Session\Store::reflash();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Reflash a subset of the current flash data.
	 *
	 * @param array|dynamic  $keys
	 * @return void
	 * @static 
	 */
	 public static function keep($keys = null){
<<<<<<< HEAD
		 Illuminate\Session\Store::keep($keys);
=======
		 \Illuminate\Session\Store::keep($keys);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Remove an item from the session.
	 *
	 * @param string  $key
	 * @return void
	 * @static 
	 */
	 public static function forget($key){
<<<<<<< HEAD
		 Illuminate\Session\Store::forget($key);
=======
		 \Illuminate\Session\Store::forget($key);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Remove all of the items from the session.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flush(){
<<<<<<< HEAD
		 Illuminate\Session\Store::flush();
=======
		 \Illuminate\Session\Store::flush();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a new session identifier.
	 *
	 * @return string
	 * @static 
	 */
	 public static function regenerate(){
<<<<<<< HEAD
		return Illuminate\Session\Store::regenerate();
=======
		return \Illuminate\Session\Store::regenerate();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Constructor.
	 *
	 * @param SessionStorageInterface $storage    A SessionStorageInterface instance.
	 * @param AttributeBagInterface   $attributes An AttributeBagInterface instance, (defaults null for default AttributeBag)
	 * @param FlashBagInterface       $flashes    A FlashBagInterface instance (defaults null for default FlashBag)
	 * @static 
	 */
	 public static function __construct($storage = null, $attributes = null, $flashes = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::__construct($storage, $attributes, $flashes);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::__construct($storage, $attributes, $flashes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets an attribute.
	 *
	 * @param string $name
	 * @param mixed  $value
	 * @api 
	 * @static 
	 */
	 public static function set($name, $value){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::set($name, $value);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::set($name, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns attributes.
	 *
	 * @return array Attributes
	 * @api 
	 * @static 
	 */
	 public static function all(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::all();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::all();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets attributes.
	 *
	 * @param array $attributes Attributes
	 * @static 
	 */
	 public static function replace($attributes){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::replace($attributes);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::replace($attributes);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Removes an attribute.
	 *
	 * @param string $name
	 * @return mixed The removed value
	 * @api 
	 * @static 
	 */
	 public static function remove($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::remove($name);
=======
		return \Symfony\Component\HttpFoundation\Session\Session::remove($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Clears all attributes.
	 *
	 * @api 
	 * @static 
	 */
	 public static function clear(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::clear();
=======
		 \Symfony\Component\HttpFoundation\Session\Session::clear();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if the session was started.
	 *
	 * @return Boolean
	 * @static 
	 */
	 public static function isStarted(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::isStarted();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::isStarted();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an iterator for attributes.
	 *
	 * @return \ArrayIterator An \ArrayIterator instance
	 * @static 
	 */
	 public static function getIterator(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getIterator();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getIterator();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the number of attributes.
	 *
	 * @return int The number of attributes
	 * @static 
	 */
	 public static function count(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::count();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::count();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Invalidates the current session.
	 * 
	 * Clears all session attributes and flashes and regenerates the
	 * session and deletes the old session from persistence.
	 *
	 * @param integer $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return Boolean True if session invalidated, false if error.
	 * @api 
	 * @static 
	 */
	 public static function invalidate($lifetime = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::invalidate($lifetime);
=======
		return \Symfony\Component\HttpFoundation\Session\Session::invalidate($lifetime);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Migrates the current session to a new session id while maintaining all
	 * session attributes.
	 *
	 * @param Boolean $destroy  Whether to delete the old session or leave it to garbage collection.
	 * @param integer $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                          will leave the system settings unchanged, 0 sets the cookie
	 *                          to expire with browser session. Time is in seconds, and is
	 *                          not a Unix timestamp.
	 * @return Boolean True if session migrated, false if error.
	 * @api 
	 * @static 
	 */
	 public static function migrate($destroy = false, $lifetime = null){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::migrate($destroy, $lifetime);
=======
		return \Symfony\Component\HttpFoundation\Session\Session::migrate($destroy, $lifetime);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the session ID.
	 *
	 * @return string The session ID.
	 * @api 
	 * @static 
	 */
	 public static function getId(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getId();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getId();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the session ID
	 *
	 * @param string $id
	 * @api 
	 * @static 
	 */
	 public static function setId($id){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::setId($id);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::setId($id);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the session name.
	 *
	 * @return mixed The session name.
	 * @api 
	 * @static 
	 */
	 public static function getName(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getName();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getName();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Sets the session name.
	 *
	 * @param string $name
	 * @api 
	 * @static 
	 */
	 public static function setName($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::setName($name);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::setName($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets session meta.
	 *
	 * @return MetadataBag
	 * @static 
	 */
	 public static function getMetadataBag(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getMetadataBag();
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getMetadataBag();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Registers a SessionBagInterface with the session.
	 *
	 * @param SessionBagInterface $bag
	 * @static 
	 */
	 public static function registerBag($bag){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		 Illuminate\Session\Store::registerBag($bag);
=======
		 \Symfony\Component\HttpFoundation\Session\Session::registerBag($bag);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets a bag instance by name.
	 *
	 * @param string $name
	 * @return SessionBagInterface
	 * @static 
	 */
	 public static function getBag($name){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getBag($name);
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getBag($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Gets the flashbag interface.
	 *
	 * @return FlashBagInterface
	 * @static 
	 */
	 public static function getFlashBag(){
<<<<<<< HEAD
		//Method inherited from Symfony\Component\HttpFoundation\Session\Session
		return Illuminate\Session\Store::getFlashBag();
	 }

}

class Str extends Illuminate\Support\Str{
}

class URL extends Illuminate\Support\Facades\URL{
=======
		return \Symfony\Component\HttpFoundation\Session\Session::getFlashBag();
	 }

 }
}

namespace  {
 class Str extends Illuminate\Support\Str{
 }
}

namespace  {
 class URL extends Illuminate\Support\Facades\URL{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new URL Generator instance.
	 *
	 * @param \Symfony\Component\Routing\RouteCollection  $routes
	 * @param \Symfony\Component\HttpFoundation\Request   $request
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($routes, $request){
		 Illuminate\Routing\UrlGenerator::__construct($routes, $request);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($routes, $request){
		 \Illuminate\Routing\UrlGenerator::__construct($routes, $request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the full URL for the current request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function full(){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::full();
=======
		return \Illuminate\Routing\UrlGenerator::full();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the current URL for the request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function current(){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::current();
=======
		return \Illuminate\Routing\UrlGenerator::current();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL for the previous request.
	 *
	 * @return string
	 * @static 
	 */
	 public static function previous(){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::previous();
=======
		return \Illuminate\Routing\UrlGenerator::previous();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param mixed   $parameters
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function to($path, $parameters = array(), $secure = null){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::to($path, $parameters, $secure);
=======
		return \Illuminate\Routing\UrlGenerator::to($path, $parameters, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @param string  $path
	 * @param array   $parameters
	 * @return string
	 * @static 
	 */
	 public static function secure($path, $parameters = array()){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::secure($path, $parameters);
=======
		return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a URL to an application asset.
	 *
	 * @param string  $path
	 * @param bool    $secure
	 * @return string
	 * @static 
	 */
	 public static function asset($path, $secure = null){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::asset($path, $secure);
=======
		return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @param string  $path
	 * @return string
	 * @static 
	 */
	 public static function secureAsset($path){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::secureAsset($path);
=======
		return \Illuminate\Routing\UrlGenerator::secureAsset($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL to a named route.
	 *
	 * @param string  $name
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function route($name, $parameters = array(), $absolute = true){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
=======
		return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the URL to a controller action.
	 *
	 * @param string  $action
	 * @param mixed   $parameters
	 * @param bool    $absolute
	 * @return string
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $absolute = true){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
=======
		return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @param string  $path
	 * @return bool
	 * @static 
	 */
	 public static function isValidUrl($path){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::isValidUrl($path);
=======
		return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the request instance.
	 *
	 * @return \Symfony\Component\HttpFoundation\Request
	 * @static 
	 */
	 public static function getRequest(){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::getRequest();
=======
		return \Illuminate\Routing\UrlGenerator::getRequest();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the current request instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request  $request
	 * @return void
	 * @static 
	 */
	 public static function setRequest($request){
<<<<<<< HEAD
		 Illuminate\Routing\UrlGenerator::setRequest($request);
=======
		 \Illuminate\Routing\UrlGenerator::setRequest($request);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Symfony URL generator instance.
	 *
	 * @return \Symfony\Component\Routing\Generator\UrlGenerator
	 * @static 
	 */
	 public static function getGenerator(){
<<<<<<< HEAD
		return Illuminate\Routing\UrlGenerator::getGenerator();
=======
		return \Illuminate\Routing\UrlGenerator::getGenerator();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Symfony URL generator instance.
	 *
	 * @param \Symfony\Component\Routing\Generator\UrlGenerator  $generator
	 * @return void
	 * @static 
	 */
	 public static function setGenerator($generator){
<<<<<<< HEAD
		 Illuminate\Routing\UrlGenerator::setGenerator($generator);
	 }

}

class Validator extends Illuminate\Support\Facades\Validator{
=======
		 \Illuminate\Routing\UrlGenerator::setGenerator($generator);
	 }

 }
}

namespace  {
 class Validator extends Illuminate\Support\Facades\Validator{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new Validator factory instance.
	 *
	 * @param \Symfony\Component\Translation\TranslatorInterface  $translator
	 * @param \Illuminate\Container\Container  $container
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($translator, $container = null){
		 Illuminate\Validation\Factory::__construct($translator, $container);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($translator, $container = null){
		 \Illuminate\Validation\Factory::__construct($translator, $container);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new Validator instance.
	 *
	 * @param array  $data
	 * @param array  $rules
	 * @param array  $messages
	 * @return \Illuminate\Validation\Validator
	 * @static 
	 */
	 public static function make($data, $rules, $messages = array()){
<<<<<<< HEAD
		return Illuminate\Validation\Factory::make($data, $rules, $messages);
=======
		return \Illuminate\Validation\Factory::make($data, $rules, $messages);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom validator extension.
	 *
	 * @param string  $rule
	 * @param Closure|string  $extension
	 * @return void
	 * @static 
	 */
	 public static function extend($rule, $extension){
<<<<<<< HEAD
		 Illuminate\Validation\Factory::extend($rule, $extension);
=======
		 \Illuminate\Validation\Factory::extend($rule, $extension);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a custom implicit validator extension.
	 *
	 * @param string  $rule
	 * @param Closure $extension
	 * @return void
	 * @static 
	 */
	 public static function extendImplicit($rule, $extension){
<<<<<<< HEAD
		 Illuminate\Validation\Factory::extendImplicit($rule, $extension);
=======
		 \Illuminate\Validation\Factory::extendImplicit($rule, $extension);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Validator instance resolver.
	 *
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function resolver($resolver){
<<<<<<< HEAD
		 Illuminate\Validation\Factory::resolver($resolver);
=======
		 \Illuminate\Validation\Factory::resolver($resolver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Translator implementation.
	 *
	 * @return \Symfony\Component\Translation\TranslatorInterface
	 * @static 
	 */
	 public static function getTranslator(){
<<<<<<< HEAD
		return Illuminate\Validation\Factory::getTranslator();
=======
		return \Illuminate\Validation\Factory::getTranslator();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the Presence Verifier implementation.
	 *
	 * @return \Illuminate\Validation\PresenceVerifierInterface
	 * @static 
	 */
	 public static function getPresenceVerifier(){
<<<<<<< HEAD
		return Illuminate\Validation\Factory::getPresenceVerifier();
=======
		return \Illuminate\Validation\Factory::getPresenceVerifier();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the Presence Verifier implementation.
	 *
	 * @param \Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier
	 * @return void
	 * @static 
	 */
	 public static function setPresenceVerifier($presenceVerifier){
<<<<<<< HEAD
		 Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
	 }

}

class View extends Illuminate\Support\Facades\View{
=======
		 \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
	 }

 }
}

namespace  {
 class View extends Illuminate\Support\Facades\View{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Get a evaluated view contents for the given view.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param array   $mergeData
	 * @return Illuminate\View\View
	 * @static 
	 */
	 public static function make($view, $data = array(), $mergeData = array()){
<<<<<<< HEAD
		return Robbo\Presenter\View\Environment::make($view, $data, $mergeData);
=======
		return \Robbo\Presenter\View\Environment::make($view, $data, $mergeData);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param string  $key
	 * @param mixed   $value
	 * @return void
	 * @static 
	 */
	 public static function share($key, $value = null){
<<<<<<< HEAD
		 Robbo\Presenter\View\Environment::share($key, $value);
=======
		 \Robbo\Presenter\View\Environment::share($key, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * If this variable implements Robbo\Presenter\PresentableInterface then turn it into a presenter.
	 *
	 * @param mixed $value
	 * @return mixed $value
	 * @static 
	 */
	 public static function makePresentable($value){
<<<<<<< HEAD
		return Robbo\Presenter\View\Environment::makePresentable($value);
=======
		return \Robbo\Presenter\View\Environment::makePresentable($value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create a new view environment instance.
	 *
	 * @param \Illuminate\View\Engines\EngineResolver  $engines
	 * @param \Illuminate\View\ViewFinderInterface  $finder
	 * @param \Illuminate\Events\Dispatcher  $events
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($engines, $finder, $events){
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::__construct($engines, $finder, $events);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($engines, $finder, $events){
		 \Illuminate\View\Environment::__construct($engines, $finder, $events);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a evaluated view contents for a named view.
	 *
	 * @param string $view
	 * @param mixed $data
	 * @return \Illuminate\View\View
	 * @static 
	 */
	 public static function of($view, $data = array()){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::of($view, $data);
=======
		return \Illuminate\View\Environment::of($view, $data);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a named view.
	 *
	 * @param string $view
	 * @param string $name
	 * @return void
	 * @static 
	 */
	 public static function name($view, $name){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::name($view, $name);
=======
		 \Illuminate\View\Environment::name($view, $name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a given view exists.
	 *
	 * @param string  $view
	 * @return bool
	 * @static 
	 */
	 public static function exists($view){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::exists($view);
=======
		return \Illuminate\View\Environment::exists($view);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @param string  $view
	 * @param array   $data
	 * @param string  $iterator
	 * @param string  $empty
	 * @return string
	 * @static 
	 */
	 public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::renderEach($view, $data, $iterator, $empty);
	 }

	/**
	 * Register a view creator event.
	 *
	 * @param array|string  $views
	 * @param \Closure|string  $callback
	 * @return array
	 * @static 
	 */
	 public static function creator($views, $callback){
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::creator($views, $callback);
=======
		return \Illuminate\View\Environment::renderEach($view, $data, $iterator, $empty);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a view composer event.
	 *
	 * @param array|string  $views
<<<<<<< HEAD
	 * @param \Closure|string  $callback
	 * @return array
	 * @static 
	 */
	 public static function composer($views, $callback){
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::composer($views, $callback);
=======
	 * @param Closure|string  $callback
	 * @return Closure
	 * @static 
	 */
	 public static function composer($views, $callback){
		return \Illuminate\View\Environment::composer($views, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Call the composer for a given view.
	 *
	 * @param \Illuminate\View\View  $view
	 * @return void
	 * @static 
	 */
	 public static function callComposer($view){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::callComposer($view);
	 }

	/**
	 * Call the creator for a given view.
	 *
	 * @param \Illuminate\View\View  $view
	 * @return void
	 * @static 
	 */
	 public static function callCreator($view){
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::callCreator($view);
=======
		 \Illuminate\View\Environment::callComposer($view);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Start injecting content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function startSection($section, $content = ''){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::startSection($section, $content);
=======
		 \Illuminate\View\Environment::startSection($section, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Inject inline content into a section.
	 *
	 * @param string  $section
	 * @param string  $content
	 * @return void
	 * @static 
	 */
	 public static function inject($section, $content){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::inject($section, $content);
=======
		 \Illuminate\View\Environment::inject($section, $content);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @return string
	 * @static 
	 */
	 public static function yieldSection(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::yieldSection();
=======
		return \Illuminate\View\Environment::yieldSection();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Stop injecting content into a section.
	 *
	 * @param bool  $overwrite
	 * @return string
	 * @static 
	 */
	 public static function stopSection($overwrite = false){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::stopSection($overwrite);
=======
		return \Illuminate\View\Environment::stopSection($overwrite);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the string contents of a section.
	 *
	 * @param string  $section
	 * @param string  $default
	 * @return string
	 * @static 
	 */
	 public static function yieldContent($section, $default = ''){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::yieldContent($section, $default);
=======
		return \Illuminate\View\Environment::yieldContent($section, $default);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Flush all of the section contents.
	 *
	 * @return void
	 * @static 
	 */
	 public static function flushSections(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::flushSections();
=======
		 \Illuminate\View\Environment::flushSections();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Increment the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function incrementRender(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::incrementRender();
=======
		 \Illuminate\View\Environment::incrementRender();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Decrement the rendering counter.
	 *
	 * @return void
	 * @static 
	 */
	 public static function decrementRender(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::decrementRender();
=======
		 \Illuminate\View\Environment::decrementRender();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Check if there are no active render operations.
	 *
	 * @return bool
	 * @static 
	 */
	 public static function doneRendering(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::doneRendering();
=======
		return \Illuminate\View\Environment::doneRendering();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a location to the array of view locations.
	 *
	 * @param string  $location
	 * @return void
	 * @static 
	 */
	 public static function addLocation($location){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::addLocation($location);
=======
		 \Illuminate\View\Environment::addLocation($location);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string  $namespace
	 * @param string|array  $hints
	 * @return void
	 * @static 
	 */
	 public static function addNamespace($namespace, $hints){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::addNamespace($namespace, $hints);
=======
		 \Illuminate\View\Environment::addNamespace($namespace, $hints);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @param string   $extension
	 * @param string   $engine
	 * @param Closure  $resolver
	 * @return void
	 * @static 
	 */
	 public static function addExtension($extension, $engine, $resolver = null){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::addExtension($extension, $engine, $resolver);
=======
		 \Illuminate\View\Environment::addExtension($extension, $engine, $resolver);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the extension to engine bindings.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getExtensions(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getExtensions();
=======
		return \Illuminate\View\Environment::getExtensions();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the engine resolver instance.
	 *
	 * @return \Illuminate\View\Engines\EngineResolver
	 * @static 
	 */
	 public static function getEngineResolver(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getEngineResolver();
=======
		return \Illuminate\View\Environment::getEngineResolver();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the view finder instance.
	 *
	 * @return \Illuminate\View\ViewFinderInterface
	 * @static 
	 */
	 public static function getFinder(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getFinder();
=======
		return \Illuminate\View\Environment::getFinder();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Events\Dispatcher
	 * @static 
	 */
	 public static function getDispatcher(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getDispatcher();
	 }

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Events\Dispatcher
	 * @return void
	 * @static 
	 */
	 public static function setDispatcher($events){
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::setDispatcher($events);
=======
		return \Illuminate\View\Environment::getDispatcher();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the IoC container instance.
	 *
	 * @return \Illuminate\Container\Container
	 * @static 
	 */
	 public static function getContainer(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getContainer();
=======
		return \Illuminate\View\Environment::getContainer();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container  $container
	 * @return void
	 * @static 
	 */
	 public static function setContainer($container){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		 Robbo\Presenter\View\Environment::setContainer($container);
=======
		 \Illuminate\View\Environment::setContainer($container);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getShared(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getShared();
=======
		return \Illuminate\View\Environment::getShared();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the entire array of sections.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getSections(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getSections();
=======
		return \Illuminate\View\Environment::getSections();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @return array
	 * @static 
	 */
	 public static function getNames(){
<<<<<<< HEAD
		//Method inherited from Illuminate\View\Environment
		return Robbo\Presenter\View\Environment::getNames();
	 }

}

class Confide extends Zizaco\Confide\ConfideFacade{
=======
		return \Illuminate\View\Environment::getNames();
	 }

 }
}

namespace  {
 class Confide extends Zizaco\Confide\ConfideFacade{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new confide instance.
	 *
	 * @param ConfideRepository $repo A "repository" to abstract all the database interaction.
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($repo){
		 Zizaco\Confide\Confide::__construct($repo);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($repo){
		 \Zizaco\Confide\Confide::__construct($repo);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns the Laravel application
	 *
	 * @return Illuminate\Foundation\Application
	 * @static 
	 */
	 public static function app(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::app();
=======
		return \Zizaco\Confide\Confide::app();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Returns an object of the model set in auth config
	 *
	 * @return object
	 * @static 
	 */
	 public static function model(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::model();
=======
		return \Zizaco\Confide\Confide::model();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the currently authenticated user or null.
	 *
	 * @return Zizaco\Confide\ConfideUser|null
	 * @static 
	 */
	 public static function user(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::user();
=======
		return \Zizaco\Confide\Confide::user();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set the user confirmation to true.
	 *
	 * @param string $code
	 * @return bool
	 * @static 
	 */
	 public static function confirm($code){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::confirm($code);
=======
		return \Zizaco\Confide\Confide::confirm($code);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Attempt to log a user into the application with
	 * password and identity field(s), usually email or username.
	 *
	 * @param array $credentials
	 * @param bool $confirmed_only
	 * @param mixed $identity_columns
	 * @return boolean Success
	 * @static 
	 */
	 public static function logAttempt($credentials, $confirmed_only = false, $identity_columns = array()){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::logAttempt($credentials, $confirmed_only, $identity_columns);
=======
		return \Zizaco\Confide\Confide::logAttempt($credentials, $confirmed_only, $identity_columns);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if the credentials has been throttled by too
	 * much failed login attempts
	 *
	 * @param array $credentials
	 * @return mixed Value.
	 * @static 
	 */
	 public static function isThrottled($credentials){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::isThrottled($credentials);
=======
		return \Zizaco\Confide\Confide::isThrottled($credentials);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Send email with information about password reset
	 *
	 * @param string  $email
	 * @return bool
	 * @static 
	 */
	 public static function forgotPassword($email){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::forgotPassword($email);
=======
		return \Zizaco\Confide\Confide::forgotPassword($email);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks to see if the user has a valid token.
	 *
	 * @param $token
	 * @return bool
	 * @static 
	 */
	 public static function isValidToken($token){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::isValidToken($token);
=======
		return \Zizaco\Confide\Confide::isValidToken($token);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Change user password
	 *
	 * @return string
	 * @static 
	 */
	 public static function resetPassword($params){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::resetPassword($params);
=======
		return \Zizaco\Confide\Confide::resetPassword($params);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Log the user out of the application.
	 *
	 * @return void
	 * @static 
	 */
	 public static function logout(){
<<<<<<< HEAD
		 Zizaco\Confide\Confide::logout();
=======
		 \Zizaco\Confide\Confide::logout();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Display the default login view
	 *
	 * @deprecated 
	 * @return Illuminate\View\View
	 * @static 
	 */
	 public static function makeLoginForm(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::makeLoginForm();
=======
		return \Zizaco\Confide\Confide::makeLoginForm();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Display the default signup view
	 *
	 * @deprecated 
	 * @return Illuminate\View\View
	 * @static 
	 */
	 public static function makeSignupForm(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::makeSignupForm();
=======
		return \Zizaco\Confide\Confide::makeSignupForm();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Display the forget password view
	 *
	 * @deprecated 
	 * @return Illuminate\View\View
	 * @static 
	 */
	 public static function makeForgotPasswordForm(){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::makeForgotPasswordForm();
=======
		return \Zizaco\Confide\Confide::makeForgotPasswordForm();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Display the forget password view
	 *
	 * @deprecated 
	 * @return Illuminate\View\View
	 * @static 
	 */
	 public static function makeResetPasswordForm($token){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::makeResetPasswordForm($token);
=======
		return \Zizaco\Confide\Confide::makeResetPasswordForm($token);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Check whether the controller's action exists.
	 * 
	 * Returns the url if it does. Otherwise false.
	 *
	 * @param $controllerAction
	 * @return string
	 * @static 
	 */
	 public static function checkAction($action, $parameters = array(), $absolute = true){
<<<<<<< HEAD
		return Zizaco\Confide\Confide::checkAction($action, $parameters, $absolute);
	 }

}

class Entrust extends Zizaco\Entrust\EntrustFacade{
=======
		return \Zizaco\Confide\Confide::checkAction($action, $parameters, $absolute);
	 }

 }
}

namespace  {
 class Entrust extends Zizaco\Entrust\EntrustFacade{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new confide instance.
	 *
	 * @param Illuminate\Foundation\Application  $app
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($app){
		 Zizaco\Entrust\Entrust::__construct($app);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($app){
		 \Zizaco\Entrust\Entrust::__construct($app);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Checks if the current user has a Role by its name
	 *
	 * @param string $name Role name.
	 * @access public
	 * @return boolean
	 * @static 
	 */
	 public static function hasRole($permission){
<<<<<<< HEAD
		return Zizaco\Entrust\Entrust::hasRole($permission);
=======
		return \Zizaco\Entrust\Entrust::hasRole($permission);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Check if the current user has a permission by its name
	 *
	 * @param string $permission Permission string.
	 * @access public
	 * @return boolean
	 * @static 
	 */
	 public static function can($permission){
<<<<<<< HEAD
		return Zizaco\Entrust\Entrust::can($permission);
=======
		return \Zizaco\Entrust\Entrust::can($permission);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get the currently authenticated user or null.
	 *
	 * @access public
	 * @return Illuminate\Auth\UserInterface|null
	 * @static 
	 */
	 public static function user(){
<<<<<<< HEAD
		return Zizaco\Entrust\Entrust::user();
=======
		return \Zizaco\Entrust\Entrust::user();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Filters a route for the name Role. If the third parameter
<<<<<<< HEAD
	 * is null then return 403. Overwise the $result is returned
=======
	 * is null then return 404. Overwise the $result is returned
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 *
	 * @param string $route  Route pattern. i.e: "admin/*"
	 * @param array|string $roles   The role(s) needed.
	 * @param mixed $result i.e: Redirect::to('/')
	 * @param bool $cumulative Must have all roles.
	 * @access public
	 * @return void
	 * @static 
	 */
	 public static function routeNeedsRole($route, $roles, $result = null, $cumulative = true){
<<<<<<< HEAD
		 Zizaco\Entrust\Entrust::routeNeedsRole($route, $roles, $result, $cumulative);
=======
		 \Zizaco\Entrust\Entrust::routeNeedsRole($route, $roles, $result, $cumulative);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Filters a route for the permission. If the third parameter
<<<<<<< HEAD
	 * is null then return 403. Overwise the $result is returned
=======
	 * is null then return 404. Overwise the $result is returned
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 *
	 * @param string $route  Route pattern. i.e: "admin/*"
	 * @param array|string $permissions   The permission needed.
	 * @param mixed  $result i.e: Redirect::to('/')
	 * @param bool $cumulative Must have all permissions
	 * @access public
	 * @return void
	 * @static 
	 */
	 public static function routeNeedsPermission($route, $permissions, $result = null, $cumulative = true){
<<<<<<< HEAD
		 Zizaco\Entrust\Entrust::routeNeedsPermission($route, $permissions, $result, $cumulative);
	 }

}

class Presenter extends Robbo\Presenter\Presenter{
}

class Presentable{
}

class Basset extends Basset\Facade{
=======
		 \Zizaco\Entrust\Entrust::routeNeedsPermission($route, $permissions, $result, $cumulative);
	 }

 }
}

namespace  {
 class Presenter extends Robbo\Presenter\Presenter{
 }
}

namespace  {
 class Presentable extends Robbo\Presenter\PresentableInterface{
 }
}

namespace  {
 class Basset extends Basset\Facade{
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	/**
	 * Create a new environment instance.
	 *
	 * @param \Basset\Factory\FactoryManager  $factory
	 * @param \Basset\AssetFinder  $finder
<<<<<<< HEAD
	 * @return void
	 * @static 
	 */
	 public static function __construct($factory, $finder){
		 Basset\Environment::__construct($factory, $finder);
=======
	 * @return self 
	 * @static 
	 */
	 public static function __construct($factory, $finder){
		 \Basset\Environment::__construct($factory, $finder);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Alias of \Basset\Environment::collection()
	 *
	 * @param string  $name
	 * @param \Closure  $callback
	 * @return \Basset\Collection
	 * @static 
	 */
	 public static function make($name, $callback = null){
<<<<<<< HEAD
		return Basset\Environment::make($name, $callback);
=======
		return \Basset\Environment::make($name, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Create or return an existing collection.
	 *
	 * @param string  $identifier
	 * @param \Closure  $callback
	 * @return \Basset\Collection
	 * @static 
	 */
	 public static function collection($identifier, $callback = null){
<<<<<<< HEAD
		return Basset\Environment::collection($identifier, $callback);
=======
		return \Basset\Environment::collection($identifier, $callback);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get all collections.
	 *
	 * @return array
	 * @static 
	 */
	 public static function all(){
<<<<<<< HEAD
		return Basset\Environment::all();
=======
		return \Basset\Environment::all();
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a collection exists.
	 *
	 * @param string  $name
	 * @return bool
	 * @static 
	 */
	 public static function has($name){
<<<<<<< HEAD
		return Basset\Environment::has($name);
=======
		return \Basset\Environment::has($name);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register a package with the environment.
	 *
	 * @param string  $package
	 * @param string  $namespace
	 * @return void
	 * @static 
	 */
	 public static function package($package, $namespace = null){
<<<<<<< HEAD
		 Basset\Environment::package($package, $namespace);
=======
		 \Basset\Environment::package($package, $namespace);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Register an array of collections.
	 *
	 * @param array  $collections
	 * @return void
	 * @static 
	 */
	 public static function collections($collections){
<<<<<<< HEAD
		 Basset\Environment::collections($collections);
=======
		 \Basset\Environment::collections($collections);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Set a collection offset.
	 *
	 * @param string  $offset
	 * @param mixed  $value
	 * @return void
	 * @static 
	 */
	 public static function offsetSet($offset, $value){
<<<<<<< HEAD
		 Basset\Environment::offsetSet($offset, $value);
=======
		 \Basset\Environment::offsetSet($offset, $value);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Get a collection offset.
	 *
	 * @param string  $offset
	 * @return null|\Basset\Collection
	 * @static 
	 */
	 public static function offsetGet($offset){
<<<<<<< HEAD
		return Basset\Environment::offsetGet($offset);
=======
		return \Basset\Environment::offsetGet($offset);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Unset a collection offset.
	 *
	 * @param string  $offset
	 * @return void
	 * @static 
	 */
	 public static function offsetUnset($offset){
<<<<<<< HEAD
		 Basset\Environment::offsetUnset($offset);
=======
		 \Basset\Environment::offsetUnset($offset);
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
	 }

	/**
	 * Determine if a collection offset exists.
	 *
	 * @param string  $offset
	 * @return bool
	 * @static 
	 */
	 public static function offsetExists($offset){
<<<<<<< HEAD
		return Basset\Environment::offsetExists($offset);
	 }

}

class String extends Andrew13\Helpers\String{
}

class Carbon extends Carbon\Carbon{
}

class Datatables extends Bllim\Datatables\Datatables{
=======
		return \Basset\Environment::offsetExists($offset);
	 }

 }
}

namespace  {
 class String extends Andrew13\Helpers\String{
 }
}

namespace  {
 class Carbon extends Carbon\Carbon{
 }
}

namespace  {
 class Datatables extends Bllim\Datatables\Datatables{
 }
>>>>>>> 051b2c73433682c5d32f025b4b13e7c960a7e6be
}

