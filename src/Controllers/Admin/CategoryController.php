<?php
namespace Hai\NsPsr4\Controllers\Admin;

use Hai\NsPsr4\Commons\Controller;
use Hai\NsPsr4\Commons\Model;
use Rakit\Validation\Validator;

use Hai\NsPsr4\Models\Categories;
class CategoryController extends Controller
{
    protected Categories $categories;

    public function __construct(){
        $this->categories = new Categories();
    }

    public function index()
    {
        $categories = $this->categories->all();
        return $this->renderViewAdmin('categories.index', ['categories' => $categories]);
    }

    public  function create()
    {
        return $this->renderViewAdmin('categories.create');
       
    } 

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST , [
            'name'                  => 'required|max:100',    
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/categories/create'));
            exit;
        } else {
            $data = [                
                'name'          => $_POST['name'],
            ];
            $this->categories->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/categories'));
            exit;
        }


    }

    public function edit($id)
    {
        $categories = $this->categories->findByID($id);
        return $this->renderViewAdmin('categories.edit', ['categories' => $categories]);

    }
    public function show($id)
    {
        $categories = $this->categories->findByID($id);
        return $this->renderViewAdmin('categories.show', ['categories' => $categories]);

    }

    public function update($id)
    {
        $categories = $this->categories->findByID($id);
        $validator = new Validator;
        $validation = $validator->make($_POST , [
            'name'                  => 'required|max:100',    
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/categories/create'));
            exit;
        } else {
            $data = [                
                'name'          => $_POST['name'],
            ];
            $this->categories->update($id,$data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/categories/edit'));
            exit;
        }

    }
}
