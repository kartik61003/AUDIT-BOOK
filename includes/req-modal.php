<form id="request-form" class="form" role="form" method="post" action="api/create_request.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="int" class="form-control" name="ReqTeacherid" placeholder="Teacher ID" required>
                    </div>


                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="DATE" class="form-control" name="Date"  required>
                    </div>

                
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="TIME" class="form-control" name="timeFrom"  required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="TIME" class="form-control" name="timeTo"  required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                </form>