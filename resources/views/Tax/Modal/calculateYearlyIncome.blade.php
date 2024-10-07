<!-- Modal -->
<div class="modal fade" id="calcModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Calculate Your Yearly Income</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="sameordiff" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                                Monthly income is same for 12 months
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row same">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">Monthly income</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome" name="monthlyincome"
                                value="0" required>
                        </div>
                    </div>
                </div>


                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">January</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome1" name="monthlyincome1"
                                value="0" required>
                        </div>
                    </div>
                </div>


                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">February</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome2" name="monthlyincome2"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">March</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome3" name="monthlyincome3"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">April</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome4" name="monthlyincome4"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">May</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome5" name="monthlyincome5"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">June</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome6" name="monthlyincome6"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">July</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome7" name="monthlyincome7"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">August</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome8" name="monthlyincome8"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">September</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome9" name="monthlyincome9"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">October</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome10" name="monthlyincome10"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">November</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome11" name="monthlyincome11"
                                value="0" required>
                        </div>
                    </div>
                </div>

                <div class="row diff" style="display: none;">
                    <div class="col-sm-8">
                        <label for="monthlyincome" class="form-label">December</label>
                    </div>

                    <div class="col-sm-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RM</span>
                            <input type="number" class="form-control" id="monthlyincome12" name="monthlyincome12"
                                value="0" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="calculateyearly">Save</button>
            </div>
        </div>
    </div>
</div>
