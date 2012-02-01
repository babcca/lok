<?php //netteCache[01]000048a:1:{s:4:"time";s:21:"0.28754400 1327330974";}?><?php
// source: D:\projects\php\www.lokola.cz\app/config/config.neon production

/**
 * @property Nette\Application\Application $application
 * @property Nette\Caching\Storages\FileJournal $cacheJournal
 * @property Nette\Caching\Storages\FileStorage $cacheStorage
 * @property Nette\DI\NestedAccessor $constants
 * @property Nette\DI\Container $container
 * @property NotORM $dbConnection
 * @property Nette\Http\Context $httpContext
 * @property Nette\Http\Request $httpRequest
 * @property Nette\Http\Response $httpResponse
 * @property Nette\Mail\SendmailMailer $mailer
 * @property Diggriola\ModelLoader $modelLoader
 * @property SystemContainer_nette $nette
 * @property Nette\Callback $nette_cacheFactory
 * @property Nette\DI\NestedAccessor $nette_database
 * @property Nette\Callback $nette_formFactory
 * @property Nette\Callback $nette_latteFactory
 * @property Nette\Callback $nette_templateFactory
 * @property Nette\DI\NestedAccessor $php
 * @property Nette\Application\PresenterFactory $presenterFactory
 * @property Nette\Application\Routers\RouteList $router
 * @property Nette\Http\Session $session
 * @property Nette\Caching\Storages\PhpFileStorage $templateCacheStorage
 * @property Nette\Security\User $user
 * @property Nette\Http\UserStorage $userStorage
 */
class SystemContainer extends Nette\DI\Container
{

	public $classes = array(
		'nette\\object' => FALSE, //: cacheJournal, cacheStorage, httpRequestFactory, httpRequest, httpResponse, httpContext, session, userStorage, user, application, router, mailer, nette_form, nette_latte, nette_template, nette_database, modelLoader, container,
		'nette\\caching\\storages\\ijournal' => 'cacheJournal',
		'nette\\caching\\storages\\filejournal' => 'cacheJournal',
		'nette\\caching\\istorage' => 'cacheStorage',
		'nette\\caching\\storages\\filestorage' => 'cacheStorage',
		'nette\\http\\requestfactory' => 'httpRequestFactory',
		'nette\\http\\irequest' => 'httpRequest',
		'nette\\http\\request' => 'httpRequest',
		'nette\\http\\iresponse' => 'httpResponse',
		'nette\\http\\response' => 'httpResponse',
		'nette\\http\\context' => 'httpContext',
		'nette\\http\\session' => 'session',
		'nette\\security\\iuserstorage' => 'userStorage',
		'nette\\http\\userstorage' => 'userStorage',
		'nette\\security\\user' => 'user',
		'nette\\application\\application' => 'application',
		'nette\\arraylist' => 'router',
		'traversable' => 'router',
		'iteratoraggregate' => 'router',
		'countable' => 'router',
		'arrayaccess' => FALSE, //: router, nette_form,
		'nette\\application\\irouter' => 'router',
		'nette\\application\\routers\\routelist' => 'router',
		'nette\\application\\ipresenterfactory' => 'presenterFactory',
		'nette\\application\\presenterfactory' => 'presenterFactory',
		'nette\\mail\\imailer' => 'mailer',
		'nette\\mail\\sendmailmailer' => 'mailer',
		'nette\\forms\\container' => 'nette_form',
		'nette\\componentmodel\\container' => 'nette_form',
		'nette\\componentmodel\\component' => 'nette_form',
		'nette\\componentmodel\\icomponent' => 'nette_form',
		'nette\\componentmodel\\icontainer' => 'nette_form',
		'nette\\forms\\form' => 'nette_form',
		'nette\\latte\\engine' => 'nette_latte',
		'nette\\templating\\template' => 'nette_template',
		'nette\\templating\\itemplate' => 'nette_template',
		'nette\\templating\\ifiletemplate' => 'nette_template',
		'nette\\templating\\filetemplate' => 'nette_template',
		'nette\\di\\nestedaccessor' => 'nette_database',
		'notorm_abstract' => 'dbConnection',
		'notorm' => 'dbConnection',
		'diggriola\\modelloader' => 'modelLoader',
		'nette\\freezableobject' => 'container',
		'nette\\ifreezable' => 'container',
		'nette\\di\\icontainer' => 'container',
		'nette\\di\\container' => 'container',
	);

