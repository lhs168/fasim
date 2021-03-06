<?php
namespace App\Controller;

use Fasim\Core\Controller;
use Fasim\Core\ModelArray;
use Fasim\Facades\Cache;
use Fasim\Library\Pager;
use App\Model\UserModel;

use Fasim\Facades\Log;

/**
 * @class MainController
 * 主控制器
 */
class MainController extends Controller {

	public function doDefault() {
		//UserModel::test();
		Log::info('good thing');
		echo 'hello, sir!';
	}

	public function doTest1() {
		// $testUser = new UserModel();
		// $testUser->nickname = 'test';
		// $testUser->gender = 1;

		// Cache::getInstance()->set('test_user', $testUser, 3600);

		// $testUsers = new ModelArray();
		// $testUsers[] = $testUser;
		// Cache::getInstance()->set('test_users', $testUsers, 3600);
		$this->request->get('test')->intval();
		echo $this->request->get->intval('test'), ',', $this->request->get['test'];
	}

	public function doTest2() {
		// $model = Cache::get('test_user');
		// print_r($model);

		// $models = Cache::get('test_users');
		// print_r($models);

		$pager = new Pager();
		$pager->totalCount = 31;
		$pager->pageSize = 15;
		$pager->page = 2;
		$pager->style = Pager::Bootstrap;
		$pager->url = '?action=list&page={page}';
		echo $pager->pagecute();
	}

}
