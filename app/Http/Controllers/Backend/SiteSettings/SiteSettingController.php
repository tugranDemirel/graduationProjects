<?php

namespace App\Http\Controllers\Backend\SiteSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSettingsRequest;
use App\Support\Helper;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SiteSettingController extends Controller
{
    public function index()
    {
        return view('Backend.Site_Settings.site_setting');
    }

    public function update(SiteSettingsRequest $request, $id)
    {
        if (!SiteSettings::where('id', $request->id)->first())
        {
            toastError('Güncelleme işlemi gerçekleştirilememiştir.');
            return redirect()->route('admin.site.settings');
        }
        else
        {

            if (Auth::check())
            {
                $site_settings = SiteSettings::where('id', 1)->first();
                $site_settings->title = $request->title;
                $site_settings->url = $request->url;
                $site_settings->statu = $request->statu;
                $site_settings->keywords = $request->keywords;
                $site_settings->description = $request->description;
                $site_settings->updated_at = now();
                if($request->statu == 1)
                    $site_settings->statu = 1;
                else if ($request->statu == 0)
                    $site_settings->statu = 0;
                else
                {
                    toastError('Geçersiz işlem gerçekleştirmeye çalışıyorunuz.');
                    return redirect()->back();
                }

                if ($request->hasFile('favicon'))
                {
                    $logoFavicon = Helper::imageUpload($request->file, $request->title, 'uploads/site_settings');
                    $request->logo = $logoFavicon;
                }
                if ($request->hasFile('logo'))
                {
                    $logoMove = Helper::imageUpload($request->file, $request->title, 'uploads/site_settings');
                    $request->logo = $logoMove;
                }

                $site_settings->save();

                toastSuccess('Güncelleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
                return redirect()->route('admin.site.settings');
            }
            else
            {
                toastError('Geçersiz işlem.');
                return redirect()->back();
            }
        }
        //        return view('Backend.Site Settings.site_mail_setting', compact('smtp_settings'));
    }
}
