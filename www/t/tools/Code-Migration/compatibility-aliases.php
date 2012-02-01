<?php

/**
 * Compatiblity with old namespace structure.
 *
 * This file is part of the Nette Framework (http://nette.org)
 * @phpversion 5.3
 */

class_alias('Nette\InvalidStateException', 'InvalidStateException');
class_alias('Nette\NotImplementedException', 'NotImplementedException');
class_alias('Nette\NotSupportedException', 'NotSupportedException');
class_alias('Nette\DeprecatedException', 'DeprecatedException');
class_alias('Nette\MemberAccessException', 'MemberAccessException');
class_alias('Nette\FatalErrorException', 'FatalErrorException');
class_alias('Nette\FileNotFoundException', 'FileNotFoundException');
class_alias('Nette\DirectoryNotFoundException', 'DirectoryNotFoundException');
class_alias('Nette\IOException', 'IOException');
class_alias('Nette\Utils\RegexpException', 'Nette\RegexpException');
class_alias('Nette\ComponentModel\IComponent', 'Nette\IComponent');
class_alias('Nette\ComponentModel\Component', 'Nette\Component');
class_alias('Nette\ComponentModel\IContainer', 'Nette\IComponentContainer');
class_alias('Nette\ComponentModel\Container', 'Nette\ComponentContainer');
class_alias('Nette\DI\AmbiguousServiceException', 'Nette\AmbiguousServiceException');
class_alias('Nette\DI\IContainer', 'Nette\IContext');
class_alias('Nette\DI\Container', 'Nette\Context');
class_alias('Nette\Diagnostics\Debugger', 'Nette\Debug');
class_alias('Nette\Diagnostics\Helpers', 'Nette\DebugHelpers');
class_alias('Nette\Diagnostics\IBarPanel', 'Nette\IDebugPanel');
class_alias('Nette\Localization\ITranslator', 'Nette\ITranslator');
class_alias('Nette\Utils\Finder', 'Nette\Finder');
class_alias('Nette\Utils\Arrays', 'Nette\ArrayTools');
class_alias('Nette\Utils\Json', 'Nette\Json');
class_alias('Nette\Utils\JsonException', 'Nette\JsonException');
class_alias('Nette\Utils\Neon', 'Nette\Neon');
class_alias('Nette\Utils\NeonException', 'Nette\NeonException');
class_alias('Nette\Utils\Paginator', 'Nette\Paginator');
class_alias('Nette\Utils\Strings', 'Nette\String');
class_alias('Nette\Utils\Tokenizer', 'Nette\Tokenizer');
class_alias('Nette\Utils\TokenizerException', 'Nette\TokenizerException');
class_alias('Nette\Application\Responses\FileResponse', 'Nette\Application\DownloadResponse');
class_alias('Nette\Application\Responses\ForwardResponse', 'Nette\Application\ForwardingResponse');
class_alias('Nette\Application\Responses\JsonResponse', 'Nette\Application\JsonResponse');
class_alias('Nette\Application\Responses\RedirectResponse', 'Nette\Application\RedirectingResponse');
class_alias('Nette\Application\Responses\TextResponse', 'Nette\Application\RenderResponse');
class_alias('Nette\Application\Routers\CliRouter', 'Nette\Application\CliRouter');
class_alias('Nette\Application\Routers\RouteList', 'Nette\Application\MultiRouter');
class_alias('Nette\Application\Routers\Route', 'Nette\Application\Route');
class_alias('Nette\Application\Routers\SimpleRouter', 'Nette\Application\SimpleRouter');
class_alias('Nette\Application\Request', 'Nette\Application\PresenterRequest');
class_alias('Nette\Application\IResponse', 'Nette\Application\IPresenterResponse');
class_alias('Nette\Application\UI\IRenderable', 'Nette\Application\IRenderable');
class_alias('Nette\Application\UI\Presenter', 'Nette\Application\Presenter');
class_alias('Nette\Application\UI\PresenterComponent', 'Nette\Application\PresenterComponent');
class_alias('Nette\Application\UI\Control', 'Nette\Application\Control');
class_alias('Nette\Application\UI\Form', 'Nette\Application\AppForm');
class_alias('Nette\Application\UI\BadSignalException', 'Nette\Application\BadSignalException');
class_alias('Nette\Forms\Controls\Button', 'Nette\Forms\Button');
class_alias('Nette\Forms\Controls\Checkbox', 'Nette\Forms\Checkbox');
class_alias('Nette\Forms\Controls\UploadControl', 'Nette\Forms\FileUpload');
class_alias('Nette\Forms\Controls\BaseControl', 'Nette\Forms\FormControl');
class_alias('Nette\Forms\Controls\HiddenField', 'Nette\Forms\HiddenField');
class_alias('Nette\Forms\Controls\ImageButton', 'Nette\Forms\ImageButton');
class_alias('Nette\Forms\Controls\MultiSelectBox', 'Nette\Forms\MultiSelectBox');
class_alias('Nette\Forms\Controls\RadioList', 'Nette\Forms\RadioList');
class_alias('Nette\Forms\Controls\SelectBox', 'Nette\Forms\SelectBox');
class_alias('Nette\Forms\Controls\SubmitButton', 'Nette\Forms\SubmitButton');
class_alias('Nette\Forms\Controls\TextArea', 'Nette\Forms\TextArea');
class_alias('Nette\Forms\Controls\TextBase', 'Nette\Forms\TextBase');
class_alias('Nette\Forms\Controls\TextInput', 'Nette\Forms\TextInput');
class_alias('Nette\Forms\ControlGroup', 'Nette\Forms\FormGroup');
class_alias('Nette\Forms\Container', 'Nette\Forms\FormContainer');
class_alias('Nette\Caching\IStorage', 'Nette\Caching\ICacheStorage');
class_alias('Nette\Caching\Storages\DevNullStorage', 'Nette\Caching\DummyStorage');
class_alias('Nette\Caching\Storages\FileJournal', 'Nette\Caching\FileJournal');
class_alias('Nette\Caching\Storages\FileStorage', 'Nette\Caching\FileStorage');
class_alias('Nette\Caching\Storages\IJournal', 'Nette\Caching\ICacheJournal');
class_alias('Nette\Caching\Storages\MemcachedStorage', 'Nette\Caching\MemcachedStorage');
class_alias('Nette\Caching\Storages\MemoryStorage', 'Nette\Caching\MemoryStorage');
class_alias('Nette\Utils\LimitedScope', 'Nette\Loaders\LimitedScope');
class_alias('Nette\Mail\Message', 'Nette\Mail\Mail');
class_alias('Nette\Reflection\ClassType', 'Nette\Reflection\ClassReflection');
class_alias('Nette\Reflection\Extension', 'Nette\Reflection\ExtensionReflection');
class_alias('Nette\Reflection\GlobalFunction', 'Nette\Reflection\FunctionReflection');
class_alias('Nette\Reflection\Method', 'Nette\Reflection\MethodReflection');
class_alias('Nette\Reflection\Parameter', 'Nette\Reflection\ParameterReflection');
class_alias('Nette\Reflection\Property', 'Nette\Reflection\PropertyReflection');
class_alias('Nette\Latte\Engine', 'Nette\Templates\LatteFilter');
class_alias('Nette\Latte\DefaultMacros', 'Nette\Templates\LatteMacros');
class_alias('Nette\Latte\ParseException', 'Nette\Templates\LatteException');
class_alias('Nette\Templating\FilterException', 'Nette\Templates\TemplateException');
class_alias('Nette\Templating\DefaultHelpers', 'Nette\Templates\TemplateHelpers');
class_alias('Nette\Templating\FileTemplate', 'Nette\Templates\FileTemplate');
class_alias('Nette\Templating\IFileTemplate', 'Nette\Templates\IFileTemplate');
class_alias('Nette\Templating\ITemplate', 'Nette\Templates\ITemplate');
class_alias('Nette\Templating\Template', 'Nette\Templates\Template');
class_alias('Nette\Utils\Html', 'Nette\Web\Html');
class_alias('Nette\Http\IRequest', 'Nette\Web\IHttpRequest');
class_alias('Nette\Http\Request', 'Nette\Web\HttpRequest');
class_alias('Nette\Http\IResponse', 'Nette\Web\IHttpResponse');
class_alias('Nette\Http\Response', 'Nette\Web\HttpResponse');
class_alias('Nette\Http\RequestFactory', 'Nette\Web\HttpRequestFactory');
class_alias('Nette\Http\FileUpload', 'Nette\Web\HttpUploadedFile');
class_alias('Nette\Http\ISessionStorage', 'Nette\Web\ISessionStorage');
class_alias('Nette\Http\Session', 'Nette\Web\Session');
class_alias('Nette\Http\SessionSection', 'Nette\Web\SessionNamespace');
class_alias('Nette\Http\Url', 'Nette\Web\Uri');
class_alias('Nette\Http\UrlScript', 'Nette\Web\UriScript');
class_alias('Nette\Security\User', 'Nette\Web\User');
