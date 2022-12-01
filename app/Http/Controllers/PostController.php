<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPost;
use App\Http\Requests\EditPost;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller
{

    protected string $name = 'posts.';
    protected string $folderPath = 'admin.pages.posts.';
    protected string $folderPathUser = 'pages.posts.';
    public const QUERY_EXCEPTION_READABLE_MESSAGE = 2;


    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $all = Post::orderBy('id', 'desc')->get();
        $popularPosts = Post::orderBy('views_count', 'desc')->limit(3)->get();
        $description = 'Статьи на разную тематику любимой игры. Новости, гайды, турниры, эксклюзив - всё это найдёт тут.';
        $keywords = 'блог, статьи, ла2, турниры, новости, гайды, эксклюзив';

        return view($this->folderPathUser . 'index', [
            'all' => $all,
            'popularPosts' => $popularPosts,
            'title' => 'Статьи',
            'description' => $description,
            'keywords' => $keywords,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view($this->folderPath . 'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AddPost $request
     * @return RedirectResponse
     */
    public function store(AddPost $request): RedirectResponse
    {
        $slug = Str::slug($request->title, '-');
        $img = $request->file('image');
        $currentYear = date('Y');
        $currentMonth = date('m');
        if (!empty($img)) {
            $imgName = time() . '-' . Str::slug(
                    pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME),
                    '-'
                ) . '.' . $img->getClientOriginalExtension();
            $imgPath = $img->storeAs("uploads/posts/{$currentYear}/{$currentMonth}", $imgName, 'public');

            $request->merge(['thumbnail' => $imgPath]);
        }
        $request->merge(['slug' => $slug]);

        try {
            $single = Post::create($request->except('image'));

            $url = route($this->name . 'show', ['post' => $single]);
            $message = "Добавление выполнено успешно! Нажмите <a href='{$url}'>сюда</a> что бы посмотреть";
        } catch (QueryException $exception) {
            $message = $exception->errorInfo[self::QUERY_EXCEPTION_READABLE_MESSAGE];
        }

        $request->session()->flash('message', $message);

        return Redirect::to(route($this->name . 'create'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return Factory|View|Application
     */
    public function show(Post $post): Factory|View|Application
    {
        $recentPosts = $this->getRecentPosts($post->id);
        $this->cookieFlow($post);

        return view($this->folderPathUser . 'show', [
            'single' => $post,
            'recentPosts' => $recentPosts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return Application|Factory|View
     */
    public function edit(Post $post)
    {
        return view($this->folderPath . 'edit', [
            'single' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditPost $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(EditPost $request, Post $post): RedirectResponse
    {
        $method = $request->input('method');

        try {
            $slug = Str::slug($request->title, '-');
            $img = $request->file('image');
            $currentYear = date('Y');
            $currentMonth = date('m');

            if ($img) {
                $imgName = time() . '-' . Str::slug(
                        pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME),
                        '-'
                    ) . '.' . $img->getClientOriginalExtension();
                $imgPath = $img->storeAs("uploads/posts/{$currentYear}/{$currentMonth}", $imgName, 'public');

                $request->merge(['thumbnail' => $imgPath]);
            }
            $request->merge(['slug' => $slug]);
            $post->update($request->except('currentID', 'method', 'image'));

            $message = 'Обновление выполнено успешно!';
        } catch (QueryException $exception) {
            $message = $exception->errorInfo[self::QUERY_EXCEPTION_READABLE_MESSAGE];
        }

        $request->session()->flash('message', $message);

        if ($method == 'Применить') {
            return Redirect::to(
                route($this->name . 'edit', [
                    'post' => $post,
                ])
            );
        }

        return Redirect::to(route($this->name . 'index'));
    }

    protected function cookieFlow(Post $post)
    {
        if ($this->isUserCanAddView($post)) {
            $this->increaseViewsCount($post);
            $this->addCookieForUser($post);
        }
    }

    protected function isUserCanAddView(Post $post): bool
    {
        return empty($_COOKIE["sd-view-post-{$post->id}"]);
    }

    protected function increaseViewsCount(Post $post)
    {
        $post::withoutTimestamps(fn() => $post->increment('views_count'));
    }

    protected function addCookieForUser(Post $post)
    {
        $oneHourInSeconds = 3600;
        $cookieHoursCount = 1;
        setcookie(
            "sd-view-post-{$post->id}",
            1,
            time() + ($oneHourInSeconds * $cookieHoursCount),
            '/'
        );
    }

    public function getRecentPosts(int $currentPostId = 0, int $limit = 3)
    {

        return Post::whereNotIn('id', [$currentPostId])->orderBy('id', 'desc')->limit($limit)->get();
    }
}
