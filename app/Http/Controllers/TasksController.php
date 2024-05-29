<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Task; 

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::orderBy('id', 'DESC')->get();
        $name_of_task = Task::orderBy('id', 'DESC')->get();

        $count = Task::whereNotNull('completed_at')->count();



        return view('tasks.index', [
            'tasks' => $tasks
            ,'count'=> $count,
            'name_of_task'=> $name_of_task
        ]);




    }

    public function create() {
        return view('tasks.create');
    }

   
    public function store(Request $request) {
        $request->validate([
            'description' => 'required|string|max:255',
            //ime
            'name_of_task' => 'required|string|max:255',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Zadatak je izvršen.');
    }

    public function update($id){
        $task= Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Zadatak je izvršen.');
    }

        public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Task::where('description', 'like', "%$search%")->get();

        //mora ići count jer poziva se druga funkcija
        $count = Task::whereNotNull('completed_at')->count();


        return view('tasks.index', ['tasks' => Task::orderBy('id', 'DESC')->get(), 'results' => $results, 'count'=> $count]);


    }
}

// Objašnjenje funkcija:
// index():

// Dohvaća sve zadatke iz baze podataka poredane prema id-ju silazno.
// Broji koliko zadataka je dovršeno (completed_at nije null).
// Vraća pogled tasks.index s podacima o zadacima i brojem dovršenih zadataka.
// create():

// Vraća pogled za kreiranje novog zadatka.
// store(Request $request):

// Validira ulazne podatke (opis i ime zadatka).
// Stvara novi zadatak u bazi podataka s validiranim podacima.
// Preusmjerava korisnika na popis zadataka s porukom o uspjehu.
// update($id):

// Pronalazi zadatak prema id-ju.
// Postavlja completed_at na trenutni datum i vrijeme kako bi označio zadatak kao dovršen.
// Spremanje izmjena u bazu podataka.
// Preusmjerava korisnika na popis zadataka s porukom o uspjehu.
// search(Request $request):

// Dohvaća unos za pretragu iz zahtjeva.
// Pretražuje zadatke čiji opis sadrži unos za pretragu.
// Vraća pogled tasks.index s rezultatima pretrage i svim zadacima.