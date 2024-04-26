

1. Create Model, migration, and controller for POST
- php artisan make:mdoel Post -mc

2. Update the migration file
- title (String)
- description (longText)
- category_id (integer)
- image (longText)
- user_id (integer)

3. Model
- fillable = [title, description, category_id, image, user_id]

4. Controller
- function index() -> return view('backend.posts.index')
- function create()
- function store(Request $request)
- function destroy($id)
- function edit($id)
- function update(Request $request, $id)
- function getById($id)

5. web.php
(PostController::class)
- Route::get(/post/list) = index (name = post.home)
- Route::get(/post/create) = create (name = post.create)
- Route::post(/post/store) = store (name = post.store)
- Route::get(/post/destroy/{id}) = destroy (name = post.destroy)
- Route::get(/post/edit/{id}) = edit (name = post.edit)
- Route::post(/post/update/{id}) = update (name = post.update)
- Route::get(/post/get/{id}) = getById (name = post.getById)
