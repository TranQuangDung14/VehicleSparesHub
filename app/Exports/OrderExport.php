<?php

namespace App\Exports;

use App\Models\Orders;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrderExport implements FromCollection, WithHeadings, WithColumnWidths, WithTitle, WithStyles, WithStrictNullComparison
{
    // /**
    // * @return \Illuminate\Support\Collection
    // */
    // public function collection()
    // {
    //     //
    //     return Orders::with('orderDetails.product.images','customer')->get();
    // }

    function __construct()
    {
        // $this->id = $id;
    }

    public function headings(): array
    {
        $order = Orders::count();

        return [
            ['DANH SÁCH ĐƠN HÀNG (Tổng: ' . $order . ')'],
            [''],
            [
                'STT',
                'Mã đơn hàng',
                'Tên khách hàng',
                'Số điện thoại',
                'Ngày đặt',
                'Địa chỉ giao',
                'Tổng tiền',
                'ghi chú'
            ]
        ];
    }

    public function styles(Worksheet $sheet)
    {

        $sheet->mergeCells('A1:G1');

        return [
            // Style the first row as bold text.
            'A'  => ['alignment' => ['horizontal' => 'center']],
            'B'  => ['alignment' => ['horizontal' => 'center']],
            'E'  => ['alignment' => ['horizontal' => 'left']],
            'F'  => ['alignment' => ['horizontal' => 'left']],

            1    => [
                'font' => ['bold' => true, 'size' => 16],
                'alignment' => ['horizontal' => 'left']
            ],
            3    => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => 'center'],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID, // Chọn kiểu fill
                    'startColor' => ['rgb' => 'FFFFCC'], // Màu nền (ví dụ: màu vàng)
                ],
            ],
        ];
    }


    public function columnWidths(): array
    {
        return [
            'A' => 10, //STT
            'B' => 20, //Mã đơn hàng
            'C' => 50, //Tên khách hàng
            'D' => 50, //Số điện thoại
            'E' => 40, //Ngày đặt
            'F' => 40, //Địa chỉ giao
            'G' => 60, //Tổng tiền
            'H' => 60, //ghi chú
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Danh sách đơn hàng';
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        try {
                    // return Orders::with('orderDetails.product.images','customer')->select()->get();
            $order = Orders::leftJoin('vs_order_detail', 'vs_order_detail.order_id', 'vs_order.id')
                            ->leftJoin('vs_product', 'vs_product.id', 'vs_order_detail.product_id')
                            ->leftJoin('users', 'users.id', 'vs_order.customer_id')
                            ->select(
                                'vs_order.id as stt',
                                'vs_order.id as id',
                                'users.name as name',
                                'vs_order.number_phone as number_phone',
                                'vs_order.created_at as created_at',
                                'vs_order.receiver_address as receiver_address',
                                'vs_order.total_money as total_money',
                                'vs_order.note as note',
                            )
                            // ->where('sm_local_farm.deleted_at', null)
                            ->orderby('vs_order.id', 'DESC')
                            ->distinct()
                            ->get();

                            foreach ($order as $key => $val) {
                                $val->stt = ($key + 1);
                            }
                                return $order;
        } catch (\Exception $e) {
            // dd($e);
            // Toastr::error('Lỗi kết nối collection', 'Failed');
            return redirect()->back();
        }
    }
}
