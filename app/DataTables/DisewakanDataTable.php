<?php

namespace App\DataTables;

use App\Models\Disewakan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DisewakanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function($query){
                $editBtn = "<a href='".route('admin-disewakan.edit', $query->id)."' class='btn btn-primary'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='".route('admin-disewakan.destroy', $query->id)."' class='btn btn-danger ml-1 delete-item'><i class='fas fa-trash-alt'></i></a>";
                $moreBtn = '<div class="dropleft d-inline">
                            <button class="btn btn-primary dropdown-toggle ml-1" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item has-icon" href="'.route('admin-disewakan-image-gallery.index', ['disewakan' => $query->id]).'"><i class="far fa-heart"></i> Image Gallery</a>
                            </div>
                            </div>';
                return $editBtn.$deleteBtn.$moreBtn;
            })
            ->addColumn('image', function($query){
                return "<img width='90px' src='".asset($query->thumb_image)."' ></img>";
            })
            ->addColumn('status_properti', function($query){
                $disewakan = "<i class='badge badge-success'>Disewakan</i>";
                $tidakDisewakan = "<i class='badge badge-danger'>Tidak Disewakan</i>";
                if($query->status_properti == 1){
                    return $disewakan;
                } else {
                    return $tidakDisewakan;
                };
            })
            ->rawColumns(['action','image','status_properti'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Disewakan $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('disewakan-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [            
            Column::make('id'),
            Column::make('image'),
            Column::make('nama_properti'),
            Column::make('kategori_properti'),
            Column::make('net_area'),
            Column::make('zona_properti'),
            Column::make('status_properti'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(170)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Disewakan_' . date('YmdHis');
    }
}
