<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModal;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $title = "Service List";
        $allservice = ServiceModal::where('status', '!=', '3')->orderBy('id', 'desc')->get();
        return view('services.index', compact('title', 'allservice'));

    }

    public function create(Request $request)
    {
        if ($request->method() == 'POST') {
            $request->validate([
                'title' => 'required',
                'text' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
                'status' => 'required',
            ]);
            $check_data = $this->check_exist_data($request, null);
            if ($check_data) {
                $message = '';
                if ($check_data->title == $request->title) {
                    $message .= "Service ";
                }
                if ($message) {
                    return redirect()->route('service')
                        ->with('error', trim($message) . ' Already Exists');
                }
            }
            $services = new ServiceModal();
            $services->title = $request->title;
            $services->text = $request->text;
            $services->status = $request->status;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filePath = $file->store('services', 'public');
                $services->image = $filePath;
            }
            $services->save();
            return redirect()->route('service')->with('success', 'Service Added Successfully');
        }
    }

    public function edit($id)
    {
        $title = "Edit Service";
        $get_service = ServiceModal::where('status', '!=', 3)->where('id', $id)->first();
        $allservice = ServiceModal::where('status', '!=', '3')->orderBy('id', 'desc')->get();
        return view('services.index', compact('title', 'allservice','get_service'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'status' => 'required',
        ]);
        $check_data = $this->check_exist_data($request, $request->hidden_id);
        if ($check_data) {
            $message = '';
            if ($check_data->title == $request->title) {
                $message .= "Service ";
            }
            if ($message) {
                return redirect()->route('service.edit', ['id' => $request->hidden_id])
                    ->with('error', trim($message) . ' Already Exists');
            }
        }
        $services = ServiceModal::findOrFail($request->hidden_id);
        $services->title = $request->title;
        $services->text = $request->text;
        $services->status = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filePath = $file->store('services', 'public');
            $services->image = $filePath;
            if ($request->filled('hidden_image') && Storage::disk('public')->exists($request->hidden_image)) {
                Storage::disk('public')->delete($request->hidden_image);
            }
        }
        $services->updated_at = date('Y-m-d H:i:s');
        $services->save();
        return redirect()->route('service')->with('success', 'Service Updated Successfully');
    }


    public function destroy($id)
    {
        $services = ServiceModal::findOrFail($id);
        $services->status = 3;
        $services->update();
        return redirect()->route('service')->with('success', 'Service deleted successfully.');
    }

    public function check_exist_data($request, $id)
    {
        $query = ServiceModal::where('status', '!=', 3);
        if ($id !== null) {
            $query->where('id', '!=', $id);
        }
        $check_services = $query->where(function ($q) use ($request) {
            $q->where('title', $request->title);
        })->first();

        return $check_services;
    }
}
