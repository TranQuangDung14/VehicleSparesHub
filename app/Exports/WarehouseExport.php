<?php

namespace App\Exports;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class WarehouseExport implements FromCollection, WithHeadings, WithColumnWidths, WithTitle, WithStyles, WithStrictNullComparison
{
    function __construct()
    {
        // $this->id = $id;
    }

    public function headings(): array
    {
        $product = Products::count();

        return [
            ['Quản lý kho hàng (Tổng: ' . $product . 'sản phẩm)'],
            [''],
            [
                'STT',
                'Mã sản phẩm',
                'Danh mục sản phẩm',
                'Tên sản phẩm',
                'Số lượng tồn',
                'Giá nhập',
                'Giá bán',
                'Tổng tiền nhập',
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
            'G'  => ['alignment' => ['horizontal' => 'left']],

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
            'B' => 20, //Mã sản phẩm
            'C' => 40, //Danh mục sản phẩm
            'D' => 50, //Tên sản phẩm
            'E' => 20, //Số lượng
            'F' => 50, //Giá nhập
            'G' => 50, //Giá tiền bán
            'H' => 50, //Tổng tiền
            // 'H' => 60, //
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Danh sách kho hàng';
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        try {
                    // return Orders::with('orderDetails.product.images','customer')->select()->get();
            $product = Products::leftJoin('vs_category', 'vs_product.category_id', 'vs_category.id')
                            ->select(
                                'vs_product.id as stt',
                                'vs_product.id as id',
                                'vs_category.name as name_cate',
                                'vs_product.name as name',
                                'vs_product.quantity as quantity',
                                'vs_product.price_import as price_import',
                                'vs_product.price as price',
                                DB::raw('vs_product.quantity * vs_product.price_import as sum_price'),
                            )
                            // ->where('sm_local_farm.deleted_at', null)
                            ->orderby('vs_product.id', 'DESC')
                            ->distinct()
                            ->get();

                            foreach ($product as $key => $val) {
                                $val->stt = ($key + 1);
                            }
                                return $product;
        } catch (\Exception $e) {
            // dd($e);
            // Toastr::error('Lỗi kết nối collection', 'Failed');
            return redirect()->back();
        }
    }
}
