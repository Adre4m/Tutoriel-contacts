<?php
namespace App\DataTables;
use App\Models\Contact;
use Yajra\Datatables\Services\DataTable;
class ContactDataTable extends DataTable
{
    // protected $printPreview  = 'path.to.print.preview.view';
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn("action", function($contact) {
                return '<a href="/modify' . $contact->id . '">
                            <button class="btn btn-warning" type="button">' .
                trans('form.edit').
                '</button>
                        </a>
                        <a href="/delete' . $contact->id . '">
                            <button class="btn btn-danger" type="button">'.
                trans('form.delete').
                '</button>
                        </a>';
            })
            ->make(true);
    }
    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $contacts = Contact::query();
        return $this->applyScopes($contacts);
    }
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax('')
            ->addAction(['width' => '125px'])
            ->parameters($this->getBuilderParameters());
    }
    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            ['data' => 'name', 'title' => trans('form.name')],
            ['data' => 'last_name', 'title' => trans('form.last_name')],
            ['data' => 'phone', 'title' => trans('form.phone')],
        ];
    }
    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'contacts';
    }
}