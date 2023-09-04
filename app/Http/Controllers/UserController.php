<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if(Auth::id()){
            $u_type = Auth()->User()->user_type;

            if($u_type == 'user'){
                return view('expenditure-list');
            }else if($u_type == 'admin'){
                return view('user-list');
            }else{
                return redirect()->back();
            }
        }
    }

    public function post(){ 
        return view('post');
    }

    public function item(){ 
        return view('item');
    }
    public function itemGroup(){ 
        return view('itemgroup');
    }
    public function itemGroupList(){ 
        return view('itemgroup-list');
    }
    public function itemList(){ 
        return view('item-list');
    }
    public function addExpenditure(){ 
        return view('add-expenditure');
    }
    public function expenditureList(){ 
        return view('expenditure-list');
    }
    public function userList(){ 
        return view('user-list');
    }

    public function categoryList(){ 
        return view('category-list');
    }

    public function subCategoryList(){ 
        return view('subcategory-list');
    }
    public function addCategory(){ 
        return view('addcategory');
    }
    public function addSubcategory(){ 
        return view('addsubcategory');
    }

}
