<?php

namespace App\DataTables;

use App\Models\Entrepreneur;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EntrepreneurDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        // check if a user is logged in and that user has the role DO which will show only his records
        $user = auth('web')->user();

        if ($user->hasRole('Development Officer')) {
            $query = $query->where('user_id', $user->id);
        }


        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function ($request) {
                return $request->created_at->format('Y-m-d');
            })
            ->addColumn('action', 'admin.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Entrepreneur $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Entrepreneur $model)
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
            ->setTableId('entrepreneur-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('create')->action('location.href="/do-admin/register-entrepreneur"'),
//                Button::make('export'),
//                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
//            Column::make('id'),
////            Column::make('add your columns'),
//            Column::make('created_at'),
//            Column::make('updated_at'),


            //Column::make('id'),
            //Column::make('email'),
            Column::make('name'),
            Column::make('last_name'),
            Column::make('business_name'),
            //Column::make('gender'),
            //Column::make('birthday'),
            Column::make('nic'),
            Column::make('address'),
            Column::make('mobile'),
            //Column::make('phone'),

            //Column::make('business_phone'),
            // Column::make('business_start_date'),
            // Column::make('business_legal_nature'),
            // Column::make('business_registration_status'),
            // Column::make('business_registration_number'),
            // Column::make('business_type'),
            // Column::make('business_annual_turnover'),
            // Column::make('business_number_of_employees'),
            // Column::make('business_service_id'),
            // Column::make('secondary_business_service_id'),
            // Column::make('business_description'),
            // Column::make('business_address'),
            // Column::make('province_id'),
            // Column::make('district_id'),
            // // Column::make('divisional_secretariat_id'),
            // Column::make('grama_niladhari_division_id'),
            // Column::make('business_located_in_industrial_zone'),
            // Column::make('business_zone_type'),
            //Column::make('user_id'),
            //Column::make('is_valid'),
            //Column::make('status'),
            Column::make('created_at'),
            //Column::make('updated_at'),
            //Column::make('deleted_at'),
            //Column::make('create_by_user_id'),

//            Column::computed('action')
//                ->exportable(false)
//                ->printable(false)
//                ->width(60)
//                ->addClass('text-center'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
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
        return 'Entrepreneur_' . date('YmdHis');
    }
}
