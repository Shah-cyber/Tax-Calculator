<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Tax Calculator</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <meta name="theme-color" content="#7952b3">
</head>
<body>
    <div class="container mt-5">
        <h2>Tax Rates Table</h2>
        
<button id="add-tax-rate-btn" class="btn btn-primary mb-3">Add Tax Rate</button>

 <!-- Existing Modal for Adding Tax Rates -->
<div class="modal fade" id="taxRateModal" tabindex="-1" aria-labelledby="taxRateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="taxRateModalLabel">Add Tax Rate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="taxRateForm" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="taxRateId" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="year">Year</label>
                            <input type="number" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="chargeable_income_from">Income From</label>
                            <input type="number" class="form-control" id="chargeable_income_from" name="chargeable_income_from" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="chargeable_income_to">Income To</label>
                            <input type="number" class="form-control" id="chargeable_income_to" name="chargeable_income_to" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="calculations_first">First Calculation</label>
                            <input type="number" class="form-control" id="calculations_first" name="calculations_first" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="calculations_next">Next Calculation</label>
                            <input type="number" class="form-control" id="calculations_next" name="calculations_next" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="rate">Rate (%)</label>
                            <input type="number" class="form-control" id="rate" name="rate" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tax_from">Tax From</label>
                            <input type="number" class="form-control" id="tax_from" name="tax_from" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tax_to">Tax To</label>
                            <input type="number" class="form-control" id="tax_to" name="tax_to" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- New Modal for Updating Tax Rates -->
<div class="modal fade" id="updateTaxRateModal" tabindex="-1" aria-labelledby="updateTaxRateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTaxRateModalLabel">Update Tax Rate</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateTaxRateForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="updateTaxRateId" name="id">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="updateYear">Year</label>
                            <input type="number" class="form-control" id="updateYear" name="year" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="updateCategory">Category</label>
                            <input type="text" class="form-control" id="updateCategory" name="category" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="updateChargeable_income_from">Income From</label>
                            <input type="number" class="form-control" id="updateChargeable_income_from" name="chargeable_income_from" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="updateChargeable_income_to">Income To</label>
                            <input type="number" class="form-control" id="updateChargeable_income_to" name="chargeable_income_to" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="updateCalculations_first">First Calculation</label>
                            <input type="number" class="form-control" id="updateCalculations_first" name="calculations_first" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="updateCalculations_next">Next Calculation</label>
                            <input type="number" class="form-control" id="updateCalculations_next" name="calculations_next" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="updateRate">Rate (%)</label>
                            <input type="number" class="form-control" id="updateRate" name="rate" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="updateTax_from">Tax From</label>
                            <input type="number" class="form-control" id="updateTax_from" name="tax_from" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="updateTax_to">Tax To</label>
                            <input type="number" class="form-control" id="updateTax_to" name="tax_to" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Tax Rate</button>
                </div>
            </form>
        </div>
    </div>
</div>




        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Category</th>
                    <th>Income From</th>
                    <th>Income To</th>
                    <th>First Calculation</th>
                    <th>Next Calculation</th>
                    <th>Rate</th>
                    <th>Tax From</th>
                    <th>Tax To</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($taxRates as $rate)
                    <tr data-id="{{ $rate->id }}">
                        <td>{{ $rate->id }}</td>
                        <td>{{ $rate->year }}</td>
                        <td>{{ $rate->category }}</td>
                        <td>{{ $rate->chargeable_income_from }}</td>
                        <td>{{ $rate->chargeable_income_to }}</td>
                        <td>{{ $rate->calculations_first }}</td>
                        <td>{{ $rate->calculations_next }}</td>
                        <td>{{ $rate->rate }}</td>
                        <td>{{ $rate->tax_from }}</td>
                        <td>{{ $rate->tax_to }}</td>
                        <td>
                            <button class="btn btn-success btn-sm edit-btn" data-id="{{ $rate->id }}">Update</button>

                            <form method="POST" action="{{ route('tax-rates.destroy', $rate->id) }}" class="delete-form" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Show the add modal
            $('#add-tax-rate-btn').on('click', function() {
                $('#taxRateForm').trigger("reset");
                $('#taxRateModalLabel').text('Add Tax Rate');
                $('#taxRateForm').attr('action', '{{ route('tax-rates.store') }}');
                $('#taxRateModal').modal('show');
            });
        
            // Handle the update button click
            $('.edit-btn').on('click', function() {
                const id = $(this).data('id');
                $.get('/tax-rates/' + id, function(data) {
                    $('#updateTaxRateModalLabel').text('Update Tax Rate');
                    $('#updateTaxRateId').val(data.id);
                    $('#updateYear').val(data.year);
                    $('#updateCategory').val(data.category);
                    $('#updateChargeable_income_from').val(data.chargeable_income_from);
                    $('#updateChargeable_income_to').val(data.chargeable_income_to);
                    $('#updateCalculations_first').val(data.calculations_first);
                    $('#updateCalculations_next').val(data.calculations_next);
                    $('#updateRate').val(data.rate);
                    $('#updateTax_from').val(data.tax_from);
                    $('#updateTax_to').val(data.tax_to);
        
                    $('#updateTaxRateForm').attr('action', '{{ url('tax-rates') }}/' + id); // Update URL for the edit
                    $('#updateTaxRateModal').modal('show'); // Trigger modal display
                });
            });
        
            // Submit the form for adding tax rates
            $('#taxRateForm').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                const url = form.attr('action');
        
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        $('#taxRateModal').modal('hide');
                        Swal.fire('Success', response.message, 'success').then(() => location.reload());
                    },
                    error: function() {
                        Swal.fire('Error', 'Operation failed', 'error');
                    }
                });
            });
        
            // Submit the form for updating tax rates
            $('#updateTaxRateForm').on('submit', function(e) {
                e.preventDefault();
                const form = $(this);
                const url = form.attr('action');
        
                $.ajax({
                    url: url,
                    method: 'POST', // Update method for editing
                    data: form.serialize(),
                    success: function(response) {
                        $('#updateTaxRateModal').modal('hide');
                        Swal.fire('Success', response.message, 'success').then(() => location.reload());
                    },
                    error: function() {
                        Swal.fire('Error', 'Operation failed', 'error');
                    }
                });
            });
        
            // Handle delete confirmation
            $('.delete-btn').on('click', function(e) {
                e.preventDefault();
                const form = $(this).closest('.delete-form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
        </script>
        
    
</body>
</html>