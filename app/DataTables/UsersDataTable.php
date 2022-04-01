<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
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
            ->addColumn('action', function ($user) {
                return '<span class="action-detail-user" data-id="' . $user->id . '"><i class="feather icon-file-text"></i></span>
                        <span class="action-edit-user" data-id="' . $user->id . '"><i class="feather icon-edit"></i></span>
                        <span class="action-delete-user" data-id="' . $user->id . '"><i class="feather icon-trash-2"></i></span>';
            })
            ->editColumn('', function ($user) {
                return '<div class="custom-control custom-checkbox">
                            <input type="checkbox" data-id="' . $user->id . '" id="users-checkbox-' . $user->id . '" class="custom-control-input users-checkbox">
                            <label class="custom-control-label" for="users-checkbox-' . $user->id . '"></label>
                        </div>';
            })
            ->rawColumns(['action', '']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            ->setTableId('user-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0, 'desc');
        //->buttons(
        //    Button::make('create')->action("window.location = '" . route('users.create') . "';"),
        //    Button::make('export'),
        //    Button::make('print'),
        //    Button::make('reset'),
        //   Button::make('reload')
        //);
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
                                                                            <input type="checkbox" id="users-checkbox-master" class="custom-control-input">
                                                                            <label class="custom-control-label" for="users-checkbox-master"></label>
                                                                          </div>'),
            Column::make('name'),
            Column::make('email'),
            Column::make('phone'),
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
        return 'User_' . date('YmdHis');
    }
}
