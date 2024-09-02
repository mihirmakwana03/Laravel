<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function users()
    {
        return DB::select('select * from users');
    }

    public function insertUser()
    {
        $query = DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['Jane Smith', 'janesmith@example.com', 'password123']);

        if ($query) {
            return "Record inserted successfully.";
        } else {
            return "Record not inserted.";
        }
    }

    public function submit(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $query = DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);

        if ($query) {
            return "Record inserted successfully.";
        } else {
            return "Record not inserted.";
        }
    }

    public function display()
    {
        $data = DB::select('select * from users');
        return view('DB.display', compact('data'));
    }

    public function updateUser(Request $req){
        $id = $req->query('id');
        $display = DB::select('select * from users where id = ?',[$id]);
        return view('DB.update',compact('display'));
    }

    public function updated(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $query = DB::update('update users set name = ?, email = ?, password = ? where id = ?', [$name, $email, $password, $id]);
        $display = DB::select("select * from users");
        if ($query) {
            return view('DB.search',compact('display'));
        } else {
            return "Record not updated.";
        }
    }

    public function delete(Request $req)
    {
        $id = $req->input('id');
        $query = DB::delete('delete from users where id = ?', [$id]);

        if ($query) {
            return "Record deleted successfully.";
        } else {
            return "Record not deleted.";
        }
    }

    public function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $data = DB::select('select * from users where email = ? and password = ?', [$email, $password]);

        if ($data) {
            return "Login successful.";
        } else {
            return "Login failed.";
        }
    }

    public function search(Request $req)
    {
        $name = $req->input('name');
        if ($name) {
            $display = DB::select("select * from users where name = '$name'");
            if ($display) {
                return view('DB.search', compact('display'));
            } else {
                return "<script>alert('Name not Found');</script>".redirect('/search');
            }
        }

        $display = $this->dis();
        return view('DB.search', compact('display'));
    }

    public function dis()
    {
        $display = DB::select('select * from users');
        return $display;
    }
}
