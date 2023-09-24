<?php

namespace App\Http\Controllers\ServiceController;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class AddService extends Controller
{
    public function serviceAdd(Request $request)
    {
        // Validate dữ liệu đầu vào từ form
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:8,15',
            'service' => 'required|string',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        // Tạo một bản ghi mới trong bảng services
        $service = new Service;
        $service->name = $request->name;
        $service->phone = $request->phone;
        $service->service = $request->service;
        $service->date = $request->date;
        $service->description = $request->description;
        $service->save();

        // Sau khi lưu xong, bạn có thể chuyển hướng hoặc thực hiện các tác vụ khác
        return redirect()->route('home.service')->with('success', 'Đặt lịch dịch vụ thành công.');
    }

    public function managerservice()
    {
        $serviceData = [];
        $serviceData['title'] = 'Quản lí đặt lịch dịch vụ';
        $serviceData['data'] = Service::all();

        return view('Admin.Addservice.service')->with('serviceData', $serviceData);

    }

    public function deleteService($id)
    {
        // Tìm dòng có id tương ứng trong bảng services
        $service = Service::find($id);

        // Kiểm tra nếu không tìm thấy dịch vụ
        if (!$service) {
            return redirect()->back()->with('error', 'Dịch vụ không tồn tại.');
        }

        // Xóa dịch vụ
        $service->delete();

        return redirect()->back()->with('success', 'Dịch vụ đã được xóa thành công.');
    }
}
