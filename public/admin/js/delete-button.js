 // JavaScript to handle the delete action
 document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
    // Add your delete logic here (e.g., making a request to delete the item)
    
    // Close the modal after delete action
    var deleteModal = document.getElementById('modalDeleteWarning');
    var modal = bootstrap.Modal.getInstance(deleteModal);
    modal.hide();

    // Optional: Display a success message or refresh the table after deletion
    alert('Item deleted successfully!');
});