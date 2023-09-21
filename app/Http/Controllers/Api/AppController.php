<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Models\User;
use App\Models\Project;
use App\Notifications\Contact;
use Validator;

class AppController extends Controller
{
//receive contact info and send to email
public function contact(Request $request){
    // return "here";

    $validator = Validator::make($request->all(),[
        'first_name'=>'required',
        'email'=>'required',
        'message'=>'required',
        ]);
        //if validator fails return error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        


        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $message = $request->message;
        
        $user = new User;
        $user->email = "alphacorelabs@gmail.com";
        
        // try {
            $user->notify(new Contact($first_name,$last_name,$email,$message));
        // } catch (\Throwable $th) {

        // }

        
        return response()->json([
            'status'=>'success',
            'message'=>'Thank you for contacting us, we will get back to you soon'
            ]);

    }

    // get projects
    public function getProjects(){
        $projects = Project::all();

        return response()->json([
            'status'=>'success',
            'data'=> [$projects]
                ]);
                

                }

    //get project by id
    public function getProjectById($id){
        $project = Project::find($id);
        if(!$project){
            return response()->json([
                'status'=>'error',
                'message'=>'Project not found'
                ]);
            }
            return response()->json([
                'status'=>'success',
                'data'=> $project
                    ]);

                }
        
}
