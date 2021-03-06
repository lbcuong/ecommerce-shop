<?php

namespace App\DataTables;

use App\Models\Item;
use App\Models\Category;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Storage;

class ItemsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                return '<span class="action-detail-item" data-id="' . $item->id . '"><i class="feather icon-file-text"></i></span>
                        <span class="action-edit-item" data-id="' . $item->id . '"><i class="feather icon-edit"></i></span>
                        <span class="action-delete-item" data-id="' . $item->id . '"><i class="feather icon-trash-2"></i></span>';
            })
            ->editColumn('', function ($item) {
                return '<div class="custom-control custom-checkbox">
                            <input type="checkbox" data-id="' . $item->id . '" id="items-checkbox-' . $item->id . '" class="custom-control-input items-checkbox">
                            <label class="custom-control-label" for="items-checkbox-' . $item->id . '"></label>
                        </div>';
            })
            ->editColumn('image', function ($item) {
                $urlImage = Storage::url($item->image);
                return '<img src="' . $urlImage . '" alt="Image" width=200>';
            })
            ->editColumn('category_id', function ($item) {
                return $item->category->name;
            })
            ->rawColumns(['category_id', 'image', 'action', '']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ItemsDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Item $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('itemsdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0, 'desc');
        //->buttons(
        //     Button::make('create'),
        //     Button::make('export'),
        //     Button::make('print'),
        //     Button::make('reset'),
        //     Button::make('reload')
        // );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->visible(false)->searchable(false),
            Column::make('')->searchable(false)->orderable(false)->title('<div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" id="items-checkbox-master" class="custom-control-input">
                                                                            <label class="custom-control-label" for="items-checkbox-master"></label>
                                                                          </div>'),
            Column::make('name'),
            Column::make('image'),
            Column::make('category_id')->title('Category'),
            Column::make('price'),
            Column::make('quantity'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Items_' . date('YmdHis');
    }
}
