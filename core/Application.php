<?php

namespace app\core;

class Application
{
	public string $layout = 'layout';
	public Router $router;
	public Request $request;
	public Response $response;
	public ?Controller $controller = null;
	public Database $db;
	public Session $session;
	public ?DbModel $user;
	public string $userClass;
	public static Application $app;
	public static string $ROOT_DIR;

	public function __construct($rootPath, array $config)
	{
		$this->userClass = $config['userClass'];
		self::$ROOT_DIR = $rootPath;
		self::$app = $this;
		$this->request = new Request();
		$this->response = new Response();
		$this->session = new Session();
		$this->router = new Router($this->request, $this->response);
		$this->db = new Database($config['db']);

		$primaryValue = $this->session->get('user');
		if ($primaryValue) {
			$primaryKey = $this->userClass::primaryKey();
			$this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
		} else {
			$this->user = null;
		}
	}

	public function login(DbModel $user)
    {
		$this->user = $user;
        $primaryKey = $user->primaryKey();
        $value = $user->{$primaryKey};
        $this->session->set('user', $value);
        return true;
    }

    public static function isGuest()
    {
    	return !self::$app->user;
    }

    public function logout()
    {
    	$this->user = null;
    	$this->session->remove('user');
    }

	public function run()
	{
		try {
			echo $this->router->resolve();
		} catch (\Exception $e) {
			$this->response->setStatusCode($e->getCode());
			echo $this->router->renderView('_error', [
				'exception' => $e
			]);
		}
	}
}