<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/', array('controller' => 'users', 'action' => 'index' ));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login' ));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout' ));
	Router::connect('/register', array('controller' => 'users', 'action' => 'register' ));
	Router::connect('/forget_password', array('controller' => 'users', 'action' => 'forget_password' ));
	Router::connect('/account', array('controller' => 'users', 'action' => 'account' ));
	Router::connect('/farmer_donkey', array('controller' => 'users', 'action' => 'farmer_donkey' ));
	Router::connect('/never_quit', array('controller' => 'users', 'action' => 'never_quit' ));
	
	Router::connect('/googlelogin', array('controller' => 'users', 'action' => 'googlelogin'));
	Router::connect('/google_login', array('controller' => 'users', 'action' => 'google_login'));
	
	Router::connect('/fb_login', array('controller' => 'users', 'action' => 'fb_login'));
	Router::connect('/fblogin', array('controller' => 'users', 'action' => 'fblogin'));
	
	
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
