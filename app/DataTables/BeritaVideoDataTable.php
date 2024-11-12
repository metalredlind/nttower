<?php

namespace App\DataTables;

use App\Models\BeritaVideo;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BeritaVideoDataTable extends DataTable
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
            $deleteBtn = "<a href='".route('admin-berita-video.destroy', $query->id)."' class='btn btn-danger ml-1 delete-item'><i class='fas fa-trash-alt'></i></a>";
            return $deleteBtn;
        })
        ->rawColumns(['action'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(BeritaVideo $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('beritavideo-table')
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
            Column::make('id')->width(80),
            Column::make('youtube_url'),
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
        return 'BeritaVideo_' . date('YmdHis');
    }
}
