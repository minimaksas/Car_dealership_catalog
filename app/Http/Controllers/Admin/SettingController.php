<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index() {
      $page_name = 'System\'s settings';
      $setting = Setting::find(1);
      $system_name = $setting->value;
      return view('admin.setting.update', compact('page_name', 'system_name'));
    }

    public function update(Request $request) {
      $this->validate($request, [
        'name' => 'required',
      ]);

      $sys_settings = Setting::find(1);
      $sys_settings->value = $request->name;
      $sys_settings->save();

      $fav_settings = Setting::find(2);
      if($request->file('favicon')){
          File::delete(public_path('/other/'.$fav_settings->value));
          $file = $request->file('favicon');
          $extension = $file->getClientOriginalExtension();
          $favicon = 'favicon.'.$extension;
          $file->move(public_path('/other'), $favicon);
          $fav_settings->value = $favicon;
          $fav_settings->save();
      }

      $front_settings = Setting::find(3);
      if($request->file('front_logo')){
          File::delete(public_path('/other/'.$front_settings->value));
          $file = $request->file('front_logo');
          $extension = $file->getClientOriginalExtension();
          $front_logo = 'front_logo.'.$extension;
          $file->move(public_path('/other'), $front_logo);
          $front_settings->value = $front_logo;
          $front_settings->save();
      }

      $admin_settings = Setting::find(4);
      if($request->file('admin_logo')){
          File::delete(public_path('/other/'.$admin_settings->value));
          $file = $request->file('admin_logo');
          $extension = $file->getClientOriginalExtension();
          $admin_logo = 'admin_logo.'.$extension;
          $file->move(public_path('/other'), $admin_logo);
          $admin_settings->value = $admin_logo;
          $admin_settings->save();
      }

      return redirect()->action('Admin\SettingController@index')->with('success', 'System\'s settings updated successfully!');;
    }
}
