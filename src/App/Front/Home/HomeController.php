<?php

/**
 * Part of starter project.
 *
 * @copyright  Copyright (C) 2021 __ORGANIZATION__.
 * @license    __LICENSE__
 */

declare(strict_types=1);

namespace App\Front\Home;

use Windwalker\Core\Attributes\Controller;
use Windwalker\Core\Manager\DatabaseManager;
use Windwalker\Core\Manager\SessionManager;
use Windwalker\Database\DatabaseAdapter;
use Windwalker\Http\Response\Response;
use Windwalker\ORM\ORM;
use Windwalker\Session\Session;

/**
 * The HomeController class.
 */
#[Controller(

)]
class HomeController
{
    public function index(Session $session)
    {

        $session->start();

        // $session->start();

        return 'asd';
    }
}