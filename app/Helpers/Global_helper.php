<?php
namespace App\Helpers;
use Twilio\Rest\Client;
use App\Models\Company;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;

class Global_helper
{


    public static function companyDetails()
    {
        return Company::where('status',1)->first();
    }






    public static function getTablesCount()
    {
        $tables = [
            'Banner' => 'banners',
            'Blog' => 'blogs'
        ];

        $result = [];

        foreach ($tables as $name => $table) {
            $count = DB::table($table)->where('status', 1)->count();
            $result[] = [
                'name' => $name,
                'count' => $count,
            ];
        }

        return $result;
    }


}


