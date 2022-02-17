<?php
namespace App\Post;
use App\Core\AbstractController;
use App\User\LoginService;

class PostsAdminController extends AbstractController {

    public function __construct(
        PostsRepository $postsRepository,
        LoginService $loginService
    ) {
        $this->postsRepository = $postsRepository;
        $this->loginService = $loginService;
    }

    public function index() {
        $this->loginService->check();
        $posts = $this->postsRepository->all();

        $this->render("post/admin/index", [
            'posts' => $posts
        ]);
    }

    public function edit() {
        $this->loginService->check();
        $id = $_GET['id'];
        
        $post = $this->postsRepository->find($id);

        if (!empty($_POST['title']) AND !empty($_POST['content'])) {
            $post->title= $_POST['title'];
            $post->content= $_POST['content'];

            $this->postsRepository->update($post);
            header('Location: posts-admin');
        }

        $this->render("post/admin/edit", [
            'post' => $post
        ]);
        
    }
}

?>