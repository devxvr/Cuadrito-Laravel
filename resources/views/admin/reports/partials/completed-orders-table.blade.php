<div class="container-fluid mb-4">
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        Completed Orders
                                        <div class="dropdown no-caret">
                                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                                                <a class="dropdown-item" href="#!">Last 12 Months</a>
                                                <a class="dropdown-item" href="#!">Last 30 Days</a>
                                                <a class="dropdown-item" href="#!">Last 7 Days</a>
                                                <a class="dropdown-item" href="#!">This Month</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#!">Custom Range</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Name</th>
                                                    <th>Type of Cake</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Date Finish</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>1</td>    
                                                    <td>Tiger Nixon</td>
                                                    <td>Ube Cake</td>
                                                    <td>1</td>
                                                    <td>450</td>
                                                    <td>11/01/2024</td>
                                                    
                                                    <td>
                                                            <div class="d-flex align-items-center">
                                                                <button class="btn btn-datatable btn-icon btn-transparent-dark me-2" type="button" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                                                    <i data-feather="info"></i>
                                                                </button>
                                                                
                                                                
                                                            
                                                            </div>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>    
                                    </div>
                                                    <!-- Details Modal -->
                                            <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailsModalLabel">Item Details</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Here are the details of the selected item.</p>
                                                            <!-- You can add more details or content here -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>