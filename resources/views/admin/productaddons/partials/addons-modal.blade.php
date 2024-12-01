<!-- Edit Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalEditLabel">Edit Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="editField" class="form-label">Edit Field</label>
                                                        <input type="text" class="form-control" id="editField" placeholder="Enter new value">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Details Modal -->
                                <div class="modal fade" id="modalDetails" tabindex="-1" aria-labelledby="modalDetailsLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDetailsLabel">Item Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Here are the details of the selected item.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="modalDeleteWarning" tabindex="-1" aria-labelledby="modalDeleteWarningLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="modalDeleteWarningLabel">Delete Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this item? This action cannot be undone.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalAddLabel">Add New Item</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="itemName" class="form-label">Item Name</label>
                                                    <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="itemPrice" class="form-label">Price</label>
                                                    <input type="number" class="form-control" id="itemPrice" placeholder="Enter item price">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Item</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>