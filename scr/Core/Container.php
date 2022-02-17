<?php 

namespace App\Core;

use PDO;
use Exception;
use PDOException;

use App\Post\PostsRepository;
use App\Post\PostsAdminController;
use App\Post\CommentsRepository;
use App\User\UsersRepository;

use App\Post\PostsController;
use App\User\LoginController;

use App\User\LoginService;

class Container {

    private $receipts = [];
    private $instances = [];

    public function __construct() {
        $this->receipts = [
            "loginService" => function() {
                return new LoginService(
                    $this->make("usersRepository")
                );
            },
            "loginController" => function() {
                return new LoginController(
                    $this->make("loginService")
                );
            },
            "postsAdminController" => function() {
                return new PostsAdminController(
                    $this->make("postsRepository"),
                    $this->make("loginService")
                );
            },
            "postsController" => function() {
                return new PostsController(
                    $this->make("postsRepository"),
                    $this->make("commentsRepository")
                );
            },
            "usersRepository" => function() {
                return new UsersRepository(
                    $this->make("pdo")
                );
            },
            "postsRepository" => function() {
                return new PostsRepository(
                    $this->make("pdo")
                );
            },
            "commentsRepository" => function() {
                return new CommentsRepository(
                    $this->make("pdo")
                );
            },
            "pdo" => function() {
                try {
                    $pdo = new PDO(
                        'mysql:host=localhost;dbname=???;charset=utf8',
                        '???',
                        '???'
                    );
                } catch (PDOException $e) {
                    echo("Fetal Error can't connect to database");
                    die();
                }
            
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }

    public function make($name) {
        if (!empty($this->instances[$name])) {
            return $this->instances[$name];
        }

        if (isset($this->receipts[$name])) {
            $this->instances[$name] = $this->receipts[$name]();
        }

        // Create

        return $this->instances[$name];
    }
}
?>