	public $meta = array();


	public function __construct()
	{
		parent::__construct(array(
			'appDir' => 'D:\\projects\\php\\www.lokola.cz\\app',
			'wwwDir' => 'D:/projects/php/www.lokola.cz/www',
			'productionMode' => TRUE,
			'consoleMode' => FALSE,
			'container' => array(
				'class' => 'SystemContainer',
				'parent' => 'Nette\\DI\\Container',
			),
			'tempDir' => 'D:\\projects\\php\\www.lokola.cz\\app/../temp',
			'database' => array(
				'driver' => 'mysql',
				'host' => 'localhost',
				'database' => 'dev_lokola',
				'username' => 'petr',
				'password' => 'babicka',
				'profiler' => TRUE,
			),
		));
	}


	/**
	 * @return Nette\Application\Application
	 */
	protected function createServiceApplication()
	{
		$service = new Nette\Application\Application($this->presenterFactory, $this->router, $this->httpRequest, $this->httpResponse, $this->session);
		$service->catchExceptions = TRUE;
		$service->errorPresenter = NULL;
		Nette\Application\Diagnostics\RoutingPanel::initializePanel($service);
		Nette\Diagnostics\Debugger::$bar->addPanel(new Nette\Application\Diagnostics\RoutingPanel($this->router, $this->httpRequest));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileJournal
	 */
	protected function createServiceCacheJournal()
	{
		$service = new Nette\Caching\Storages\FileJournal('D:\\projects\\php\\www.lokola.cz\\app/../temp');
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\FileStorage
	 */
	protected function createServiceCacheStorage()
	{
		$service = new Nette\Caching\Storages\FileStorage('D:\\projects\\php\\www.lokola.cz\\app/../temp/cache', $this->cacheJournal);
		return $service;
	}


	/**
	 * @return Nette\DI\NestedAccessor
	 */
	protected function createServiceConstants()
	{
		$service = new Nette\DI\NestedAccessor($this, 'constants');
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	protected function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return NotORM
	 */
	protected function createServiceDbConnection()
	{
		$service = Diggriola\ModelLoader::dbConnect($this);
		if (!$service instanceof NotORM) {
			throw new Nette\UnexpectedValueException('Unable to create service \'dbConnection\', value returned by factory is not NotORM type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	protected function createServiceHttpContext()
	{
		$service = new Nette\Http\Context($this->httpRequest, $this->httpResponse);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	protected function createServiceHttpRequest()
	{
		$service = $this->createHttpRequestFactory()->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'httpRequest\', value returned by factory is not Nette\\Http\\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	protected function createHttpRequestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setEncoding('UTF-8');
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	protected function createServiceHttpResponse()
	{
		$service = new Nette\Http\Response;
		return $service;
	}


	/**
	 * @return Nette\Mail\SendmailMailer
	 */
	protected function createServiceMailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Diggriola\ModelLoader
	 */
	protected function createServiceModelLoader()
	{
		$service = new Diggriola\ModelLoader($this->dbConnection);
		return $service;
	}


	/**
	 * @return Nette\DI\NestedAccessor
	 */
	protected function createServiceNette()
	{
		$service = new Nette\DI\NestedAccessor($this, 'nette');
		return $service;
	}


	/**
	 * @return Nette\Caching\Cache
	 */
	public function createNette_cache($namespace = NULL)
	{
		$service = new Nette\Caching\Cache($this->cacheStorage, $namespace);
		return $service;
	}


	/**
	 * @return Nette\Callback
	 */
	protected function createServiceNette_cacheFactory()
	{
		$service = new Nette\Callback($this, 'createNette_cache');
		return $service;
	}


	/**
	 * @return Nette\DI\NestedAccessor
	 */
	protected function createServiceNette_database()
	{
		$service = new Nette\DI\NestedAccessor($this, 'nette_database');
		return $service;
	}


	/**
	 * @return Nette\Forms\Form
	 */
	public function createNette_form()
	{
		$service = new Nette\Forms\Form;
		return $service;
	}


	/**
	 * @return Nette\Callback
	 */
	protected function createServiceNette_formFactory()
	{
		$service = new Nette\Callback($this, 'createNette_form');
		return $service;
	}


	/**
	 * @return Nette\Latte\Engine
	 */
	public function createNette_latte()
	{
		$service = new Nette\Latte\Engine;
		return $service;
	}


	/**
	 * @return Nette\Callback
	 */
	protected function createServiceNette_latteFactory()
	{
		$service = new Nette\Callback($this, 'createNette_latte');
		return $service;
	}


	/**
	 * @return Nette\Templating\FileTemplate
	 */
	public function createNette_template()
	{
		$service = new Nette\Templating\FileTemplate;
		$service->registerFilter($this->createNette_latte());
		$service->registerHelperLoader('Nette\\Templating\\Helpers::loader');
		return $service;
	}


	/**
	 * @return Nette\Callback
	 */
	protected function createServiceNette_templateFactory()
	{
		$service = new Nette\Callback($this, 'createNette_template');
		return $service;
	}


	/**
	 * @return Nette\DI\NestedAccessor
	 */
	protected function createServicePhp()
	{
		$service = new Nette\DI\NestedAccessor($this, 'php');
		return $service;
	}


	/**
	 * @return Nette\Application\PresenterFactory
	 */
	protected function createServicePresenterFactory()
	{
		$service = new Nette\Application\PresenterFactory('D:\\projects\\php\\www.lokola.cz\\app', $this);
		return $service;
	}


	/**
	 * @return Nette\Application\Routers\RouteList
	 */
	protected function createServiceRouter()
	{
		$service = new Nette\Application\Routers\RouteList;
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	protected function createServiceSession()
	{
		$service = new Nette\Http\Session($this->httpRequest, $this->httpResponse);
		$service->setOptions(array(
			'expiration' => NULL,
		));
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\PhpFileStorage
	 */
	protected function createServiceTemplateCacheStorage()
	{
		$service = new Nette\Caching\Storages\PhpFileStorage('D:\\projects\\php\\www.lokola.cz\\app/../temp/cache', $this->cacheJournal);
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	protected function createServiceUser()
	{
		$service = new Nette\Security\User($this->userStorage, $this);
		Nette\Diagnostics\Debugger::$bar->addPanel(new Nette\Security\Diagnostics\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Http\UserStorage
	 */
	protected function createServiceUserStorage()
	{
		$service = new Nette\Http\UserStorage($this->session);
		return $service;
	}


	public function initialize()
	{
		date_default_timezone_set('Europe/Prague');
		Nette\Caching\Storages\FileStorage::$useDirectories = TRUE;

		Nette\Framework::$iAmUsingBadHost = FALSE;
		Nette\Diagnostics\Debugger::$bar->addPanel(new Nette\DI\Diagnostics\ContainerPanel($this));
	}

}



/**
 * @method Nette\Caching\Cache createCache()
 * @property Nette\Callback $cacheFactory
 * @property Nette\DI\NestedAccessor $database
 * @method Nette\Forms\Form createForm()
 * @property Nette\Callback $formFactory
 * @method Nette\Latte\Engine createLatte()
 * @property Nette\Callback $latteFactory
 * @method Nette\Templating\FileTemplate createTemplate()
 * @property Nette\Callback $templateFactory
 */
class SystemContainer_nette
{



}
