<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        //
    }

    static public function getProjectList(): \App\Classes\ProjectInfo
    {
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->get('https://api.github.com/users/lexisother/repos');
            if ($res->getStatusCode() == 200) {
                $json = json_decode($res->getBody(), true);
            }
        }
        catch (\Throwable $e)
        {
            return new \App\Classes\ProjectInfo();
        }

        return new \App\Classes\ProjectInfo($json);
    }

    public function show(Request $request): \Illuminate\Contracts\Support\Renderable
    {
        $result = ProjectController::getProjectList();

        return view('projects', ['project_info' => $result]);
    }
}
