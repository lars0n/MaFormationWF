<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 02/08/2017
 * Time: 16:35
 */

namespace Controller\Admin;


use Controller\ControllerAbstract;
use Entity\Category;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends ControllerAbstract
{
    public function listAction(){
        $sm = $this->app['db']->getSchemaManager();
        $table = $sm->listTableColumns('category');

        $categories = $this->app['category.repository']->findAll();

        return $this->render('admin/category/list.html.twig',
            [
                'table' => $table,
                'categories' => $categories,
            ]
            );
    }

    public function  editAction(Request $request, $id = null){

        if($id == true){
            // on va chercher la catégorie en bdd
            $category = $this->app['category.repository']->find($id);

            if(!$category instanceof Category){
                $this->app->abort(404);
            }
        }else{
            // nouvelle catégorie
            $category = new Category();
        }

        $errors = [];

        if($request->isMethod('POST')){
            $category->setName($request->request->get('name'));

            if(empty($_POST['name'])){
                $errors['name'] = 'Le nom est obligatoire';
            }elseif(strlen($_POST['name']) > 20){
                $errors['name'] = 'Le nom ne doit pas faire plus de 20 caractères';
            }

            if(empty($errors)){
                $this->app['category.repository']->save($category);
                $this->addFlashMessage('La rubrique est enregistrée');
                return $this->redirectRoute('admin_categories');
            }else {
                $message = '<strong>Le formulaire contient des erreurs :</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }

        return $this->render('admin/category/edit.html.twig',
            [
                'category' => $category
            ]
        );
    }

    public function deleteAction(Request $request, $id){
        $category = $this->app['category.repository']->find($id);

        if(!$category instanceof Category){
            $this->app->abort(404);
        }

        $this->app['category.repository']->delete($category);

        $this->addFlashMessage('La rubrique est supprimée');

        return $this->redirectRoute('admin_categories');
    }
}