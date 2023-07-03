@extends('layouts.app')

@section('content')
    <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
            <div class="d-flex align-items-center justify-content-end my-3">
                <div id="bulk-select-replace-element"><button class="btn btn-falcon-success btn-sm" type="button"><span
                            class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                            class="ms-1">New</span></button></div>
                <div class="d-none ms-3" id="bulk-select-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="selected">Bulk actions</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button></div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table mb-0">
                    <thead class="text-black bg-200">
                        <tr>
                            <th class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                        data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                </div>
                            </th>
                            <th class="align-middle">Name</th>
                            <th class="align-middle">Nationality </th>
                            <th class="align-middle">Gender</th>
                            <th class="align-middle white-space-nowrap pe-3">Age</th>
                        </tr>
                    </thead>
                    <tbody id="bulk-select-body">
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-1"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Kit Harington</th>
                            <td class="align-middle">British</td>
                            <td class="align-middle">Male</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">32</td>
                        </tr>
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-2"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Emilia Clarke</th>
                            <td class="align-middle">British</td>
                            <td class="align-middle">Female</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">32</td>
                        </tr>
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-3"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Peter Dinklage</th>
                            <td class="align-middle">American</td>
                            <td class="align-middle">Male</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">49</td>
                        </tr>
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-4"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Sean Bean</th>
                            <td class="align-middle">British</td>
                            <td class="align-middle">Male</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">59</td>
                        </tr>
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-5"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Maisie Williams</th>
                            <td class="align-middle">British</td>
                            <td class="align-middle">Female</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">21</td>
                        </tr>
                        <tr>
                            <td class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" id="checkbox-6"
                                        data-bulk-select-row="data-bulk-select-row" /></div>
                            </td>
                            <th class="align-middle">Sophie Turner</th>
                            <td class="align-middle">British</td>
                            <td class="align-middle">Female</td>
                            <td class="align-middle white-space-nowrap text-end pe-3">23</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
