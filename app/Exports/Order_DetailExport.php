<?php

namespace App\Exports;

use App\Models\Order_detail;
use App\Models\Orders;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Order_DetailExport implements FromCollection, WithHeadings, WithColumnWidths, WithTitle, WithStyles, WithStrictNullComparison
{

    protected $id;

    function __construct($id)
    {
        $this->id = $id;
    }
    public function headings(): array
    {
        $order_detail = Order_detail::where('order_id',$this->id)->count();
        $customer_name = Orders::find($this->id);

        return [
            ['CHI TIẾT ĐƠN HÀNG (Tổng: ' . $order_detail . ')'],
            [''],
            ['Mã đơn hàng: '.$customer_name->id],
            ['Tên khách hàng: '.$customer_name->receiver_name],
            ['Số điện thoại: '.$customer_name->number_phone??'-'],
            ['Địa chỉ giao: '.$customer_name->receiver_address??'-'],
            ['Tổng tiền: '.$customer_name->total_money],
            ['ghi chú: '.$customer_name->note??'-'],
            [
                'STT',
                'Tên sản phẩm',
                'Số lượng',
                'Tổng tiền'
            ]
        ];
    }

    public function styles(Worksheet $sheet)
    {

        $sheet->mergeCells('A1:D1');
        // $sheet->mergeCells('A1:A2');
        $sheet->mergeCells('A3:D3');
        $sheet->mergeCells('A4:D4');
        $sheet->mergeCells('A5:D5');
        $sheet->mergeCells('A6:D6');
        $sheet->mergeCells('A7:D7');
        $sheet->mergeCells('A8:D8');

        return [
            // Style the first row as bold text.
            'A'  => ['alignment' => ['horizontal' => 'center']],
            'E'  => ['alignment' => ['horizontal' => 'left']],

            1    => [
                'font' => ['bold' => true, 'size' => 16],
                'alignment' => ['horizontal' => 'left']
            ],
            2    => [
                'alignment' => ['horizontal' => 'left']
            ],
            3    => [
                'alignment' => ['horizontal' => 'left']
            ],
            4    => [
                'alignment' => ['horizontal' => 'left']
            ],
            5    => [
                'alignment' => ['horizontal' => 'left']
            ],
            6    => [
                'alignment' => ['horizontal' => 'left']
            ],
            7    => [
                'alignment' => ['horizontal' => 'left']
            ],
            8    => [
                'alignment' => ['horizontal' => 'left']
            ],
            9    => [
                'font' => ['bold' => true],
                'alignment' => ['horizontal' => 'center'],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID, // Chọn kiểu fill
                    'startColor' => ['rgb' => 'FFFFCC'],
                ],
            ],
        ];
    }


    public function columnWidths(): array
    {
        return [
            'A' => 10, //STT
            'B' => 50, //Tên sản phẩm
            'C' => 20, //Số lượng
            'D' => 40, //Giá tiền

        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        $customer_name = Orders::find($this->id);
        return 'Chi tiết đơn hàng:'.$customer_name->id;
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        try {
                    // return Orders::with('orderDetails.product.images','customer')->select()->get();
            $order_detail = Order_detail::leftJoin('vs_order', 'vs_order.id','vs_order_detail.order_id')
                            ->leftJoin('vs_product', 'vs_product.id', 'vs_order_detail.product_id')
                            // ->leftJoin('users', 'users.id', 'vs_order.customer_id')
                            ->where('vs_order.id',$this->id)
                            ->select(
                                'vs_order_detail.id as stt',
                                'vs_product.name as name',
                                'vs_order_detail.quantity as quantity',
                                'vs_order_detail.price as price',
                            )
                            // ->where('sm_local_farm.deleted_at', null)
                            ->orderby('vs_order_detail.id', 'DESC')
                            // ->distinct()
                            ->get();
                                // dd($order_detail);
                            foreach ($order_detail as $key => $val) {
                                $val->stt = ($key + 1);
                            }
                                return $order_detail;
        } catch (\Exception $e) {
            dd($e);
            // Toastr::error('Lỗi kết nối collection', 'Failed');
            return redirect()->back();
        }
    }
}
